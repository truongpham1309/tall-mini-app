@php
    $featuresData = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'AI-Powered Personalized Shopping Experience',
                'description' => 'Our advanced AI analyzes user behavior to provide personalized product recommendations and shopping experiences tailored to individual preferences.',
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'Smart Shopping Chatbot',
                'description' => 'Find products quickly and easily with our AIpowered chatbot that understands natural language and helps you navigate our vast catalog.',
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Secure Payment Methods',
                'description' => 'Multiple payment options with enterprise-grade security protocols ensure your transactions are always safe and protected.',
            ],
            [
                'icon' => 'fas fa-truck-fast',
                'title' => 'Multi-Partner Logistics',
                'description' => 'Integration with multiple delivery partners ensures ultra-fast shipping options and real-time tracking for all your orders.',
            ],
            [
                'icon' => 'fas fa-video',
                'title' => 'Livestream Shopping',
                'description' => 'Engage with customers in real-time through our integrated livestream shopping tools, boosting engagement and sales conversion.',
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Advanced Analytics',
                'description' => 'Comprehensive data analytics and reporting tools help sellers optimize inventory, pricing, and marketing strategies for maximum revenue.',
            ],
        ];
@endphp
<section id="features" class="py-8 md:py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-[#023F88] animate-fade-in">Advanced Technology
            Features</h2>
        <p class="text-gray-600 text-center mb-10 text-base">
            Our cutting-edge platform combines the latest technologies to deliver an exceptional e-commerce experience for both buyers and sellers
        </p>
        <div class="mt-10">
            <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 lg:grid-cols-3 items-stretch">
                @foreach ($featuresData as $f)
                    <div class="feature-card shadow-lg hover:shadow-xl relative group bg-white p-6 rounded-lg animate-fade-in delay-100 h-auto md:h-[270px] flex flex-col">
                        <div class="md:group-hover:-translate-y-3 duration-500 flex-1 flex flex-col">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-[#F6571D] text-white">
                                <i class="{{ $f['icon'] }} text-xl"></i>
                            </div>
                            <div class="mt-5 flex-1 flex flex-col">
                                <h3 class="text-lg leading-6 font-semibold text-[#023F88]">{{ $f['title'] }}</h3>
                                <p class="mt-2 text-base text-gray-500">{{ $f['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
