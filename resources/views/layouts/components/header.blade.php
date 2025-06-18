<nav class="bg-white shadow-md sticky py-3 top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-18">
            <div class="flex items-center">
                <a href="/">
                    <div class="flex flex-col items-center leading-none">
                        <span class="text-2xl font-bold text-[#F6571D]">HYRABID</span>
                        <span
                            class="text-sm leading-1 tracking-[4px] font-medium text-[#F6571D] uppercase">Solution</span>
                    </div>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                @foreach ([['title' => 'Home', 'href' => '/'], ['title' => 'About us', 'href' => '/about-us'], ['title' => 'Services', 'href' => '/services'], ['title' => 'Contact', 'href' => '/contact'], ['title' => 'FAQ', 'href' => '/faq']] as $item)
                    <a href={{ $item['href'] }}
                        class="text-gray-700 hover:text-[#F6571D] px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                        {{ $item['title'] }}
                    </a>
                @endforeach
                <a href="#register-now"
                    class="bg-[#F6571D] hover:bg-[#F6571D99] text-white px-6 py-2 rounded-full text-sm font-medium shadow-lg hover:shadow-xl transition duration-300">
                    Get Started
                </a>
            </div>
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" onClick={toggleMenu}
                    class="text-gray-700 hover:text-[#F6571D] focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu"
        class="mobile-menu md:hidden fixed inset-y-0 right-0 w-64 bg-white shadow-lg z-50">
        <div class="flex justify-end p-4">
            <button id="close-menu-button" onClick={toggleMenu}
                class="text-gray-700 hover:text-[#F6571D] focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="px-4 pt-2 pb-8 space-y-4">
            @foreach ([['title' => 'Home', 'href' => '/'], ['title' => 'About us', 'href' => '/about-us'], ['title' => 'Services', 'href' => '/services'], ['title' => 'Contact', 'href' => '/contact'], ['title' => 'FAQ', 'href' => '/faq']] as $item)
                <a href={{ $item['href'] }}
                    class="block text-gray-700 hover:text-[#F6571D] px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    {{ $item['title'] }}
                </a>
            @endforeach
            <a href="#get-started"
                class="block bg-[#F6571D] hover:bg-[#F6571D99] text-white px-6 py-2 rounded-full text-base font-medium shadow-lg hover:shadow-xl transition duration-300 text-center mt-4">
                Get Started
            </a>
        </div>
    </div>
</nav>
