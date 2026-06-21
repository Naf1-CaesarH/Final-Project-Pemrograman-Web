<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permohonan Surat — Portal Desa Digital</title>
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
    
    <header class="h-[60px] bg-surface border-b border-border flex items-center justify-between px-6 sticky top-0 z-10">
      <div class="flex items-center gap-2 text-[14px]">
        <a class="text-t2 hover:text-emerald-600 font-medium cursor-pointer transition-colors" onclick="go('dashboard')">Beranda</a>
        <span class="text-t3">/</span>
        <span class="text-t1 font-bold">Permohonan Surat</span>
      </div>
      
      <div class="flex items-center gap-4">
        <button type="button" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white text-[13px] font-bold transition-colors shadow-sm" onclick="go('form-surat')">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/><line x1="8" y1="5" x2="8" y2="11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="5" y1="8" x2="11" y2="8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          Ajukan Surat
        </button>
      </div>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-5xl mx-auto w-full">
      
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="relative w-full sm:w-80">
          <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 text-t3" width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.5"/><path d="M10.5 10.5L14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <input type="text" class="w-full bg-surface border border-border rounded-xl pl-10 pr-4 py-2.5 text-[13px] text-t1 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="Cari jenis surat...">
        </div>
        
        <div class="flex flex-wrap bg-surface border border-border rounded-lg p-1">
          <button type="button" class="px-4 py-1.5 text-[12px] font-bold bg-base text-t1 rounded-md shadow-sm">Semua</button>
          <button type="button" class="px-4 py-1.5 text-[12px] font-medium text-t2 hover:text-t1 rounded-md transition-colors">Pending</button>
          <button type="button" class="px-4 py-1.5 text-[12px] font-medium text-t2 hover:text-t1 rounded-md transition-colors">Disetujui</button>
          <button type="button" class="px-4 py-1.5 text-[12px] font-medium text-t2 hover:text-t1 rounded-md transition-colors">Ditolak</button>
        </div>
      </div>

      <div class="bg-surface border border-border rounded-2xl shadow-sm overflow-hidden flex flex-col">
        <div class="overflow-x-auto">
          <table class="w-full text-left text-[13px]">
            <thead class="bg-base border-b border-border text-t3 text-[10px] font-bold uppercase tracking-wider">
              <tr>
                <th class="px-5 py-4">Jenis Surat</th>
                <th class="px-5 py-4">Keperluan</th>
                <th class="px-5 py-4">Tgl Pengajuan</th>
                <th class="px-5 py-4">Status</th>
                <th class="px-5 py-4">Catatan RT</th>
                <th class="px-5 py-4 text-right">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-border/60">
              <tr class="hover:bg-base/50 transition-colors cursor-pointer group" onclick="go('detail-surat')">
                <td class="px-5 py-4 font-bold text-t1">Surat Domisili</td>
                <td class="px-5 py-4 text-t2 max-w-[200px] truncate" title="Keperluan beasiswa kampus">Keperluan beasiswa kampus</td>
                <td class="px-5 py-4 font-mono text-t2">10 Apr 2025</td>
                <td class="px-5 py-4">
                  <span class="bg-emerald-100 text-emerald-800 px-2.5 py-1 rounded-md text-[11px] font-bold">Disetujui</span>
                </td>
                <td class="px-5 py-4 text-t2">Dokumen lengkap ✓</td>
                <td class="px-5 py-4 text-right">
                  <span class="text-emerald-600 font-bold text-[12px] opacity-0 group-hover:opacity-100 transition-opacity">Detail →</span>
                </td>
              </tr>
              
              <tr class="hover:bg-base/50 transition-colors cursor-pointer group" onclick="go('detail-surat')">
                <td class="px-5 py-4 font-bold text-t1">Pengantar KTP</td>
                <td class="px-5 py-4 text-t2 max-w-[200px] truncate" title="Perpanjangan KTP habis masa berlaku">Perpanjangan KTP habis masa berlaku</td>
                <td class="px-5 py-4 font-mono text-t2">28 Apr 2025</td>
                <td class="px-5 py-4">
                  <span class="bg-amber-100 text-amber-800 px-2.5 py-1 rounded-md text-[11px] font-bold">Menunggu</span>
                </td>
                <td class="px-5 py-4 text-t3">—</td>
                <td class="px-5 py-4 text-right">
                  <span class="text-emerald-600 font-bold text-[12px] opacity-0 group-hover:opacity-100 transition-opacity">Detail →</span>
                </td>
              </tr>
              
              <tr class="hover:bg-base/50 transition-colors cursor-pointer group" onclick="go('detail-surat')">
                <td class="px-5 py-4 font-bold text-t1">Keterangan Usaha</td>
                <td class="px-5 py-4 text-t2 max-w-[200px] truncate" title="Pendaftaran UMKM">Pendaftaran UMKM</td>
                <td class="px-5 py-4 font-mono text-t2">15 Apr 2025</td>
                <td class="px-5 py-4">
                  <span class="bg-red-100 text-red-800 px-2.5 py-1 rounded-md text-[11px] font-bold">Ditolak</span>
                </td>
                <td class="px-5 py-4 text-red-600 font-medium">Foto KTP tidak jelas, lengkapi ulang</td>
                <td class="px-5 py-4 text-right">
                  <span class="text-emerald-600 font-bold text-[12px] opacity-0 group-hover:opacity-100 transition-opacity">Detail →</span>
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