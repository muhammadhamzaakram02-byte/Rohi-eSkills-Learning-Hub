@extends('main')

@section('content')
<div class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center" id="searchModal">
    <div class="bg-white rounded-lg p-6 w-96 animate-slide-bottom">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold">Search Products</h3>
            <button id="closeSearchModal" class="text-gray-500 hover:text-gray-700">
                <i class="fa-solid fa-times text-2xl"></i>
            </button>
        </div>
        <div class="relative">
            <input type="text" placeholder="What are you looking for?" 
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all">
            <button class="absolute right-2 top-2 text-blue-600">
                <i class="fa-solid fa-search"></i>
            </button>
        </div>
    </div>
</div>
<main>
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1950&q=80" 
                 alt="Hero Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-purple-900/90"></div>
        </div>

        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-slide-left">
                Welcome to 
                <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                    ShopEase
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 animate-slide-right">
                Discover Amazing Products at Unbeatable Prices
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-bottom">
                <a href="products.html" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                    Shop Now
                </a>
                <a href="#featured" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 transform hover:scale-105">
                    Explore More
                </a>
            </div>
        </div>

        <div class="absolute bottom-10 left-10 animate-float">
            <i class="fa-solid fa-tag text-4xl text-white opacity-50"></i>
        </div>
        <div class="absolute top-20 right-20 animate-float" style="animation-delay: 1s;">
            <i class="fa-solid fa-gift text-4xl text-white opacity-50"></i>
        </div>
        <div class="absolute bottom-20 right-40 animate-float" style="animation-delay: 2s;">
            <i class="fa-solid fa-star text-4xl text-white opacity-50"></i>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Why Choose Us
                </span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-all duration-300">
                        <i class="fa-solid fa-truck-fast text-3xl text-blue-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Free Shipping</h3>
                    <p class="text-gray-600">On orders over $50</p>
                </div>
                <div class="text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 transition-all duration-300">
                        <i class="fa-solid fa-rotate-left text-3xl text-purple-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Easy Returns</h3>
                    <p class="text-gray-600">30-day return policy</p>
                </div>
                <div class="text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-all duration-300">
                        <i class="fa-solid fa-lock text-3xl text-green-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Secure Payment</h3>
                    <p class="text-gray-600">100% secure transactions</p>
                </div>
                <div class="text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-all duration-300">
                        <i class="fa-solid fa-headset text-3xl text-red-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                    <p class="text-gray-600">Dedicated customer service</p>
                </div>
            </div>
        </div>
    </section>

    <section id="featured" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Featured Products
                </span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Discover our most popular items</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full text-sm animate-pulse">
                            Sale
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button class="bg-white text-blue-600 px-4 py-2 rounded-full font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-105">
                                Quick View
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Premium Headphones</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star-half-alt text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.5)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$99.99</span>
                            <span class="text-gray-400 line-through">$149.99</span>
                        </div>
                        <button class="w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-green-500 text-white px-2 py-1 rounded-full text-sm">
                            New
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Smart Watch</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-regular fa-star text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$199.99</span>
                        </div>
                        <button class="w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Running Shoes</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(5.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$79.99</span>
                            <span class="text-gray-400 line-through">$129.99</span>
                        </div>
                        <button class="w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full text-sm animate-pulse">
                            -30%
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Leather Bag</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-regular fa-star text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$69.99</span>
                            <span class="text-gray-400 line-through">$99.99</span>
                        </div>
                        <button class="w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="product" class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    View All Products
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Shop by Category
                </span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Find exactly what you're looking for</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="relative group overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Category" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                        <div class="p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">Fashion</h3>
                            <p class="mb-4">50+ items</p>
                            <button class="bg-white text-blue-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 transform translate-y-full group-hover:translate-y-0">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Category" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                        <div class="p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">Electronics</h3>
                            <p class="mb-4">30+ items</p>
                            <button class="bg-white text-blue-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 transform translate-y-full group-hover:translate-y-0">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Category" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                        <div class="p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">Home & Living</h3>
                            <p class="mb-4">40+ items</p>
                            <button class="bg-white text-blue-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 transform translate-y-full group-hover:translate-y-0">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Category" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                        <div class="p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">Sports</h3>
                            <p class="mb-4">25+ items</p>
                            <button class="bg-white text-blue-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 transform translate-y-full group-hover:translate-y-0">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="max-w-7xl mx-auto px-4 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 animate-pulse">Special Summer Sale!</h2>
            <p class="text-xl mb-8">Get up to 50% off on selected items</p>
            <div class="flex justify-center space-x-4 mb-8">
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <span class="text-3xl font-bold" id="days">00</span>
                    <span class="block">Days</span>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <span class="text-3xl font-bold" id="hours">00</span>
                    <span class="block">Hours</span>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <span class="text-3xl font-bold" id="minutes">00</span>
                    <span class="block">Minutes</span>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <span class="text-3xl font-bold" id="seconds">00</span>
                    <span class="block">Seconds</span>
                </div>
            </div>
            <a href="products.html" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                Shop the Sale
            </a>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    What Our Customers Say
                </span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Real reviews from real customers</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <div class="flex">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Amazing quality products and fast shipping! Will definitely shop again."</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Michael Chen</h4>
                            <div class="flex">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star-half-alt text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Great customer service and the products exceeded my expectations."</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Emily Davis</h4>
                            <div class="flex">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-regular fa-star text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Love the variety of products and the easy return policy. Highly recommended!"</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Subscribe to Our Newsletter
                </span>
            </h2>
            <p class="text-gray-600 mb-8">Get the latest updates on new products and upcoming sales</p>
            <div class="flex flex-col sm:flex-row gap-4 max-w-2xl mx-auto">
                <input type="email" placeholder="Enter your email" 
                       class="flex-1 px-6 py-3 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all">
                <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Subscribe
                </button>
            </div>
        </div>
    </section>
</main>
@endsection
