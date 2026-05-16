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
    <section class="relative py-16 bg-gradient-to-r from-blue-600 to-purple-600 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <i class="fa-solid fa-cube absolute text-8xl top-10 left-10 animate-float"></i>
            <i class="fa-solid fa-tag absolute text-7xl bottom-10 right-20 animate-float" style="animation-delay: 1s"></i>
            <i class="fa-solid fa-star absolute text-6xl top-20 right-40 animate-float" style="animation-delay: 2s"></i>
        </div>
        <div class="max-w-7xl mx-auto px-4 text-center text-white relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 animate-slide-left">Your Cart</h1>
            <p class="text-xl max-w-2xl mx-auto animate-slide-right">Review and update your items before checkout</p>
        </div>
    </section>

    <section class="py-4 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center text-sm text-gray-600 animate-slide-left">
                <a href="index.html" class="hover:text-blue-600 transition-colors">Home</a>
                <i class="fa-solid fa-chevron-right mx-2 text-xs"></i>
                <a href="products.html" class="hover:text-blue-600 transition-colors">Products</a>
                <i class="fa-solid fa-chevron-right mx-2 text-xs"></i>
                <span class="text-blue-600 font-semibold">Shopping Cart</span>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 flex flex-col sm:flex-row gap-6 hover:shadow-2xl transition-all duration-300 animate-slide-left">
                        <div class="sm:w-32 h-32 rounded-lg overflow-hidden bg-gray-100 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                                 alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg font-semibold hover:text-blue-600 transition-colors">Premium Headphones</h3>
                                    <p class="text-sm text-gray-600">Color: Black | Noise Cancelling</p>
                                    <div class="flex items-center mt-1">
                                        <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                        <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                        <i class="fa-solid fa-star-half-alt text-yellow-400 text-sm"></i>
                                        <span class="text-gray-600 text-sm ml-2">4.5</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-bold text-blue-600">$69.99</span>
                                    <span class="text-sm text-gray-400 line-through ml-2">$99.99</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex items-center border rounded-lg w-fit">
                                    <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition-colors cart-decr">-</button>
                                    <span class="px-3 py-1 font-semibold cart-qty">1</span>
                                    <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition-colors cart-incr">+</button>
                                </div>
                                <button class="text-red-500 hover:text-red-700 transition-colors flex items-center gap-1 remove-item">
                                    <i class="fa-regular fa-trash-can"></i>
                                    <span class="text-sm">Remove</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 flex flex-col sm:flex-row gap-6 hover:shadow-2xl transition-all duration-300 animate-slide-left" style="animation-delay: 0.1s">
                        <div class="sm:w-32 h-32 rounded-lg overflow-hidden bg-gray-100 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                                 alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg font-semibold hover:text-blue-600 transition-colors">Smart Watch Series 5</h3>
                                    <p class="text-sm text-gray-600">Color: Silver | 44mm</p>
                                    <div class="flex items-center mt-1">
                                        <i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-regular fa-star text-yellow-400 text-sm"></i>
                                        <span class="text-gray-600 text-sm ml-2">4.0</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-bold text-blue-600">$199.99</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex items-center border rounded-lg w-fit">
                                    <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition-colors cart-decr">-</button>
                                    <span class="px-3 py-1 font-semibold cart-qty">2</span>
                                    <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition-colors cart-incr">+</button>
                                </div>
                                <button class="text-red-500 hover:text-red-700 transition-colors flex items-center gap-1 remove-item">
                                    <i class="fa-regular fa-trash-can"></i>
                                    <span class="text-sm">Remove</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 flex flex-col sm:flex-row gap-6 hover:shadow-2xl transition-all duration-300 animate-slide-left" style="animation-delay: 0.2s">
                        <div class="sm:w-32 h-32 rounded-lg overflow-hidden bg-gray-100 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                                 alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg font-semibold hover:text-blue-600 transition-colors">Running Shoes</h3>
                                    <p class="text-sm text-gray-600">Size: 10 | Color: Blue/White</p>
                                    <div class="flex items-center mt-1">
                                        <i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-solid fa-star text-yellow-400 text-sm"></i><i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                        <span class="text-gray-600 text-sm ml-2">5.0</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-bold text-blue-600">$79.99</span>
                                    <span class="text-sm text-gray-400 line-through ml-2">$129.99</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex items-center border rounded-lg w-fit">
                                    <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition-colors cart-decr">-</button>
                                    <span class="px-3 py-1 font-semibold cart-qty">1</span>
                                    <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition-colors cart-incr">+</button>
                                </div>
                                <button class="text-red-500 hover:text-red-700 transition-colors flex items-center gap-1 remove-item">
                                    <i class="fa-regular fa-trash-can"></i>
                                    <span class="text-sm">Remove</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <a href="products.html" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 transition-colors group">
                            <i class="fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                            Continue Shopping
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 sticky top-24 animate-slide-right">
                        <h2 class="text-2xl font-bold mb-6 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                            Order Summary
                        </h2>
                        
                        <div class="flex justify-between mb-3 text-gray-600">
                            <span>Subtotal (3 items)</span>
                            <span class="font-semibold" id="subtotal">$349.97</span>
                        </div>
                        <div class="flex justify-between mb-3 text-gray-600">
                            <span>Shipping</span>
                            <span class="font-semibold text-green-600">Free</span>
                        </div>
                        <div class="flex justify-between mb-3 text-gray-600">
                            <span>Estimated Tax</span>
                            <span class="font-semibold" id="tax">$28.00</span>
                        </div>
                        
                        <div class="my-4 pt-4 border-t">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Discount Code</label>
                            <div class="flex gap-2">
                                <input type="text" placeholder="Enter code" 
                                       class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all">
                                <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-lg font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                    Apply
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between text-xl font-bold mb-6 pt-4 border-t">
                            <span>Total</span>
                            <span class="text-blue-600" id="total">$377.97</span>
                        </div>

                        <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 rounded-lg font-semibold text-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 mb-3">
                            Proceed to Checkout
                        </button>

                        <div class="flex justify-center gap-3 text-2xl text-gray-400">
                            <i class="fa-brands fa-cc-visa hover:text-blue-600 transition-colors"></i>
                            <i class="fa-brands fa-cc-mastercard hover:text-red-600 transition-colors"></i>
                            <i class="fa-brands fa-cc-amex hover:text-blue-800 transition-colors"></i>
                            <i class="fa-brands fa-cc-paypal hover:text-blue-500 transition-colors"></i>
                        </div>

                        <p class="text-xs text-gray-500 text-center mt-4">
                            <i class="fa-solid fa-lock text-blue-600 mr-1"></i>
                            Secure checkout · 30-day return guarantee
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    You May Also Like
                </span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Leather Bag" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full text-xs animate-pulse">-30%</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold">Leather Bag</h3>
                        <div class="flex text-yellow-400 text-sm"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></div>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xl font-bold text-blue-600">$89.99</span>
                            <span class="text-sm text-gray-400 line-through">$129.99</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1495433981163-4c1bca4b1d2e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Tablet" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold">Android Tablet</h3>
                        <div class="flex text-yellow-400 text-sm"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-alt"></i></div>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xl font-bold text-blue-600">$239.99</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Camera" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold">Instant Camera</h3>
                        <div class="flex text-yellow-400 text-sm"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></div>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xl font-bold text-blue-600">$129.99</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Kid Shirt" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold">Kids Graphic Tee</h3>
                        <div class="flex text-yellow-400 text-sm"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xl font-bold text-blue-600">$19.99</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

