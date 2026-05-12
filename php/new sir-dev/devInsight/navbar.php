<!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-gradient-to-br from-[#6C63FF] to-[#00D4FF] rounded-2xl flex items-center justify-center text-white font-bold text-2xl">D</div>
                <h1 class="heading-font text-2xl font-semibold tracking-tight">DevSphere</h1>
            </div>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="index.php" class="nav-link text-white">Home</a>
                <a href="blogs.php" class="nav-link hover:text-white/80">Blogs</a>
                <a href="about.php" class="nav-link hover:text-white/80">About</a>
                <a href="contact.php" class="nav-link hover:text-white/80">Contact</a>
                 <a href="login.php" class="nav-link hover:text-white/80">Login</a>
            </div>

            <div class="flex items-center gap-4">
                <button onclick="window.location.href='admin_dashboard.php'" 
                        class="px-6 py-2.5 text-sm font-semibold rounded-2xl bg-white/10 hover:bg-white/20 transition-all border border-white/20">
                    Start Reading
                </button>
                <button class="md:hidden text-2xl">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>