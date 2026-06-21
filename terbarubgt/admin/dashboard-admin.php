<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin Kelurahan — Portal Desa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../assets/tailwind-config.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="bg-base font-sans text-t1 flex min-h-screen">

  <aside class="sidebar-fixed w-64 bg-slate-900 text-slate-300 flex flex-col justify-between sticky top-0 h-screen shadow-xl z-20">
    <div>
      <div class="flex items-center gap-3 px-5 py-5 border-b border-slate-800">
        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-blue-600/30">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="2" y="8" width="5" height="6" rx="1" fill="white"/><rect x="9" y="5" width="5" height="9" rx="1" fill="white" opacity=".7"/><path d="M1 8L8 3L15 8" stroke="white" stroke-width="1.3" stroke-linecap="round"/></svg>
        </div>
        <div>
          <div class="text-[13px] font-bold text-white leading-tight tracking-wide">Portal Desa<br>Digital</div>
          <div class="text-[9px] bg-amber-500 text-amber-950 font-bold px-1.5 py-0.5 rounded uppercase mt-1 inline-block tracking-wider">⭐ Admin</div>
        </div>
      </div>
      
      <nav class="py-4 flex-1 overflow-y-auto scrollbar-hide">
        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">MENU UTAMA</div>
        <a class="sb-item active !bg-blue-600/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-semibold text-[13px]">Dashboard</span>
        </a>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('surat')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-medium text-[13px]">Permohonan Surat</span></div>
          <span class="bg-blue-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-md">8</span>
        </a>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('tamu')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg><span class="font-medium text-[13px]">Laporan Tamu</span></div>
          <span class="bg-amber-500 text-amber-950 text-[10px] font-bold px-1.5 py-0.5 rounded-md">4</span>
        </a>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('lingkungan')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/><circle cx="8" cy="11.5" r=".8" fill="currentColor"/></svg><span class="font-medium text-[13px]">Laporan Lingkungan</span></div>
          <span class="bg-blue-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-md">3</span>
        </a>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('pengumuman')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-medium text-[13px]">Pengumuman</span>
        </a>

        <div class="mx-5 my-3 border-t border-slate-800"></div>

        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">DATA MASTER</div>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('warga')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="6" cy="5" r="2.5" stroke="currentColor" stroke-width="1.5"/><path d="M1.5 13c0-2.49 2.01-4.5 4.5-4.5s4.5 2.01 4.5 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="12" cy="5" r="2" stroke="currentColor" stroke-width="1.5"/><path d="M14.5 13c0-1.93-1.12-3.6-2.75-4.32" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <span class="font-medium text-[13px]">Data Warga</span>
        </a>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('petugas')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M2 13.5c0-3.04 2.69-5.5 6-5.5s6 2.46 6 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M10 4.5l1 1.5-1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <span class="font-medium text-[13px]">Manajemen Petugas</span>
        </a>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('jenis-surat')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M9 2H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6L9 2z" stroke="currentColor" stroke-width="1.5"/><path d="M9 2v4h4" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-medium text-[13px]">Jenis Surat</span>
        </a>

        <div class="mx-5 my-3 border-t border-slate-800"></div>

        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">LAPORAN & SISTEM</div>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('laporan')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><polyline points="2,12 6,7 9,10 12,5 14,7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span class="font-medium text-[13px]">Statistik & Laporan</span>
        </a>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('pengaturan')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="2.5" stroke="currentColor" stroke-width="1.5"/><path d="M8 2v1.5M8 12.5V14M2 8h1.5M12.5 8H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <span class="font-medium text-[13px]">Pengaturan Sistem</span>
        </a>
      </nav>
    </div>

    <div class="px-5 py-4 border-t border-slate-800 bg-slate-950">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0">AK</div>
        <div class="flex-1 min-w-0">
          <div class="text-[13px] font-bold text-white truncate">Admin Kelurahan</div>
          <div class="text-[11px] text-slate-400 truncate">Kelurahan Sukamaju</div>
        </div>
      </div>
    </div>
  </aside>

  <div class="flex-1 flex flex-col min-h-screen">
    
    <header class="h-[60px] bg-surface border-b border-border flex items-center justify-between px-6 sticky top-0 z-10">
      <h1 class="text-[15px] font-bold text-t1">Dashboard Admin</h1>
      
      <div class="flex items-center gap-4">
        <button type="button" class="relative w-9 h-9 rounded-full border border-border flex items-center justify-center text-t2 hover:bg-base transition-colors" aria-label="Notifikasi">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 00-5 5v2l-1 2h12l-1-2V7a5 5 0 00-5-5z" stroke="currentColor" stroke-width="1.5"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.5"/></svg>
          <div class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-red-500 border-2 border-white"></div>
        </button>
        <button type="button" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-[13px] font-bold transition-colors shadow-sm" onclick="go('pengumuman-buat')">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v10M1 6h10" stroke="white" stroke-width="1.8" stroke-linecap="round"/></svg>
          Buat Pengumuman
        </button>
      </div>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-7xl mx-auto w-full">
      
      <div>
        <p class="text-[14px] text-t2">Selamat datang, <strong class="text-t1">Admin Kelurahan</strong> 👋 — Senin, 5 Mei 2025</p>
      </div>

      <section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Total Warga Terdaftar</div>
          <div class="text-[26px] font-bold text-t1">312</div>
          <div class="text-[11.5px] text-green-600 font-bold mt-1">↑ +5 bulan ini</div>
        </div>
        <div class="bg-surface border border-amber-300 bg-amber-50/30 rounded-2xl p-4 shadow-sm flex flex-col justify-between relative overflow-hidden">
          <div class="absolute left-0 top-0 w-1 h-full bg-amber-400"></div>
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Surat Menunggu</div>
          <div class="text-[26px] font-bold text-amber-600">8</div>
          <div class="text-[11.5px] text-amber-700 font-semibold mt-1">Perlu ditindaklanjuti</div>
        </div>
        <div class="bg-surface border border-red-300 bg-red-50/30 rounded-2xl p-4 shadow-sm flex flex-col justify-between relative overflow-hidden">
          <div class="absolute left-0 top-0 w-1 h-full bg-red-400"></div>
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Laporan Lingkungan</div>
          <div class="text-[26px] font-bold text-red-600">3</div>
          <div class="text-[11.5px] text-red-700 font-semibold mt-1">Belum ditangani</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Tamu Aktif Menginap</div>
          <div class="text-[26px] font-bold text-t1">4</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">Masa berlaku aktif</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Surat Diproses Bln Ini</div>
          <div class="text-[26px] font-bold text-t1">47</div>
          <div class="text-[11.5px] text-green-600 font-bold mt-1">↑ vs 39 bulan lalu</div>
        </div>
      </section>

      <div class="grid grid-cols-1 lg:grid-cols-[1fr_350px] gap-6">
        
        <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
          <div class="flex justify-between items-center mb-4 pb-2 border-b border-border">
            <h2 class="text-[15px] font-bold text-t1">Permohonan Surat Terbaru</h2>
            <a class="text-[12px] font-bold text-blue-600 hover:underline cursor-pointer" onclick="go('surat')">Lihat semua →</a>
          </div>
          
          <div class="flex flex-col gap-1">
            <article class="flex items-center gap-3 p-2 hover:bg-base rounded-lg transition-colors border-b border-border/50 pb-3">
              <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-600 font-bold text-[12px] flex items-center justify-center flex-shrink-0">BS</div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Budi Santoso <span class="font-normal text-t2">— Surat Domisili</span></div>
                <div class="text-[11px] text-t3 mt-0.5">RT 001 · 10 menit lalu</div>
              </div>
              <span class="bdg bdg-amber text-[10px] mx-2 hidden sm:inline-block">Menunggu</span>
              <button type="button" class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-[11px] font-bold rounded-md transition-colors" onclick="go('detail-surat')">Proses</button>
            </article>
            
            <article class="flex items-center gap-3 p-2 hover:bg-base rounded-lg transition-colors border-b border-border/50 pb-3">
              <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-600 font-bold text-[12px] flex items-center justify-center flex-shrink-0">SR</div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Siti Rahayu <span class="font-normal text-t2">— Pengantar KTP</span></div>
                <div class="text-[11px] text-t3 mt-0.5">RT 001 · 2 jam lalu</div>
              </div>
              <span class="bdg bdg-amber text-[10px] mx-2 hidden sm:inline-block">Menunggu</span>
              <button type="button" class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-[11px] font-bold rounded-md transition-colors" onclick="go('detail-surat')">Proses</button>
            </article>

            <article class="flex items-center gap-3 p-2 hover:bg-base rounded-lg transition-colors border-b border-border/50 pb-3">
              <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-600 font-bold text-[12px] flex items-center justify-center flex-shrink-0">AP</div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Andi Pratama <span class="font-normal text-t2">— Keterangan Usaha</span></div>
                <div class="text-[11px] text-t3 mt-0.5">RT 002 · 1 hari lalu</div>
              </div>
              <span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-[10px] font-medium mx-2 hidden sm:inline-block">Diproses</span>
              <button type="button" class="px-3 py-1.5 bg-white border border-border text-t1 hover:bg-base text-[11px] font-bold rounded-md transition-colors" onclick="go('detail-surat')">Lihat</button>
            </article>

            <article class="flex items-center gap-3 p-2 hover:bg-base rounded-lg transition-colors border-b border-border/50 pb-3">
              <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-600 font-bold text-[12px] flex items-center justify-center flex-shrink-0">DL</div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Dewi Lestari <span class="font-normal text-t2">— Tidak Mampu</span></div>
                <div class="text-[11px] text-t3 mt-0.5">RT 002 · 2 hari lalu</div>
              </div>
              <span class="bdg bdg-green text-[10px] mx-2 hidden sm:inline-block">Disetujui</span>
              <button type="button" class="px-3 py-1.5 bg-white border border-border text-t1 hover:bg-base text-[11px] font-bold rounded-md transition-colors">Detail</button>
            </article>

            <article class="flex items-center gap-3 p-2 hover:bg-base rounded-lg transition-colors">
              <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-600 font-bold text-[12px] flex items-center justify-center flex-shrink-0">RH</div>
              <div class="flex-1 min-w-0">
                <div class="text-[13px] font-bold text-t1 truncate">Rudi Hartono <span class="font-normal text-t2">— Surat Domisili</span></div>
                <div class="text-[11px] text-t3 mt-0.5">RT 003 · 3 hari lalu</div>
              </div>
              <span class="bdg bdg-red text-[10px] mx-2 hidden sm:inline-block">Ditolak</span>
              <button type="button" class="px-3 py-1.5 bg-white border border-border text-t1 hover:bg-base text-[11px] font-bold rounded-md transition-colors">Detail</button>
            </article>
          </div>
        </section>

        <div class="flex flex-col gap-6">
          
          <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h2 class="text-[14px] font-bold text-t1">Laporan Lingkungan</h2>
              <a class="text-[11px] font-bold text-blue-600 hover:underline cursor-pointer" onclick="go('lingkungan')">Semua →</a>
            </div>
            
            <div class="flex flex-col gap-3">
              <div class="flex gap-3 items-start bg-base border border-border/50 p-3 rounded-xl">
                <div class="w-8 h-8 rounded-full bg-[#FFF3CD] flex items-center justify-center flex-shrink-0">
                  <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="#856404" stroke-width="1.2"/><line x1="8" y1="5" x2="8" y2="8.5" stroke="#856404" stroke-width="1.3" stroke-linecap="round"/><circle cx="8" cy="10.5" r=".8" fill="#856404"/></svg>
                </div>
                <div>
                  <div class="text-[12.5px] font-bold text-t1 mb-0.5">Sampah menumpuk di Gang 3</div>
                  <div class="text-[10px] text-t3">RT 002 · Kebersihan · 1 hari lalu</div>
                  <span class="bdg bdg-amber text-[9px] mt-1.5 inline-block">Baru</span>
                </div>
              </div>
              
              <div class="flex gap-3 items-start bg-base border border-border/50 p-3 rounded-xl">
                <div class="w-8 h-8 rounded-full bg-[#FCEBEB] flex items-center justify-center flex-shrink-0">
                  <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="#E24B4A" stroke-width="1.2"/><line x1="8" y1="5" x2="8" y2="8.5" stroke="#E24B4A" stroke-width="1.3" stroke-linecap="round"/><circle cx="8" cy="10.5" r=".8" fill="#E24B4A"/></svg>
                </div>
                <div>
                  <div class="text-[12.5px] font-bold text-t1 mb-0.5">Lampu jalan mati di Blok B</div>
                  <div class="text-[10px] text-t3">RT 001 · Infrastruktur · 2 hari lalu</div>
                  <span class="bdg bdg-red text-[9px] mt-1.5 inline-block">Urgent</span>
                </div>
              </div>
            </div>
          </section>

          <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
            <h2 class="text-[14px] font-bold text-t1 mb-4">Log Aktivitas</h2>
            
            <div class="flex flex-col gap-4 pl-1">
              <div class="flex gap-3 items-start relative">
                <div class="absolute left-[3.5px] top-4 bottom-[-16px] w-[1px] bg-border z-0"></div>
                <div class="w-2 h-2 rounded-full bg-green-500 mt-1.5 flex-shrink-0 z-10 ring-4 ring-surface"></div>
                <div class="flex-1">
                  <div class="text-[12px] text-t1"><strong class="font-semibold text-t1">Budi Santoso</strong> mengajukan surat domisili</div>
                </div>
                <div class="text-[10px] text-t3 font-mono mt-1">10m</div>
              </div>
              
              <div class="flex gap-3 items-start relative">
                <div class="absolute left-[3.5px] top-4 bottom-[-16px] w-[1px] bg-border z-0"></div>
                <div class="w-2 h-2 rounded-full bg-amber-500 mt-1.5 flex-shrink-0 z-10 ring-4 ring-surface"></div>
                <div class="flex-1">
                  <div class="text-[12px] text-t1">Laporan baru: sampah menumpuk dari <strong class="font-semibold text-t1">RT 002</strong></div>
                </div>
                <div class="text-[10px] text-t3 font-mono mt-1">1j</div>
              </div>

              <div class="flex gap-3 items-start relative">
                <div class="w-2 h-2 rounded-full bg-blue-500 mt-1.5 flex-shrink-0 z-10 ring-4 ring-surface"></div>
                <div class="flex-1">
                  <div class="text-[12px] text-t1"><strong class="font-semibold text-blue-600">Admin</strong> menyetujui surat Dewi Lestari</div>
                </div>
                <div class="text-[10px] text-t3 font-mono mt-1">2j</div>
              </div>
            </div>
          </section>

        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
          <div class="flex justify-between items-center mb-4 pb-2 border-b border-border">
            <h2 class="text-[14px] font-bold text-t1">Rekap Warga per RT/RW</h2>
            <a class="text-[12px] font-bold text-blue-600 hover:underline cursor-pointer" onclick="go('warga')">Detail →</a>
          </div>
          <div class="overflow-x-auto">
            <table class="w-full text-left text-[12.5px] border-collapse min-w-[400px]">
              <thead>
                <tr class="text-t3 font-semibold uppercase tracking-wider text-[10px] border-b border-border/60">
                  <th class="py-2">RT/RW</th>
                  <th class="py-2">Ketua</th>
                  <th class="py-2">Warga</th>
                  <th class="py-2">Surat Bln Ini</th>
                  <th class="py-2">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-border/60 hover:bg-base/50">
                  <td class="py-3 font-bold text-t1">RT 001 / RW 001</td>
                  <td class="py-3 text-t2">Agus Salim</td>
                  <td class="py-3 font-mono font-medium">24</td>
                  <td class="py-3 font-mono font-medium">12</td>
                  <td class="py-3"><span class="bdg bdg-green text-[9px]">Aktif</span></td>
                </tr>
                <tr class="hover:bg-base/50">
                  <td class="py-3 font-bold text-t1">RT 002 / RW 001</td>
                  <td class="py-3 text-t2">Hendra Wahyu</td>
                  <td class="py-3 font-mono font-medium">19</td>
                  <td class="py-3 font-mono font-medium">8</td>
                  <td class="py-3"><span class="bdg bdg-green text-[9px]">Aktif</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <section class="bg-surface border border-border rounded-2xl p-5 shadow-sm">
          <div class="mb-5 pb-2 border-b border-border">
            <h2 class="text-[14px] font-bold text-t1">Jenis Surat Terpopuler (Bulan Ini)</h2>
          </div>
          <div class="flex flex-col gap-4">
            <div>
              <div class="flex justify-between text-[12px] mb-1.5">
                <span class="font-medium text-t1">Surat Domisili</span>
                <span class="font-bold font-mono">18</span>
              </div>
              <div class="w-full h-2 bg-base rounded-full overflow-hidden border border-border/50">
                <div class="h-full bg-blue-500 rounded-full" style="width: 80%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between text-[12px] mb-1.5">
                <span class="font-medium text-t1">Pengantar KTP</span>
                <span class="font-bold font-mono">12</span>
              </div>
              <div class="w-full h-2 bg-base rounded-full overflow-hidden border border-border/50">
                <div class="h-full bg-blue-400 rounded-full" style="width: 53%"></div>
              </div>
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