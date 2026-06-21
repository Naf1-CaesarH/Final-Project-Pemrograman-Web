<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Tamu — Portal Desa Digital</title>
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
        <a class="sb-item active !bg-blue-600/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('tamu')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg><span class="font-semibold text-[13px]">Laporan Tamu</span></div>
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

        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">LAPORAN &amp; SISTEM</div>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('laporan')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><polyline points="2,12 6,7 9,10 12,5 14,7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span class="font-medium text-[13px]">Statistik &amp; Laporan</span>
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

  <div class="flex-1 flex flex-col min-h-screen relative overflow-hidden">
    <header class="h-[60px] bg-surface border-b border-border flex items-center justify-between px-6 sticky top-0 z-10">
      <div class="flex items-center gap-2 text-[14px]">
        <a class="text-t2 hover:text-blue-600 font-medium cursor-pointer transition-colors" onclick="go('dashboard-admin')">Dashboard</a>
        <span class="text-t3">/</span>
        <span class="text-t1 font-bold">Laporan Tamu</span>
      </div>
      <div class="flex items-center gap-4">
        <button type="button" class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-border hover:bg-base text-t1 text-[12px] font-bold transition-colors">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 2v10M4 8l4 4 4-4M3 14h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Export
        </button>
      </div>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-7xl mx-auto w-full">
      <section class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-surface border border-amber-300 bg-amber-50/30 rounded-2xl p-4 shadow-sm flex flex-col justify-between relative overflow-hidden">
          <div class="absolute left-0 top-0 w-1 h-full bg-amber-400"></div>
          <div class="text-[12px] font-semibold text-amber-700 uppercase tracking-wider mb-2">Tamu Aktif Menginap</div>
          <div class="text-[26px] font-bold text-amber-600">4</div>
          <div class="text-[11.5px] text-amber-700 font-medium mt-1">Masa berlaku aktif</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Total Laporan Bulan Ini</div>
          <div class="text-[26px] font-bold text-t1">21</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">Lapor tamu diterima</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Sudah Berakhir</div>
          <div class="text-[26px] font-bold text-t3">17</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">Masa menginap selesai</div>
        </div>
      </section>

      <div class="flex items-center justify-between gap-4 flex-wrap">
        <div class="relative w-full md:w-80">
          <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 text-t3" width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.5"/><path d="M10.5 10.5L14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <input type="text" id="searchInput" onkeyup="filterTamu()" class="w-full bg-surface border border-border rounded-xl pl-10 pr-4 py-2.5 text-[13px] text-t1 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all" placeholder="Cari nama tamu, penjamin...">
        </div>
        <div class="flex flex-wrap bg-surface border border-border rounded-lg p-1">
          <button type="button" onclick="setFilterTamu('semua', this)" class="filter-btn px-4 py-1.5 text-[12px] font-bold bg-base text-t1 rounded-md shadow-sm">Semua</button>
          <button type="button" onclick="setFilterTamu('aktif', this)" class="filter-btn px-4 py-1.5 text-[12px] font-medium text-t2 hover:text-t1 rounded-md transition-colors">Aktif</button>
          <button type="button" onclick="setFilterTamu('selesai', this)" class="filter-btn px-4 py-1.5 text-[12px] font-medium text-t2 hover:text-t1 rounded-md transition-colors">Selesai</button>
        </div>
      </div>

      <div class="bg-surface border border-border rounded-2xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-left text-[13px]">
            <thead class="bg-base border-b border-border text-t3 text-[10px] font-bold uppercase tracking-wider">
              <tr>
                <th class="px-5 py-3">Tamu</th>
                <th class="px-5 py-3">Penjamin (Warga)</th>
                <th class="px-5 py-3">Hubungan</th>
                <th class="px-5 py-3">Mulai Menginap</th>
                <th class="px-5 py-3">Sampai</th>
                <th class="px-5 py-3">RT</th>
                <th class="px-5 py-3">Status</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-border/60">
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3">
                  <div class="font-bold text-t1">Ahmad Fauzi</div>
                  <div class="text-[11px] text-t3 font-mono">Dari Bandung</div>
                </td>
                <td class="px-5 py-3 font-medium text-t1">Budi Santoso</td>
                <td class="px-5 py-3 text-t2">Keluarga (paman)</td>
                <td class="px-5 py-3 font-mono text-t2">01 Mei 2025</td>
                <td class="px-5 py-3 font-mono text-t2">10 Mei 2025</td>
                <td class="px-5 py-3 text-t2">RT 001</td>
                <td class="px-5 py-3">
                  <span class="bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Aktif</span>
                </td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3">
                  <div class="font-bold text-t1">Rina Kusuma</div>
                  <div class="text-[11px] text-t3 font-mono">Dari Surabaya</div>
                </td>
                <td class="px-5 py-3 font-medium text-t1">Siti Rahayu</td>
                <td class="px-5 py-3 text-t2">Teman kuliah</td>
                <td class="px-5 py-3 font-mono text-t2">03 Mei 2025</td>
                <td class="px-5 py-3 font-mono text-t2">07 Mei 2025</td>
                <td class="px-5 py-3 text-t2">RT 001</td>
                <td class="px-5 py-3">
                  <span class="bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Aktif</span>
                </td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3">
                  <div class="font-bold text-t1">Dicky Pranoto</div>
                  <div class="text-[11px] text-t3 font-mono">Dari Jakarta</div>
                </td>
                <td class="px-5 py-3 font-medium text-t1">Andi Pratama</td>
                <td class="px-5 py-3 text-t2">Saudara kandung</td>
                <td class="px-5 py-3 font-mono text-t2">28 Apr 2025</td>
                <td class="px-5 py-3 font-mono text-t2">06 Mei 2025</td>
                <td class="px-5 py-3 text-t2">RT 002</td>
                <td class="px-5 py-3">
                  <span class="bg-red-100 text-red-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Lewat batas</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Sistem Administrasi Pusat.
    </footer>
  </div>

  <script>
    function go(page) { window.location.href = page + '.php'; }
    
    let currentFilter = 'semua';
    function setFilterTamu(filter, btn) {
      currentFilter = filter;
      document.querySelectorAll('.filter-btn').forEach(b => {
        b.className = 'filter-btn px-4 py-1.5 text-[12px] font-medium text-t2 hover:text-t1 rounded-md transition-colors';
      });
      btn.className = 'filter-btn px-4 py-1.5 text-[12px] font-bold bg-base text-t1 rounded-md shadow-sm';
      filterTamu();
    }
    function filterTamu() {
      const search = document.getElementById('searchInput').value.toLowerCase();
      const rows = document.querySelectorAll('tbody tr');
      rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        const statusCell = row.children[6] ? row.children[6].innerText.toLowerCase() : "";
        const matchSearch = text.includes(search);
        let matchStatus = true;
        if (currentFilter === 'aktif') matchStatus = statusCell.includes('aktif');
        if (currentFilter === 'selesai') matchStatus = statusCell.includes('lewat') || statusCell.includes('selesai');
        
        row.style.display = (matchSearch && matchStatus) ? '' : 'none';
      });
    }
  </script>
</body>
</html>
