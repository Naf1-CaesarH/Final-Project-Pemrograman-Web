<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lapor Tamu Menginap — Portal Desa Digital</title>
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
        
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('surat')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-medium text-[13px]">Permohonan Surat</span></div>
        </a>
        
        <a class="sb-item active !bg-emerald-600/10 !text-emerald-400 !border-r-4 !border-emerald-500 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('tamu')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg><span class="font-semibold text-[13px]">Lapor Tamu</span></div>
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
      <strong class="text-t1 font-bold">Lapor Tamu Menginap</strong>
    </header>

    <main class="p-6 flex flex-col gap-8 flex-1 max-w-4xl mx-auto w-full">
      
      <div class="flex items-center justify-between relative w-full sm:w-3/4 mx-auto mt-2">
        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-[2px] bg-border z-0"></div>
        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-[15%] h-[2px] bg-emerald-500 z-0 transition-all"></div>
        
        <div class="flex flex-col items-center gap-2 relative z-10">
          <div class="w-8 h-8 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[13px] font-bold ring-4 ring-base shadow-lg shadow-emerald-500/20 transition-transform hover:scale-110">
            <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <span class="text-[11px] font-bold text-emerald-600 tracking-wide uppercase">Data Tamu</span>
        </div>
        
        <div class="flex flex-col items-center gap-2 relative z-10">
          <div class="w-8 h-8 rounded-full bg-surface border-2 border-emerald-500 text-emerald-600 flex items-center justify-center text-[13px] font-bold ring-4 ring-base transition-transform hover:scale-110">2</div>
          <span class="text-[11px] font-bold text-emerald-600 tracking-wide uppercase">Jadwal & Tujuan</span>
        </div>
        
        <div class="flex flex-col items-center gap-2 relative z-10">
          <div class="w-8 h-8 rounded-full bg-surface border-2 border-border text-t3 flex items-center justify-center text-[13px] font-bold ring-4 ring-base transition-transform hover:scale-110">3</div>
          <span class="text-[11px] font-bold text-t3 tracking-wide uppercase">Konfirmasi</span>
        </div>
      </div>

      <section class="bg-surface border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
        
        <div class="mb-8">
          <h2 class="text-[14px] font-bold text-t1 mb-4 flex items-center gap-2">
            Data Pemilik Rumah
          </h2>
          <div class="flex items-center gap-4 bg-slate-50/50 border border-border/80 rounded-xl p-4 sm:p-5">
            <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center text-[14px] font-bold flex-shrink-0">BS</div>
            <div>
              <div class="text-[15px] font-bold text-t1">Budi Santoso</div>
              <div class="text-[13px] text-t2 font-medium mt-1">RT 001 / RW 001 · Kelurahan Sukamaju</div>
            </div>
          </div>
        </div>

        <form onsubmit="event.preventDefault(); go('dashboard');">
          
          <fieldset class="mb-8 border-t border-border/80 pt-6">
            <legend class="text-[11px] font-bold text-slate-500 tracking-wider uppercase px-3 bg-surface -ml-3 mb-2">Informasi Tamu</legend>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-5 gap-x-6 mt-2">
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Nama lengkap tamu <span class="text-red-500">*</span></label>
                <input required class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="text" placeholder="Masukkan nama sesuai KTP">
              </div>
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">NIK tamu <span class="text-red-500">*</span></label>
                <input required class="w-full h-11 px-4 rounded-xl border border-border text-[13px] font-mono focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="text" placeholder="16 digit NIK" pattern="[0-9]{16}" title="Masukkan 16 digit angka NIK">
              </div>
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Asal kota / daerah</label>
                <input class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="text" placeholder="Contoh: Bandung, Jawa Barat">
              </div>
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Hubungan dengan warga</label>
                <select class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all">
                  <option value="" disabled selected>Pilih hubungan...</option>
                  <option value="Keluarga">Keluarga</option>
                  <option value="Teman">Teman</option>
                  <option value="Rekan kerja">Rekan kerja</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>
          </fieldset>

          <fieldset class="mb-8 border-t border-border/80 pt-6">
            <legend class="text-[11px] font-bold text-slate-500 tracking-wider uppercase px-3 bg-surface -ml-3 mb-2">Jadwal Menginap</legend>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-5 gap-x-6 mt-2 mb-5">
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Tanggal mulai menginap <span class="text-red-500">*</span></label>
                <input required class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base text-t2 transition-all" type="date">
              </div>
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Tanggal selesai (perkiraan) <span class="text-red-500">*</span></label>
                <input required class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base text-t2 transition-all" type="date">
              </div>
            </div>
            <div>
              <label class="block text-[13px] font-bold text-t1 mb-2">Keperluan / Tujuan Kedatangan</label>
              <textarea class="w-full h-24 px-4 py-3 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 resize-none bg-base transition-all" placeholder="Contoh: Silaturahmi keluarga selama liburan..."></textarea>
            </div>
          </fieldset>

          <div class="flex gap-4 items-start bg-amber-50 border border-amber-200 rounded-xl p-5 mb-8">
            <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center flex-shrink-0">
              <svg width="20" height="20" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/><line x1="8" y1="6" x2="8" y2="10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8" cy="12" r="1" fill="currentColor"/></svg>
            </div>
            <div>
              <h4 class="text-[13px] font-bold text-amber-900 mb-1">Informasi Laporan</h4>
              <p class="text-[12.5px] text-amber-800 leading-relaxed">Laporan tamu akan otomatis masuk ke antrean persetujuan RT 001. Harap melaporkan kedatangan tamu minimal <strong class="font-bold text-amber-900">1x24 jam (1 hari)</strong> sebelum tamu tiba demi kenyamanan lingkungan.</p>
            </div>
          </div>

          <div class="flex justify-end gap-3 pt-6 border-t border-border">
            <button type="button" class="px-6 py-2.5 rounded-xl border border-border text-[13px] font-bold text-t2 hover:bg-base hover:text-t1 transition-colors" onclick="go('dashboard')">Batal</button>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-[13px] font-bold transition-all shadow-md shadow-emerald-500/20 hover:shadow-lg hover:shadow-emerald-500/30 flex items-center gap-2">
              Lanjut ke Konfirmasi
              <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
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