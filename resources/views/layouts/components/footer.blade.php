<footer class=" text-black py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <a href="/">
                    <div class="flex flex-col mb-4 leading-none">
                        <span class="text-2xl font-bold text-[#F6571D]">HYRABID</span>
                        <span
                            class="text-sm leading-1 tracking-[4px] font-medium text-[#F6571D] uppercase">Solution</span>
                    </div>
                </a>
                <p class="text-gray-600">Empowering businesses through innovative technology solutions and expert
                    services.</p>
            </div>
            @foreach ([
                        [
                            'title' => 'Services',
                            'links' => [['name' => 'Software Outsourcing', 'href' => '/service'], ['name' => 'IT Consulting', 'href' => '/service'], ['name' => 'Marketplace Development', 'href' => '/service'], ['name' => 'Cloud Solutions', 'href' => '/service'], ['name' => 'Mobile App Development', 'href' => '/service']],
                        ],
                        [
                            'title' => 'Resources',
                            'links' => [['name' => 'Blog', 'href' => '/about-us'], ['name' => 'Case Studies', 'href' => '/about-us'], ['name' => 'Whitepapers', 'href' => '/about-us'], ['name' => 'Webinars', 'href' => '/about-us'], ['name' => 'Documentation', 'href' => '/about-us']],
                        ],
                    ] as $section)
                <div>
                    <h4 class="text-lg text-[#023F88] font-bold mb-4">{{ $section['title'] }}</h4>
                    <ul class="space-y-2">
                        @foreach ($section['links'] as $item)
                            <li>
                                <a href={{ $item['href'] }}
                                    class="hover:text-[#F6571D] text-gray-600 transition duration-200">
                                    {{ $item['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div>
                <h4 class="text-lg text-[#023F88] font-bold mb-4">Contact</h4>
                <ul class="space-y-2">
                    <li>
                        <div class="transition duration-300">
                            <ul class="space-y-2">
                                <li>
                                    <a href="#" class="flex items-center text-gray-600 transition duration-300">

                                        <i class="fas fa-map-marker-alt text-[#023F88] mr-3 h-3 w-3"></i>

                                        18 SIN MING LANE, #07-13, MIDVIEW CITY, SINGAPORE 573960
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:contact@hyrabid.tech"
                                        class="flex items-center text-gray-600 transition duration-300">
                                        <i class="fas fa-envelope text-[#023F88] mr-3 h-3 w-3"></i>

                                        contact@hyrabid.tech
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-gray-600 transition duration-300">
                                        <i class="fas fa-phone-alt text-[#023F88] mr-3 h-3 w-3"></i>

                                        +1 (555) 123-4567
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-12 pt-8 text-center ">
            <p>© 2025 Hyrabid Solution. All rights reserved.</p>
        </div>
    </div>
</footer>
