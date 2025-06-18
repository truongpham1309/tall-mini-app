@php
    $faqData = [
        [
            'question' => 'What services does HYRABID Solution offer?',
            'answer' =>
                'We specialize in custom software development, AI-powered solutions, and Blockchain integration. Whether you\'re building an enterprise app or want to leverage AI in your business, we’ve got you covered.',
        ],
        [
            'question' => 'How can AI benefit my business?',
            'answer' =>
                'AI can help automate tasks, improve decision-making, enhance customer experiences, and uncover new opportunities through data analysis. We offer tailored AI solutions that align with your business goals.',
        ],
        [
            'question' => 'How do I register for a Hyrabid account?',
            'answer' =>
                'You can register for a free Hyrabid account through the website or mobile app. Simply fill in basic information and verify your email to start shopping immediately.',
        ],
        [
            'question' => 'How does Hyrabid\'s AI work?',
            'answer' =>
                'Our AI analyzes your shopping behavior, search history, and preferences to recommend the most suitable products for you. The system continuously learns and improves based on your interactions with the platform.',
        ],
        [
            'question' => 'What payment methods does Hyrabid support?',
            'answer' => 'Hyrabid supports various payment methods including credit/debit cards, e-wallets, bank transfers, COD (cash on delivery), and many other methods.',
        ],
        [
            'question' => 'How do I become a seller on Hyrabid?',
            'answer' =>
                'To become a seller, you need to register for a Shop account, complete your profile, and follow our guidelines. After verification, you can start listing products and managing your store.',
        ],
    ];
@endphp
@extends('layouts.app')

@section('content')
    <section id="faq" class="py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-[#023F88] animate-fade-in">Frequently Asked Questions</h2>
            <p class="text-gray-600 text-center mb-10 text-base">Simple process for the best shopping experience</p>
            <div class="space-y-4">
                @foreach ($faqData as $index => $item)
                    <div x-data="{ open: false }" class="bg-white rounded-xl shadow-md overflow-hidden animate-fade-in delay-100">
                        <button @click="open = !open" class="faq-toggle w-full flex justify-between items-center p-6 text-left focus:outline-none">
                            <h3 class="font-bold text-[#023F88]">{{ $item['question'] }}</h3>
                            <svg :class="{ 'rotate-180': !open }" class="h-4 w-4 text-black hover:text-[#F6571D] transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="px-6 pb-6 text-gray-600">
                            <p>{{ $item['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
