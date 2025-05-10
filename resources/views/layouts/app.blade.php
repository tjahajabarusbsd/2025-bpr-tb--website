<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'My App')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('additional_css') 
    </head>
    <body class="font-sans antialiased">
        <header class="bg-white shadow" x-data="{ mobileMenuOpen: false, productMenuOpen: false }">
            <nav class="container mx-auto p-4 flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ url('/images/logo.png') }}" alt="Logo" class="h-10">
                    <span class="text-blue-800 font-bold text-2xl">BPR TJAHAJA BARU</span>
                </div>

                <ul class="hidden md:flex space-x-4 items-center">
                    <li><a href="/" class="text-gray-700 hover:text-blue-500">Home</a></li>
                    <li><a href="/" class="text-gray-700 hover:text-blue-500">Tentang BPR</a></li>
                    <li @mouseenter="productMenuOpen = true" @mouseleave="productMenuOpen = false" class="relative">
                        <button class="text-gray-700 hover:text-blue-500 flex items-center">
                            Product
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <!-- Submenu -->
                        <ul x-show="productMenuOpen" x-transition class="absolute bg-white shadow rounded mt-2 py-2 w-40 z-10">
                            <li><a href="/tabungan" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tabungan</a></li>
                            <li><a href="/deposit" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Deposit</a></li>
                            <li><a href="/kredit" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kredit</a></li>
                        </ul>
                    </li>
                </ul>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </nav>

            <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white shadow px-4 pb-4">
                <ul class="space-y-2">
                    <li><a href="/" class="block text-gray-700 hover:text-blue-500 py-2">Home</a></li>
                    <li><a href="/" class="block text-gray-700 hover:text-blue-500 py-2">Tentang BPR</a></li>
                    <li x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center text-gray-700 hover:text-blue-500 py-2">
                            Product
                            <svg class="w-4 h-4 ml-1 transform" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <ul x-show="open" x-transition class="pl-4 mt-1 space-y-1">
                            <li><a href="/tabungan" class="block text-gray-600 hover:text-blue-500">Tabungan</a></li>
                            <li><a href="/deposit" class="block text-gray-600 hover:text-blue-500">Deposit</a></li>
                            <li><a href="/kredit" class="block text-gray-600 hover:text-blue-500">Kredit</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="text-gray-800 pt-10">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between gap-8 pb-6">

                <div class="md:w-2/3 space-y-4">
                    <h3 class="text-xl font-bold">BPR Tjahaja Baru</h3>
                    <p class="text-gray-600">
                        Jl. Niaga No.116, Padang, Sumatera Barat, Indonesia
                    </p>
                    <div class="space-y-2 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <span>0822-8500-3336</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <span>mail@example.com</span>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-4 items-center">
                        <!-- Sosmed Icons -->
                        <p class="font-semibold text-gray-700">Ikuti Sosial Media Kami</p>
                        <a href="#" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-blue-500 text-blue-600 hover:text-white transition">
                            <img src="{{ url('/images/instagram.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 space-y-4 text-sm">
                    <p class="font-semibold text-gray-700">Berizin dan diawasi oleh:</p>
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="https://www.ojk.go.id" target="_blank" rel="noopener noreferrer">
                            <img src="{{ url('/images/ojk.png') }}" alt="Logo OJK" class="object-contain max-w-[120px]" />
                        </a>
                        <a href="https://www.bi.go.id" target="_blank" rel="noopener noreferrer">
                            <img src="{{ url('/images/bi.png') }}" alt="Logo BI" class="object-contain max-w-[120px]" />
                        </a>
                        <a href="https://www.lps.go.id" target="_blank" rel="noopener noreferrer">
                            <img src="{{ url('/images/lps.png') }}" alt="Logo LPS" class="object-contain max-w-[120px]" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-300 text-center text-sm text-gray-500 py-4 mt-6">
                &copy; 2025 BPR Tjahaja Baru. All rights reserved.
            </div>
        </footer>

        @yield('additional_script')
    </body>
</html>