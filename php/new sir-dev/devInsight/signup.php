<?php
session_start();
if (isset($_SESSION["user_not_found"])) {
    $msg = $_SESSION["user_not_found"];
    unset($_SESSION["user_not_found"]);
} else {
    $msg = "";
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up • DevSphere</title>
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
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
    </style>
</head>
<body class="bg-[#0F172A] min-h-screen flex items-center justify-center">

    <div class="max-w-md w-full px-6">
        <!-- Logo -->
        <div class="flex justify-center mb-10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-gradient-to-br from-[#6C63FF] to-[#00D4FF] rounded-3xl flex items-center justify-center text-white font-bold text-4xl">D</div>
                <h1 class="heading-font text-4xl font-semibold tracking-tight">DevSphere</h1>
            </div>
        </div>

        <div class="glass rounded-3xl p-10 shadow-2xl">
            <h2 class="heading-font text-3xl font-semibold text-center mb-2">Join DevSphere</h2>
            <p class="text-slate-400 text-center mb-8">Create your account and start learning</p>

            <form id="signupForm"  class="space-y-6" action="signup_php.php" method="POST">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-2"  >First Name</label>
                        <input type="text" required name ="firstName"
                               class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none focus:border-[#6C63FF]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Last Name</label>
                        <input type="text" required name="lastName"
                               class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none focus:border-[#6C63FF]">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Email Address</label>
                    <input type="email" required name="email"
                           class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none focus:border-[#6C63FF]">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="pass1" required name="password"
                               class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none focus:border-[#6C63FF]">
                        <button type="button" onclick="togglePassword(this)" 
                                class="absolute right-5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- <div>
                    <label class="block text-sm font-medium mb-2">Confirm Password</label>
                    <div class="relative">
                        <input type="password" id="pass2" required name="confirmPassword"
                               class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-4 outline-none focus:border-[#6C63FF]">  
                    </div>
                </div>  -->

                <button type="submit"
                        class="w-full py-4 bg-gradient-to-r from-[#6C63FF] to-[#00D4FF] font-semibold rounded-2xl text-lg hover:scale-[1.02] transition-all">
                    Create Account 
                </button>
            </form>

            <div class="text-center mt-8">
                <p class="text-slate-400">
                    <?php if ($msg) { echo "<span class='text-red-500'>$msg</span><br>"; } ?>
                    Already have an account? 
                    <a href="login.php" class="text-[#6C63FF] hover:underline font-medium">Sign In</a>
                </p>
            </div>
        </div>

        <p class="text-center text-slate-500 text-xs mt-8">© 2026 DevSphere</p>
    </div>

    <script>
        function togglePassword(btn) {
            const input = btn.previousElementSibling;
            if (input.type === "password") {
                input.type = "text";
                btn.innerHTML = `<i class="fa-solid fa-eye-slash"></i>`;
            } else {
                input.type = "password";
                btn.innerHTML = `<i class="fa-solid fa-eye"></i>`;
            }
        }

        function handleSignup(e) {
            e.preventDefault();
            alert("✅ Account Created Successfully! (Frontend Demo)");
            // window.location.href = "login.html";
        }
    </script>
</body>
</html>