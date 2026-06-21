<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Saya — Portal Desa Digital</title>
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
        
        <a class="sb-item active !bg-emerald-600/10 !text-emerald-400 !border-r-4 !border-emerald-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('profil')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <span class="font-semibold text-[13px]">Profil Saya</span>
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
      <strong class="text-t1 font-bold">Profil Saya</strong>
    </header>

    <main class="p-6 flex-1 max-w-6xl mx-auto w-full">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-6 items-start">
        
        <div class="flex flex-col gap-6">
          <section class="bg-surface border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 mb-8 text-center sm:text-left">
              <div class="relative group">
                <div class="w-20 h-20 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl font-bold flex-shrink-0 shadow-sm border-4 border-surface ring-1 ring-border">BS</div>
                <button type="button" class="absolute inset-0 bg-black/50 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-[11px] font-bold cursor-pointer backdrop-blur-sm">Ubah<br>Foto</button>
              </div>
              <div class="mt-2">
                <h1 class="text-[20px] font-bold text-t1 mb-1">Budi Santoso</h1>
                <p class="text-[13px] text-t2 font-medium">Warga · RT 001 / RW 001 · Kelurahan Sukamaju</p>
                <div class="mt-3 inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-full text-[11px] font-bold border border-emerald-200">
                  <div class="w-1.5 h-1.5 rounded-full bg-emerald-500"></div> Akun Aktif Terverifikasi
                </div>
              </div>
            </div>

            <form onsubmit="event.preventDefault(); alert('Profil berhasil diperbarui!');">
              <h2 class="text-[14px] font-bold text-t1 mb-5 flex items-center gap-2 border-b border-border pb-3">
                <div class="w-1.5 h-4 bg-emerald-500 rounded-full"></div>
                Data Pribadi yang Dapat Diubah
              </h2>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-y-5 gap-x-6 mb-5">
                <div>
                  <label class="block text-[13px] font-bold text-t1 mb-2">Nama lengkap</label>
                  <input class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="text" value="Budi Santoso" required>
                </div>
                <div>
                  <label class="block text-[13px] font-bold text-t1 mb-2">Alamat Email</label>
                  <input class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="email" value="budi@portaldesa.id">
                </div>
              </div>

              <div class="mb-8">
                <label class="block text-[13px] font-bold text-t1 mb-2">Nomor WhatsApp <span class="text-emerald-600 font-medium text-[11px] bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-100 ml-1">(Digunakan untuk terima notifikasi & pengumuman)</span></label>
                <input class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="tel" value="081233333333" required>
              </div>

              <h2 class="text-[14px] font-bold text-t1 mb-5 flex items-center gap-2 border-b border-border pb-3">
                <div class="w-1.5 h-4 bg-slate-300 rounded-full"></div>
                Data Master <span class="text-[12px] font-normal text-t3">(Tidak Dapat Diubah Mandiri)</span>
              </h2>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-y-5 gap-x-6 mb-4">
                <div>
                  <label class="block text-[12px] font-bold text-t2 mb-2">NIK (Sesuai KTP)</label>
                  <input class="w-full h-11 px-4 rounded-xl border border-border/80 text-[13px] bg-slate-50 text-slate-500 font-mono font-medium cursor-not-allowed" value="3201010101010004" readonly>
                </div>
                <div>
                  <label class="block text-[12px] font-bold text-t2 mb-2">Area Domisili Terdaftar</label>
                  <input class="w-full h-11 px-4 rounded-xl border border-border/80 text-[13px] bg-slate-50 text-slate-500 font-medium cursor-not-allowed" value="RT 001 / RW 001" readonly>
                </div>
              </div>

              <p class="text-[12px] text-amber-800 bg-amber-50/80 border border-amber-200 rounded-xl p-4 mb-8 mt-4 leading-relaxed flex gap-3 items-start">
                <svg width="18" height="18" viewBox="0 0 16 16" fill="none" class="flex-shrink-0 mt-0.5"><circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/><line x1="8" y1="5" x2="8" y2="10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8" cy="12" r="1" fill="currentColor"/></svg>
                <span><strong class="font-bold">Perhatian:</strong> Untuk mengubah NIK, pindah area RT/RW, atau pembaruan Kartu Keluarga, harap menghubungi pengurus RT atau admin kelurahan dengan membawa berkas asli.</span>
              </p>

              <div class="flex justify-end gap-3 pt-6 border-t border-border">
                <button type="button" class="px-6 py-2.5 rounded-xl border border-border text-[13px] font-bold text-t2 hover:bg-base hover:text-t1 transition-colors" onclick="go('dashboard')">Batal</button>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-[13px] font-bold transition-all shadow-md shadow-emerald-500/20 hover:shadow-lg hover:shadow-emerald-500/30">Simpan Perubahan</button>
              </div>
            </form>
          </section>

          <section class="bg-surface border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
            <h2 class="text-[14px] font-bold text-t1 mb-5 flex items-center gap-2 border-b border-border pb-3">
              <div class="w-1.5 h-4 bg-emerald-500 rounded-full"></div>
              Ubah Kata Sandi Akses
            </h2>

            <form onsubmit="event.preventDefault(); alert('Kata sandi berhasil diperbarui!');" class="grid grid-cols-1 md:grid-cols-3 gap-y-5 gap-x-4 mb-2">
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Kata Sandi Saat Ini</label>
                <input class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="password" placeholder="••••••••" required>
              </div>
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Kata Sandi Baru</label>
                <input class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="password" placeholder="Minimal 8 karakter" required minlength="8">
              </div>
              <div>
                <label class="block text-[13px] font-bold text-t1 mb-2">Ulangi Sandi Baru</label>
                <input class="w-full h-11 px-4 rounded-xl border border-border text-[13px] focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 bg-base transition-all" type="password" placeholder="Ulangi untuk konfirmasi" required>
              </div>

              <div class="md:col-span-3 flex justify-end mt-4">
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 hover:bg-emerald-100 text-[13px] font-bold transition-colors">
                  Perbarui Kata Sandi
                </button>
              </div>
            </form>
          </section>

        </div>

        <div class="flex flex-col gap-6">
          <aside class="bg-surface border border-border rounded-2xl p-6 shadow-sm">
            <h2 class="text-[14px] font-bold text-t1 mb-5">Ringkasan Aktivitas</h2>

            <div class="flex flex-col gap-1.5">
              <div class="flex justify-between items-center py-3 border-b border-border/60">
                <span class="text-[13px] text-t2 font-medium">Total surat diajukan</span>
                <span class="text-[14px] font-bold text-t1 bg-base px-2 py-0.5 rounded-lg border border-border">3</span>
              </div>
              <div class="flex justify-between items-center py-3 border-b border-border/60">
                <span class="text-[13px] text-t2 font-medium">Surat disetujui</span>
                <span class="text-[13px] font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-lg border border-emerald-200">1</span>
              </div>
              <div class="flex justify-between items-center py-3 border-b border-border/60">
                <span class="text-[13px] text-t2 font-medium">Laporan tamu</span>
                <span class="text-[14px] font-bold text-t1 bg-base px-2 py-0.5 rounded-lg border border-border">2</span>
              </div>
              <div class="flex justify-between items-center py-3 border-b border-border/60">
                <span class="text-[13px] text-t2 font-medium">Laporan lingkungan</span>
                <span class="text-[14px] font-bold text-t1 bg-base px-2 py-0.5 rounded-lg border border-border">1</span>
              </div>
              <div class="flex justify-between items-center py-3 mt-1">
                <span class="text-[12px] text-t3 font-bold uppercase tracking-wider">Terdaftar sejak</span>
                <span class="text-[12px] font-mono font-bold text-slate-500 bg-slate-100 px-2.5 py-1 rounded-lg">Jan 2025</span>
              </div>
            </div>

            <div class="mt-8 pt-6 border-t border-border">
              <button type="button" class="w-full py-3 rounded-xl border-2 border-red-100 text-red-600 bg-red-50/50 hover:bg-red-50 hover:border-red-200 text-[13.5px] font-bold transition-all flex items-center justify-center gap-2" onclick="confirmLogout()">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M6 14H3a2 2 0 01-2-2V4a2 2 0 012-2h3M11 11l3-3-3-3M14 8H4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Keluar dari Aplikasi
              </button>
            </div>
          </aside>
        </div>

      </div>
    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Hak Cipta Dilindungi.
    </footer>

  </div>

  <script>
    function go(page) { window.location.href = page + '.php'; }
    
    function confirmLogout() {
      if(confirm("Apakah Anda yakin ingin keluar dari akun Portal Desa Digital?")) {
        window.location.href = '../login.php';
      }
    }
  </script>
</body>
</html>