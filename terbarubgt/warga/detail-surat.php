<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Surat — Portal Desa Digital</title>
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
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('dashboard')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-medium text-[13px]">Beranda</span>
        </a>
        
        <a class="sb-item active !bg-emerald-600/10 !text-emerald-400 !border-r-4 !border-emerald-500 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('surat')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-semibold text-[13px]">Permohonan Surat</span></div>
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
    
    <header class="h-[60px] bg-surface border-b border-border flex items-center px-6 gap-2 sticky top-0 z-10 text-[14px]">
      <a class="text-t2 hover:text-emerald-600 font-medium cursor-pointer transition-colors" onclick="go('dashboard')">Beranda</a>
      <span class="text-t3">/</span>
      <a class="text-t2 hover:text-emerald-600 font-medium cursor-pointer transition-colors" onclick="go('surat')">Permohonan Surat</a>
      <span class="text-t3">/</span>
      <strong class="text-t1 font-bold">Detail</strong>
    </header>

    <main class="p-6 flex-1 max-w-6xl mx-auto w-full">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-6 items-start">
        
        <div class="flex flex-col gap-5">
          <section class="bg-surface border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6 pb-5 border-b border-border">
              <h1 class="text-[18px] font-bold text-t1 flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5"/></svg></div>
                Rincian Permohonan
              </h1>
              <span class="bg-amber-100 text-amber-800 border border-amber-200 px-3 py-1.5 rounded-lg text-[12px] font-bold">Menunggu</span>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-8">
              <div class="flex flex-col gap-1.5">
                <span class="text-[12px] font-bold text-t3 uppercase tracking-wider">Jenis Surat</span>
                <span class="text-[14px] font-semibold text-t1">Pengantar KTP</span>
              </div>
              <div class="flex flex-col gap-1.5">
                <span class="text-[12px] font-bold text-t3 uppercase tracking-wider">Tanggal Pengajuan</span>
                <span class="text-[14px] font-mono font-medium text-t1">28 April 2025, 09:32</span>
              </div>
              <div class="flex flex-col gap-1.5 sm:col-span-2">
                <span class="text-[12px] font-bold text-t3 uppercase tracking-wider">Keperluan</span>
                <div class="bg-base p-4 rounded-xl border border-border/60">
                  <span class="text-[13.5px] text-t1 leading-relaxed">Perpanjangan KTP yang sudah habis masa berlaku sejak Januari 2025</span>
                </div>
              </div>
              <div class="flex flex-col gap-1.5">
                <span class="text-[12px] font-bold text-t3 uppercase tracking-wider">Persyaratan Dokumen</span>
                <span class="text-[13px] text-t1 bg-base px-3 py-1.5 rounded-lg border border-border/60 inline-flex items-center gap-2 max-w-fit">
                  <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z" stroke="currentColor" stroke-width="1.5"/></svg>
                  KK, KTP lama
                </span>
              </div>
              <div class="flex flex-col gap-1.5">
                <span class="text-[12px] font-bold text-t3 uppercase tracking-wider">Diproses Oleh</span>
                <div class="flex items-center gap-2">
                  <div class="w-6 h-6 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center text-[10px] font-bold">RT</div>
                  <span class="text-[13px] text-t1 font-semibold">Ketua RT 001</span>
                </div>
              </div>
            </div>
          </section>

          <!-- Tampilan catatan contoh jika ada -->
          <aside class="bg-amber-50/50 border border-amber-200 rounded-2xl p-5 flex gap-4 shadow-sm relative overflow-hidden">
            <div class="absolute top-0 left-0 w-1 h-full bg-amber-500"></div>
            <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg width="20" height="20" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/><line x1="8" y1="5" x2="8" y2="10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8" cy="12" r="1" fill="currentColor"/></svg>
            </div>
            <div>
              <h2 class="text-[14px] font-bold text-amber-900 mb-1">Catatan dari RT</h2>
              <p class="text-[13px] text-amber-800 leading-relaxed">Mohon bawa dokumen asli KK saat nanti mengambil surat pengantar di rumah Ketua RT untuk keperluan verifikasi akhir.</p>
            </div>
          </aside>
        </div>
        
        <div class="flex flex-col gap-5">
          <section class="bg-surface border border-border rounded-2xl p-6 shadow-sm">
            <h2 class="text-[15px] font-bold text-t1 mb-6">Linimasa Status</h2>
            
            <div class="flex flex-col gap-5 pl-1">
              <div class="flex gap-4 items-start relative">
                <div class="absolute left-[3.5px] top-4 bottom-[-20px] w-[2px] bg-border z-0"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-emerald-500 mt-1 flex-shrink-0 relative z-10 ring-4 ring-surface"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1">Permohonan diajukan</div>
                  <div class="text-[11px] text-t3 font-mono mt-1">28 Apr 2025, 09:32</div>
                </div>
              </div>
              
              <div class="flex gap-4 items-start relative">
                <div class="w-2.5 h-2.5 rounded-full bg-amber-400 mt-1 flex-shrink-0 relative z-10 ring-4 ring-surface animate-pulse"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1">Menunggu proses RT</div>
                  <div class="text-[11.5px] text-amber-600 font-medium mt-1">Estimasi 1–2 hari kerja</div>
                </div>
              </div>
              
              <div class="flex gap-4 items-start relative opacity-50">
                <div class="w-2.5 h-2.5 rounded-full bg-slate-300 mt-1 flex-shrink-0 relative z-10 ring-4 ring-surface"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1">Disetujui RT</div>
                </div>
              </div>
            </div>
          </section>

          <button type="button" class="w-full py-3.5 rounded-xl bg-emerald-50/50 border border-emerald-200 hover:border-emerald-500 hover:bg-emerald-50 text-emerald-700 text-[13.5px] font-bold transition-all shadow-sm" onclick="go('form-surat')">
            + Ajukan Surat Baru
          </button>
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