   tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1a1a2e',
            accent:  '#e94560',
            gold:    '#f5a623',
            light:   '#f8f5f0',
          },
          fontFamily: {
            display: ['"Playfair Display"', 'serif'],
            body:    ['"DM Sans"', 'sans-serif'],
          }
        }
      }
    }

    // Mobile menu toggle
    function toggleMenu() {
      document.getElementById('mobileNav').classList.toggle('open');
    }

    // Countdown timer — 7 days from page load
    const target = new Date();
    target.setDate(target.getDate() + 7);

    function updateCountdown() {
      const diff = target - new Date();
      if (diff <= 0) return;
      const d = Math.floor(diff / 86400000);
      const h = Math.floor((diff % 86400000) / 3600000);
      const m = Math.floor((diff % 3600000) / 60000);
      const s = Math.floor((diff % 60000) / 1000);
      document.getElementById('days').textContent    = String(d).padStart(2, '0');
      document.getElementById('hours').textContent   = String(h).padStart(2, '0');
      document.getElementById('minutes').textContent = String(m).padStart(2, '0');
      document.getElementById('seconds').textContent = String(s).padStart(2, '0');
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);
  