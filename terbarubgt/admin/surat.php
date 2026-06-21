<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permohonan Surat — Pusat Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../assets/tailwind-config.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=DM+Mono:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="bg-base font-sans text-t1 flex min-h-screen">

  <aside class="sidebar-fixed w-64 bg-slate-900 text-slate-300 flex flex-col justify-between sticky top-0 h-screen shadow-xl z-20">
    <div>
      <div class="flex items-center gap-3 px-5 py-5 border-b border-slate-800">
        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-blue-600/30">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="2" fill="white"/></svg>
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
        <a class="sb-item active !bg-blue-600/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors" onclick="go('surat')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5"/><line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5"/></svg><span class="font-semibold text-[13px]">Permohonan Surat</span></div>
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
        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">LAPORAN &mp; SISTEM</div>
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

  <div class="flex-1 flex flex-col min-h-screen">
    <header class="h-[60px] bg-surface border-b border-border flex items-center justify-between px-8 sticky top-0 z-10">
      <h1 class="text-[16px] font-bold text-t1">Permohonan Surat Warga</h1>
      <button type="button" class="flex items-center gap-2 px-4 py-2 rounded-lg border border-border bg-white hover:bg-base text-t2 hover:text-t1 text-[12px] font-bold transition-colors shadow-sm">
        <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M14 3H2m12 5H6m8 5h-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        Export Excel
      </button>
    </header>

    <main class="p-8 flex flex-col gap-6 flex-1 max-w-7xl mx-auto w-full">
      <section class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-surface border border-border rounded-xl p-4 shadow-sm flex items-center gap-4">
          <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center"><svg width="18" height="18" viewBox="0 0 16 16" fill="none"><path d="M13 11.5c0 .83-.67 1.5-1.5 1.5h-7A1.5 1.5 0 013 11.5v-7C3 3.67 3.67 3 4.5 3H10l3 3v5.5z" stroke="currentColor" stroke-width="1.5"/></svg></div>
          <div><div class="text-[12px] text-t3">Menunggu Review</div><div class="text-[20px] font-bold text-t1">8</div></div>
        </div>
        <div class="bg-surface border border-border rounded-xl p-4 shadow-sm flex items-center gap-4">
          <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center"><svg width="18" height="18" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/></svg></div>
          <div><div class="text-[12px] text-t3">Sedang Diproses</div><div class="text-[20px] font-bold text-t1">3</div></div>
        </div>
        <div class="bg-surface border border-border rounded-xl p-4 shadow-sm flex items-center gap-4">
          <div class="w-10 h-10 rounded-lg bg-green-50 text-green-600 flex items-center justify-center"><svg width="18" height="18" viewBox="0 0 16 16" fill="none"><path d="M4 8l2.5 2.5L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></div>
          <div><div class="text-[12px] text-t3">Disetujui</div><div class="text-[20px] font-bold text-t1">34</div></div>
        </div>
        <div class="bg-surface border border-border rounded-xl p-4 shadow-sm flex items-center gap-4">
          <div class="w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center"><svg width="18" height="18" viewBox="0 0 16 16" fill="none"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></div>
          <div><div class="text-[12px] text-t3">Ditolak</div><div class="text-[20px] font-bold text-t1">5</div></div>
        </div>
      </section>

      <section class="flex flex-col sm:flex-row items-center gap-4 bg-surface border border-border rounded-xl p-4 shadow-sm">
        <div class="relative w-full sm:w-96">
          <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-t3" width="14" height="14" viewBox="0 0 14 14" fill="none"><circle cx="6" cy="6" r="4.5" stroke="currentColor" stroke-width="1.5"/><path d="M9.5 9.5L12 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <input id="searchInput" onkeyup="filterTable()" class="w-full h-10 pl-9 pr-3 rounded-lg border border-border text-[13px] bg-base focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 shadow-sm" type="text" placeholder="Cari nama, NIK, atau jenis surat...">
        </div>
        <div class="flex gap-2 w-full sm:w-auto">
          <select id="statusFilter" onchange="filterTable()" class="h-10 px-3 rounded-lg border border-border text-[13px] bg-base focus:outline-none focus:border-blue-500">
            <option value="">Semua Status</option>
            <option value="Menunggu">Menunggu</option>
            <option value="Disetujui">Disetujui</option>
            <option value="Ditolak">Ditolak</option>
          </select>
          <select id="rtFilter" onchange="filterTable()" class="h-10 px-3 rounded-lg border border-border text-[13px] bg-base focus:outline-none focus:border-blue-500">
            <option value="">Semua RT</option>
            <option value="RT 001">RT 001</option>
            <option value="RT 002">RT 002</option>
          </select>
        </div>
      </section>

      <section class="bg-surface border border-border rounded-2xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse min-w-[1000px]">
            <thead>
              <tr class="bg-base border-b border-border/70 text-[11px] text-t3 uppercase tracking-wider">
                <th class="py-4 px-6 font-bold">Pemohon</th>
                <th class="py-4 px-6 font-bold">Jenis Surat</th>
                <th class="py-4 px-6 font-bold">Tujuan</th>
                <th class="py-4 px-6 font-bold">Tanggal</th>
                <th class="py-4 px-6 font-bold">RT/RW</th>
                <th class="py-4 px-6 font-bold">Status</th>
                <th class="py-4 px-6 font-bold text-right">Aksi</th>
              </tr>
            </thead>
            <tbody id="tableBody" class="text-[13px]">
              <tr class="border-b border-border/50 hover:bg-blue-50/30 transition-colors">
                <td class="py-4 px-6">
                  <div class="font-bold text-t1 text-[14px]">Budi Santoso</div>
                  <div class="font-mono text-t3 text-[11px]">320101...0004</div>
                </td>
                <td class="py-4 px-6 font-medium text-t1">Surat Domisili</td>
                <td class="py-4 px-6 text-t2 truncate max-w-[200px]">Keperluan beasiswa kampus</td>
                <td class="py-4 px-6 font-mono text-t2">05 Mei 2025</td>
                <td class="py-4 px-6 text-t2">RT 001/RW 001</td>
                <td class="py-4 px-6"><span class="bg-amber-100 text-amber-700 border border-amber-200 px-2.5 py-1 rounded-md text-[11px] font-bold">Menunggu</span></td>
                <td class="py-4 px-6 text-right">
                  <button type="button" class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded-md font-bold text-[11px] transition-colors shadow-sm" onclick="go('detail-surat')">Proses</button>
                </td>
              </tr>
              <tr class="border-b border-border/50 hover:bg-blue-50/30 transition-colors">
                <td class="py-4 px-6">
                  <div class="font-bold text-t1 text-[14px]">Siti Rahayu</div>
                  <div class="font-mono text-t3 text-[11px]">320101...0005</div>
                </td>
                <td class="py-4 px-6 font-medium text-t1">Pengantar KTP</td>
                <td class="py-4 px-6 text-t2 truncate max-w-[200px]">Perpanjangan KTP</td>
                <td class="py-4 px-6 font-mono text-t2">05 Mei 2025</td>
                <td class="py-4 px-6 text-t2">RT 001/RW 001</td>
                <td class="py-4 px-6"><span class="bg-amber-100 text-amber-700 border border-amber-200 px-2.5 py-1 rounded-md text-[11px] font-bold">Menunggu</span></td>
                <td class="py-4 px-6 text-right">
                  <button type="button" class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded-md font-bold text-[11px] transition-colors shadow-sm" onclick="go('detail-surat')">Proses</button>
                </td>
              </tr>
              <tr class="border-b border-border/50 hover:bg-blue-50/30 transition-colors">
                <td class="py-4 px-6">
                  <div class="font-bold text-t1 text-[14px]">Andi Pratama</div>
                  <div class="font-mono text-t3 text-[11px]">320101...0006</div>
                </td>
                <td class="py-4 px-6 font-medium text-t1">Keterangan Usaha</td>
                <td class="py-4 px-6 text-t2 truncate max-w-[200px]">Pendaftaran UMKM Dinas</td>
                <td class="py-4 px-6 font-mono text-t2">04 Mei 2025</td>
                <td class="py-4 px-6 text-t2">RT 002/RW 001</td>
                <td class="py-4 px-6"><span class="bg-blue-100 text-blue-700 border border-blue-200 px-2.5 py-1 rounded-md text-[11px] font-bold">Diproses</span></td>
                <td class="py-4 px-6 text-right">
                  <button type="button" class="px-3 py-1.5 bg-white border border-border text-t1 hover:bg-base rounded-md font-bold text-[11px] transition-colors shadow-sm" onclick="go('detail-surat')">Lihat</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Sistem Administrasi Pusat.
    </footer>
  </div>

  <script>
    function go(page) { window.location.href = page + '.php'; }
    
    function filterTable() {
      const search = document.getElementById('searchInput').value.toLowerCase();
      const status = document.getElementById('statusFilter').value.toLowerCase();
      const rt = document.getElementById('rtFilter').value.toLowerCase();
      
      const rows = document.querySelectorAll('#tableBody tr');
      
      rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        const rtCell = row.children[4] ? row.children[4].innerText.toLowerCase() : "";
        const statusCell = row.children[5] ? row.children[5].innerText.toLowerCase() : "";
        
        const matchSearch = text.includes(search);
        const matchStatus = status === "" || status === "semua status" || statusCell.includes(status);
        const matchRt = rt === "" || rt === "semua rt" || rtCell.includes(rt);
        
        if (matchSearch && matchStatus && matchRt) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    }
  </script>
</body>
</html>