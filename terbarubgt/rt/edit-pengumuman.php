<?php
require_once '../koneksi.php';

$success_msg = '';
$error_msg = '';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if it's a delete action
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $id_to_delete = intval($_POST['id']);

        // --- HAPUS PESAN TELEGRAM ---
        $bot_token = "8863579166:AAHK4Xz6EZMWWnyPPHqPb2ZRWSVY9_h8JHs"; // Token bot asli
        $tg_res = mysqli_query($koneksi, "SELECT chat_id, message_id FROM pengumuman_telegram WHERE pengumuman_id = $id_to_delete");
        if ($tg_res && mysqli_num_rows($tg_res) > 0) {
            while ($row = mysqli_fetch_assoc($tg_res)) {
                $url = "https://api.telegram.org/bot" . $bot_token . "/deleteMessage";
                $data = [
                    'chat_id' => $row['chat_id'],
                    'message_id' => $row['message_id']
                ];
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_exec($curl);
                curl_close($curl);
            }
        }
        // --- END HAPUS PESAN TELEGRAM ---

        mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id = $id_to_delete");
        header("Location: pengumuman.php?msg=deleted");
        exit();
    }

    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $target_audiens = mysqli_real_escape_string($koneksi, $_POST['target_audiens']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $id_update = intval($_POST['id']);
    
    $query = "UPDATE pengumuman SET judul='$judul', isi='$isi', target_audiens='$target_audiens' WHERE id=$id_update";
              
    if (mysqli_query($koneksi, $query)) {
        $success_msg = "Pengumuman berhasil diperbarui!";
        
        // --- UPDATE PESAN TELEGRAM ---
        $bot_token = "8863579166:AAHK4Xz6EZMWWnyPPHqPb2ZRWSVY9_h8JHs"; // Token bot asli
        $tg_res = mysqli_query($koneksi, "SELECT chat_id, message_id FROM pengumuman_telegram WHERE pengumuman_id = $id_update");
        if ($tg_res && mysqli_num_rows($tg_res) > 0) {
            $pesan_tg = "📢 *PENGUMUMAN (DIPERBARUI)*\n\n" . 
                        "*" . strtoupper($_POST['judul']) . "*\n\n" . 
                        $_POST['isi'] . "\n\n" . 
                        "_Pesan otomatis dari Portal Desa Digital_";
                        
            while ($row = mysqli_fetch_assoc($tg_res)) {
                $url = "https://api.telegram.org/bot" . $bot_token . "/editMessageText";
                $data = [
                    'chat_id' => $row['chat_id'],
                    'message_id' => $row['message_id'],
                    'text' => $pesan_tg,
                    'parse_mode' => 'Markdown'
                ];
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_exec($curl);
                curl_close($curl);
            }
        }
        // --- END UPDATE PESAN TELEGRAM ---

        header("refresh:2;url=pengumuman.php"); 
    } else {
        $error_msg = "Error: " . mysqli_error($koneksi);
    }
}

// Fetch existing data
$existing_judul = '';
$existing_isi = '';
$existing_target = '';

if ($id > 0) {
    $res = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id = $id");
    if ($row = mysqli_fetch_assoc($res)) {
        $existing_judul = $row['judul'];
        $existing_isi = $row['isi'];
        $existing_target = $row['target_audiens'];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pengumuman — Panel RT</title>
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
      <strong class="text-t1 font-bold">Edit Pengumuman</strong>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-3xl mx-auto w-full">
      <div>
        <h1 class="text-[20px] font-bold text-t1 mb-1">Edit Pengumuman</h1>
        <p class="text-[14px] text-t2">Perbarui informasi pengumuman. Pesan revisi tidak akan dibroadcast ulang ke Telegram warga.</p>
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
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          
          <div class="mb-5">
            <label class="block text-[13.5px] font-bold text-t1 mb-2">Judul Pengumuman <span class="text-red-500">*</span></label>
            <input name="judul" required value="<?php echo htmlspecialchars($existing_judul); ?>" class="w-full h-11 px-4 rounded-xl border border-border text-[13.5px] focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 bg-base transition-all" type="text" placeholder="Contoh: Undangan Kerja Bakti Hari Minggu">
          </div>

          <div class="mb-5">
            <label class="block text-[13.5px] font-bold text-t1 mb-2">Target Warga / Penerima <span class="text-red-500">*</span></label>
            <select name="target_audiens" required class="w-full h-11 px-4 rounded-xl border border-border text-[13.5px] focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 bg-base transition-all appearance-none">
              <option value="Hanya Warga RT 001" <?php if($existing_target == 'Hanya Warga RT 001') echo 'selected'; ?>>Hanya Warga RT 001</option>
              <option value="Seluruh Warga RW 002" <?php if($existing_target == 'Seluruh Warga RW 002') echo 'selected'; ?>>Seluruh Warga RW 002 (Perlu akses RW)</option>
              <option value="Semua" <?php if(strpos($existing_target, 'Semua') !== false) echo 'selected'; ?>>Semua Warga</option>
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
            <textarea name="isi" required class="w-full h-48 px-4 py-4 rounded-b-xl border border-border text-[13.5px] focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 resize-none bg-base transition-all" placeholder="Tuliskan detail pengumuman di sini..."><?php echo htmlspecialchars($existing_isi); ?></textarea>
          </div>



          <div class="flex justify-between items-center pt-6 border-t border-border">
            <button type="submit" name="action" value="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini secara permanen?');" class="px-4 py-2.5 rounded-xl text-red-500 hover:bg-red-50 text-[13.5px] font-bold transition-colors flex items-center gap-2">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
              Hapus
            </button>
            <div class="flex items-center gap-3">
              <button type="button" class="px-6 py-2.5 rounded-xl border border-border text-[13.5px] font-bold text-t2 hover:bg-base hover:text-t1 transition-colors" onclick="go('pengumuman')">Batal</button>
              <button type="submit" name="action" value="update" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-[13.5px] font-bold transition-all shadow-md shadow-indigo-500/20 flex items-center gap-2">
                Simpan Perubahan
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M1 8L15 2L8 15L6.5 9.5L1 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
            </div>
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