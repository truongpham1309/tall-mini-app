@php
    $technologiesData = [
        [
            'icon' => 'fab fa-react',
            'title' => 'Frontend Development',
            'description' => 'React, Vue, Angular, Next.js',
        ],
        [
            'icon' => 'fas fa-server',
            'title' => 'Backend Development',
            'description' => 'Node.js, Java, Python, .NET',
        ],
        [
            'icon' => 'fas fa-database',
            'title' => 'Databases',
            'description' => 'SQL, MongoDB, Redis, PostgreSQL',
        ],
        [
            'icon' => 'fas fa-cloud',
            'title' => 'Cloud Services',
            'description' => 'AWS, Azure, Google Cloud',
        ],
        [
            'icon' => 'fas fa-mobile-alt',
            'title' => 'Mobile Development',
            'description' => 'React Native, Flutter, iOS, Android',
        ],
        [
            'icon' => 'fas fa-cogs',
            'title' => 'DevOps',
            'description' => 'Docker, Kubernetes, CI/CD',
        ],
        [
            'icon' => 'fas fa-brain',
            'title' => 'AI & Machine Learning',
            'description' => 'TensorFlow, PyTorch, NLP',
        ],
        [
            'icon' => 'fas fa-link',
            'title' => 'Blockchain',
            'description' => 'Ethereum, Smart Contracts, DApps',
        ],
    ];
@endphp

<section id="benefits" class="py-8 md:py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-[#023F88] animate-fade-in">
            Technologies We Master
        </h2>
        <p class="mb-12 text-center text-gray-600 text-base">
            We leverage cutting-edge technologies to build scalable, secure, and high-performance solutions.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($technologiesData as $stat)
                <div
                    class="bg-white text-center p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-purple-100 animate-fade-in delay-100">
                    <div
                        class="flex items-center mx-auto text-4xl justify-center h-12 w-12 mb-3 rounded-md text-[#F6571D]">
                        <i class="{{ $stat['icon'] }} h-8 w-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#023F88]">{{ $stat['title'] }}</h3>
                    <p class="mt-2 text-sm text-gray-500">{{ $stat['description'] }}</p>
                </div>
            @endforeach
        </div>

        <h2 class="text-3xl md:text-2xl font-bold text-center text-[#023F88] mt-10 animate-fade-in">
            Industries We Serve
        </h2>
        <div
            class="flex justify-center flex-wrap md:flex-nowrap gap-3 overflow-x-auto whitespace-nowrap px-4 py-2 mt-2">
            @php
                $industries = [
                    'E-Commerce',
                    'FinTech',
                    'Healthcare',
                    'Logistics',
                    'Education',
                    'Real Estate',
                    'Manufacturing',
                    'Entertainment',
                ];
            @endphp
            @foreach ($industries as $industry)
                <span class="bg-[#FDF1D8] text-[#F6571D] px-4 py-1 rounded-full text-base font-medium">
                    {{ $industry }}
                </span>
            @endforeach
        </div>
    </div>
</section>
