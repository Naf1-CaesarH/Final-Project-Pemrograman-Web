<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda — Portal Desa Digital</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../assets/tailwind-config.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="bg-base font-sans text-t1 flex min-h-screen">

  <aside class="sidebar-fixed w-64 bg-slate-900 text-slate-300 flex flex-col justify-between sticky top-0 h-screen shadow-xl z-20">
    <div>
      <div class="flex items-center gap-3 px-5 py-5 border-b border-slate-800">
        <div class="w-8 h-8 rounded-lg bg-emerald-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-emerald-600/30">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="2" y="8" width="5" height="6" rx="1" fill="white"/><rect x="9" y="5" width="5" height="9" rx="1" fill="white" opacity=".7"/><path d="M1 8L8 3L15 8" stroke="white" stroke-width="1.3" stroke-linecap="round"/></svg>
        </div>
        <div>
          <div class="text-[13px] font-bold text-white leading-tight tracking-wide">Portal Desa<br>Digital</div>
          <div class="text-[9px] bg-emerald-500/20 text-emerald-400 font-bold px-1.5 py-0.5 rounded uppercase mt-1 inline-block tracking-wider border border-emerald-500/30">Warga</div>
        </div>
      </div>
      
      <nav class="py-4 flex-1 overflow-y-auto scrollbar-hide">
        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">MENU</div>
        
        <a class="sb-item active !bg-emerald-600/10 !text-emerald-400 !border-r-4 !border-emerald-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('dashboard')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-semibold text-[13px]">Beranda</span>
        </a>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('surat')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-medium text-[13px]">Permohonan Surat</span></div>
        </a>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('tamu')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg><span class="font-medium text-[13px]">Lapor Tamu</span></div>
        </a>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('lingkungan')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/><circle cx="8" cy="11.5" r=".8" fill="currentColor"/></svg><span class="font-medium text-[13px]">Laporan Lingkungan</span></div>
        </a>
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('pengumuman')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-medium text-[13px]">Arsip Pengumuman</span>
        </a>

        <div class="mx-5 my-3 border-t border-slate-800"></div>

        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">AKUN</div>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('profil')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <span class="font-medium text-[13px]">Profil Saya</span>
        </a>
      </nav>
    </div>

    <div class="px-5 py-4 border-t border-slate-800 bg-slate-950">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0">BS</div>
        <div class="flex-1 min-w-0">
          <div class="text-[13px] font-bold text-white truncate">Budi Santoso</div>
          <div class="text-[11px] text-slate-400 truncate">Warga · RT 001</div>
        </div>
      </div>
    </div>
  </aside>

  <div class="flex-1 flex flex-col min-h-screen relative overflow-hidden">
    
    <header class="h-[60px] bg-surface border-b border-border flex items-center justify-between px-6 sticky top-0 z-10">
      <h1 class="text-[15px] font-bold text-t1">Beranda</h1>
      
      <div class="flex items-center gap-4">
        <button type="button" class="relative w-9 h-9 rounded-full border border-border flex items-center justify-center text-t2 hover:bg-base transition-colors" aria-label="Notifikasi">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 00-5 5v2l-1 2h12l-1-2V7a5 5 0 00-5-5z" stroke="currentColor" stroke-width="1.5"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.5"/></svg>
          <div class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-red-500 border-2 border-white"></div>
        </button>
      </div>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-5xl mx-auto w-full">
      
      <div>
        <p class="text-[14px] text-t2">Selamat datang, <strong class="text-t1">Budi Santoso</strong> 👋</p>
      </div>

      <section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-surface border border-emerald-200 bg-emerald-50/30 rounded-2xl p-4 shadow-sm flex flex-col justify-between relative overflow-hidden">
          <div class="absolute left-0 top-0 w-1 h-full bg-emerald-400"></div>
          <div class="text-[12px] font-semibold text-emerald-700 uppercase tracking-wider mb-2">Permohonan Surat</div>
          <div class="text-[26px] font-bold text-emerald-600">3</div>
          <div class="text-[11.5px] text-emerald-700 font-medium mt-1">1 menunggu proses</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Lapor Tamu</div>
          <div class="text-[26px] font-bold text-blue-600">2</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">1 tamu aktif menginap</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Laporan Lingkungan</div>
          <div class="text-[26px] font-bold text-amber-600">1</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">Sedang ditangani</div>
        </div>
      </section>

      <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
        <h2 class="text-[14px] font-bold text-t1 mb-4">Akses Cepat</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
          
          <div class="flex items-center gap-3 p-3 rounded-xl border border-border/70 hover:border-emerald-300 hover:bg-emerald-50/30 transition-colors cursor-pointer group" onclick="go('form-surat')">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform"><svg width="18" height="18" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5"/></svg></div>
            <div>
              <div class="text-[12.5px] font-bold text-t1 group-hover:text-emerald-700 transition-colors">Ajukan Surat ↗</div>
              <div class="text-[11px] text-t3 mt-0.5">Domisili, KTP, dll</div>
            </div>
          </div>
          
          <div class="flex items-center gap-3 p-3 rounded-xl border border-border/70 hover:border-blue-300 hover:bg-blue-50/30 transition-colors cursor-pointer group" onclick="go('tamu')">
            <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
              <svg width="18" height="18" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <div>
              <div class="text-[12.5px] font-bold text-t1 group-hover:text-blue-700 transition-colors">Lapor Tamu ↗</div>
              <div class="text-[11px] text-t3 mt-0.5">Daftarkan tamu menginap</div>
            </div>
          </div>
          
          <div class="flex items-center gap-3 p-3 rounded-xl border border-border/70 hover:border-amber-300 hover:bg-amber-50/30 transition-colors cursor-pointer group" onclick="go('lingkungan')">
            <div class="w-10 h-10 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
              <svg width="18" height="18" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/><line x1="8" y1="5" x2="8" y2="8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8" cy="11.5" r="1" fill="currentColor"/></svg>
            </div>
            <div>
              <div class="text-[12.5px] font-bold text-t1 group-hover:text-amber-700 transition-colors">Lapor Masalah ↗</div>
              <div class="text-[11px] text-t3 mt-0.5">Got, lampu, jalan</div>
            </div>
          </div>
          
          <div class="flex items-center gap-3 p-3 rounded-xl border border-border/70 hover:border-purple-300 hover:bg-purple-50/30 transition-colors cursor-pointer group" onclick="go('pengumuman')">
            <div class="w-10 h-10 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
              <svg width="18" height="18" viewBox="0 0 16 16" fill="none"><path d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z" stroke="currentColor" stroke-width="1.5"/></svg>
            </div>
            <div>
              <div class="text-[12.5px] font-bold text-t1 group-hover:text-purple-700 transition-colors">Pengumuman</div>
              <div class="text-[11px] text-t3 mt-0.5">Arsip RT/RW</div>
            </div>
          </div>
          
        </div>
      </section>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
          <div class="flex justify-between items-center mb-4 pb-2 border-b border-border">
            <h2 class="text-[14px] font-bold text-t1">Permohonan Terkini</h2>
            <a class="text-[12px] font-bold text-emerald-600 hover:underline cursor-pointer" onclick="go('surat')">Lihat semua →</a>
          </div>
          
          <div class="flex flex-col gap-1">
            <div class="flex items-center gap-3 py-2.5 border-b border-border/50">
              <div class="w-9 h-9 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/></svg></div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Surat Domisili</div>
                <div class="text-[11px] text-t3 font-mono mt-0.5">10 Apr 2025</div>
              </div>
              <span class="bg-emerald-100 text-emerald-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Disetujui</span>
            </div>
            
            <div class="flex items-center gap-3 py-2.5 border-b border-border/50">
              <div class="w-9 h-9 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center flex-shrink-0"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/></svg></div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Pengantar KTP</div>
                <div class="text-[11px] text-t3 font-mono mt-0.5">28 Apr 2025</div>
              </div>
              <span class="bg-amber-100 text-amber-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Menunggu</span>
            </div>
            
            <div class="flex items-center gap-3 py-2.5">
              <div class="w-9 h-9 rounded-lg bg-red-100 text-red-600 flex items-center justify-center flex-shrink-0"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/></svg></div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Surat Usaha</div>
                <div class="text-[11px] text-t3 font-mono mt-0.5">15 Apr 2025</div>
              </div>
              <span class="bg-red-100 text-red-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Ditolak</span>
            </div>
          </div>
        </section>

        <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
          <h2 class="text-[14px] font-bold text-t1 mb-4">Aktivitas Terkini</h2>
          
          <div class="flex flex-col gap-4 pl-1">
            <div class="flex gap-3 items-start relative">
              <div class="absolute left-[3.5px] top-4 bottom-[-16px] w-[1px] bg-border z-0"></div>
              <div class="w-2 h-2 rounded-full bg-emerald-500 mt-1.5 flex-shrink-0 z-10 ring-4 ring-surface"></div>
              <div class="flex-1">
                <div class="text-[12.5px] text-t1">Surat domisili <strong class="font-bold text-emerald-600">disetujui</strong> oleh RT 001</div>
              </div>
              <div class="text-[10.5px] text-t3 font-mono mt-0.5">2j</div>
            </div>
            
            <div class="flex gap-3 items-start relative">
              <div class="absolute left-[3.5px] top-4 bottom-[-16px] w-[1px] bg-border z-0"></div>
              <div class="w-2 h-2 rounded-full bg-amber-500 mt-1.5 flex-shrink-0 z-10 ring-4 ring-surface"></div>
              <div class="flex-1">
                <div class="text-[12.5px] text-t1">Izin tamu Rizky Maulana <strong class="font-bold text-amber-600">menunggu konfirmasi</strong></div>
              </div>
              <div class="text-[10.5px] text-t3 font-mono mt-0.5">Kmrn</div>
            </div>
            
            <div class="flex gap-3 items-start relative">
              <div class="absolute left-[3.5px] top-4 bottom-[-16px] w-[1px] bg-border z-0"></div>
              <div class="w-2 h-2 rounded-full bg-blue-500 mt-1.5 flex-shrink-0 z-10 ring-4 ring-surface"></div>
              <div class="flex-1">
                <div class="text-[12.5px] text-t1">Laporan got mampet <strong class="font-bold text-blue-600">selesai ditangani</strong></div>
              </div>
              <div class="text-[10.5px] text-t3 font-mono mt-0.5">2hr</div>
            </div>
            
            <div class="flex gap-3 items-start relative">
              <div class="w-2 h-2 rounded-full bg-red-500 mt-1.5 flex-shrink-0 z-10 ring-4 ring-surface"></div>
              <div class="flex-1">
                <div class="text-[12.5px] text-t1">Surat keterangan usaha <strong class="font-bold text-red-600">ditolak</strong></div>
              </div>
              <div class="text-[10.5px] text-t3 font-mono mt-0.5">15 Apr</div>
            </div>
          </div>
        </section>

      </div>

    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Sistem Administrasi Pusat.
    </footer>
  </div>

  <script>function go(page) { window.location.href = page + '.php'; }</script>
</body>
</html>