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
            <i class="fa-solid fa-headset absolute text-8xl top-10 left-10 animate-float"></i>
            <i class="fa-solid fa-envelope absolute text-7xl bottom-10 right-20 animate-float" style="animation-delay: 1s"></i>
            <i class="fa-solid fa-phone absolute text-6xl top-20 right-40 animate-float" style="animation-delay: 2s"></i>
        </div>
        <div class="max-w-7xl mx-auto px-4 text-center text-white relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 animate-slide-left">Get In Touch</h1>
            <p class="text-xl max-w-2xl mx-auto animate-slide-right">We'd love to hear from you. Reach out anytime!</p>
        </div>
    </section>

    <section class="py-4 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center text-sm text-gray-600 animate-slide-left">
                <a href="index.html" class="hover:text-blue-600 transition-colors">Home</a>
                <i class="fa-solid fa-chevron-right mx-2 text-xs"></i>
                <span class="text-blue-600 font-semibold">Contact Us</span>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-50 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-all duration-300">
                        <i class="fa-solid fa-phone text-2xl text-blue-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-1">+1 (555) 123-4567</p>
                    <p class="text-gray-600">Mon-Fri, 9am-6pm</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 transition-all duration-300">
                        <i class="fa-solid fa-envelope text-2xl text-purple-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-1">support@shopease.com</p>
                    <p class="text-gray-600">sales@shopease.com</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-all duration-300">
                        <i class="fa-solid fa-location-dot text-2xl text-green-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Visit Us</h3>
                    <p class="text-gray-600 mb-1">123 Commerce St</p>
                    <p class="text-gray-600">New York, NY 10001</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-600 transition-all duration-300">
                        <i class="fa-solid fa-comment-dots text-2xl text-orange-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Live Chat</h3>
                    <p class="text-gray-600 mb-1">24/7 Support</p>
                    <p class="text-gray-600">Instant response</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 animate-slide-left">
                    <h2 class="text-3xl font-bold mb-2">
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Send Us a Message</span>
                    </h2>
                    <p class="text-gray-600 mb-6">We'll get back to you within 24 hours</p>
                    
                    <form id="contactForm" class="space-y-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                                   placeholder="John Doe" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                                   placeholder="john@example.com" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                                   placeholder="How can we help?" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea rows="5" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all resize-none"
                                      placeholder="Write your message here..." required></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-lg font-semibold text-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fa-regular fa-paper-plane mr-2"></i>
                            Send Message
                        </button>
                    </form>
                    
                    <div id="formSuccess" class="hidden mt-4 p-4 bg-green-100 text-green-700 rounded-lg text-center">
                        <i class="fa-regular fa-circle-check mr-2"></i>
                        Thank you! Your message has been sent.
                    </div>
                </div>
                
                <div class="space-y-6 animate-slide-right">
                    <div class="map-placeholder rounded-xl shadow-lg overflow-hidden relative h-64 md:h-80">
                        <div class="absolute inset-0 flex items-center justify-center z-10">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg p-4 text-center">
                                <i class="fa-solid fa-location-dot text-3xl text-blue-600 mb-2"></i>
                                <p class="font-semibold">ShopEase Headquarters</p>
                                <p class="text-sm text-gray-600">123 Commerce St, New York, NY 10001</p>
                                <a href="#" class="inline-block mt-2 text-blue-600 hover:text-blue-800 text-sm">
                                    <i class="fa-regular fa-map"></i> Get Directions
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-bold mb-4 flex items-center gap-2">
                            <i class="fa-regular fa-clock text-blue-600"></i>
                            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Business Hours</span>
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center pb-2 border-b border-gray-100">
                                <span class="font-medium">Monday - Friday</span>
                                <span class="text-gray-600">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-2 border-b border-gray-100">
                                <span class="font-medium">Saturday</span>
                                <span class="text-gray-600">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-2 border-b border-gray-100">
                                <span class="font-medium">Sunday</span>
                                <span class="text-gray-600">Closed</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium">24/7 Live Chat</span>
                                <span class="text-green-600"><i class="fa-regular fa-circle-check"></i> Available</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-bold mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-share-nodes text-blue-600"></i>
                            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Follow Us</span>
                        </h3>
                        <p class="text-gray-600 mb-4">Stay connected on social media for updates and offers</p>
                        <div class="flex gap-4 justify-center">
                            <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-110">
                                <i class="fa-brands fa-facebook-f text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-110">
                                <i class="fa-brands fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-110">
                                <i class="fa-brands fa-instagram text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-110">
                                <i class="fa-brands fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-110">
                                <i class="fa-brands fa-youtube text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Frequently Asked Questions</span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Quick answers to common questions</p>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-semibold text-lg">What is your return policy?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden p-5 border-t border-gray-200 bg-white">
                        <p class="text-gray-600">We offer a 30-day return policy on all unused items in original packaging. Simply contact our support team to initiate a return. Refunds are processed within 5-7 business days after we receive the item.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-semibold text-lg">How long does shipping take?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden p-5 border-t border-gray-200 bg-white">
                        <p class="text-gray-600">Standard shipping takes 3-5 business days within the US. Express shipping (2-3 days) and overnight options are available at checkout. International shipping typically takes 7-14 business days.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-semibold text-lg">Do you ship internationally?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden p-5 border-t border-gray-200 bg-white">
                        <p class="text-gray-600">Yes, we ship to most countries worldwide. Shipping costs and delivery times vary by location. Duties and taxes may apply and are the responsibility of the customer.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-semibold text-lg">How can I track my order?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden p-5 border-t border-gray-200 bg-white">
                        <p class="text-gray-600">Once your order ships, you'll receive a tracking number via email. You can also track your order by logging into your account on our website and viewing your order history.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-semibold text-lg">What payment methods do you accept?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden p-5 border-t border-gray-200 bg-white">
                        <p class="text-gray-600">We accept Visa, Mastercard, American Express, Discover, PayPal, Apple Pay, and Google Pay. All transactions are secure and encrypted.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <p class="text-gray-600">Still have questions? <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Contact our support team</a></p>
            </div>
        </div>
    </section>
</main>

@endsection