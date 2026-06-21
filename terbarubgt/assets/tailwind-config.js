tailwind.config = {
  theme: {
    extend: {
      colors: {
        // Konfigurasi palet warna kustom sistem
        base: '#f9fafb',        /* Warna latar belakang aplikasi */
        surface: '#ffffff',     /* Warna card / topbar / sidebar */
        border: '#e5e7eb',      /* Warna border pemisah */
        
        // Brand color (Hijau Digital Desa)
        brand: '#1d9e75',
        'brand-light': '#e6f6f0',
        'brand-dark': '#13694e',
        
        // Tipografi (Text colors)
        t1: '#111827',          /* Utama (Gelap) */
        t2: '#4b5563',          /* Sekunder (Abu sedang) */
        t3: '#9ca3af',          /* Keterangan / Muted (Abu muda) */
      },
      fontFamily: {
        sans: ['Plus Jakarta Sans', 'sans-serif'],
      }
    }
  }
}