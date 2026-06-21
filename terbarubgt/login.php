<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk — Portal Desa Digital</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./assets/tailwind-config.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="bg-base font-sans text-t1 flex flex-col min-h-screen justify-between">

  <header class="p-6">
    <div class="flex items-center gap-2 max-w-md mx-auto">
      <div class="w-7 h-7 rounded-lg bg-brand flex items-center justify-center flex-shrink-0">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="8" width="5" height="6" rx="1" fill="white" />
          <rect x="9" y="5" width="5" height="9" rx="1" fill="white" opacity=".7" />
          <path d="M1 8L8 3L15 8" stroke="white" stroke-width="1.3" stroke-linecap="round" />
        </svg>
      </div>
      <div class="text-[13px] font-semibold text-t1 leading-tight">Portal Desa<br>Digital</div>
    </div>
  </header>

  <main class="flex-1 flex items-center justify-center px-4 py-8">
    <section class="w-full max-w-md bg-surface border border-border rounded-2xl p-6 shadow-sm">
      <div class="mb-6">
        <h1 class="text-[20px] font-bold text-t1 tracking-tight">Selamat Datang</h1>
        <p class="text-[13px] text-t2 mt-1">Silakan masuk menggunakan akun warga Anda untuk mengakses dashboard.</p>
      </div>

      <form onsubmit="handleLogin(event)" class="flex flex-col gap-4">
        <div>
          <label for="username" class="block text-[12px] font-semibold text-t2 mb-1.5">NIK / Nama Pengguna</label>
          <input type="text" id="username" name="username" required placeholder="Masukkan NIK atau username"
            class="w-full text-[13px] px-3 py-2 border border-border rounded-xl focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand bg-base/50">
        </div>

        <div>
          <div class="flex justify-between items-center mb-1.5">
            <label for="password" class="block text-[12px] font-semibold text-t2">Kata Sandi</label>
            <a href="#" class="text-[11px] text-brand hover:underline">Lupa sandi?</a>
          </div>
          <input type="password" id="password" name="password" required placeholder="••••••••"
            class="w-full text-[13px] px-3 py-2 border border-border rounded-xl focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand bg-base/50">
        </div>

        <div class="flex items-center gap-2 my-1">
          <input type="checkbox" id="remember" class="w-4 h-4 rounded border-border text-brand focus:ring-brand">
          <label for="remember" class="text-[12px] text-t2 select-none">Ingat saya di perangkat ini</label>
        </div>

        <button type="submit"
          class="w-full bg-brand hover:bg-brand-dark text-white text-[13px] font-semibold py-2.5 px-4 rounded-xl transition-colors duration-200 shadow-sm mt-2">
          Masuk Sekarang
        </button>
      </form>

      <div class="mt-6 pt-4 border-t border-border text-center">
        <p class="text-[12px] text-t3">Belum memiliki akun warga? <a href="#"
            class="text-brand font-medium hover:underline">Hubungi RT/RW Setempat</a></p>
      </div>

    </section>
  </main>

  <footer class="p-6 text-center text-[11px] text-t3">
    &copy; 2026 Portal Desa Digital. Hak Cipta Dilindungi.
  </footer>

  <script>
    function handleLogin(event) {
      event.preventDefault();

      const username = document.getElementById('username').value.toLowerCase();

      // Mengarahkan ke folder yang tepat berdasarkan input
      if (username.includes('admin')) {
        window.location.href = 'admin/dashboard-admin.php';
      } else if (username.includes('rt')) {
        window.location.href = 'rt/dashboard-rt.php';
      } else {
        window.location.href = 'warga/dashboard.php'; // Default ke warga
      }
    }
  </script>

</body>

</html>