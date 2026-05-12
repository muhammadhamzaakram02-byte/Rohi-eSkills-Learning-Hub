<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs • DevSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
        .heading-font {
            font-family: 'Poppins', sans-serif;
        }
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .blog-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .blog-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px -12px rgb(108 99 255 / 0.25);
        }
        .active-filter {
            background: #6C63FF !important;
            color: white !important;
            border-color: #6C63FF;
        }
    </style>
</head>
<body class="bg-[#0F172A] text-[#E2E8F0]">

     <?php include 'navbar.php' ?>

    <!-- PAGE HEADER -->
    <section class="pt-28 pb-12 bg-gradient-to-b from-[#0F172A] to-transparent">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="heading-font text-5xl md:text-6xl font-bold text-center">All Blogs</h1>
            <p class="text-center text-slate-400 mt-4 text-lg">Discover the latest insights, tutorials, and stories</p>
        </div>
    </section>

    <!-- FILTERS -->
    <section class="max-w-7xl mx-auto px-6 pb-8 sticky top-20 z-40 bg-[#0F172A]/80 backdrop-blur-lg">
        <div class="glass rounded-3xl p-6">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Search -->
                <div class="flex-1 relative">
                    <input type="text" id="searchInput" 
                           onkeyup="filterBlogs()"
                           placeholder="Search blogs..." 
                           class="w-full bg-white/10 border border-white/20 focus:border-[#6C63FF] rounded-2xl px-6 py-4 pl-12 outline-none text-sm">
                    <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                </div>

                <!-- Category Filters -->
                <div class="flex flex-wrap gap-3" id="categoryFilters">
                    <button onclick="filterByCategory(this)" data-category="all" 
                            class="active-filter px-6 py-3 rounded-2xl text-sm font-medium transition-all">All</button>
                    <button onclick="filterByCategory(this)" data-category="web" 
                            class="px-6 py-3 rounded-2xl text-sm font-medium bg-white/10 hover:bg-white/20 transition-all">Web Dev</button>
                    <button onclick="filterByCategory(this)" data-category="js" 
                            class="px-6 py-3 rounded-2xl text-sm font-medium bg-white/10 hover:bg-white/20 transition-all">JavaScript</button>
                    <button onclick="filterByCategory(this)" data-category="php" 
                            class="px-6 py-3 rounded-2xl text-sm font-medium bg-white/10 hover:bg-white/20 transition-all">Laravel</button>
                    <button onclick="filterByCategory(this)" data-category="design" 
                            class="px-6 py-3 rounded-2xl text-sm font-medium bg-white/10 hover:bg-white/20 transition-all">UI/UX</button>
                    <button onclick="filterByCategory(this)" data-category="career" 
                            class="px-6 py-3 rounded-2xl text-sm font-medium bg-white/10 hover:bg-white/20 transition-all">Career</button>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG GRID -->
    <section class="max-w-7xl mx-auto px-6 pb-20">
        <div id="blogGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Your PHP code to fetch blog data from the database
            $database = mysqli_connect("localhost", "root", "", "database1");
            $data = mysqli_query($database, "SELECT * FROM blog order by id desc");
            while ($row = mysqli_fetch_assoc($data)) {
              ?>
            <!-- Blog Card 1 -->
            <div class="blog-card glass rounded-3xl overflow-hidden" data-category="web" data-title="css features 2026">
                <!-- <img src="https://picsum.photos/id/1015/800/500" class="w-full h-52 object-cover"> -->
                <img src="uploads/<?php echo $row['image']; ?>" class="w-full h-52 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="text-xs px-4 py-2 bg-purple-500/20 text-purple-400 rounded-full"><?php echo $row['category']; ?></span>
                        <span class="text-xs text-slate-500"><?php echo $row['time']; ?></span>
                    </div>
                    <h3 class="font-semibold text-xl leading-tight mb-3"><?php echo $row['title']; ?></h3>
                    <p class="text-slate-400 text-sm line-clamp-3">
                        <?php echo $row['short_description']; ?> 
                    </p>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-zinc-600 rounded-full"></div>
                            <div class="text-sm">
                                <p class="font-medium">Sarah Chen</p>
                                <p class="text-slate-500 text-xs">Apr 28, 2026</p>
                            </div>
                        </div>
                        <a href="blog-details.html" class="text-[#6C63FF] hover:text-[#00D4FF] font-medium text-sm flex items-center gap-1">
                            Read → 
                        </a>
                    </div>
                </div>
            </div>

                         <?php } ?>


        </div>
    </section>

     <?php require 'footer.php' ?>

    <script>
        function filterBlogs() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('.blog-card');

            cards.forEach(card => {
                const title = card.getAttribute('data-title') || '';
                const text = card.textContent.toLowerCase();
                
                if (text.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function filterByCategory(btn) {
            // Remove active class from all
            document.querySelectorAll('#categoryFilters button').forEach(b => {
                b.classList.remove('active-filter');
            });
            
            // Add active class
            btn.classList.add('active-filter');

            const category = btn.getAttribute('data-category');
            const cards = document.querySelectorAll('.blog-card');

            cards.forEach(card => {
                if (category === 'all') {
                    card.style.display = 'block';
                } else {
                    if (card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        }

        // Initialize
        console.log('%cBlogs Page Loaded ✨', 'color:#6C63FF; font-size:14px');
    </script>
</body>
</html>