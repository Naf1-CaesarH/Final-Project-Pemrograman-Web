<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemantauan Tamu Menginap — Panel RT</title>
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
        
        <a class="sb-item active !bg-indigo-600/10 !text-indigo-400 !border-r-4 !border-indigo-500 px-5 py-2.5 flex justify-between items-center cursor-pointer transition-colors" onclick="go('pantau-tamu')">
          <div class="flex items-center gap-3">
            <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5"/></svg>
            <span class="font-semibold text-[13px]">Data Tamu</span>
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

        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('pengumuman')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-medium text-[13px]">Pengumuman</span>
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
      <strong class="text-t1 font-bold">Laporan Tamu Menginap</strong>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-6xl w-full mx-auto">
      <div>
        <h1 class="text-[20px] font-bold text-t1 mb-1">Daftar Tamu Terlaporkan</h1>
        <p class="text-[14px] text-t2">Pantau data warga asing atau luar daerah yang menginap 1x24 jam di wilayah Anda.</p>
      </div>

      <div class="bg-surface border border-border rounded-2xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-base border-b border-border/80 text-[11px] text-t3 uppercase tracking-wider font-bold">
                <th class="py-4 px-6 rounded-tl-lg">Nama Tamu</th>
                <th class="py-4 px-6">Tuan Rumah (Warga)</th>
                <th class="py-4 px-6">Asal Daerah</th>
                <th class="py-4 px-6">Durasi Menginap</th>
                <th class="py-4 px-6 text-center">Status</th>
                <th class="py-4 px-6 text-right rounded-tr-lg">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-[13.5px]">
              <tr class="border-b border-border/60 hover:bg-indigo-50/30 transition-colors group">
                <td class="py-4 px-6">
                  <div class="font-bold text-t1 group-hover:text-indigo-700 transition-colors">Rizky Maulana</div>
                  <div class="text-[12px] text-t3 font-mono font-medium mt-1">320412XXXXXXXXXX</div>
                </td>
                <td class="py-4 px-6">
                  <div class="text-t1 font-bold">Budi Santoso</div>
                  <div class="text-[12px] text-t3 font-medium mt-1">Teman</div>
                </td>
                <td class="py-4 px-6 text-t2 font-medium">Bandung, Jawa Barat</td>
                <td class="py-4 px-6 text-t2">
                  <div class="font-bold text-t1">28 Apr – 30 Apr 2025</div>
                  <div class="text-[12px] text-indigo-600 font-bold mt-1">(2 Malam)</div>
                </td>
                <td class="py-4 px-6 text-center"><span class="bg-amber-100 text-amber-800 text-[12px] font-bold px-3 py-1.5 rounded-lg border border-amber-200">Menunggu</span></td>
                <td class="py-4 px-6 text-right">
                  <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded-lg font-bold text-[13px] hover:bg-indigo-700 transition-all shadow-sm shadow-indigo-500/20" onclick="alert('Laporan kedatangan Rizky Maulana telah diketahui oleh RT.')">Konfirmasi</button>
                </td>
              </tr>
              <tr class="hover:bg-indigo-50/30 transition-colors group">
                <td class="py-4 px-6">
                  <div class="font-bold text-t1 group-hover:text-indigo-700 transition-colors">Suryadi</div>
                  <div class="text-[12px] text-t3 font-mono font-medium mt-1">320215XXXXXXXXXX</div>
                </td>
                <td class="py-4 px-6">
                  <div class="text-t1 font-bold">Siti Aminah</div>
                  <div class="text-[12px] text-t3 font-medium mt-1">Keluarga</div>
                </td>
                <td class="py-4 px-6 text-t2 font-medium">Sleman, Yogyakarta</td>
                <td class="py-4 px-6 text-t2">
                  <div class="font-bold text-t1">20 Apr – 27 Apr 2025</div>
                  <div class="text-[12px] text-t3 font-medium mt-1">(Selesai Menginap)</div>
                </td>
                <td class="py-4 px-6 text-center"><span class="bg-green-100 text-green-800 text-[12px] font-bold px-3 py-1.5 rounded-lg border border-green-200">Aktif</span></td>
                <td class="py-4 px-6 text-right">
                  <span class="text-[13px] text-t3 font-bold italic">Telah Diketahui</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Hak Cipta Dilindungi.
    </footer>
  </div>

  <script>function go(page) { window.location.href = page + '.php'; }</script>
</body>
</html>