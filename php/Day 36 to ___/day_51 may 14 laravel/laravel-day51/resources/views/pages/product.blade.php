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
    <section class="relative py-20 bg-gradient-to-r from-blue-600 to-purple-600 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <i class="fa-solid fa-cube absolute text-8xl top-10 left-10 animate-float"></i>
            <i class="fa-solid fa-tag absolute text-7xl bottom-10 right-20 animate-float" style="animation-delay: 1s"></i>
            <i class="fa-solid fa-star absolute text-6xl top-20 right-40 animate-float" style="animation-delay: 2s"></i>
        </div>
        <div class="max-w-7xl mx-auto px-4 text-center text-white relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 animate-slide-left">Our Products</h1>
            <p class="text-xl max-w-2xl mx-auto animate-slide-right">Discover the latest trends and timeless classics. Quality you can trust.</p>
        </div>
    </section>

    <section class="py-8 bg-white border-b sticky top-16 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap gap-2">
                    <button class="filter-chip active px-5 py-2 rounded-full border border-blue-600 text-blue-600 font-medium hover:bg-blue-600 hover:text-white transition-all duration-300" data-category="all">All</button>
                    <button class="filter-chip px-5 py-2 rounded-full border border-gray-300 text-gray-700 font-medium hover:border-blue-600 hover:text-blue-600 transition-all duration-300" data-category="electronics">Electronics</button>
                    <button class="filter-chip px-5 py-2 rounded-full border border-gray-300 text-gray-700 font-medium hover:border-blue-600 hover:text-blue-600 transition-all duration-300" data-category="fashion">Fashion</button>
                    <button class="filter-chip px-5 py-2 rounded-full border border-gray-300 text-gray-700 font-medium hover:border-blue-600 hover:text-blue-600 transition-all duration-300" data-category="home">Home & Living</button>
                    <button class="filter-chip px-5 py-2 rounded-full border border-gray-300 text-gray-700 font-medium hover:border-blue-600 hover:text-blue-600 transition-all duration-300" data-category="sports">Sports</button>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Sort by:</span>
                    <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <option>Popularity</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <p class="text-gray-600 animate-slide-left">Showing <span class="font-semibold" id="productCount">12</span> products</p>
                <div class="flex gap-2 animate-slide-right">
                    <button class="p-2 border rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                        <i class="fa-solid fa-grid-2"></i>
                    </button>
                    <button class="p-2 border rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                        <i class="fa-solid fa-list"></i>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="productGrid">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="electronics">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Headphones" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full text-sm animate-pulse">-30%</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Premium Headphones</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star-half-alt text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.5)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$69.99</span>
                            <span class="text-gray-400 line-through">$99.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="electronics">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Smart Watch" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-green-500 text-white px-2 py-1 rounded-full text-sm">New</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Smart Watch Series 5</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-regular fa-star text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$199.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="fashion">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Running Shoes" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full text-sm animate-pulse">Sale</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Running Shoes</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(5.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$79.99</span>
                            <span class="text-gray-400 line-through">$129.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="fashion">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Leather Bag" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Leather Weekend Bag</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-regular fa-star text-yellow-400"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$89.99</span>
                            <span class="text-gray-400 line-through">$149.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="home">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Coffee Maker" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-green-500 text-white px-2 py-1 rounded-full text-sm">New</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Smart Coffee Maker</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-regular fa-star"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$129.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="electronics">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1495433981163-4c1bca4b1d2e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Tablet" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full text-sm animate-pulse">-20%</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Android Tablet 10"</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star-half-alt"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.3)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$239.99</span>
                            <span class="text-gray-400 line-through">$299.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="sports">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Yoga Mat" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Eco-Friendly Yoga Mat</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-regular fa-star"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.2)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$39.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="fashion">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="T-Shirt" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-green-500 text-white px-2 py-1 rounded-full text-sm">New</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Cotton Casual T-Shirt</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-600 text-sm ml-2">(5.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$24.99</span>
                            <span class="text-gray-400 line-through">$39.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="home">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1578496781307-30c2b531ceb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Desk Lamp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">LED Desk Lamp</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-regular fa-star"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.0)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$49.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="sports">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dumbbells" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full text-sm animate-pulse">-15%</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Adjustable Dumbbells</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star-half-alt"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.4)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$89.99</span>
                            <span class="text-gray-400 line-through">$105.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="electronics">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1600086827875-a63b01f1335c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Camera" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Compact Digital Camera</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-regular fa-star"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.1)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$349.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group" data-category="fashion">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Sunglasses" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Designer Sunglasses</h3>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star text-yellow-400"></i><i class="fa-solid fa-star-half-alt"></i>
                            <span class="text-gray-600 text-sm ml-2">(4.7)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$59.99</span>
                            <span class="text-gray-400 line-through">$89.99</span>
                        </div>
                        <button class="add-to-cart-btn w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 space-x-2">
                <button class="w-10 h-10 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-all duration-300">1</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">2</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">3</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">4</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
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