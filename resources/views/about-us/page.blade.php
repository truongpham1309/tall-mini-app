@extends('layouts.app')

@section('content')
    <h2 class="text-3xl md:text-4xl font-bold text-center text-[#023F88] animate-fade-in mt-10">
        About the company
    </h2>
    <p class="text-center text-base mb-4">
        Transforming Businesses Through Technology Excellence
    </p>

    <div class="w-full h-auto my-10">
        <img src="{{ asset('images/banner-01.png') }}" class="w-full h-[560px] object-cover" alt="">
    </div>

    <div class="mt-20 flex flex-col lg:flex-row justify-between gap-8">
        <div class="lg:w-1/2 w-full px-8">
            <p class="text-[#F15A22] font-semibold">Introduction</p>
            <h2 class="text-[#023F88] font-bold text-4xl my-3">Who we are</h2>
            <p>Hyrabid Technologies is a leading provider of software development, IT consulting, and marketplace solutions. We combine technical expertise with deep industry knowledge
                to deliver innovative solutions that help businesses thrive in the digital age.</p>

            @php
                $services = ['Custom software development', 'AI-powered solutions', 'Blockchain technology'];
            @endphp

            <ul class="mb-10 ml-3">
                @foreach ($services as $service)
                    <li class="flex my-10 items-center">
                        <i class="fas fa-check mr-3 text-sm text-[#F6571D] rounded-full"></i>
                        {{ $service }}
                    </li>
                @endforeach
            </ul>

            <p class="my-5">
                Backed by a team of engineers and visionary leaders, we design smart, scalable, and secure systems that solve real-world problems and drive growth.
            </p>
            <p class="mb-5">
                With every project, we empower companies to work smarter, move faster, and lead with confidence in a digital-first world.
            </p>
        </div>

        <div class="lg:w-1/2 w-full mt-10 lg:mt-0">
            <img src="{{ asset('images/who-we-are.png') }}" class="w-full h-auto object-contain" alt="">
        </div>
    </div>

    <div class="mt-10">
        <h2 class="mt-5 font-bold text-[#023F88] text-4xl pl-4">Core Value</h2>
        <p class="pl-4">Hyra Bid's foundation rests on four pillars</p>

        <div class="flex flex-col lg:flex-row justify-between gap-8 px-4 mt-5">
            <div class="my-10 w-full lg:w-1/2">
                @php
                    $coreValues = [
                        ['title' => 'Expert Team', 'desc' => 'Seasoned professionals with diverse technical backgrounds', 'active' => true],
                        ['title' => 'Quality Focused', 'desc' => 'Rigorous quality assurance at every stage', 'active' => false],
                        ['title' => 'Innovative Approach', 'desc' => 'Keeping ahead of emerging technologies and trends', 'active' => false],
                        ['title' => 'Client Success', 'desc' => 'Dedicated to achieving measurable business outcomes', 'active' => false],
                    ];
                @endphp

                @foreach ($coreValues as $value)
                    <div class="py-4 pl-6 border-l-[4px] {{ $value['active'] ?? false ? 'border-[#F15A22]' : 'border-[#F5F5F5]' }}">
                        <h3 class="text-[#023F88] font-semibold">{{ $value['title'] }}</h3>
                        <p>{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="w-full lg:w-1/2 pb-10">
                <img src="{{ asset('images/image_value1.png') }}" class="w-full h-auto object-contain" alt="">
            </div>
        </div>
    </div>
@endsection
