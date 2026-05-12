<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSphere • Insights for Modern Developers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap');
        
        :root {
            --primary: #6C63FF;
            --secondary: #00D4FF;
        }
        
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

        .hero-bg {
            background: linear-gradient(135deg, #0F172A 0%, #1E2937 100%);
        }

        .gradient-text {
            background: linear-gradient(90deg, #6C63FF, #00D4FF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .blog-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .blog-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px -12px rgb(108 99 255 / 0.25);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(to right, #6C63FF, #00D4FF);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }

        .scroll-container {
            scrollbar-width: none;
        }
        
        .scroll-container::-webkit-scrollbar {
            display: none;
        }

        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        .animate-scroll {
            animation: scroll-left 25s linear infinite;
            display: flex;
            width: max-content;
        }
        
        .animate-scroll:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-[#0F172A] text-[#E2E8F0] overflow-x-hidden">

  <?php   include 'navbar.php'; ?>

    <!-- HERO -->
    <section class="hero-bg min-h-screen pt-24 flex items-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(at_center,#6C63FF15_0%,transparent_70%)]"></div>
        
        <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center relative z-10">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 bg-white/10 text-white text-sm px-5 py-2 rounded-3xl border border-white/20">
                    <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
                    New: AI in Frontend Development
                </div>
                
                <h1 class="heading-font text-6xl md:text-7xl font-bold leading-tight tracking-tighter">
                    Insights, Ideas &amp; Stories<br>
                    <span class="gradient-text">for Modern Developers</span>
                </h1>
                
                <p class="text-xl text-slate-300 max-w-md">
                    High-quality blogs on web development, design systems, and the latest technology trends.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <button onclick="window.location.href='blogs.html'" 
                            class="px-8 py-4 bg-[#6C63FF] hover:bg-[#5A52FF] text-white font-semibold rounded-3xl flex items-center gap-3 transition-all group">
                        Explore Blogs
                        <i class="fa-solid fa-arrow-right group-active:rotate-45 transition-transform"></i>
                    </button>
                    
                    <button onclick="document.getElementById('newsletter').scrollIntoView({ behavior: 'smooth' })" 
                            class="px-8 py-4 border border-white/30 hover:border-white/60 font-medium rounded-3xl transition-all">
                        Subscribe
                    </button>
                </div>
                
                <div class="flex items-center gap-8 text-sm">
                    <div class="flex items-center gap-2">
                        <div class="flex -space-x-4">
                            <div class="w-7 h-7 rounded-full border-2 border-[#0F172A] bg-purple-500"></div>
                            <div class="w-7 h-7 rounded-full border-2 border-[#0F172A] bg-cyan-400"></div>
                        </div>
                        <span class="text-slate-400">10k+ developers</span>
                    </div>
                    <div class="h-6 w-px bg-white/20"></div>
                    <div class="flex items-center gap-1 text-amber-400">
                        ★★★★☆ <span class="text-slate-400 ml-1">4.98</span>
                    </div>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class="relative hidden md:block">
                <div class="absolute -inset-10 bg-gradient-to-br from-[#6C63FF]/20 to-[#00D4FF]/20 rounded-[4rem] blur-3xl"></div>
                <div class="glass rounded-3xl p-3 shadow-2xl relative">
                    <img src="https://picsum.photos/800/620" alt="Dev Dashboard" 
                         class="rounded-2xl shadow-inner w-full">
                    <div class="absolute -bottom-4 -right-4 glass px-6 py-4 rounded-2xl border border-white/20 shadow-xl">
                        <div class="flex items-center gap-3">
                            <div class="text-4xl">🚀</div>
                            <div>
                                <p class="font-semibold">Just Published</p>
                                <p class="text-sm text-slate-400">Building with Next.js 15</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-2">
            <span class="text-xs tracking-widest text-slate-400">SCROLL TO EXPLORE</span>
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center pt-2">
                <div class="w-1 h-2 bg-white/70 rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- FEATURED BLOGS -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex items-end justify-between mb-10">
            <h2 class="heading-font text-4xl font-semibold">Featured Stories</h2>
            <a href="blogs.html" class="flex items-center gap-2 text-[#00D4FF] hover:text-cyan-300 transition-colors group">
                View all 
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Card 1 -->
            <div class="blog-card glass rounded-3xl overflow-hidden group cursor-pointer" onclick="window.location.href='blog-details.html'">
                <div class="h-56 bg-cover bg-center relative" style="background-image: url('https://picsum.photos/id/1015/800/600')">
                    <div class="absolute top-4 right-4 bg-black/60 text-xs px-3 py-1 rounded-full">Web Dev</div>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-xl leading-tight mb-3 group-hover:text-[#6C63FF] transition-colors">
                        The New CSS Features You’ll Actually Use in 2026
                    </h3>
                    <p class="text-slate-400 text-sm line-clamp-3 mb-6">
                        Container queries, :has(), and scroll-driven animations are changing how we build interfaces.
                    </p>
                    <div class="flex items-center justify-between text-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-zinc-700 rounded-full"></div>
                            <div>
                                <p class="font-medium">Sarah Chen</p>
                                <p class="text-slate-500">Apr 28, 2026</p>
                            </div>
                        </div>
                        <button class="text-[#6C63FF] hover:underline">Read →</button>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="blog-card glass rounded-3xl overflow-hidden group cursor-pointer" onclick="window.location.href='blog-details.html'">
                <div class="h-56 bg-cover bg-center relative" style="background-image: url('https://picsum.photos/id/201/800/600')">
                    <div class="absolute top-4 right-4 bg-black/60 text-xs px-3 py-1 rounded-full">JavaScript</div>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-xl leading-tight mb-3 group-hover:text-[#6C63FF] transition-colors">
                        Mastering Signals in Modern Frameworks
                    </h3>
                    <p class="text-slate-400 text-sm line-clamp-3 mb-6">
                        Why Signals are replacing state management libraries in React, Vue, and Solid.
                    </p>
                    <div class="flex items-center justify-between text-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-zinc-700 rounded-full"></div>
                            <div>
                                <p class="font-medium">Alex Rivera</p>
                                <p class="text-slate-500">Apr 25, 2026</p>
                            </div>
                        </div>
                        <button class="text-[#6C63FF] hover:underline">Read →</button>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="blog-card glass rounded-3xl overflow-hidden group cursor-pointer" onclick="window.location.href='blog-details.html'">
                <div class="h-56 bg-cover bg-center relative" style="background-image: url('https://picsum.photos/id/237/800/600')">
                    <div class="absolute top-4 right-4 bg-black/60 text-xs px-3 py-1 rounded-full">Career</div>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-xl leading-tight mb-3 group-hover:text-[#6C63FF] transition-colors">
                        How I Negotiated a 65% Raise as a Senior Engineer
                    </h3>
                    <p class="text-slate-400 text-sm line-clamp-3 mb-6">
                        Real strategies that actually work in today’s tech market.
                    </p>
                    <div class="flex items-center justify-between text-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-zinc-700 rounded-full"></div>
                            <div>
                                <p class="font-medium">Marcus Okoro</p>
                                <p class="text-slate-500">Apr 20, 2026</p>
                            </div>
                        </div>
                        <button class="text-[#6C63FF] hover:underline">Read →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATEGORIES -->
    <section class="max-w-7xl mx-auto px-6 py-16 bg-white/5">
        <h2 class="heading-font text-4xl font-semibold text-center mb-12">Explore by Topic</h2>
        
        <div class="relative overflow-hidden w-full py-4 -my-4">
            <div class="animate-scroll">
                <!-- Group 1 -->
                <div class="flex gap-4 pr-4">
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">💻</div>
                        <h3 class="font-semibold text-lg">Web Development</h3>
                        <p class="text-slate-400 text-sm mt-1">142 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">⚡</div>
                        <h3 class="font-semibold text-lg">JavaScript</h3>
                        <p class="text-slate-400 text-sm mt-1">98 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">🐘</div>
                        <h3 class="font-semibold text-lg">Laravel &amp; PHP</h3>
                        <p class="text-slate-400 text-sm mt-1">67 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">🎨</div>
                        <h3 class="font-semibold text-lg">UI/UX Design</h3>
                        <p class="text-slate-400 text-sm mt-1">84 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">📈</div>
                        <h3 class="font-semibold text-lg">Career Tips</h3>
                        <p class="text-slate-400 text-sm mt-1">53 articles</p>
                    </div>
                </div>
                
                <!-- Group 2 (Duplicate for seamless loop) -->
                <div class="flex gap-4 pr-4">
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">💻</div>
                        <h3 class="font-semibold text-lg">Web Development</h3>
                        <p class="text-slate-400 text-sm mt-1">142 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">⚡</div>
                        <h3 class="font-semibold text-lg">JavaScript</h3>
                        <p class="text-slate-400 text-sm mt-1">98 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">🐘</div>
                        <h3 class="font-semibold text-lg">Laravel &amp; PHP</h3>
                        <p class="text-slate-400 text-sm mt-1">67 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">🎨</div>
                        <h3 class="font-semibold text-lg">UI/UX Design</h3>
                        <p class="text-slate-400 text-sm mt-1">84 articles</p>
                    </div>
                    <div onclick="window.location.href='blogs.html'" class="glass rounded-3xl p-8 text-center hover:scale-105 transition-all cursor-pointer group w-64 flex-shrink-0">
                        <div class="text-5xl mb-4">📈</div>
                        <h3 class="font-semibold text-lg">Career Tips</h3>
                        <p class="text-slate-400 text-sm mt-1">53 articles</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRENDING BLOGS -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex items-center justify-between mb-10">
            <h2 class="heading-font text-4xl font-semibold">Trending This Week</h2>
            <div class="text-[#00D4FF] text-sm flex items-center gap-2 cursor-pointer">
                <span>Scroll for more</span>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>

        <div id="trending-slider" class="flex gap-6 overflow-x-auto scroll-container pb-8 snap-x">
            <!-- JS will populate or static cards -->
            <div class="min-w-[320px] glass rounded-3xl overflow-hidden snap-start">
                <img src="https://picsum.photos/id/180/600/340" class="w-full h-44 object-cover">
                <div class="p-5">
                    <h4 class="font-medium leading-tight">Tailwind CSS v4 is Finally Here — What Changed?</h4>
                    <p class="text-xs text-slate-400 mt-4">2 days ago • 12 min read</p>
                </div>
            </div>
            <div class="min-w-[320px] glass rounded-3xl overflow-hidden snap-start">
                <img src="https://picsum.photos/id/201/600/340" class="w-full h-44 object-cover">
                <div class="p-5">
                    <h4 class="font-medium leading-tight">Why I Switched from React to SvelteKit</h4>
                    <p class="text-xs text-slate-400 mt-4">4 days ago • 18 min read</p>
                </div>
            </div>
            <div class="min-w-[320px] glass rounded-3xl overflow-hidden snap-start">
                <img src="https://picsum.photos/id/237/600/340" class="w-full h-44 object-cover">
                <div class="p-5">
                    <h4 class="font-medium leading-tight">Building Beautiful Dashboards with shadcn/ui</h4>
                    <p class="text-xs text-slate-400 mt-4">1 week ago • 9 min read</p>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-4xl mx-auto px-6 py-20 text-center">
        <div class="glass rounded-3xl p-16">
            <h2 class="heading-font text-4xl font-semibold mb-6">We are passionate developers sharing real-world knowledge</h2>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto">
                Practical tutorials, deep dives into modern tools, and honest career advice from engineers who ship products daily.
            </p>
            <button onclick="window.location.href='about.html'" 
                    class="mt-10 px-8 py-4 border border-white/30 hover:bg-white/10 rounded-3xl transition-all">
                Learn more about us →
            </button>
        </div>
    </section>
    <section id="newsletter" class="max-w-7xl mx-auto px-6 py-20">
        <div class="glass rounded-3xl p-16 text-center">
            <div class="max-w-md mx-auto">
                <h2 class="heading-font text-4xl font-semibold mb-4">Stay in the loop</h2>
                <p class="text-slate-400 mb-8">Join 10,000+ developers getting the best insights every week.</p>
                
                <div class="flex gap-3 max-w-sm mx-auto">
                    <input type="email" id="email-input" 
                           class="flex-1 bg-white/10 border border-white/20 focus:border-[#6C63FF] rounded-3xl px-6 py-4 outline-none text-sm"
                           placeholder="your@email.com">
                    <button onclick="subscribe()" 
                            class="px-10 bg-gradient-to-r from-[#6C63FF] to-[#00D4FF] font-semibold rounded-3xl">
                        Join
                    </button>
                </div>
                <p class="text-xs text-slate-500 mt-6">Zero spam. Unsubscribe anytime.</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php require 'footer.php' ?>

    <script>
        // Tailwind script already includeda
        function subscribe() {
            const email = document.getElementById('email-input').value;
            if (email) {
                alert("Thank you! You've been subscribed. 🎉");
                document.getElementById('email-input').value = '';
            } else {
                alert("Please enter your email");
            }
        }

        // Smooth scroll for mobile nav (demo)
        console.log('%cDevSphere Home Page Loaded Successfully ✨', 'color:#6C63FF; font-size:13px');
    </script>
</body>
</html>