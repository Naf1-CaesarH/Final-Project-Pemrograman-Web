<?php
require_once '../koneksi.php';

$success_msg = '';
$error_msg = '';

// Pastikan tabel pelacakan ada (Auto-migrate)
mysqli_query($koneksi, "
CREATE TABLE IF NOT EXISTS `pengumuman_telegram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengumuman_id` int(11) NOT NULL,
  `chat_id` varchar(50) NOT NULL,
  `message_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pengumuman_id` (`pengumuman_id`),
  CONSTRAINT `fk_tg_pengumuman` FOREIGN KEY (`pengumuman_id`) REFERENCES `pengumuman` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $target_audiens = mysqli_real_escape_string($koneksi, $_POST['target_audiens']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $is_sent_wa = isset($_POST['is_sent_wa']) ? 1 : 0;
    
    // Hardcode pembuat_id = 2 untuk sementara
    $pembuat_id = 2;

    $query = "INSERT INTO pengumuman (judul, isi, pembuat_id, target_audiens, is_sent_wa) 
              VALUES ('$judul', '$isi', $pembuat_id, '$target_audiens', $is_sent_wa)";
              
    if (mysqli_query($koneksi, $query)) {
        $success_msg = "Pengumuman berhasil dibuat!";
        $pengumuman_id = mysqli_insert_id($koneksi);
        
        // --- LOGIK KIRIM TELEGRAM OTOMATIS ---
        if ($is_sent_wa == 1) {
            // Tentukan target query berdasarkan input
            $tg_query = "";
            if ($target_audiens == "Hanya Warga RT 001") {
                $tg_query = "SELECT telegram_chat_id FROM users WHERE rt = '001' AND telegram_chat_id IS NOT NULL";
            } elseif ($target_audiens == "Seluruh Warga RW 002") {
                $tg_query = "SELECT telegram_chat_id FROM users WHERE rw = '002' AND telegram_chat_id IS NOT NULL";
            } else {
                // Default ke semua warga jika target custom/lainnya (untuk prototype)
                $tg_query = "SELECT telegram_chat_id FROM users WHERE role_id = 4 AND telegram_chat_id IS NOT NULL";
            }
            
            $tg_result = mysqli_query($koneksi, $tg_query);
            $chat_id_list = [];
            if ($tg_result && mysqli_num_rows($tg_result) > 0) {
                while($row = mysqli_fetch_assoc($tg_result)){
                    if (!empty($row['telegram_chat_id'])) {
                        $chat_id_list[] = $row['telegram_chat_id'];
                    }
                }
            }

            if (count($chat_id_list) > 0) {
                $pesan_tg = "📢 *PENGUMUMAN BARU*\n\n" . 
                            "*" . strtoupper($judul) . "*\n\n" . 
                            $isi . "\n\n" . 
                            "_Pesan otomatis dari Portal Desa Digital_";

                $bot_token = "8863579166:AAHK4Xz6EZMWWnyPPHqPb2ZRWSVY9_h8JHs"; // TODO: Ganti dengan Token Bot Asli
                $sukses_kirim = 0;

                foreach($chat_id_list as $chat_id) {
                    $url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage";
                    $data = [
                        'chat_id' => $chat_id,
                        'text' => $pesan_tg,
                        'parse_mode' => 'Markdown'
                    ];

                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    
                    $response = curl_exec($curl);
                    if ($response === false) {
                        $error_msg .= "<br>Curl Error untuk chat_id $chat_id: " . curl_error($curl);
                    } else {
                        $response_data = json_decode($response, true);
                        if(isset($response_data['ok']) && $response_data['ok']) {
                            $sukses_kirim++;
                            // Simpan message_id untuk pelacakan hapus
                            $message_id = $response_data['result']['message_id'];
                            $chat_id_safe = mysqli_real_escape_string($koneksi, $chat_id);
                            $msg_id_safe = mysqli_real_escape_string($koneksi, $message_id);
                            mysqli_query($koneksi, "INSERT INTO pengumuman_telegram (pengumuman_id, chat_id, message_id) VALUES ($pengumuman_id, '$chat_id_safe', '$msg_id_safe')");
                        } else {
                            $error_msg .= "<br>Gagal kirim ke $chat_id: " . $response;
                        }
                    }
                    curl_close($curl);
                }
                
                $success_msg .= " Dan otomatis dibroadcast ke " . $sukses_kirim . " warga via Telegram!";
            }
        }
        // --- END LOGIK KIRIM TELEGRAM ---

        // Redirect setelah 3 detik
        header("refresh:3;url=pengumuman.php"); 
    } else {
        $error_msg = "Error: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Pengumuman — Panel RT</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../assets/tailwind-config.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="bg-base font-sans text-t1 flex min-h-screen">

  <aside class="sidebar-fixed w-64 bg-slate-900 text-slate-300 flex flex-col justify-between sticky top-0 h-screen shadow-xl z-20">
    <div>
      <div class="flex items-center gap-3 px-5 py-5 border-b border-slate-800">
        <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-indigo-600/30">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="2" y="8" width="5" height="6" rx="1" fill="white"/><rect x="9" y="5" width="5" height="9" rx="1" fill="white" opacity=".7"/><path d="M1 8L8 3L15 8" stroke="white" stroke-width="1.3" stroke-linecap="round"/></svg>
        </div>
        <div>
          <div class="text-[13px] font-bold text-white leading-tight tracking-wide">Portal Desa<br>Digital</div>
          <div class="text-[9px] bg-indigo-500/20 text-indigo-400 font-bold px-1.5 py-0.5 rounded uppercase mt-1 inline-block tracking-wider border border-indigo-500/30">Panel RT</div>
        </div>
      </div>
      
      <nav class="py-4 flex-1 overflow-y-auto scrollbar-hide">
        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">PANEL RT/RW</div>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('dashboard-rt')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-medium text-[13px]">Beranda RT</span>
        </a>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex justify-between items-center cursor-pointer transition-colors" onclick="go('validasi-surat')">
          <div class="flex items-center gap-3">
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><path d="M6 8.5l1.5 1.5L11 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            <span class="font-medium text-[13px]">Persetujuan Surat</span>
          </div>
          <span class="bg-red-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-md shadow-sm">3</span>
        </a>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex justify-between items-center cursor-pointer transition-colors" onclick="go('pantau-tamu')">
          <div class="flex items-center gap-3">
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5"/></svg>
            <span class="font-medium text-[13px]">Data Tamu</span>
          </div>
          <span class="bg-slate-700 text-slate-300 text-[10px] font-bold px-1.5 py-0.5 rounded-md">2</span>
        </a>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex justify-between items-center cursor-pointer transition-colors" onclick="go('aduan-warga')">
          <div class="flex items-center gap-3">
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/><circle cx="8" cy="11.5" r="1" fill="currentColor"/></svg>
            <span class="font-medium text-[13px]">Laporan Lingkungan</span>
          </div>
          <span class="bg-slate-700 text-slate-300 text-[10px] font-bold px-1.5 py-0.5 rounded-md">1</span>
        </a>

        <a class="sb-item active !bg-indigo-600/10 !text-indigo-400 !border-r-4 !border-indigo-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('pengumuman')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-semibold text-[13px]">Pengumuman</span>
        </a>
        
        <div class="mx-5 my-3 border-t border-slate-800"></div>
        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">INFORMASI</div>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('warga-data')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M4 14V3h8v11" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-medium text-[13px]">Data Warga RT</span>
        </a>
      </nav>
    </div>

    <div class="px-5 py-4 border-t border-slate-800 bg-slate-950">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-indigo-600 text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0">AM</div>
        <div class="flex-1 min-w-0">
          <div class="text-[13px] font-bold text-white truncate">Agus Mulyadi</div>
          <div class="text-[11px] text-slate-400 truncate">Ketua RT 001 / RW 002</div>
        </div>
      </div>
    </div>
  </aside>

  <div class="flex-1 flex flex-col min-h-screen relative overflow-hidden">
    
    <header class="h-[60px] bg-surface border-b border-border flex items-center px-6 gap-2 sticky top-0 z-10 text-[14px]">
      <a class="text-t2 hover:text-indigo-600 font-medium cursor-pointer transition-colors" onclick="go('dashboard-rt')">Beranda RT</a>
      <span class="text-t3">/</span>
      <a class="text-t2 hover:text-indigo-600 font-medium cursor-pointer transition-colors" onclick="go('pengumuman')">Kelola Pengumuman</a>
      <span class="text-t3">/</span>
      <strong class="text-t1 font-bold">Buat Baru</strong>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-3xl mx-auto w-full">
      <div>
        <h1 class="text-[20px] font-bold text-t1 mb-1">Tulis Pengumuman Baru</h1>
        <p class="text-[14px] text-t2">Informasi akan tampil di dashboard warga dan dikirimkan via Telegram.</p>
      </div>

      <section class="bg-surface border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
        <?php if ($success_msg): ?>
        <div class="mb-6 bg-emerald-50 text-emerald-600 p-4 rounded-xl border border-emerald-200 text-[14px] font-medium flex items-center gap-2">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22 4L12 14.01l-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <?php echo $success_msg; ?>
        </div>
        <?php endif; ?>
        <?php if ($error_msg): ?>
        <div class="mb-6 bg-red-50 text-red-600 p-4 rounded-xl border border-red-200 text-[14px] font-medium">
            <?php echo $error_msg; ?>
        </div>
        <?php endif; ?>
        
        <form method="POST" action="">
          
          <div class="mb-5">
            <label class="block text-[13.5px] font-bold text-t1 mb-2">Judul Pengumuman <span class="text-red-500">*</span></label>
            <input name="judul" required class="w-full h-11 px-4 rounded-xl border border-border text-[13.5px] focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 bg-base transition-all" type="text" placeholder="Contoh: Undangan Kerja Bakti Hari Minggu">
          </div>

          <div class="mb-5">
            <label class="block text-[13.5px] font-bold text-t1 mb-2">Target Warga / Penerima <span class="text-red-500">*</span></label>
            <select name="target_audiens" required class="w-full h-11 px-4 rounded-xl border border-border text-[13.5px] focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 bg-base transition-all appearance-none">
              <option value="Hanya Warga RT 001" selected>Hanya Warga RT 001</option>
              <option value="Seluruh Warga RW 002">Seluruh Warga RW 002 (Perlu akses RW)</option>
              <option value="Pilih Warga Tertentu...">Pilih Warga Tertentu...</option>
            </select>
          </div>

          <div class="mb-6">
            <label class="block text-[13.5px] font-bold text-t1 mb-2">Isi Pengumuman <span class="text-red-500">*</span></label>
            <div class="flex items-center gap-1.5 border border-border border-b-0 rounded-t-xl p-2.5 bg-slate-50">
              <button type="button" class="p-2 hover:bg-white rounded-lg text-slate-600 transition-colors shadow-sm border border-transparent hover:border-border"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M4 12V4h3.5c1.4 0 2.5 1.1 2.5 2.5S8.9 9 7.5 9H4m0 0h4.5c1.4 0 2.5 1.1 2.5 2.5S9.9 14 8.5 14H4v-2z" stroke="currentColor" stroke-width="1.5"/></svg></button>
              <button type="button" class="p-2 hover:bg-white rounded-lg text-slate-600 transition-colors shadow-sm border border-transparent hover:border-border"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M6 14L10 2M4 14h4M8 2h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></button>
              <div class="w-px h-5 bg-border mx-1"></div>
              <button type="button" class="p-2 hover:bg-white rounded-lg text-slate-600 transition-colors shadow-sm border border-transparent hover:border-border"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M3 4h10M3 12h7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></button>
            </div>
            <textarea name="isi" required class="w-full h-48 px-4 py-4 rounded-b-xl border border-border text-[13.5px] focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 resize-none bg-base transition-all" placeholder="Tuliskan detail pengumuman di sini..."></textarea>
          </div>

          <div class="flex items-start gap-3 bg-indigo-50/50 border border-indigo-200 rounded-xl p-5 mb-8">
            <input name="is_sent_wa" type="checkbox" id="tg-blast" value="1" checked class="w-5 h-5 mt-0.5 rounded border-indigo-300 text-indigo-600 focus:ring-indigo-500 cursor-pointer">
            <label for="tg-blast" class="flex-1 cursor-pointer">
              <div class="text-[14px] font-bold text-indigo-900 flex items-center gap-2 mb-1">
                Kirim Notifikasi via Telegram (Japri)
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="12" fill="#0088cc"/><path d="M17.06 7.42L5.86 11.75c-1.07.43-1.06 1.02-.2 1.28l2.87.9 1.15 3.5c.16.43.08.6.53.6l1.63-1.58 3.41 2.52c.63.35 1.08.17 1.24-.59l2.25-10.6c.22-1.04-.39-1.5-1.03-1.2l-1.03.35zM7.22 13.06l7.85-4.9c.39-.24.75-.11.45.16l-6.68 6.03-.26 2.62-1.36-3.9z" fill="#fff"/></svg>
              </div>
              <div class="text-[12.5px] text-indigo-700/80 font-medium">Warga akan menerima pesan pribadi dari Bot Telegram Desa Digital.</div>
            </label>
          </div>

          <div class="flex justify-end gap-3 pt-6 border-t border-border">
            <button type="button" class="px-6 py-2.5 rounded-xl border border-border text-[13.5px] font-bold text-t2 hover:bg-base hover:text-t1 transition-colors" onclick="go('pengumuman')">Batal</button>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-[13.5px] font-bold transition-all shadow-md shadow-indigo-500/20 flex items-center gap-2">
              Kirim Pengumuman
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M1 8L15 2L8 15L6.5 9.5L1 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </form>
      </section>

    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Hak Cipta Dilindungi.
    </footer>
  </div>

  <script>function go(page) { window.location.href = page + '.php'; }</script>
</body>
</html>