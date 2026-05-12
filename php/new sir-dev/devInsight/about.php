<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us • DevSphere</title>
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
        .team-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .team-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body class="bg-[#0F172A] text-[#E2E8F0]">

  <?php include 'navbar.php' ?>
  

    <!-- HERO -->
    <section class="pt-28 pb-16 hero-bg min-h-[70vh] flex items-center relative">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 bg-white/10 px-6 py-3 rounded-3xl mb-6">
                <span class="text-[#00D4FF]">✦</span>
                <span class="text-sm font-medium tracking-wider">OUR STORY</span>
            </div>
            <h1 class="heading-font text-6xl md:text-7xl font-bold leading-tight">
                About DevSphere
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto mt-6">
                A platform built by developers, for developers who want practical, high-quality knowledge.
            </p>
        </div>
    </section>

    <!-- STORY SECTION -->
    <section class="max-w-4xl mx-auto px-6 py-20">
        <div class="glass rounded-3xl p-12 md:p-16">
            <h2 class="heading-font text-4xl font-semibold mb-8">Our Story</h2>
            <div class="prose prose-invert text-lg leading-relaxed">
                <p class="text-slate-300">
                    DevSphere was created in 2025 by a group of passionate developers who were tired of low-quality, outdated tutorials scattered across the internet.
                </p>
                <p class="text-slate-300">
                    This platform was built with one clear goal: <span class="text-white font-medium">Help developers learn faster with real-world examples, modern tools, and honest insights.</span>
                </p>
                <p class="text-slate-300">
                    From deep dives into Next.js and Tailwind to career advice and system design, we focus on content that actually moves the needle.
                </p>
            </div>
        </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Mission -->
            <div class="glass rounded-3xl p-10">
                <div class="text-5xl mb-6">🎯</div>
                <h3 class="heading-font text-3xl font-semibold mb-4">Our Mission</h3>
                <p class="text-slate-300 text-lg">
                    To teach practical, production-ready skills that help developers build better applications and advance their careers.
                </p>
                <ul class="mt-6 space-y-3 text-slate-400">
                    <li class="flex items-center gap-3"><span class="text-[#6C63FF]">✔</span> High-signal technical content</li>
                    <li class="flex items-center gap-3"><span class="text-[#6C63FF]">✔</span> Real project breakdowns</li>
                    <li class="flex items-center gap-3"><span class="text-[#6C63FF]">✔</span> No fluff, only value</li>
                </ul>
            </div>

            <!-- Vision -->
            <div class="glass rounded-3xl p-10">
                <div class="text-5xl mb-6">🌍</div>
                <h3 class="heading-font text-3xl font-semibold mb-4">Our Vision</h3>
                <p class="text-slate-300 text-lg">
                    To build the strongest, most supportive community of modern developers who learn, grow, and ship together.
                </p>
                <div class="mt-10 pt-8 border-t border-white/10">
                    <p class="text-[#00D4FF] font-medium">Join 10,000+ developers already growing with us.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="heading-font text-4xl font-semibold text-center mb-12">Meet the Team</h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="team-card glass rounded-3xl p-6 text-center">
                <div class="w-28 h-28 mx-auto bg-gradient-to-br from-purple-400 to-pink-400 rounded-3xl mb-6"></div>
                <h4 class="font-semibold text-xl">Sarah Chen</h4>
                <p class="text-[#00D4FF] text-sm">Founder &amp; Frontend Engineer</p>
                <p class="text-slate-400 text-sm mt-4">Ex-Vercel. Obsessed with modern CSS and great developer experience.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card glass rounded-3xl p-6 text-center">
                <div class="w-28 h-28 mx-auto bg-gradient-to-br from-cyan-400 to-blue-400 rounded-3xl mb-6"></div>
                <h4 class="font-semibold text-xl">Alex Rivera</h4>
                <p class="text-[#00D4FF] text-sm">Backend &amp; DevOps Lead</p>
                <p class="text-slate-400 text-sm mt-4">Laravel &amp; Node.js expert. Loves teaching system design.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card glass rounded-3xl p-6 text-center">
                <div class="w-28 h-28 mx-auto bg-gradient-to-br from-amber-400 to-orange-400 rounded-3xl mb-6"></div>
                <h4 class="font-semibold text-xl">Marcus Okoro</h4>
                <p class="text-[#00D4FF] text-sm">Content &amp; Career Coach</p>
                <p class="text-slate-400 text-sm mt-4">Helping developers level up and land better opportunities.</p>
            </div>

            <!-- Team Member 4 -->
            <div class="team-card glass rounded-3xl p-6 text-center">
                <div class="w-28 h-28 mx-auto bg-gradient-to-br from-emerald-400 to-teal-400 rounded-3xl mb-6"></div>
                <h4 class="font-semibold text-xl">Priya Sharma</h4>
                <p class="text-[#00D4FF] text-sm">UI/UX Designer</p>
                <p class="text-slate-400 text-sm mt-4">Creating beautiful, intuitive learning experiences.</p>
            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="glass rounded-3xl p-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 text-center">
                <div>
                    <h3 class="text-5xl font-bold text-[#6C63FF]">120+</h3>
                    <p class="text-slate-400 mt-3">In-depth Articles</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold text-[#00D4FF]">10,000+</h3>
                    <p class="text-slate-400 mt-3">Monthly Readers</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold text-purple-400">8</h3>
                    <p class="text-slate-400 mt-3">Categories</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold text-emerald-400">4.98</h3>
                    <p class="text-slate-400 mt-3">Average Rating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="max-w-4xl mx-auto px-6 py-20 text-center">
        <div class="glass rounded-3xl p-16">
            <h2 class="heading-font text-4xl font-semibold mb-6">Ready to grow as a developer?</h2>
            <p class="text-slate-300 text-lg mb-10">Join thousands of developers learning with us.</p>
            <a href="blogs.html" 
               class="inline-block px-10 py-5 bg-gradient-to-r from-[#6C63FF] to-[#00D4FF] font-semibold rounded-3xl text-lg">
                Browse All Articles →
            </a>
        </div>
    </section>

    <?php require 'footer.php' ?>

    <script>
        console.log('%cAbout Page Loaded ✨', 'color:#6C63FF; font-size:14px');
    </script>
</body>
</html>