@extends('layouts.app')

@section('additional_css')
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .mySwiper {
        padding-bottom: 2rem;
    }

    .swiper-pagination {
        display: flex;
        justify-content: center;
        gap: 8px;
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #ccc;
        opacity: 1;
        border-radius: 9999px;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        width: 32px;
        background-color: #000000;
    }
</style>
@endsection

@section('content')
<section id="hero" class="relative w-full overflow-hidden bg-gray-100">
    <div class="slider-container relative w-full h-[500px]">
        <!-- Slide Items -->
        <div class="slide-item absolute inset-0 transition-opacity duration-700 opacity-100">
            <img src="https://via.placeholder.com/1600x500" alt="Slide 1" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white text-center px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 [font-family:var(--font-heading)]">Banner</h1>
                <!-- <p class="text-lg md:text-xl mb-6">Your trusted partner for quality products and services.</p> -->
                <!-- <a href="#products" class="px-6 py-3 bg-blue-500 text-white rounded hover:bg-blue-600">Explore Products</a> -->
            </div>
        </div>

        <!-- Tambahkan slide lainnya (nanti diisi dinamis) -->
        <!-- <div class="slide-item absolute inset-0 opacity-0">...</div> -->
    </div>

    <!-- Navigation (optional, bisa dikendalikan JS nanti) -->
    <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex gap-2">
        <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition"></button>
        <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-white transition"></button>
        <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-white transition"></button>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-start">
        <div class="flex flex-col">
            <h2 class="text-3xl mb-6 font-semibold text-gray-800 leading-snug">
                Mengutamakan <br class="hidden md:block" />
                <span class="text-blue-800 font-bold">Kesejahteraan Masyarakat</span>
            </h2>
            <img src="{{ url('/images/tabungan.jpg') }}" alt="Gedung Bank" class="rounded-lg w-full h-64 object-cover shadow mb-6" />
            <div>
                <p class="text-gray-600 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo. Donec vitae
                    hendrerit turpis. Vestibulum at dui vitae risus rutrum cursus non at erat. Maecenas vitae porttitor lorem.
                    Curabitur finibus magna ut tincidunt vehicula.
                </p>
            </div>
        </div>

        <div class="overflow-hidden rounded shadow">
            <table class="w-full text-sm text-left">
                <thead class="bg-green-700 text-yellow-300 text-sm uppercase">
                    <tr>
                        <th class="px-4 py-3">Keterangan</th>
                        <th class="px-4 py-3">Suku Bunga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-200">
                        <td class="px-4 py-3">Tabungan</td>
                        <td class="px-4 py-3">1.50%</td>
                    </tr>
                    <tr class="bg-green-200">
                        <td class="px-4 py-3">Deposito 1 Bulan</td>
                        <td class="px-4 py-3">4.00%</td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="px-4 py-3">Deposito 3 Bulan</td>
                        <td class="px-4 py-3">4.50%</td>
                    </tr>
                    <tr class="bg-green-200">
                        <td class="px-4 py-3">Deposito 6 Bulan</td>
                        <td class="px-4 py-3">5.00%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="products" class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Produk Kami</h2>
        <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
            Kami menyediakan beragam produk keuangan yang aman dan terpercaya untuk mendukung kebutuhan finansial Anda.
        </p>

        <div class="max-w-sm md:max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">
            <a href="/tabungan" class="group bg-gray-50 hover:bg-blue-50 p-6 rounded-xl shadow hover:shadow-md transition duration-300">
                <div class="flex justify-center mb-4">
                    <img src="{{ url('/images/tabungan.jpg') }}" alt="tabungan" class="rounded-lg w-full object-cover shadow" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Tabungan</h3>
                <p class="text-gray-600 text-sm">Solusi aman dan fleksibel untuk menyimpan dana Anda.</p>
            </a>
            <a href="/deposito" class="group bg-gray-50 hover:bg-blue-50 p-6 rounded-xl shadow hover:shadow-md transition duration-300">
                <div class="flex justify-center mb-4">
                    <img src="{{ url('/images/deposito.jpg') }}" alt="deposito" class="rounded-lg w-full object-cover shadow" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Deposito</h3>
                <p class="text-gray-600 text-sm">Investasi berjangka dengan bunga lebih tinggi dan pilihan tenor fleksibel.</p>
            </a>
            <a href="/kredit" class="group bg-gray-50 hover:bg-blue-50 p-6 rounded-xl shadow hover:shadow-md transition duration-300">
                <div class="flex justify-center mb-4">
                    <img src="{{ url('/images/kreditcard.jpg') }}" alt="kreditcard" class="rounded-lg w-full object-cover shadow" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Kredit</h3>
                <p class="text-gray-600 text-sm">Akses pembiayaan cepat dan mudah untuk usaha atau kebutuhan pribadi Anda.</p>
            </a>
        </div>
    </div>
</section>

@php
    $mainPost = $posts->first();
    $otherPosts = $posts->skip(1);
@endphp
<section id="news" class="pb-20 bg-gray-100 text-black overflow-hidden">
    <svg
        preserveAspectRatio="none"
        viewBox="0 0 1200 120"
        xmlns="http://www.w3.org/2000/svg"
        style="fill: #ffffff; width: 125%; height: 75px;">
        <path
            d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
            opacity=".25"
        />
        <path
            d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
            opacity=".5"
        />
        <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
    </svg>
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-10 gap-2">
            <h2 class="text-3xl font-extrabold">Informasi Terbaru</h2>
            <a href="/post" class="hidden md:inline-block px-5 py-2 border border-blue-600 text-blue-600 bg-white rounded-full text-sm font-medium transition hover:bg-blue-600 hover:text-white">
                Lihat semua informasi
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @if($mainPost)
            @php
                preg_match('/<img[^>]+src="([^">]+)"/', $mainPost->content, $matches);
                $firstImage = $matches[1] ?? url('images/dummyimg.jpg');
            @endphp
            <a href="{{ url('/post/' . $mainPost->slug) }}" class="md:col-span-1 group block">
                <div class="w-full h-64 md:h-80 bg-gray-300 rounded-lg overflow-hidden">
                    <img src="{{ $firstImage }}" class="w-full h-full object-cover group-hover:opacity-90 transition" />
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-bold group-hover:text-blue-600 transition-colors">
                        {{ $mainPost->title }}
                    </h3>
                    <p class="text-xs text-gray-400 mt-1">{{ $mainPost->created_at->format('M d, Y') }}</p>
                    <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                        <?php /* {{ $mainPost->excerpt ?? \Str::limit(strip_tags($mainPost->content), 150) }} */ ?>
                        {{-- Menggunakan strip_tags untuk menghilangkan tag HTML --}}
                        {{-- Menggunakan \Str::limit untuk membatasi jumlah karakter --}}
                        {{ strip_tags($mainPost->content) }}
                    </p>
                </div>
            </a>
            @endif

            <div class="flex flex-col space-y-4">
                @foreach($otherPosts as $post)
                @php
                    preg_match('/<img[^>]+src="([^">]+)"/', $post->content, $matches);
                    $firstImage = $matches[1] ?? url('images/dummyimg.jpg');
                @endphp
                <a href="{{ url('/post/' . $post->slug) }}" class="flex flex-col sm:flex-row items-start gap-4 group">
                    <div class="w-full h-64 sm:w-32 sm:h-auto sm:aspect-square bg-gray-300 rounded-lg overflow-hidden shrink-0">
                        <img src="{{ $firstImage }}" class="w-full h-full object-cover group-hover:opacity-90 transition" />
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium line-clamp-3 md:text-md md:font-bold group-hover:text-blue-600 transition-colors">
                            {{ $post->title }}
                        </h4>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-3">
                            {{ strip_tags($post->content) }}
                        </p>
                        <p class="text-xs text-gray-400 mt-1">{{ $post->created_at->format('M d, Y') }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="mt-8 text-center md:hidden">
            <a href="/post" class="px-5 py-2 border border-blue-600 text-blue-600 bg-white rounded-full text-sm font-medium transition hover:bg-blue-600 hover:text-white">
                Lihat semua informasi
            </a>
        </div>
    </div>
</section>
@endsection

@section('additional_script')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>
@endsection