<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistik & Laporan — Portal Desa Digital</title>
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
        <a class="sb-item active !bg-blue-600/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('laporan')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><polyline points="2,12 6,7 9,10 12,5 14,7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span class="font-semibold text-[13px]">Statistik & Laporan</span>
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
        <span class="text-t1 font-bold">Statistik & Laporan</span>
      </div>
      
      <div class="flex items-center gap-4">
        <select class="h-[34px] px-3 rounded-lg border border-border text-[13px] bg-surface text-t1 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 font-medium cursor-pointer">
          <option>Januari–Mei 2025</option>
          <option>2024</option>
        </select>
        <button type="button" class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-border hover:bg-base text-t1 text-[12px] font-bold transition-colors">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 2v10M4 8l4 4 4-4M3 14h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Export PDF
        </button>
        <button type="button" class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-border hover:bg-base text-t1 text-[12px] font-bold transition-colors">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 2v10M4 8l4 4 4-4M3 14h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Export Excel
        </button>
      </div>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-7xl mx-auto w-full">
      
      <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Total Surat (YTD)</div>
          <div class="text-[26px] font-bold text-t1">247</div>
          <div class="text-[11.5px] text-green-600 font-bold mt-1">↑ +18% vs tahun lalu</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Rata-rata/bulan</div>
          <div class="text-[26px] font-bold text-t1">49</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">surat per bulan</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Tingkat Persetujuan</div>
          <div class="text-[26px] font-bold text-green-600">91%</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">Dari total permohonan</div>
        </div>
        <div class="bg-surface border border-border rounded-2xl p-4 shadow-sm flex flex-col justify-between">
          <div class="text-[12px] font-semibold text-t3 uppercase tracking-wider mb-2">Laporan Lingkungan</div>
          <div class="text-[26px] font-bold text-t1">38</div>
          <div class="text-[11.5px] text-t3 font-medium mt-1">25 selesai, 13 proses</div>
        </div>
      </section>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-surface border border-border rounded-2xl shadow-sm flex flex-col">
          <div class="p-5 border-b border-border">
            <h2 class="text-[15px] font-bold text-t1">Permohonan Surat per Bulan</h2>
          </div>
          <div class="p-5 flex-1 flex items-center justify-center">
            <svg viewBox="0 0 400 160" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-full">
              <line x1="40" y1="10" x2="40" y2="130" stroke="#e2e8f0" stroke-width="1" />
              <line x1="40" y1="130" x2="395" y2="130" stroke="#e2e8f0" stroke-width="1" />
              <text x="34" y="15" text-anchor="end" font-size="10" fill="#94a3b8">60</text>
              <text x="34" y="55" text-anchor="end" font-size="10" fill="#94a3b8">40</text>
              <text x="34" y="95" text-anchor="end" font-size="10" fill="#94a3b8">20</text>
              <text x="34" y="130" text-anchor="end" font-size="10" fill="#94a3b8">0</text>
              <line x1="40" y1="12" x2="395" y2="12" stroke="#f1f5f9" stroke-width="1" stroke-dasharray="4,4" />
              <line x1="40" y1="52" x2="395" y2="52" stroke="#f1f5f9" stroke-width="1" stroke-dasharray="4,4" />
              <line x1="40" y1="92" x2="395" y2="92" stroke="#f1f5f9" stroke-width="1" stroke-dasharray="4,4" />
              <rect x="60" y="82" width="36" height="48" rx="3" fill="#3b82f6" opacity=".8" />
              <rect x="128" y="62" width="36" height="68" rx="3" fill="#3b82f6" opacity=".8" />
              <rect x="196" y="55" width="36" height="75" rx="3" fill="#3b82f6" opacity=".8" />
              <rect x="264" y="67" width="36" height="63" rx="3" fill="#3b82f6" opacity=".8" />
              <rect x="332" y="50" width="36" height="80" rx="3" fill="#2563eb" />
              <text x="78" y="145" text-anchor="middle" font-size="10" fill="#64748b">Jan</text>
              <text x="146" y="145" text-anchor="middle" font-size="10" fill="#64748b">Feb</text>
              <text x="214" y="145" text-anchor="middle" font-size="10" fill="#64748b">Mar</text>
              <text x="282" y="145" text-anchor="middle" font-size="10" fill="#64748b">Apr</text>
              <text x="350" y="145" text-anchor="middle" font-size="10" fill="#0f172a" font-weight="bold">Mei</text>
              <text x="78" y="78" text-anchor="middle" font-size="10" fill="#1e40af" font-weight="bold">36</text>
              <text x="146" y="58" text-anchor="middle" font-size="10" fill="#1e40af" font-weight="bold">42</text>
              <text x="214" y="51" text-anchor="middle" font-size="10" fill="#1e40af" font-weight="bold">45</text>
              <text x="282" y="63" text-anchor="middle" font-size="10" fill="#1e40af" font-weight="bold">39</text>
              <text x="350" y="46" text-anchor="middle" font-size="10" fill="#1e40af" font-weight="bold">47</text>
            </svg>
          </div>
        </div>

        <div class="bg-surface border border-border rounded-2xl shadow-sm flex flex-col">
          <div class="p-5 border-b border-border">
            <h2 class="text-[15px] font-bold text-t1">Permohonan per RT (Bulan Ini)</h2>
          </div>
          <div class="p-5 flex flex-col gap-4">
            <div>
              <div class="flex justify-between text-[12px] mb-1.5"><span class="text-t2">RT 001 / RW 001</span><span class="font-bold text-t1 font-mono">15 surat</span></div>
              <div class="w-full bg-base rounded-full h-2 overflow-hidden border border-border/50"><div class="bg-blue-500 h-full rounded-full" style="width: 75%"></div></div>
            </div>
            <div>
              <div class="flex justify-between text-[12px] mb-1.5"><span class="text-t2">RT 002 / RW 001</span><span class="font-bold text-t1 font-mono">12 surat</span></div>
              <div class="w-full bg-base rounded-full h-2 overflow-hidden border border-border/50"><div class="bg-blue-500 h-full rounded-full opacity-90" style="width: 60%"></div></div>
            </div>
            <div>
              <div class="flex justify-between text-[12px] mb-1.5"><span class="text-t2">RT 003 / RW 001</span><span class="font-bold text-t1 font-mono">10 surat</span></div>
              <div class="w-full bg-base rounded-full h-2 overflow-hidden border border-border/50"><div class="bg-blue-500 h-full rounded-full opacity-80" style="width: 50%"></div></div>
            </div>
            <div>
              <div class="flex justify-between text-[12px] mb-1.5"><span class="text-t2">RT 001 / RW 002</span><span class="font-bold text-t1 font-mono">6 surat</span></div>
              <div class="w-full bg-base rounded-full h-2 overflow-hidden border border-border/50"><div class="bg-amber-500 h-full rounded-full" style="width: 30%"></div></div>
            </div>
            <div>
              <div class="flex justify-between text-[12px] mb-1.5"><span class="text-t2">RT 002 / RW 002</span><span class="font-bold text-t1 font-mono">4 surat</span></div>
              <div class="w-full bg-base rounded-full h-2 overflow-hidden border border-border/50"><div class="bg-amber-500 h-full rounded-full opacity-80" style="width: 20%"></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-surface border border-border rounded-2xl shadow-sm overflow-hidden flex flex-col">
        <div class="p-5 border-b border-border">
          <h2 class="text-[15px] font-bold text-t1">Ringkasan Bulanan 2025</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full text-left text-[13px]">
            <thead class="bg-base border-b border-border text-t3 text-[10px] font-bold uppercase tracking-wider">
              <tr>
                <th class="px-5 py-3">Bulan</th>
                <th class="px-5 py-3">Surat Masuk</th>
                <th class="px-5 py-3">Disetujui</th>
                <th class="px-5 py-3">Ditolak</th>
                <th class="px-5 py-3">Lap. Lingkungan</th>
                <th class="px-5 py-3">Lap. Tamu</th>
                <th class="px-5 py-3">Pengumuman Terkirim</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-border/60">
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3 font-bold text-t1">Januari</td>
                <td class="px-5 py-3 font-mono text-t2">36</td>
                <td class="px-5 py-3 font-mono font-bold text-green-600">32</td>
                <td class="px-5 py-3 font-mono font-bold text-red-600">4</td>
                <td class="px-5 py-3 font-mono text-t2">5</td>
                <td class="px-5 py-3 font-mono text-t2">12</td>
                <td class="px-5 py-3 font-mono text-t2">3</td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3 font-bold text-t1">Februari</td>
                <td class="px-5 py-3 font-mono text-t2">42</td>
                <td class="px-5 py-3 font-mono font-bold text-green-600">39</td>
                <td class="px-5 py-3 font-mono font-bold text-red-600">3</td>
                <td class="px-5 py-3 font-mono text-t2">7</td>
                <td class="px-5 py-3 font-mono text-t2">15</td>
                <td class="px-5 py-3 font-mono text-t2">4</td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3 font-bold text-t1">Maret</td>
                <td class="px-5 py-3 font-mono text-t2">45</td>
                <td class="px-5 py-3 font-mono font-bold text-green-600">41</td>
                <td class="px-5 py-3 font-mono font-bold text-red-600">4</td>
                <td class="px-5 py-3 font-mono text-t2">9</td>
                <td class="px-5 py-3 font-mono text-t2">18</td>
                <td class="px-5 py-3 font-mono text-t2">5</td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3 font-bold text-t1">April</td>
                <td class="px-5 py-3 font-mono text-t2">39</td>
                <td class="px-5 py-3 font-mono font-bold text-green-600">36</td>
                <td class="px-5 py-3 font-mono font-bold text-red-600">3</td>
                <td class="px-5 py-3 font-mono text-t2">6</td>
                <td class="px-5 py-3 font-mono text-t2">14</td>
                <td class="px-5 py-3 font-mono text-t2">4</td>
              </tr>
              <tr class="bg-blue-50/50 hover:bg-blue-50 transition-colors">
                <td class="px-5 py-3 font-bold text-blue-900">Mei (s.d hari ini)</td>
                <td class="px-5 py-3 font-mono font-bold text-blue-800">47</td>
                <td class="px-5 py-3 font-mono font-bold text-green-600">34</td>
                <td class="px-5 py-3 font-mono font-bold text-red-600">5</td>
                <td class="px-5 py-3 font-mono font-bold text-blue-800">11</td>
                <td class="px-5 py-3 font-mono font-bold text-blue-800">21</td>
                <td class="px-5 py-3 font-mono font-bold text-blue-800">6</td>
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

  <script>function go(page) { window.location.href = page + '.php'; }</script>
</body>
</html>
