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
            <i class="fa-solid fa-star absolute text-7xl bottom-10 right-20 animate-float" style="animation-delay: 1s"></i>
            <i class="fa-solid fa-heart absolute text-6xl top-20 right-40 animate-float" style="animation-delay: 2s"></i>
        </div>
        <div class="max-w-7xl mx-auto px-4 text-center text-white relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 animate-slide-left">About ShopEase</h1>
            <p class="text-xl max-w-2xl mx-auto animate-slide-right">Your trusted partner for quality products since 2020</p>
        </div>
    </section>

    <section class="py-4 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center text-sm text-gray-600 animate-slide-left">
                <a href="home" class="hover:text-blue-600 transition-colors">Home</a>
                <i class="fa-solid fa-chevron-right mx-2 text-xs"></i>
                <span class="text-blue-600 font-semibold">About Us</span>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-slide-left">
                    <h2 class="text-4xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Our Story</span>
                    </h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Founded in 2020, ShopEase began with a simple mission: to make quality products accessible to everyone at affordable prices. What started as a small online store has grown into a trusted e-commerce destination serving thousands of happy customers worldwide.
                    </p>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        We believe that shopping should be easy, enjoyable, and secure. That's why we carefully curate our product selection, partner with reliable suppliers, and ensure every purchase is backed by our satisfaction guarantee.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Today, we're proud to offer a wide range of products across categories like electronics, fashion, home & living, and sports. But no matter how much we grow, our commitment to quality, value, and customer satisfaction remains unchanged.
                    </p>
                    
                    <div class="grid grid-cols-3 gap-4 mt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">50K+</div>
                            <div class="text-sm text-gray-600">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">10K+</div>
                            <div class="text-sm text-gray-600">Products</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">24/7</div>
                            <div class="text-sm text-gray-600">Support</div>
                        </div>
                    </div>
                </div>
                <div class="relative animate-slide-right">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Our team" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-purple-600/20"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-xl p-4 animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-medal text-2xl text-green-600"></i>
                            </div>
                            <div>
                                <p class="font-bold">Trusted Seller</p>
                                <p class="text-sm text-gray-600">Since 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Our Core Values</span>
            </h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">The principles that guide everything we do</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-all duration-300">
                        <i class="fa-solid fa-heart text-2xl text-blue-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Customer First</h3>
                    <p class="text-gray-600">We prioritize your satisfaction above everything else.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 transition-all duration-300">
                        <i class="fa-solid fa-gem text-2xl text-purple-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Quality Assured</h3>
                    <p class="text-gray-600">Every product meets our high quality standards.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-all duration-300">
                        <i class="fa-solid fa-leaf text-2xl text-green-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sustainability</h3>
                    <p class="text-gray-600">Committed to eco-friendly practices and packaging.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-600 transition-all duration-300">
                        <i class="fa-solid fa-handshake text-2xl text-orange-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Integrity</h3>
                    <p class="text-gray-600">Honest and transparent in all our dealings.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Meet Our Leadership</span>
            </h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">The passionate people behind ShopEase</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="team-member group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="CEO" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Michael Chen</h3>
                        <p class="text-sm opacity-90 mb-2">Founder & CEO</p>
                        <div class="team-social flex gap-3">
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-twitter text-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="COO" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Sarah Johnson</h3>
                        <p class="text-sm opacity-90 mb-2">Chief Operating Officer</p>
                        <div class="team-social flex gap-3">
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-twitter text-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="CTO" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">David Kim</h3>
                        <p class="text-sm opacity-90 mb-2">Chief Technology Officer</p>
                        <div class="team-social flex gap-3">
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-github text-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="CMO" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Emily Rodriguez</h3>
                        <p class="text-sm opacity-90 mb-2">Chief Marketing Officer</p>
                        <div class="team-social flex gap-3">
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-instagram text-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Our Journey</span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Key milestones that shaped who we are today</p>
            
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-blue-600 to-purple-600 hidden md:block"></div>
                
                <div class="space-y-12">
                    <div class="relative flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 md:text-right animate-slide-left">
                            <div class="bg-white rounded-xl shadow-lg p-6">
                                <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold mb-3">2020</span>
                                <h3 class="text-xl font-bold mb-2">The Beginning</h3>
                                <p class="text-gray-600">ShopEase was founded with a vision to make online shopping simple and enjoyable.</p>
                            </div>
                        </div>
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold z-10">1</div>
                        <div class="md:w-1/2 md:text-left animate-slide-right">
                        </div>
                    </div>
                    <div class="relative flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 md:text-right animate-slide-left">
                        </div>
                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold z-10">2</div>
                        <div class="md:w-1/2 md:text-left animate-slide-right">
                            <div class="bg-white rounded-xl shadow-lg p-6">
                                <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-3">2022</span>
                                <h3 class="text-xl font-bold mb-2">10,000 Customers</h3>
                                <p class="text-gray-600">Reached the milestone of 10,000 happy customers and expanded our product range.</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 md:text-right animate-slide-left">
                            <div class="bg-white rounded-xl shadow-lg p-6">
                                <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold mb-3">2023</span>
                                <h3 class="text-xl font-bold mb-2">International Shipping</h3>
                                <p class="text-gray-600">Started shipping globally, bringing ShopEase to customers around the world.</p>
                            </div>
                        </div>
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold z-10">3</div>
                        <div class="md:w-1/2 md:text-left animate-slide-right">
                        </div>
                    </div>
                    <div class="relative flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 md:text-right animate-slide-left">
                        </div>
                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold z-10">4</div>
                        <div class="md:w-1/2 md:text-left animate-slide-right">
                            <div class="bg-white rounded-xl shadow-lg p-6">
                                <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-3">2024</span>
                                <h3 class="text-xl font-bold mb-2">Eco-Friendly Initiative</h3>
                                <p class="text-gray-600">Launched sustainable packaging and partnered with eco-conscious brands.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">What Our Customers Say</span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Don't just take our word for it</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Jessica Lee</h4>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"ShopEase has become my go-to for online shopping. Great products, fast shipping, and excellent customer service!"</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Robert Taylor</h4>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"I love the variety of products and the easy return policy. Highly recommended for anyone looking for quality items."</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Amanda Brooks</h4>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"The team at ShopEase truly cares about their customers. I had an issue with an order and they resolved it immediately."</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="max-w-4xl mx-auto px-4 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Join the ShopEase Family</h2>
            <p class="text-xl mb-8 opacity-90">Be the first to know about new products and exclusive offers</p>
            <div class="flex flex-col sm:flex-row gap-4 max-w-2xl mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white text-gray-800">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Subscribe
                </button>
            </div>
        </div>
    </section>
</main>
@endsection