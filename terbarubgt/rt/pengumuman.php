<?php
require_once '../koneksi.php';

// Handle Delete Request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
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

    $delete_query = "DELETE FROM pengumuman WHERE id = $id_to_delete";
    mysqli_query($koneksi, $delete_query);
    header("Location: pengumuman.php?msg=deleted");
    exit();
}

$query = "SELECT * FROM pengumuman ORDER BY created_at DESC";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Pengumuman — Panel RT</title>
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
    
    <header class="h-[60px] bg-surface border-b border-border flex items-center justify-between px-6 sticky top-0 z-10 text-[14px]">
      <div class="flex items-center gap-2">
        <a class="text-t2 hover:text-indigo-600 font-medium cursor-pointer transition-colors" onclick="go('dashboard-rt')">Beranda RT</a>
        <span class="text-t3">/</span>
        <strong class="text-t1 font-bold">Kelola Pengumuman</strong>
      </div>
      
      <button type="button" class="flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-[13px] font-bold transition-all shadow-md shadow-indigo-500/20" onclick="go('form-pengumuman')">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" stroke="currentColor" stroke-width="1.5"/><line x1="7" y1="4" x2="7" y2="10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="4" y1="7" x2="10" y2="7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        Buat Pengumuman Baru
      </button>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-6xl w-full mx-auto">
      
      <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
          <h1 class="text-[20px] font-bold text-t1 mb-1">Daftar Pengumuman Warga</h1>
          <p class="text-[14px] text-t2">Kelola informasi dan pantau status pengiriman pesan berantai (broadcast) via Telegram.</p>
        </div>
        
        <div class="relative w-full sm:max-w-md">
          <svg class="absolute left-4 top-1/2 -translate-y-1/2 text-t3" width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.5"/><path d="M10.5 10.5L14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <input class="w-full h-11 pl-11 pr-4 rounded-xl border border-border text-[13px] bg-base focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm transition-all" type="text" placeholder="Cari judul pengumuman...">
        </div>
      </div>

      <section class="bg-surface border border-border rounded-2xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse min-w-[800px]">
            <thead>
              <tr class="bg-base border-b border-border/80 text-[11px] text-t3 uppercase tracking-wider font-bold">
                <th class="py-4 px-6 w-2/5">Judul & Isi Singkat</th>
                <th class="py-4 px-6">Target Wilayah</th>
                <th class="py-4 px-6">Tgl Dibuat</th>
                <th class="py-4 px-6">Status Telegram</th>
                <th class="py-4 px-6 text-right">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-[13.5px]">
              <?php
              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $judul = htmlspecialchars($row['judul']);
                      $isi = htmlspecialchars(mb_substr($row['isi'], 0, 60)) . '...';
                      $target = htmlspecialchars($row['target_audiens']);
                      $tanggal = date('d M Y', strtotime($row['created_at']));
                      
                      // For simplicity, determine badge color based on target
                      $badgeClass = "bg-blue-50 text-blue-700 border-blue-200";
                      if (strpos($target, 'Semua') !== false) {
                          $badgeClass = "bg-purple-50 text-purple-700 border-purple-200";
                      }
                      
                      $status_wa = $row['is_sent_wa'] ? '<div class="inline-flex items-center gap-1.5 text-[11.5px] font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-3 py-1.5 rounded-xl"><svg width="14" height="14" viewBox="0 0 12 12" fill="none" class="text-emerald-500"><rect width="12" height="12" rx="3" fill="currentColor"/><path d="M6 2a4 4 0 00-3.4 6.12L2 10l1.96-.57A4 4 0 106 2z" fill="white"/></svg>Terkirim WA/TG</div>' : '<div class="inline-flex items-center gap-1.5 text-[11.5px] font-bold text-slate-700 bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-xl">Tidak dikirim</div>';

                      echo "
                      <tr class='border-b border-border/60 hover:bg-indigo-50/30 transition-colors group'>
                        <td class='py-4 px-6'>
                          <div class='font-bold text-t1 mb-1 group-hover:text-indigo-700 transition-colors'>$judul</div>
                          <div class='text-[12.5px] text-t2 line-clamp-1'>$isi</div>
                        </td>
                        <td class='py-4 px-6'>
                          <span class='inline-flex items-center gap-1.5 $badgeClass border text-[11.5px] font-bold px-2.5 py-1 rounded-lg'>$target</span>
                        </td>
                        <td class='py-4 px-6 text-t2 font-mono font-medium text-[12.5px]'>$tanggal</td>
                        <td class='py-4 px-6'>
                          $status_wa
                        </td>
                        <td class='py-4 px-6 text-right'>
                          <div class='flex items-center justify-end gap-2'>
                              <a href='edit-pengumuman.php?id=$id' class='text-amber-500 hover:text-amber-700 transition-colors p-2 bg-base hover:bg-amber-50 rounded-lg' title='Edit'>
                                <svg width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7'></path><path d='M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z'></path></svg>
                              </a>
                              <form method='POST' onsubmit='return confirm(\"Apakah Anda yakin ingin menghapus pengumuman ini?\");' class='inline-block m-0'>
                                <input type='hidden' name='action' value='delete'>
                                <input type='hidden' name='id' value='$id'>
                                <button type='submit' class='text-red-500 hover:text-red-700 transition-colors p-2 bg-base hover:bg-red-50 rounded-lg' title='Hapus'>
                                  <svg width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polyline points='3 6 5 6 21 6'></polyline><path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'></path></svg>
                                </button>
                              </form>
                          </div>
                        </td>
                      </tr>";
                  }
              } else {
                  echo "<tr><td colspan='5' class='py-8 text-center text-t2'>Belum ada pengumuman yang dibuat.</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </section>

    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Hak Cipta Dilindungi.
    </footer>
  </div>

  <script>function go(page) { window.location.href = page + '.php'; }</script>
</body>
</html>