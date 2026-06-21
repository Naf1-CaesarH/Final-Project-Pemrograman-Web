<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Pengumuman — Portal Desa Digital</title>
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
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('dashboard-admin')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
          <span class="font-medium text-[13px]">Dashboard</span>
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
        <a class="sb-item active !bg-blue-600/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('pengumuman')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-semibold text-[13px]">Pengumuman</span>
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
      <div class="flex items-center gap-2 text-[14px]">
        <a class="text-t2 hover:text-blue-600 font-medium cursor-pointer transition-colors" onclick="go('pengumuman')">Pengumuman</a>
        <span class="text-t3">/</span>
        <span class="text-t1 font-bold">Buat Baru</span>
      </div>
      
      <div class="flex items-center gap-4">
        <button type="button" class="relative w-9 h-9 rounded-full border border-border flex items-center justify-center text-t2 hover:bg-base transition-colors" aria-label="Notifikasi">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 00-5 5v2l-1 2h12l-1-2V7a5 5 0 00-5-5z" stroke="currentColor" stroke-width="1.5"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.5"/></svg>
          <div class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-red-500 border-2 border-white"></div>
        </button>
      </div>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-5xl mx-auto w-full">
      
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="lg:col-span-2 flex flex-col gap-6">
          <section class="bg-surface border border-border rounded-2xl p-6 shadow-sm">
            <h2 class="text-[16px] font-bold text-t1 mb-5">Isi Pengumuman</h2>
            
            <div class="flex flex-col gap-4">
              <div>
                <label class="block text-[13px] font-semibold text-t1 mb-1.5">Judul pengumuman</label>
                <input type="text" class="w-full bg-base border border-border rounded-xl px-4 py-2.5 text-[13px] text-t1 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all" placeholder="Contoh: Jadwal Kerja Bakti Minggu Ini">
              </div>
              
              <div>
                <label class="block text-[13px] font-semibold text-t1 mb-1.5">Kategori</label>
                <select class="w-full bg-base border border-border rounded-xl px-4 py-2.5 text-[13px] text-t1 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all appearance-none cursor-pointer">
                  <option>Umum</option>
                  <option>Kesehatan</option>
                  <option>Kebersihan</option>
                  <option>Keamanan</option>
                  <option>Sosial</option>
                  <option>Keuangan</option>
                </select>
              </div>

              <div>
                <label class="block text-[13px] font-semibold text-t1 mb-1.5">Isi pengumuman</label>
                <textarea class="w-full bg-base border border-border rounded-xl px-4 py-3 text-[13px] text-t1 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all min-h-[160px] resize-y" placeholder="Tulis isi pengumuman di sini. Cantumkan hari, tanggal, waktu, dan lokasi bila ada..."></textarea>
                <p class="text-[11px] text-t3 mt-1.5">Teks ini akan dikirim ke WhatsApp warga secara otomatis.</p>
              </div>
            </div>
          </section>

          <section class="bg-surface border border-border rounded-2xl p-6 shadow-sm">
            <h2 class="text-[16px] font-bold text-t1 mb-5">Target Penerima</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <div class="type-card selected bg-blue-50/50 border-blue-500 shadow-[0_0_0_1px_rgba(59,130,246,1)] rounded-xl p-4 flex gap-3 cursor-pointer">
                <div class="w-5 h-5 rounded-full bg-blue-500 text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5L4 7L8 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                  <div class="text-[13px] font-bold text-blue-900">Semua Warga</div>
                  <div class="text-[11px] text-blue-700/80 mt-0.5">312 warga se-kelurahan</div>
                </div>
              </div>
              
              <div class="type-card bg-surface border-border hover:border-blue-300 rounded-xl p-4 flex gap-3 cursor-pointer transition-colors group">
                <div class="w-5 h-5 rounded-full border border-border group-hover:border-blue-300 flex-shrink-0 mt-0.5 transition-colors"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1 group-hover:text-blue-700 transition-colors">RW 001</div>
                  <div class="text-[11px] text-t3 group-hover:text-blue-600/70 transition-colors mt-0.5">194 warga</div>
                </div>
              </div>

              <div class="type-card bg-surface border-border hover:border-blue-300 rounded-xl p-4 flex gap-3 cursor-pointer transition-colors group">
                <div class="w-5 h-5 rounded-full border border-border group-hover:border-blue-300 flex-shrink-0 mt-0.5 transition-colors"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1 group-hover:text-blue-700 transition-colors">RW 002</div>
                  <div class="text-[11px] text-t3 group-hover:text-blue-600/70 transition-colors mt-0.5">118 warga</div>
                </div>
              </div>

              <div class="type-card bg-surface border-border hover:border-blue-300 rounded-xl p-4 flex gap-3 cursor-pointer transition-colors group">
                <div class="w-5 h-5 rounded-full border border-border group-hover:border-blue-300 flex-shrink-0 mt-0.5 transition-colors"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1 group-hover:text-blue-700 transition-colors">Ketua RT/RW saja</div>
                  <div class="text-[11px] text-t3 group-hover:text-blue-600/70 transition-colors mt-0.5">Koordinasi internal</div>
                </div>
              </div>
              
              <div class="type-card bg-surface border-border hover:border-blue-300 rounded-xl p-4 flex gap-3 cursor-pointer transition-colors group">
                <div class="w-5 h-5 rounded-full border border-border group-hover:border-blue-300 flex-shrink-0 mt-0.5 transition-colors"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1 group-hover:text-blue-700 transition-colors">RT 001</div>
                  <div class="text-[11px] text-t3 group-hover:text-blue-600/70 transition-colors mt-0.5">24 warga</div>
                </div>
              </div>
              
              <div class="type-card bg-surface border-border hover:border-blue-300 rounded-xl p-4 flex gap-3 cursor-pointer transition-colors group">
                <div class="w-5 h-5 rounded-full border border-border group-hover:border-blue-300 flex-shrink-0 mt-0.5 transition-colors"></div>
                <div>
                  <div class="text-[13px] font-bold text-t1 group-hover:text-blue-700 transition-colors">RT 002</div>
                  <div class="text-[11px] text-t3 group-hover:text-blue-600/70 transition-colors mt-0.5">19 warga</div>
                </div>
              </div>
            </div>
          </section>

          <div class="flex items-center gap-3 pt-2">
            <button type="button" class="px-5 py-2.5 rounded-xl border border-border bg-white text-t1 text-[13px] font-bold hover:bg-base transition-colors" onclick="go('pengumuman')">Batal</button>
            <button type="button" class="px-5 py-2.5 rounded-xl border border-border bg-white text-t1 text-[13px] font-bold hover:bg-base transition-colors">Simpan Draft</button>
            <button type="button" class="px-5 py-2.5 rounded-xl bg-blue-600 text-white text-[13px] font-bold hover:bg-blue-700 transition-colors flex items-center gap-2 ml-auto shadow-md shadow-blue-600/20" onclick="go('pengumuman')">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M14 2L7 9M14 2L10 14L7 9M14 2L2 6L7 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Kirim & Publikasikan
            </button>
          </div>
        </div>
        
        <div class="flex flex-col gap-6">
          <section class="bg-surface border border-border rounded-2xl p-6 shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-green-500 text-white flex items-center justify-center flex-shrink-0 shadow-sm shadow-green-500/20">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 2a6 6 0 00-5.1 9.18L2 14l2.9-.85A6 6 0 108 2z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h2 class="text-[14px] font-bold text-t1">Kirim via WhatsApp</h2>
              </div>
              <div class="w-10 h-6 bg-green-500 rounded-full relative cursor-pointer shadow-inner">
                <div class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full shadow-sm"></div>
              </div>
            </div>
            
            <p class="text-[12px] text-t2 leading-relaxed mb-5">Pengumuman akan dikirim otomatis ke nomor WhatsApp warga setelah dipublikasikan secara serentak.</p>
            
            <div class="bg-[url('https://i.ibb.co/3WfK9mP/wa-bg.png')] bg-cover bg-center rounded-xl p-4 relative overflow-hidden border border-border">
              <div class="absolute inset-0 bg-[#E5DDD5]/90"></div>
              <div class="relative z-10">
                <div class="text-[11px] font-bold text-slate-500 mb-2 uppercase tracking-widest">Preview Pesan WA</div>
                <div class="bg-white rounded-tr-xl rounded-b-xl rounded-tl-sm p-3 shadow-sm border border-slate-100 relative">
                  <div class="absolute -left-2 top-0 text-white"><svg width="8" height="12" viewBox="0 0 8 12"><path d="M8 0H0L8 12V0Z" fill="currentColor"/></svg></div>
                  <div class="text-[12.5px] font-bold text-blue-500 mb-1">Kelurahan Sukamaju</div>
                  <div class="text-[12.5px] text-slate-800 leading-relaxed">
                    📢 <strong>Pengumuman Kelurahan</strong><br><br>
                    <span class="text-slate-400 italic">[Judul pengumuman]</span><br><br>
                    <span class="text-slate-400 italic">[Isi pengumuman yang Anda tulis akan muncul di bagian ini secara lengkap]</span><br><br>
                    — Admin Kelurahan Sukamaju
                  </div>
                  <div class="text-[10px] text-slate-400 text-right mt-2 flex items-center justify-end gap-1">
                    Baru saja
                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M4 8L7 11L13 4" stroke="#3b82f6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 8L4 11L5 10M10 4L7 8" stroke="#3b82f6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <section class="bg-surface border border-border rounded-2xl p-6 shadow-sm">
            <h2 class="text-[14px] font-bold text-t1 mb-4">Ringkasan Publikasi</h2>
            
            <div class="flex flex-col gap-3">
              <div class="flex justify-between items-center pb-3 border-b border-border/60">
                <span class="text-[12.5px] text-t2">Target</span>
                <span class="text-[12.5px] font-bold text-t1">Semua Warga</span>
              </div>
              <div class="flex justify-between items-center pb-3 border-b border-border/60">
                <span class="text-[12.5px] text-t2">Penerima</span>
                <span class="text-[12.5px] font-bold text-t1">312 warga</span>
              </div>
              <div class="flex justify-between items-center pb-3 border-b border-border/60">
                <span class="text-[12.5px] text-t2">Status WA</span>
                <span class="text-[12.5px] font-bold text-green-600 flex items-center gap-1">
                  <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M4 8L7 11L13 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Aktif
                </span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-[12.5px] text-t2">Simpan di arsip</span>
                <span class="text-[12.5px] font-bold text-green-600 flex items-center gap-1">
                  <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M4 8L7 11L13 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Ya
                </span>
              </div>
            </div>
          </section>
        </div>

      </div>

    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Sistem Administrasi Pusat.
    </footer>
  </div>

  <script>function go(page) { window.location.href = page + '.php'; }</script>
</body>
</html>