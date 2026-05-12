<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us • DevSphere</title>
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
        .input-field {
            transition: all 0.3s ease;
        }
        .input-field:focus {
            border-color: #6C63FF;
            box-shadow: 0 0 0 4px rgba(108, 99, 255, 0.15);
        }
    </style>
</head>
<body class="bg-[#0F172A] text-[#E2E8F0]">

    <?php include 'navbar.php' ?>

    <!-- HEADER -->
    <section class="pt-28 pb-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="heading-font text-6xl font-bold mb-4">Get in Touch</h1>
            <p class="text-xl text-slate-400">Have questions? Want to collaborate? We'd love to hear from you.</p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-6 pb-20 grid md:grid-cols-5 gap-10">

        <!-- CONTACT FORM -->
        <div class="md:col-span-3">
            <div class="glass rounded-3xl p-10 md:p-12">
                <h2 class="heading-font text-3xl font-semibold mb-8">Send us a Message</h2>
                
                <form id="contactForm" onsubmit="handleSubmit(event)" class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Full Name</label>
                            <input type="text" id="name" required
                                   class="input-field w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email Address</label>
                            <input type="email" id="email" required
                                   class="input-field w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">Subject</label>
                        <input type="text" id="subject" 
                               class="input-field w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none"
                               placeholder="e.g. Collaboration, Feedback, Question">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">Message</label>
                        <textarea id="message" rows="8" required
                                  class="input-field w-full bg-white/10 border border-white/20 rounded-3xl px-6 py-5 outline-none resize-y"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full py-5 bg-gradient-to-r from-[#6C63FF] to-[#00D4FF] font-semibold rounded-3xl text-lg hover:scale-[1.02] transition-all">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- CONTACT INFO -->
        <div class="md:col-span-2">
            <div class="glass rounded-3xl p-10 md:p-12 h-full flex flex-col">
                <h2 class="heading-font text-3xl font-semibold mb-10">Contact Information</h2>
                
                <div class="space-y-10 flex-1">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#6C63FF]/20 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0">
                            ✉️
                        </div>
                        <div>
                            <p class="font-medium">Email</p>
                            <a href="mailto:hello@devsphere.blog" class="text-[#00D4FF] hover:underline">hello@devsphere.blog</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#00D4FF]/20 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0">
                            📞
                        </div>
                        <div>
                            <p class="font-medium">Phone</p>
                            <a href="tel:+923001234567" class="text-slate-300">+92 300 1234567</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-emerald-500/20 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0">
                            📍
                        </div>
                        <div>
                            <p class="font-medium">Location</p>
                            <p class="text-slate-300">Lahore, Punjab, Pakistan</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="mt-12 pt-8 border-t border-white/10">
                    <p class="font-medium mb-4">Follow Us</p>
                    <div class="flex gap-6 text-2xl">
                        <a href="#" class="hover:text-[#00D4FF] transition-colors"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="hover:text-[#00D4FF] transition-colors"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="hover:text-[#00D4FF] transition-colors"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="hover:text-[#00D4FF] transition-colors"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAP SECTION -->
    <section class="max-w-7xl mx-auto px-6 pb-20">
        <div class="glass rounded-3xl overflow-hidden">
            <div class="bg-slate-900 h-96 flex items-center justify-center relative">
                <!-- Placeholder Map -->
                <div class="text-center">
                    <div class="text-6xl mb-4">📍</div>
                    <p class="text-xl font-medium">Lahore, Pakistan</p>
                    <p class="text-slate-400 mt-2">Our team is based here</p>
                </div>
                
                <!-- Fake Google Maps style overlay -->
                <div class="absolute inset-0 bg-[radial-gradient(#6C63FF_1px,transparent_1px)] [background-size:40px_40px] opacity-10"></div>
                
                <div class="absolute bottom-6 left-6 bg-black/70 text-xs px-4 py-3 rounded-2xl flex items-center gap-3">
                    <div class="w-3 h-3 bg-emerald-400 rounded-full animate-pulse"></div>
                    <span>DevSphere HQ</span>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php' ?>

    <script>
        function handleSubmit(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            
            if (name) {
                alert(`Thank you, ${name}! Your message has been received. We'll get back to you soon. ✨`);
                document.getElementById('contactForm').reset();
            }
        }

        console.log('%cContact Page Loaded ✨', 'color:#6C63FF; font-size:14px');
    </script>
</body>
</html>