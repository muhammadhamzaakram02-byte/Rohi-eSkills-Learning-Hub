
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenuBtn.querySelector('i').classList.toggle('fa-bars');
        mobileMenuBtn.querySelector('i').classList.toggle('fa-times');
    });

    const searchBtn = document.getElementById('searchBtn');
    const searchModal = document.getElementById('searchModal');
    const closeSearchModal = document.getElementById('closeSearchModal');
    searchBtn.addEventListener('click', () => {
        searchModal.classList.remove('hidden');
        searchModal.classList.add('flex');
    });
    closeSearchModal.addEventListener('click', () => {
        searchModal.classList.add('hidden');
        searchModal.classList.remove('flex');
    });
    window.addEventListener('click', (e) => {
        if (e.target === searchModal) {
            searchModal.classList.add('hidden');
            searchModal.classList.remove('flex');
        }
    });

    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 100) {
            navbar.classList.add('bg-white', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-white', 'shadow-lg');
            navbar.classList.add('bg-transparent');
        }
    });

    const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-slide-bottom');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    document.querySelectorAll('section').forEach(section => observer.observe(section));

    const filterChips = document.querySelectorAll('.filter-chip');
    const productCards = document.querySelectorAll('#productGrid > div');
    const productCountSpan = document.getElementById('productCount');

    function updateProductCount() {
        const visibleCount = Array.from(productCards).filter(card => card.style.display !== 'none').length;
        productCountSpan.textContent = visibleCount;
    }

    filterChips.forEach(chip => {
        chip.addEventListener('click', function() {
            filterChips.forEach(c => c.classList.remove('active', 'bg-blue-600', 'text-white', 'border-blue-600'));
            this.classList.add('active', 'bg-blue-600', 'text-white', 'border-blue-600');
            
            const category = this.dataset.category;
            productCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
            updateProductCount();
        });
    });

    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.add('animate-pulse');
            setTimeout(() => this.classList.remove('animate-pulse'), 1000);
            const cartCount = document.querySelector('.absolute.-top-2.-right-2');
            if (cartCount) {
                cartCount.textContent = parseInt(cartCount.textContent) + 1;
            }
        });
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth' });
        });
    });

    updateProductCount();
