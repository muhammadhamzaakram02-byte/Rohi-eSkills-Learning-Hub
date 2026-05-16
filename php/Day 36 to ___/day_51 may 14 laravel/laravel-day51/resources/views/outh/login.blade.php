<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ecommerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; overflow: hidden; }
        
        .shape-top { clip-path: polygon(0 0, 100% 0, 100% 40%, 0 85%); background: linear-gradient(135deg, #ff0000 0%, #ff8c00 100%); }
        .shape-bottom { clip-path: polygon(0 60%, 100% 15%, 100% 100%, 0 100%); background: linear-gradient(135deg, #00ff88 0%, #0077ff 100%); }

        .animated-border-wrapper {
            position: relative;
            padding: 4px; /* Line thickness */
            border-radius: 45px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .animated-border-wrapper::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            background: conic-gradient(transparent, transparent, transparent, #00ff88, #ff0000, #0077ff);
            animation: rotateLine 4s linear infinite;
        }

        @keyframes rotateLine {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .inner-card {
            background: white;
            width: 100%;
            height: 100%;
            border-radius: 40px;
            position: relative;
            z-index: 20;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen relative">

    <div class="absolute top-0 left-0 w-full h-64 shape-top z-0"></div>
    <div class="absolute bottom-0 left-0 w-full h-64 shape-bottom z-0"></div>

    <div class="animated-border-wrapper w-96 shadow-2xl">
        <div class="inner-card p-10 min-h-[550px] flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">Login</h2>
            
            <form class="space-y-6">
                <div class="relative border-b-2 border-gray-200 focus-within:border-green-400 transition-colors">
                    <span class="absolute left-0 bottom-2 text-gray-400"><i class="fas fa-user"></i></span>
                    <input type="text" placeholder="Username" class="w-full pl-8 pb-2 outline-none bg-transparent" required>
                </div>

                <div class="relative border-b-2 border-gray-200 focus-within:border-green-400 transition-colors flex items-center">
                    <span class="absolute left-0 bottom-2 text-gray-400"><i class="fas fa-lock"></i></span>
                    <input type="password" placeholder="••••••••" class="w-full pl-8 pb-2 outline-none bg-transparent" required>
                    <button type="submit" class="bg-green-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-500 transition-all shadow-md">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="text-right">
                    <a href="forgot" class="text-sm text-gray-400 hover:text-gray-600">Forgot?</a>
                </div>

                <div class="pt-4">
                    <p class="text-center text-xs text-gray-400 mb-4">Or login with</p>
                    <div class="flex justify-center gap-4">
                        <button type="button" class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-blue-600 hover:bg-blue-50 transition-all shadow-sm">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button type="button" class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-red-500 hover:bg-red-50 transition-all shadow-sm">
                            <i class="fab fa-google"></i>
                        </button>
                    </div>
                </div>

                <div class="pt-6">
                    <a href="register-05" class="inline-flex items-center gap-2 border-2 border-gray-100 rounded-full py-2 px-6 hover:bg-gray-50 transition-all">
                        <span class="text-red-500 font-bold italic">Register</span>
                        <div class="bg-green-400 w-5 h-5 rounded-full flex items-center justify-center text-[10px] text-white">
                            <i class="fas fa-plus"></i>
                        </div>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>