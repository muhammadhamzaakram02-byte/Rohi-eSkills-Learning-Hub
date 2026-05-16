<nav class="bg-white shadow-lg sticky top-0 z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-2 animate-slide-left">
                <i class="fa-solid fa-cube text-3xl text-blue-600"></i>
                <span class="font-bold text-2xl bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    ShopEase
                </span>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="/home" class="text-gray-700 hover:text-blue-600 transition-all duration-300 hover:scale-110">Home</a>
                <a href="/product" class="text-gray-700 hover:text-blue-600 transition-all duration-300 hover:scale-110">Products</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 transition-all duration-300 hover:scale-110">About</a>
                <a href="{{ route('x') }}" class="text-gray-700 hover:text-blue-600 transition-all duration-300 hover:scale-110">Contact</a>
            </div>
 
            <div class="flex items-center space-x-4 animate-slide-right">
                <button class="relative hover-scale" id="searchBtn">
                    <i class="fa-solid fa-search text-xl text-gray-700 hover:text-blue-600 transition-colors"></i>
                </button>
                <button class="relative hover-scale" id="cartBtn" onclick="window.location.href='cart'">
                    <i class="fa-solid fa-bag-shopping text-xl text-gray-700 hover:text-blue-600 transition-colors"></i>
                    <span class="absolute -top-2 -right-2 bg-blue-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center animate-pulse">
                        3
                    </span>
                </button>
                <button class="relative hover-scale" id="userBtn" onclick="window.location.href='{{ route('log') }}'">
                    <i class="fa-solid fa-user text-xl text-gray-700 hover:text-blue-600 transition-colors"></i>
                </button>
                <button class="md:hidden hover-scale" id="mobileMenuBtn">
                    <i class="fa-solid fa-bars text-2xl text-gray-700"></i>
                </button>
            </div>
        </div>
    </div> 

    <div class="hidden md:hidden bg-white border-t" id="mobileMenu">
        <div class="px-4 py-2 space-y-2">
            <a href="/home" class="block py-2 text-gray-700 hover:text-blue-600 transition-colors">Home</a>
            <a href="/product" class="block py-2 text-gray-700 hover:text-blue-600 transition-colors">Products</a>
            <a href="/about" class="block py-2 text-gray-700 hover:text-blue-600 transition-colors">About</a>
            <a href="{{ route('x') }}" class="block py-2 text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
        </div>
    </div>
</nav>