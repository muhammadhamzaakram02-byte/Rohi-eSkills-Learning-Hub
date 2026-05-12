<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New CSS Features You’ll Actually Use in 2026 • DevSphere</title>
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
        .blog-content h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.75rem;
            margin-top: 2.5rem;
            margin-bottom: 1rem;
        }
        .blog-content p {
            line-height: 1.85;
            margin-bottom: 1.25rem;
        }
        .code-block {
            background: #0A1428;
            border-radius: 16px;
            padding: 1.5rem;
            font-family: ui-monospace, monospace;
            overflow-x: auto;
        }
    </style>
</head>
<body class="bg-[#0F172A] text-[#E2E8F0]">

     <?php include 'navbar.php' ?>

    <div class="max-w-4xl mx-auto px-6 pt-28 pb-20">

        <!-- BLOG HEADER -->
        <div class="mb-10">
            <div class="flex items-center gap-4 mb-6">
                <span class="px-5 py-2 bg-purple-500/20 text-purple-400 text-sm font-medium rounded-3xl">Web Development</span>
                <span class="text-slate-400">•</span>
                <span class="text-slate-400">12 min read</span>
            </div>
            
            <h1 class="heading-font text-5xl md:text-6xl font-bold leading-tight tracking-tighter">
                The New CSS Features You’ll Actually Use in 2026
            </h1>
            
            <div class="flex items-center gap-6 mt-10">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-cyan-400 rounded-2xl"></div>
                    <div>
                        <p class="font-semibold">Sarah Chen</p>
                        <p class="text-sm text-slate-400">Senior Frontend Engineer @ Vercel</p>
                    </div>
                </div>
                <div class="h-10 w-px bg-white/10"></div>
                <div class="text-slate-400">
                    April 28, 2026
                </div>
            </div>
        </div>

        <!-- FEATURED IMAGE -->
        <div class="mb-12 rounded-3xl overflow-hidden border border-white/10">
            <img src="https://picsum.photos/id/1015/1200/700" 
                 alt="CSS Features 2026" 
                 class="w-full h-auto">
        </div>

        <!-- BLOG CONTENT -->
        <article class="blog-content prose prose-invert max-w-none text-lg leading-relaxed">
            
            <h2>Introduction</h2>
            <p>CSS has evolved dramatically in the last few years. What used to require complex JavaScript or heavy frameworks can now be done with pure, modern CSS. Here are the most powerful and practical new features you'll actually use in 2026.</p>

            <h2>Container Queries — The Game Changer</h2>
            <p>Finally, we can style elements based on their parent container size instead of the viewport. This is revolutionary for building truly responsive components.</p>

            <div class="code-block my-8">
                <pre><code>@container card (min-width: 400px) {
  .card-title {
    font-size: 1.5rem;
  }
}</code></pre>
            </div>

            <h2>The Powerful :has() Selector</h2>
            <p>The "parent selector" we've been waiting for. Style an element based on what it contains.</p>
            
            <div class="code-block my-8">
                <pre><code>/* Style a form when it has an invalid input */
form:has(input:invalid) {
  border-color: #ef4444;
}</code></pre>
            </div>

            <h2>Scroll-Driven Animations</h2>
            <p>Amazing animations that trigger based on scroll position — no JavaScript required.</p>

            <h2>Conclusion</h2>
            <p>These new CSS capabilities are not just nice-to-haves — they fundamentally change how we approach frontend development. The future is more performant, maintainable, and exciting than ever.</p>
        </article>

        <!-- TAGS -->
        <div class="mt-16 flex flex-wrap gap-3">
            <span class="px-6 py-3 bg-white/10 rounded-3xl text-sm">#CSS</span>
            <span class="px-6 py-3 bg-white/10 rounded-3xl text-sm">#WebDesign</span>
            <span class="px-6 py-3 bg-white/10 rounded-3xl text-sm">#Frontend</span>
            <span class="px-6 py-3 bg-white/10 rounded-3xl text-sm">#2026</span>
        </div>

        <!-- AUTHOR BOX -->
        <div class="glass rounded-3xl p-8 mt-16 flex flex-col md:flex-row gap-8 items-center">
            <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-cyan-400 rounded-2xl flex-shrink-0"></div>
            <div>
                <h3 class="text-2xl font-semibold">Sarah Chen</h3>
                <p class="text-slate-400 mt-1">Senior Frontend Engineer at Vercel. Passionate about modern CSS, design systems, and developer experience.</p>
                <div class="flex gap-4 mt-6">
                    <button class="text-[#00D4FF] hover:underline text-sm font-medium">Follow on X →</button>
                    <button class="text-[#00D4FF] hover:underline text-sm font-medium">View All Posts</button>
                </div>
            </div>
        </div>

        <!-- RELATED POSTS -->
        <div class="mt-20">
            <h3 class="heading-font text-2xl font-semibold mb-8">Related Articles</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div onclick="window.location.href='blog-details.html'" class="blog-card glass rounded-3xl overflow-hidden cursor-pointer">
                    <img src="https://picsum.photos/id/201/600/340" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h4 class="font-semibold">Mastering Signals in Modern Frameworks</h4>
                        <p class="text-sm text-slate-400 mt-2">Why Signals are replacing traditional state management.</p>
                    </div>
                </div>
                <div onclick="window.location.href='blog-details.html'" class="blog-card glass rounded-3xl overflow-hidden cursor-pointer">
                    <img src="https://picsum.photos/id/180/600/340" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h4 class="font-semibold">Building Beautiful UIs with shadcn/ui</h4>
                        <p class="text-sm text-slate-400 mt-2">The fastest way to create production-grade interfaces.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- COMMENTS SECTION -->
        <div class="mt-20">
            <h3 class="heading-font text-2xl font-semibold mb-8">Discussion (12)</h3>
            
            <div class="glass rounded-3xl p-8">
                <!-- Comment Input -->
                <div class="flex gap-4 mb-10">
                    <div class="w-10 h-10 bg-slate-600 rounded-2xl"></div>
                    <div class="flex-1">
                        <textarea class="w-full bg-white/10 border border-white/20 rounded-2xl p-5 outline-none resize-y min-h-[120px]" 
                                  placeholder="Share your thoughts..."></textarea>
                        <button class="mt-4 px-8 py-3 bg-[#6C63FF] hover:bg-[#5A52FF] rounded-2xl font-medium">
                            Post Comment
                        </button>
                    </div>
                </div>

                <!-- Sample Comments -->
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl"></div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <p class="font-medium">Alex Rivera</p>
                                <p class="text-xs text-slate-500">2 days ago</p>
                            </div>
                            <p class="mt-2 text-slate-300">The :has() selector alone is worth the wait. My forms have never looked better!</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-2xl"></div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <p class="font-medium">Priya Sharma</p>
                                <p class="text-xs text-slate-500">4 days ago</p>
                            </div>
                            <p class="mt-2 text-slate-300">Container queries changed how I build dashboard components. Game changer 🔥</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php require 'footer.php' ?>

    <script>
        console.log('%cBlog Details Page Loaded ✨', 'color:#6C63FF; font-size:14px');
    </script>
</body>
</html>