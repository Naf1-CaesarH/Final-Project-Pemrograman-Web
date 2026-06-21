<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard RT/RW — Portal Desa Digital</title>
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
        
        <a class="sb-item active !bg-indigo-600/10 !text-indigo-400 !border-r-4 !border-indigo-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('dashboard-rt')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-semibold text-[13px]">Beranda RT</span>
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
    
    <header class="h-[60px] bg-surface border-b border-border flex items-center justify-between px-8 sticky top-0 z-10 shadow-sm">
      <h1 class="text-[16px] font-bold text-t1">Panel Ketua RT 001</h1>
      <button type="button" class="w-9 h-9 rounded-full border border-border flex items-center justify-center text-t2 hover:bg-indigo-50 hover:text-indigo-600 transition-colors relative" aria-label="Notifikasi">
        <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-surface"></div>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 00-5 5v2l-1 2h12l-1-2V7a5 5 0 00-5-5z" stroke="currentColor" stroke-width="1.5"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.5"/></svg>
      </button>
    </header>

    <main class="p-8 flex flex-col gap-8 flex-1 max-w-7xl mx-auto w-full">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="text-[20px] font-bold text-t1 mb-1">Halo Pak RT,</h2>
          <p class="text-[14px] text-t2">Berikut adalah ringkasan aktivitas di wilayah RT 001 hari ini.</p>
        </div>
        <div class="hidden sm:block text-right">
          <div class="text-[12px] font-bold text-t3 uppercase tracking-wider">Tanggal Hari Ini</div>
          <div class="text-[14px] font-bold text-indigo-700">22 Mei 2026</div>
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <div class="bg-surface border border-border rounded-2xl p-6 shadow-sm transition-all hover:shadow-md hover:border-red-200 group relative overflow-hidden">
          <div class="absolute -right-4 -top-4 w-24 h-24 bg-red-50 rounded-full group-hover:scale-150 transition-transform duration-500 z-0"></div>
          <div class="relative z-10">
            <div class="text-[13px] font-bold text-t2 mb-1 uppercase tracking-wider">Persetujuan Surat</div>
            <div class="text-[32px] font-bold text-red-600 leading-none mb-3">4</div>
            <div class="text-[12px] text-t3 font-medium flex items-center gap-1.5">
              <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 3v5l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/></svg>
              Segera tindak lanjuti
            </div>
          </div>
        </div>
        
        <div class="bg-surface border border-border rounded-2xl p-6 shadow-sm transition-all hover:shadow-md hover:border-indigo-200 group relative overflow-hidden">
          <div class="absolute -right-4 -top-4 w-24 h-24 bg-indigo-50 rounded-full group-hover:scale-150 transition-transform duration-500 z-0"></div>
          <div class="relative z-10">
            <div class="text-[13px] font-bold text-t2 mb-1 uppercase tracking-wider">Tamu Menginap Aktif</div>
            <div class="text-[32px] font-bold text-t1 leading-none mb-3">2</div>
            <div class="text-[12px] text-t3 font-medium flex items-center gap-1.5">
              <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5"/><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/></svg>
              Terdata di lingkungan
            </div>
          </div>
        </div>
        
        <div class="bg-surface border border-border rounded-2xl p-6 shadow-sm transition-all hover:shadow-md hover:border-indigo-200 group relative overflow-hidden">
          <div class="absolute -right-4 -top-4 w-24 h-24 bg-indigo-50 rounded-full group-hover:scale-150 transition-transform duration-500 z-0"></div>
          <div class="relative z-10">
            <div class="text-[13px] font-bold text-t2 mb-1 uppercase tracking-wider">Total Warga RT 001</div>
            <div class="text-[32px] font-bold text-indigo-600 leading-none mb-3">142</div>
            <div class="text-[12px] text-t3 font-medium flex items-center gap-1.5">
              <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M1 8l7-5 7 5M3 6v8h10V6" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
              Jiwa terdaftar resmi
            </div>
          </div>
        </div>
      </div>

      <section class="bg-surface border border-border rounded-2xl p-6 shadow-sm">
        <div class="flex items-center justify-between mb-6">
          <h2 class="text-[16px] font-bold text-t1 flex items-center gap-2">
            <div class="w-2 h-5 bg-indigo-500 rounded-full"></div>
            Antrean Persetujuan Surat Warga
          </h2>
          <a class="text-[13px] font-bold text-indigo-600 hover:text-indigo-800 transition-colors flex items-center gap-1 cursor-pointer" onclick="go('validasi-surat')">Lihat Semua Antrean <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M1 7h10m0 0l-3-3m3 3l-3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
        
        <div class="overflow-x-auto">
          <table class="w-full text-left text-[13px] border-collapse">
            <thead>
              <tr class="border-b border-border bg-base/50 text-t3 font-bold uppercase tracking-wider text-[11px]">
                <th class="py-3 px-4 rounded-tl-lg">Nama Warga</th>
                <th class="py-3 px-4">Jenis Surat</th>
                <th class="py-3 px-4">Tanggal Pengajuan</th>
                <th class="py-3 px-4 text-right rounded-tr-lg">Aksi Cepat</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-border/60 hover:bg-indigo-50/30 transition-colors group">
                <td class="py-4 px-4 font-bold text-t1">Budi Santoso</td>
                <td class="py-4 px-4">
                  <span class="inline-block bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md font-medium border border-slate-200">Pengantar KTP Baru</span>
                </td>
                <td class="py-4 px-4 text-t2 font-mono text-[12px] font-medium">Hari ini, 09:12</td>
                <td class="py-4 px-4 text-right flex justify-end gap-2">
                  <button type="button" class="px-4 py-2 bg-white text-red-600 border border-red-200 rounded-lg font-bold hover:bg-red-50 hover:border-red-300 transition-colors" onclick="go('validasi-surat-detail')">Tolak</button>
                  <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded-lg font-bold hover:bg-indigo-700 transition-colors shadow-sm shadow-indigo-500/20" onclick="go('validasi-surat-detail')">Setujui</button>
                </td>
              </tr>
              <tr class="border-b border-border/60 hover:bg-indigo-50/30 transition-colors group">
                <td class="py-4 px-4 font-bold text-t1">Siti Aminah</td>
                <td class="py-4 px-4">
                  <span class="inline-block bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md font-medium border border-slate-200">Surat Keterangan Domisili</span>
                </td>
                <td class="py-4 px-4 text-t2 font-mono text-[12px] font-medium">Kemarin, 14:00</td>
                <td class="py-4 px-4 text-right flex justify-end gap-2">
                  <button type="button" class="px-4 py-2 bg-white text-red-600 border border-red-200 rounded-lg font-bold hover:bg-red-50 hover:border-red-300 transition-colors" onclick="go('validasi-surat-detail')">Tolak</button>
                  <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded-lg font-bold hover:bg-indigo-700 transition-colors shadow-sm shadow-indigo-500/20" onclick="go('validasi-surat-detail')">Setujui</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Hak Cipta Dilindungi.
    </footer>
  </div>

  <script>
    function go(page) { 
      window.location.href = page + '.php'; 
    }
  </script>
</body>
</html>