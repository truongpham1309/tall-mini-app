@php
$steps = [
    [
        'title' => 'Discovery & Analysis',
        'description' => 'We begin by understanding your business needs, goals, and challenges to define the project scope and requirements.',
    ],
    [
        'title' => 'Planning & Design',
        'description' => 'Our team creates detailed project plans and designs the architecture and user experience of your solution.',
    ],
    [
        'title' => 'Development & Testing',
        'description' => 'We develop your solution using agile methodologies and conduct thorough testing to ensure quality and performance.',
    ],
    [
        'title' => 'Deployment & Support',
        'description' => 'We deploy your solution to production and provide ongoing maintenance and support to ensure continuous performance.',
    ],
];
@endphp
<section id="how-it-works" class="py-8 md:py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-3 lg:px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-[#023F88] animate-fade-in">
            How We Work
        </h2>
        <p class="text-gray-600 text-center mb-10 text-base mt-3">
            Our streamlined process ensures efficient delivery of high-quality solutions that meet your business objectives.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach ($steps as $index => $step)
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-purple-100 animate-fade-in delay-100">
                    <h3 class="text-xl font-bold text-[#023F88] mb-3">
                        {{ $index + 1 }}. {{ $step['title'] }}
                    </h3>
                    <p class="text-gray-600">{{ $step['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
