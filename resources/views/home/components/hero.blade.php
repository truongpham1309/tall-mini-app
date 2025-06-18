@php
    $heroData = [
        'heading' => 'Powering Digital Innovation Through Technology Excellence',
        'subheading' =>
            'We deliver cutting-edge software solutions, expert IT consulting, and advanced marketplace platforms to accelerate your business growth.',
    ];
@endphp

<section id="hero" class="relative py-14 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div class="animate-fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#023F88] mb-6">{{ $heroData['heading'] }}</h1>
                <p class="text-lg md:text-xl text-gray-700 mb-8">{{ $heroData['subheading'] }}</p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md">
                    <button
                        class="px-8 py-3 rounded-full font-medium shadow-lg bg-[#F6571D] text-white border border-[#F6571D] transition duration-300">Get
                        Started</button>
                    <button
                        class="text-black px-8 py-3 rounded-full font-medium shadow-lg border border-[#F6571D] transition duration-300">Explore
                        Services</button>
                </div>
            </div>
            <div class="hidden lg:block animate-fade-in delay-200">
                <img src="{{ asset('images/banner-hero.webp') }}" alt="Happy customer with packages"
                    class="rounded-xl shadow-2xl" />
            </div>
        </div>
    </div>
</section>
