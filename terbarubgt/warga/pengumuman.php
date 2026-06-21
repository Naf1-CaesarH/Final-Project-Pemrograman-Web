<?php
require_once '../koneksi.php';

// Get filter parameter
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'semua';
$where_clause = "";

if ($filter == 'bulan_ini') {
    $where_clause = "WHERE MONTH(p.created_at) = MONTH(CURRENT_DATE()) AND YEAR(p.created_at) = YEAR(CURRENT_DATE())";
} elseif ($filter == 'rt001') {
    $where_clause = "WHERE p.target_audiens LIKE '%RT 001%' OR p.target_audiens = 'Semua'";
} elseif ($filter == 'rw001') {
    $where_clause = "WHERE p.target_audiens LIKE '%RW 001%' OR p.target_audiens = 'Semua'";
}

$query = "SELECT p.*, u.nama_lengkap, u.rt as pembuat_rt FROM pengumuman p JOIN users u ON p.pembuat_id = u.id $where_clause ORDER BY p.created_at DESC";
$result = mysqli_query($koneksi, $query);

// Helper function for active class
function getActiveClass($currentFilter, $btnFilter) {
    if ($currentFilter == $btnFilter) {
        return "bg-base text-t1 shadow-sm"; // Active state
    }
    return "text-t2 hover:text-t1"; // Inactive state
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arsip Pengumuman — Portal Desa Digital</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../assets/tailwind-config.js"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <style>
    .ann-card {
      @apply flex gap-4 bg-surface border border-border rounded-2xl p-5 shadow-sm transition-all hover:shadow-md hover:border-emerald-200 relative overflow-hidden;
    }

    .ann-card.unread::before {
      content: '';
      @apply absolute top-0 left-0 w-1 h-full bg-emerald-500;
    }

    .ann-card.unread {
      @apply bg-emerald-50/20 border-emerald-100;
    }
  </style>
</head>

<body class="bg-base font-sans text-t1 flex min-h-screen">

  <aside
    class="sidebar-fixed w-64 bg-slate-900 text-slate-300 flex flex-col justify-between sticky top-0 h-screen shadow-xl z-20">
    <div>
      <div class="flex items-center gap-3 px-5 py-5 border-b border-slate-800">
        <div
          class="w-8 h-8 rounded-lg bg-emerald-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-emerald-600/30">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
            <rect x="2" y="8" width="5" height="6" rx="1" fill="white" />
            <rect x="9" y="5" width="5" height="9" rx="1" fill="white" opacity=".7" />
            <path d="M1 8L8 3L15 8" stroke="white" stroke-width="1.3" stroke-linecap="round" />
          </svg>
        </div>
        <div>
          <div class="text-[13px] font-bold text-white leading-tight tracking-wide">Portal Desa<br>Digital</div>
          <div
            class="text-[9px] bg-emerald-500/20 text-emerald-400 font-bold px-1.5 py-0.5 rounded uppercase mt-1 inline-block tracking-wider border border-emerald-500/30">
            Warga</div>
        </div>
      </div>

      <nav class="py-4 flex-1 overflow-y-auto scrollbar-hide">
        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">MENU</div>

        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors"
          onclick="go('dashboard')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
            <rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5" />
            <rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5" />
            <rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5" />
            <rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.5" />
          </svg>
          <span class="font-medium text-[13px]">Beranda</span>
        </a>

        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors"
          onclick="go('surat')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none">
              <rect x="3" y="2" width="10" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5" />
              <line x1="5.5" y1="6" x2="10.5" y2="6" stroke="currentColor" stroke-width="1.5" />
              <line x1="5.5" y1="9" x2="9" y2="9" stroke="currentColor" stroke-width="1.5" />
            </svg><span class="font-medium text-[13px]">Permohonan Surat</span></div>
        </a>

        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors"
          onclick="go('tamu')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5" />
              <path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5"
                stroke-linecap="round" />
            </svg><span class="font-medium text-[13px]">Lapor Tamu</span></div>
        </a>

        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center justify-between cursor-pointer transition-colors"
          onclick="go('lingkungan')">
          <div class="flex items-center gap-3"><svg width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5" />
              <circle cx="8" cy="11.5" r=".8" fill="currentColor" />
            </svg><span class="font-medium text-[13px]">Laporan Lingkungan</span></div>
        </a>

        <a class="sb-item active !bg-emerald-600/10 !text-emerald-400 !border-r-4 !border-emerald-500 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors"
          onclick="go('pengumuman')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
            <path
              d="M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z"
              stroke="currentColor" stroke-width="1.5" />
          </svg>
          <span class="font-semibold text-[13px]">Arsip Pengumuman</span>
        </a>

        <div class="mx-5 my-3 border-t border-slate-800"></div>

        <div class="text-[10px] font-bold text-slate-500 px-5 mb-2 tracking-widest uppercase">AKUN</div>
        <a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors"
          onclick="go('profil')">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
            <circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.5" />
            <path d="M3 13c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.5"
              stroke-linecap="round" />
          </svg>
          <span class="font-medium text-[13px]">Profil Saya</span>
        </a>
      </nav>
    </div>

    <div class="px-5 py-4 border-t border-slate-800 bg-slate-950">
      <div class="flex items-center gap-3">
        <div
          class="w-9 h-9 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0">
          BS</div>
        <div class="flex-1 min-w-0">
          <div class="text-[13px] font-bold text-white truncate">Budi Santoso</div>
          <div class="text-[11px] text-slate-400 truncate">Warga · RT 001</div>
        </div>
      </div>
    </div>
  </aside>

  <div class="flex-1 flex flex-col min-h-screen relative overflow-hidden">

    <header
      class="h-[60px] bg-surface border-b border-border flex items-center px-6 gap-2 sticky top-0 z-10 text-[14px]">
      <a class="text-t2 hover:text-emerald-600 font-medium cursor-pointer transition-colors"
        onclick="go('dashboard')">Beranda</a>
      <span class="text-t3">/</span>
      <strong class="text-t1 font-bold">Arsip Pengumuman</strong>
    </header>

    <main class="p-6 flex flex-col gap-6 flex-1 max-w-5xl mx-auto w-full">

      <section
        class="flex gap-4 items-center bg-green-50/50 border border-green-200 rounded-2xl px-6 py-4 shadow-sm relative overflow-hidden">
        <div
          class="absolute right-0 top-0 w-32 h-32 bg-green-200/40 rounded-full blur-3xl -z-10 translate-x-10 -translate-y-10">
        </div>
        <div
          class="w-10 h-10 rounded-full bg-[#25D366] flex items-center justify-center flex-shrink-0 shadow-md shadow-[#25D366]/30 mt-0.5">
          <svg width="20" height="20" viewBox="0 0 14 14" fill="none">
            <path d="M7 1a6 6 0 00-5.1 9.18L1 13l2.9-.85A6 6 0 107 1z" fill="white" />
          </svg>
        </div>
        <div class="flex-1">
          <h3 class="text-[14px] font-bold text-green-900 mb-0.5">Pengumuman via WhatsApp</h3>
          <p class="text-[13px] text-green-800 leading-relaxed">Pengumuman penting dari RT/RW juga otomatis dikirim ke
            nomor WhatsApp Anda. Halaman ini berfungsi sebagai <strong class="font-bold text-green-900">arsip
              resmi</strong> untuk memudahkan referensi di kemudian hari.</p>
        </div>
      </section>


      <section class="flex flex-col sm:flex-row items-center gap-4 justify-between mt-2">
        <div class="relative flex-1 w-full sm:max-w-xs">
          <svg class="absolute left-4 top-1/2 -translate-y-1/2 text-t3" width="16" height="16" viewBox="0 0 16 16"
            fill="none">
            <circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.5" />
            <path d="M10.5 10.5L14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <input
            class="w-full h-11 pl-11 pr-4 rounded-xl border border-border text-[13px] bg-surface focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 shadow-sm transition-all"
            type="text" placeholder="Cari arsip pengumuman...">
        </div>
        <div class="flex flex-wrap bg-surface border border-border rounded-lg p-1 w-full sm:w-auto">
          <a href="?filter=semua" class="px-4 py-1.5 text-[12px] font-bold rounded-md transition-colors inline-block <?php echo getActiveClass($filter, 'semua'); ?>">Semua</a>
          <a href="?filter=bulan_ini" class="px-4 py-1.5 text-[12px] font-medium rounded-md transition-colors inline-block <?php echo getActiveClass($filter, 'bulan_ini'); ?>">Bulan ini</a>
          <a href="?filter=rt001" class="px-4 py-1.5 text-[12px] font-medium rounded-md transition-colors inline-block <?php echo getActiveClass($filter, 'rt001'); ?>">RT 001</a>
          <a href="?filter=rw001" class="px-4 py-1.5 text-[12px] font-medium rounded-md transition-colors inline-block <?php echo getActiveClass($filter, 'rw001'); ?>">RW 001</a>
        </div>
      </section>

      <section class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 items-start">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $tanggal = date('d M Y', strtotime($row['created_at']));
                $judul = htmlspecialchars($row['judul']);
                $isi = htmlspecialchars($row['isi']);
                $target = htmlspecialchars($row['target_audiens']);
                $is_sent = $row['is_sent_wa'] ? '<span class="flex items-center gap-1.5 text-[10.5px] font-bold text-[#188c56] bg-[#e6f6f0] border border-[#a7dfc9] px-2.5 py-0.5 rounded-full"><svg width="12" height="12" viewBox="0 0 10 10" fill="none"><rect width="10" height="10" rx="2.5" fill="#25D366" /><path d="M5 2a3 3 0 00-2.55 4.58L2 8l1.47-.43A3 3 0 105 2z" fill="white" /></svg>Terkirim WA</span>' : '';

                echo "
                <article class='ann-card group'>
                  <div class='w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform'>
                    <svg width='22' height='22' viewBox='0 0 16 16' fill='none'>
                      <path d='M14 2H6a1 1 0 00-1 1v1H3a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1v-1h1a1 1 0 001-1V3a1 1 0 00-1-1z' stroke='#059669' stroke-width='1.5' />
                    </svg>
                  </div>
                  <div class='flex-1 min-w-0'>
                    <div class='flex items-center gap-2 mb-2'>
                      <span class='text-[11px] font-bold text-slate-600 bg-slate-100 px-2 py-0.5 rounded-md'>$target</span>
                      <div class='w-1 h-1 rounded-full bg-slate-300'></div>
                      <span class='text-[11px] text-slate-500 font-mono font-medium'>$tanggal</span>
                    </div>
                    <h3 class='text-[15px] font-bold text-t1 mb-2 leading-tight group-hover:text-emerald-700 transition-colors'>$judul</h3>
                    <p class='text-[13px] text-t2 leading-relaxed line-clamp-3 mb-4'>$isi</p>
                    <div class='flex items-center justify-between border-t border-border/60 pt-4'>
                      <div class='flex items-center gap-2'>
                        $is_sent
                      </div>
                      <button type='button' data-judul='$judul' data-tanggal='$tanggal' data-target='$target' data-isi='$isi' onclick='openModal(this)' class='text-[12px] font-bold text-emerald-600 hover:text-emerald-800 transition-colors flex items-center gap-1'>Baca selengkapnya <svg width='10' height='10' viewBox='0 0 14 14' fill='none'><path d='M1 7h10m0 0l-3-3m3 3l-3 3' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' /></svg></button>
                    </div>
                  </div>
                </article>";
            }
        } else {
            echo "<div class='col-span-full py-10 text-center text-t2 bg-surface border border-border rounded-2xl'>Belum ada pengumuman saat ini.</div>";
        }
        ?>
      </section>
    </main>

    <footer class="bg-surface border-t border-border px-8 py-4 text-center text-[12px] text-t3 mt-auto">
      &copy; 2026 Portal Desa Digital. Hak Cipta Dilindungi.
    </footer>

  </div>

  <!-- Modal Detail Pengumuman -->
  <div id="detailModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeModal()"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-lg bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">
      <div class="px-6 py-5 border-b border-border flex items-center justify-between bg-slate-50">
        <h3 class="font-bold text-t1 text-[16px]">Detail Pengumuman</h3>
        <button onclick="closeModal()" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-slate-200 text-t3 hover:text-t1 transition-colors">
          <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M1 1l12 12m0-12L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>
      <div class="p-6 overflow-y-auto">
        <div class="flex items-center gap-2 mb-4">
          <span id="modalTarget" class="text-[11px] font-bold text-slate-600 bg-slate-100 px-2 py-0.5 rounded-md"></span>
          <div class="w-1 h-1 rounded-full bg-slate-300"></div>
          <span id="modalTanggal" class="text-[11px] text-slate-500 font-mono font-medium"></span>
        </div>
        <h2 id="modalJudul" class="text-[18px] font-bold text-t1 mb-4 leading-tight"></h2>
        <div id="modalIsi" class="text-[14px] text-t2 leading-relaxed whitespace-pre-wrap"></div>
      </div>
    </div>
  </div>

  <script>
    function go(page) { window.location.href = page + '.php'; }
    
    function openModal(el) {
      document.getElementById('modalJudul').textContent = el.getAttribute('data-judul');
      document.getElementById('modalTanggal').textContent = el.getAttribute('data-tanggal');
      document.getElementById('modalTarget').textContent = el.getAttribute('data-target');
      document.getElementById('modalIsi').textContent = el.getAttribute('data-isi');
      document.getElementById('detailModal').classList.remove('hidden');
    }
    
    function closeModal() {
      document.getElementById('detailModal').classList.add('hidden');
    }
  </script>

</body>

</html>