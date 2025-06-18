@extends('layouts.app')

@section('content')
    <section class="py-10 px-6 md:px-16">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center text-[#023F88] animate-fade-in mt-10">Get in Touch</h2>
            <p class="text-gray-600 text-center mb-10 text-base">
                Whether you have a question about our services, need a custom solution, or want to partner with us,<br />
                we're here to help. Let’s start the conversation!
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:bg-[#FDF1D8] items-center lg:px-20 lg:py-16 rounded-3xl">

                {{-- Contact Information --}}
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-[#023F88]">Head Office</h3>
                        <p class="text-gray-700">18 SIN MING LANE, #07-13, MIDVIEW CITY, SINGAPORE 573960</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#023F88]">Email</h3>
                        <p class="text-gray-700">contact@hyrabid.tech</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#023F88]">Phone</h3>
                        <p class="text-gray-700">+1 (555) 123-4567</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#023F88]">Business Hours</h3>
                        <p class="text-gray-700">Monday - Friday: 8:30 AM – 5:30 PM (UTC -8)</p>
                    </div>
                </div>

                {{-- Contact Form --}}
                <form method="POST" class="space-y-6 bg-gray-50 p-6 rounded-xl shadow-md">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Full Name
                        </label>
                        <input type="text" id="name" name="name"
                            class="mt-1 text-gray-600 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email"
                            class="mt-1 text-gray-600 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" />
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">
                            Your Message
                        </label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 text-gray-600 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#F6571D] text-white font-semibold py-2 px-4 rounded-md hover:bg-[#F6571D90] transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
