@php
    $reviewsData = [
        [
            'name' => 'Anthiathia Bert',
            'image' => 'https://randomuser.me/api/portraits/women/44.jpg',
            'role' => 'CEO, Global Rentail Inc',
            'review' =>
                'Hyrabid Technologies delivered our e-commerce marketplace ahead of schedule and exceeded our expectations. Their team was professional, responsive, and truly understood our business needs.',
            'rate' => 5,
        ],
        [
            'name' => 'Cris Nguyen',
            'image' => 'https://randomuser.me/api/portraits/men/32.jpg',
            'role' => 'Blockchain Leader',
            'review' =>
                'The IT consulting services provided by Hyrabid Technologies helped us modernize our legacy systems and significantly improve our operational efficiency. A true technology partner!',
            'rate' => 5,
        ],
        [
            'name' => 'Lynn Berry',
            'image' => 'https://randomuser.me/api/portraits/women/68.jpg',
            'role' => 'Product Manager, DataFlow Systems',
            'review' =>
                'We\'ve been working with Hyrabid for our software development needs for over three years now. Their team is exceptional, delivering high-quality code and innovative solutions consistently.',
            'rate' => 4.5,
        ],
    ];
@endphp

<section id="testimonials" class="py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-[#023F88] animate-fade-in">
            What Our Clients Say
        </h2>
        <p class="mb-12 text-center text-gray-600 mt-3 text-base">
            We've helped numerous businesses achieve their goals through our technology solutions.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($reviewsData as $review)
                @php
                    $keyName = implode('', array_map(fn($word) => strtoupper($word[0]), explode(' ', $review['name'])));
                    $fullStars = floor($review['rate']);
                    $hasHalfStar = $review['rate'] > $fullStars;
                @endphp
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-purple-100 animate-fade-in delay-100">
                    <div class="flex items-center mb-6">
                        <span
                            class="w-12 h-12 rounded-full bg-orange-100 text-orange-700 font-semibold justify-center flex items-center mr-4">
                            {{ $keyName }}
                        </span>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ $review['name'] }}</h4>
                            <div class="flex text-yellow-400">
                                @for ($i = 0; $i < $fullStars; $i++)
                                    <i class="fas fa-star text-xs mr-[3px]"></i>
                                @endfor
                                @if ($hasHalfStar)
                                    <i class="fas fa-star-half-alt text-xs mr-[3px]"></i>
                                @endif
                            </div>
                            {{-- <span class="text-gray-600 text-sm">{{ $review['role'] }}</span> --}}
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"{{ $review['review'] }}"</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
