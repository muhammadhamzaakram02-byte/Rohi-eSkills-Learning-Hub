
    // Mobile nav toggle
    function toggleMenu() {
      document.getElementById('mobileNav').classList.toggle('open');
    }

    // Countdown timer (7 days from now)
    const target = new Date();
    target.setDate(target.getDate() + 7);

    function updateCountdown() 
    {
      const now = new Date();
      const diff = target - now;
      if (diff <= 0) return;
      const d = Math.floor(diff / 86400000);
      const h = Math.floor((diff % 86400000) / 3600000);
      const m = Math.floor((diff % 3600000) / 60000);
      const s = Math.floor((diff % 60000) / 1000);
      document.getElementById('days').textContent    = String(d).padStart(2,'0');
      document.getElementById('hours').textContent   = String(h).padStart(2,'0');
      document.getElementById('minutes').textContent = String(m).padStart(2,'0');
      document.getElementById('seconds').textContent = String(s).padStart(2,'0');
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);
  