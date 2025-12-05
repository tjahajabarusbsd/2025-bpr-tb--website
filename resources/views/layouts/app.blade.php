<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BPR Tjahaja Baru - Bank Perekonomian Rakyat">
    <meta name="keywords"
        content="BPR, Bank, Tjahaja Baru, Perekonomian, Rakyat, Tabungan, Kredit, Deposito, Bank BPR Tjahaja Baru Padang">
    <meta name="author" content="BPR Tjahaja Baru">
    <title>@yield('title', 'BPR Tjahaja Baru')</title>
    @yield('meta')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('additional_css')
    <!-- <style>
        figcaption {
            display: none;
        }
    </style> -->
</head>

<body class="min-h-screen flex flex-col font-sans antialiased">
    <header class="shadow z-1" x-data="{ 
            mobileMenuOpen: false, 
            produkMenuOpen: false, 
            tentangMenuOpen: false,
            informasiMenuOpen: false,
        }">
        <nav class="container mx-auto p-4 flex items-center justify-between bg-white">
            <a href="/" class="flex items-center space-x-4">
                <img src="{{ url('/images/logo.png') }}" alt="Logo" class="h-12 w-auto">
                <div class="leading-tight">
                    <div class="text-[10px] font-semibold uppercase text-[#223E91] tracking-wide">pt. bank perekonomian
                        rakyat</div>
                    <div class="text-[23px] font-bold uppercase text-[#223E91]">tjahaja baru</div>
                </div>
            </a>

            <ul class="hidden md:flex space-x-4 items-center">
                <li><a href="/" class="text-gray-700 font-bold hover:text-blue-500">Home</a></li>
                <li @mouseenter="tentangMenuOpen = true" @mouseleave="tentangMenuOpen = false" class="relative">
                    <button class="text-gray-700 font-bold hover:text-blue-500 flex items-center">
                        Tentang Kami
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul x-show="tentangMenuOpen" x-transition
                        class="absolute font-bold bg-white shadow rounded top-full left-0 py-2 w-40 z-10">
                        <li><a href="/profil" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil
                                Perusahaan</a></li>
                        <li><a href="/manajemen" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Manajemen &
                                Struktur Perusahaan</a></li>
                    </ul>
                </li>
                <li @mouseenter="produkMenuOpen = true" @mouseleave="produkMenuOpen = false" class="relative">
                    <button class="text-gray-700 font-bold hover:text-blue-500 flex items-center">
                        Produk
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul x-show="produkMenuOpen" x-transition
                        class="absolute font-bold bg-white shadow rounded top-full left-0 py-2 w-40 z-10">
                        <li><a href="/tabungan" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tabungan</a>
                        </li>
                        <li><a href="/deposito" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Deposito</a>
                        </li>
                        <li><a href="/kredit" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kredit</a></li>
                    </ul>
                </li>
                <li @mouseenter="informasiMenuOpen = true" @mouseleave="informasiMenuOpen = false" class="relative">
                    <button class="text-gray-700 font-bold hover:text-blue-500 flex items-center">
                        Informasi
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul x-show="informasiMenuOpen" x-transition
                        class="absolute font-bold bg-white shadow rounded top-full left-0 py-2 w-40 z-10">
                        <li><a href="/informasi/laporan-tahunan"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Laporan
                                Tahunan</a>
                        </li>
                        <li><a href="/informasi/laporan-keuangan-publikasi"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Laporan Keuangan Publikasi</a>
                        </li>
                        <li><a href="/informasi/laporan-literasi-dan-edukasi-keuangan"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Laporan Literasi dan Edukasi
                                Keuangan</a></li>
                        <li><a href="/informasi/lainnya"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lainnya</a></li>
                    </ul>
                </li>
                <!-- <li><a href="/post" class="text-gray-700 font-bold hover:text-blue-500">Informasi</a></li> -->
            </ul>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }" class="inline-flex"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" class="hidden"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>

        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white shadow px-4 pb-4 pattern">
            <ul class="space-y-2">
                <li><a href="/" class="block font-bold text-gray-700 hover:text-blue-500 py-2">Home</a></li>
                <li x-data="{ open: false }">
                    <button @click="open = !open"
                        class="w-full flex justify-between items-center font-bold text-gray-700 hover:text-blue-500 py-2">
                        Tentang Kami
                        <svg class="w-4 h-4 ml-1 transform" :class="{'rotate-180': open}" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul x-show="open" x-transition class="font-bold pl-4 mt-1 space-y-1">
                        <li><a href="/profil" class="block text-gray-600 hover:text-blue-500">Profil Perusahaan</a></li>
                        <li><a href="/manajemen" class="block text-gray-600 hover:text-blue-500">Manajemen & Struktur
                                Perusahaan</a></li>
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open"
                        class="w-full flex justify-between items-center font-bold text-gray-700 hover:text-blue-500 py-2">
                        Product
                        <svg class="w-4 h-4 ml-1 transform" :class="{'rotate-180': open}" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul x-show="open" x-transition class="font-bold pl-4 mt-1 space-y-1">
                        <li><a href="/tabungan" class="block text-gray-600 hover:text-blue-500">Tabungan</a></li>
                        <li><a href="/deposito" class="block text-gray-600 hover:text-blue-500">Deposito</a></li>
                        <li><a href="/kredit" class="block text-gray-600 hover:text-blue-500">Kredit</a></li>
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open"
                        class="w-full flex justify-between items-center font-bold text-gray-700 hover:text-blue-500 py-2">
                        Informasi
                        <svg class="w-4 h-4 ml-1 transform" :class="{'rotate-180': open}" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul x-show="open" x-transition class="font-bold pl-4 mt-1 space-y-1">
                        <li><a href="/informasi/laporan-tahunan" class="block text-gray-600 hover:text-blue-500">Laporan
                                Tahunan</a></li>
                        <li><a href="/informasi/laporan-keuangan-publikasi"
                                class="block text-gray-600 hover:text-blue-500">Laporan Keuangan Publikasi</a></li>
                        <li><a href="/informasi/laporan-literasi-dan-edukasi-keuangan"
                                class="block text-gray-600 hover:text-blue-500">Laporan Literasi dan Edukasi
                                Keuangan</a></li>
                        <li><a href="/informasi/lainnya" class="block text-gray-600 hover:text-blue-500">Lainnya</a>
                        </li>
                    </ul>
                </li>
                <!-- <li><a href="/post" class="text-gray-700 font-bold hover:text-blue-500">Informasi</a></li> -->
            </ul>
        </div>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="text-gray-800 pt-10 border-t border-gray-300">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between gap-8 pb-6">

            <div class="md:w-2/3 space-y-4">
                <h3 class="text-xl font-bold">BPR Tjahaja Baru</h3>
                <p class="text-gray-600">
                    Jl. Niaga No.116, Padang 25211, Sumatera Barat, Indonesia
                </p>
                <div class="space-y-2 text-sm text-gray-600">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <span>+62-751-27333</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <span>bpr@tjahaja-baru.com</span>
                    </div>
                </div>

                <div class="flex gap-3 mt-4 items-center">
                    <p class="font-semibold text-gray-700">Ikuti Sosial Media Kami</p>
                    <a href="https://www.instagram.com/bprtjahajabaru/"
                        class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-blue-500 text-blue-600 hover:text-white transition">
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

        <div class="border-t border-gray-300 text-center text-sm text-[#223E91] py-4 mt-6">
            &copy; 2025 BPR Tjahaja Baru. All rights reserved.
        </div>
    </footer>
    @yield('additional_script')
</body>

</html>