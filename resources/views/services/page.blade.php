@php
    $serviceData = [
        [
            'icon' => 'fas fa-laptop-code',
            'title' => 'Software Outsourcing',
            'descriptions' => 'Access top-tier development talent and expertise to build custom software solutions that drive your business forward.',
            'children' => ['Custom Web & Mobile Applications', 'Legacy System Modernization', 'QA & Testing Services', 'DevOps & Continuous Integration'],
        ],
        [
            'icon' => 'fas fa-lightbulb',
            'title' => 'IT Consulting Services',
            'descriptions' => 'Strategic guidance and technical expertise to optimize your IT infrastructure and drive digital transformation.',
            'children' => ['Digital Transformation Roadmaps', 'Technology Stack Assessment', 'Cloud Migration Strategies', 'Security & Compliance Consulting'],
        ],
        [
            'icon' => 'fas fa-store',
            'title' => 'Marketplace Development',
            'descriptions' => 'Build powerful online marketplaces that connect buyers and sellers, streamline transactions, and scale your business.',
            'children' => ['B2B & B2C Marketplace Platforms', 'Payment Gateway Integration', 'Inventory Management Systems', 'AI-Powered Recommendation Engines'],
        ],
    ];
@endphp


@extends('layouts.app')

@section('content')
    <div class="px-10 mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-[#023F88] animate-fade-in mt-20">Our Core Services</h2>
        <p class="text-gray-600 text-center mb-10 text-base">
            We deliver comprehensive technology solutions to help businesses innovate, transform, and grow in the digital landscape.
        </p>

        <section class="text-[#333] px-5 lg:px-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($serviceData as $service)
                    <div class="feature-card shadow-lg hover:shadow-xl relative group bg-white p-6 rounded-lg animate-fade-in delay-100 h-auto flex flex-col">
                        <div class="md:group-hover:-translate-y-3 duration-500 flex-1 flex flex-col">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-[#F6571D] text-white">
                                <i class="{{ $service['icon'] }} text-xl"></i>
                            </div>
                            <div class="mt-5 flex-1 flex flex-col">
                                <h3 class="text-lg leading-6 font-semibold text-[#023F88]">{{ $service['title'] }}</h3>
                                <p class="mt-2 text-base text-gray-500">{{ $service['descriptions'] }}</p>
                            </div>
                            <ul class="text-sm text-gray-600 mt-3">
                                @foreach ($service['children'] as $item)
                                    <li class="flex my-4 items-center">
                                        <i class="fas fa-check h-4 w-4 mr-3 text-[#15c45e]"></i>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
