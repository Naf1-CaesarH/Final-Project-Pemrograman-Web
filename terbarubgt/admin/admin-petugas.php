<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Petugas — Portal Desa Digital</title>
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
        <a class="sb-item active !bg-blue-600/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go('petugas')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M2 13.5c0-3.04 2.69-5.5 6-5.5s6 2.46 6 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M10 4.5l1 1.5-1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <span class="font-semibold text-[13px]">Manajemen Petugas</span>
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
        <span class="text-t1 font-bold">Manajemen Petugas</span>
      </div>
      <div class="flex items-center gap-4">
        <button type="button" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-[13px] font-bold transition-colors shadow-sm">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v10M1 6h10" stroke="white" stroke-width="1.8" stroke-linecap="round"/></svg>
          Tambah Petugas
        </button>
      </div>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-7xl mx-auto w-full">
      <div class="bg-blue-50/50 border border-blue-200 rounded-2xl p-4 flex gap-3 shadow-sm">
        <div class="mt-0.5 text-blue-500">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M10 6v5M10 14h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <p class="text-[13px] text-blue-800 leading-relaxed">
          <strong>Info:</strong> Petugas (Ketua RT/RW) memiliki akses ke dashboard RT/RW dengan fitur: approve surat, laporan tamu, kirim pengumuman per RT, dan data warga di RT-nya. Admin kelurahan punya akses penuh ke seluruh data.
        </p>
      </div>

      <div class="bg-surface border border-border rounded-2xl shadow-sm overflow-hidden flex flex-col">
        <div class="p-5 border-b border-border">
          <h2 class="text-[15px] font-bold text-t1">Daftar Petugas Aktif</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full text-left text-[13px]">
            <thead class="bg-base border-b border-border text-t3 text-[10px] font-bold uppercase tracking-wider">
              <tr>
                <th class="px-5 py-3">Nama</th>
                <th class="px-5 py-3">Jabatan</th>
                <th class="px-5 py-3">RT/RW</th>
                <th class="px-5 py-3">WhatsApp</th>
                <th class="px-5 py-3">Login Terakhir</th>
                <th class="px-5 py-3">Status</th>
                <th class="px-5 py-3 text-right">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-border/60">
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-amber-100 text-amber-700 font-bold text-[12px] flex items-center justify-center flex-shrink-0 border border-amber-200">AS</div>
                    <div>
                      <div class="font-bold text-t1">Agus Salim</div>
                      <div class="text-[11px] text-t3">agus@portaldesa.id</div>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-3">
                  <span class="bg-amber-100 text-amber-800 px-2.5 py-0.5 rounded-md text-[10px] font-bold border border-amber-200">Ketua RT</span>
                </td>
                <td class="px-5 py-3 text-t2 font-medium">RT 001 / RW 001</td>
                <td class="px-5 py-3 font-mono text-t2">0812-1111-1111</td>
                <td class="px-5 py-3 font-mono text-t2 text-[12px]">Hari ini, 08:30</td>
                <td class="px-5 py-3">
                  <span class="bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Aktif</span>
                </td>
                <td class="px-5 py-3">
                  <div class="flex gap-2 justify-end">
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-border bg-white text-t2 text-[11px] font-bold hover:bg-base transition-colors">Edit</button>
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-blue-200 bg-blue-50 text-blue-600 text-[11px] font-bold hover:bg-blue-100 transition-colors">Reset PW</button>
                  </div>
                </td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-amber-100 text-amber-700 font-bold text-[12px] flex items-center justify-center flex-shrink-0 border border-amber-200">HW</div>
                    <div>
                      <div class="font-bold text-t1">Hendra Wahyu</div>
                      <div class="text-[11px] text-t3">hendra@portaldesa.id</div>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-3">
                  <span class="bg-amber-100 text-amber-800 px-2.5 py-0.5 rounded-md text-[10px] font-bold border border-amber-200">Ketua RT</span>
                </td>
                <td class="px-5 py-3 text-t2 font-medium">RT 002 / RW 001</td>
                <td class="px-5 py-3 font-mono text-t2">0812-2222-2222</td>
                <td class="px-5 py-3 font-mono text-t2 text-[12px]">Kemarin, 19:45</td>
                <td class="px-5 py-3">
                  <span class="bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Aktif</span>
                </td>
                <td class="px-5 py-3">
                  <div class="flex gap-2 justify-end">
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-border bg-white text-t2 text-[11px] font-bold hover:bg-base transition-colors">Edit</button>
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-blue-200 bg-blue-50 text-blue-600 text-[11px] font-bold hover:bg-blue-100 transition-colors">Reset PW</button>
                  </div>
                </td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-amber-100 text-amber-700 font-bold text-[12px] flex items-center justify-center flex-shrink-0 border border-amber-200">ML</div>
                    <div>
                      <div class="font-bold text-t1">Mulyadi</div>
                      <div class="text-[11px] text-t3">mulyadi@portaldesa.id</div>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-3">
                  <span class="bg-amber-100 text-amber-800 px-2.5 py-0.5 rounded-md text-[10px] font-bold border border-amber-200">Ketua RT</span>
                </td>
                <td class="px-5 py-3 text-t2 font-medium">RT 003 / RW 001</td>
                <td class="px-5 py-3 font-mono text-t2">0813-3333-3333</td>
                <td class="px-5 py-3 font-mono text-t2 text-[12px]">3 hari lalu</td>
                <td class="px-5 py-3">
                  <span class="bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Aktif</span>
                </td>
                <td class="px-5 py-3">
                  <div class="flex gap-2 justify-end">
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-border bg-white text-t2 text-[11px] font-bold hover:bg-base transition-colors">Edit</button>
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-blue-200 bg-blue-50 text-blue-600 text-[11px] font-bold hover:bg-blue-100 transition-colors">Reset PW</button>
                  </div>
                </td>
              </tr>
              <tr class="hover:bg-base/50 transition-colors">
                <td class="px-5 py-3">
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-purple-100 text-purple-700 font-bold text-[12px] flex items-center justify-center flex-shrink-0 border border-purple-200">SH</div>
                    <div>
                      <div class="font-bold text-t1">Supardi Haryanto</div>
                      <div class="text-[11px] text-t3">supardi@portaldesa.id</div>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-3">
                  <span class="bg-purple-100 text-purple-800 px-2.5 py-0.5 rounded-md text-[10px] font-bold border border-purple-200">Ketua RW</span>
                </td>
                <td class="px-5 py-3 text-t2 font-medium">RW 001</td>
                <td class="px-5 py-3 font-mono text-t2">0814-4444-4444</td>
                <td class="px-5 py-3 font-mono text-t2 text-[12px]">Hari ini, 10:15</td>
                <td class="px-5 py-3">
                  <span class="bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Aktif</span>
                </td>
                <td class="px-5 py-3">
                  <div class="flex gap-2 justify-end">
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-border bg-white text-t2 text-[11px] font-bold hover:bg-base transition-colors">Edit</button>
                    <button type="button" class="px-3 py-1.5 rounded-lg border border-blue-200 bg-blue-50 text-blue-600 text-[11px] font-bold hover:bg-blue-100 transition-colors">Reset PW</button>
                  </div>
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

  <script>function go(page) { window.location.href = page + '.php'; }</script>
</body>
</html>