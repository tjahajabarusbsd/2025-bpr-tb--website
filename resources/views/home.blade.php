@extends('layouts.app')

@section('title', 'Home Page')

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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Banner</h1>
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
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <!-- Teks -->
        <div>
            <h2 class="text-3xl font-semibold text-gray-800 leading-snug">
                Mengutamakan <br class="hidden md:block" />
                <span class="text-blue-800 font-bold">Kesejahteraan Masyarakat</span>
            </h2>
            <p class="mt-6 text-gray-600 text-base leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo. Donec vitae
                hendrerit turpis. Vestibulum at dui vitae risus rutrum cursus non at erat. Maecenas vitae porttitor lorem.
                Curabitur finibus magna ut tincidunt vehicula.
            </p>
        </div>
        <!-- Gambar -->
        <div>
            <img src="{{ url('/images/tabungan.jpg') }}" alt="Gedung Bank" class="rounded-lg w-full object-cover shadow" />
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
            <!-- Tabungan -->
            <a href="/produk/tabungan" class="group bg-gray-50 hover:bg-blue-50 p-6 rounded-xl shadow hover:shadow-md transition duration-300">
                <div class="flex justify-center mb-4">
                    <img src="{{ url('/images/tabungan.jpg') }}" alt="tabungan" class="rounded-lg w-full object-cover shadow" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Tabungan</h3>
                <p class="text-gray-600 text-sm">Solusi aman dan fleksibel untuk menyimpan dana Anda.</p>
            </a>

            <!-- Deposito -->
            <a href="/produk/deposito" class="group bg-gray-50 hover:bg-blue-50 p-6 rounded-xl shadow hover:shadow-md transition duration-300">
                <div class="flex justify-center mb-4">
                    <img src="{{ url('/images/deposito.jpg') }}" alt="deposito" class="rounded-lg w-full object-cover shadow" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Deposito</h3>
                <p class="text-gray-600 text-sm">Investasi berjangka dengan bunga lebih tinggi dan pilihan tenor fleksibel.</p>
            </a>

            <!-- Kredit -->
            <a href="/produk/kredit" class="group bg-gray-50 hover:bg-blue-50 p-6 rounded-xl shadow hover:shadow-md transition duration-300">
                <div class="flex justify-center mb-4">
                    <img src="{{ url('/images/kreditcard.jpg') }}" alt="kreditcard" class="rounded-lg w-full object-cover shadow" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Kredit</h3>
                <p class="text-gray-600 text-sm">Akses pembiayaan cepat dan mudah untuk usaha atau kebutuhan pribadi Anda.</p>
            </a>
        </div>
    </div>
</section>

<section id="news" class="py-20 bg-gray-100 text-black">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-10 gap-2">
            <h2 class="text-3xl font-extrabold">Berita Terbaru</h2>
            <!-- Tombol desktop -->
            <a href="/berita" class="hidden md:inline-block px-5 py-2 border border-blue-600 text-blue-600 bg-white rounded-full text-sm font-medium transition hover:bg-blue-600 hover:text-white">
                Lihat semua berita
            </a>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Artikel Utama -->
            <a href="/berita/slug-utama" class="md:col-span-1 group block">
                <div class="w-full h-64 md:h-80 bg-gray-300 rounded-lg overflow-hidden">
                    <img src="{{ url('images/dummyimg.jpg') }}" class="w-full h-full object-cover group-hover:opacity-90 transition" />
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-bold group-hover:text-blue-600 transition-colors">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo.
                    </h3>
                    <p class="text-xs text-gray-400 mt-1">Aug 13, 2024</p>
                    <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo. Donec vitae
                        hendrerit turpis. Vestibulum at dui vitae risus rutrum cursus non at erat. Maecenas vitae porttitor lorem.
                        Curabitur finibus magna ut tincidunt vehicula.
                    </p>
                </div>
            </a>

            <!-- Artikel Kecil -->
            <div class="flex flex-col space-y-4">
                <!-- Item 1 -->
                <a href="/berita/slug-1" class="flex items-start gap-4 group">
                    <div class="w-50 h-40 bg-gray-300 rounded-lg overflow-hidden shrink-0">
                        <img src="{{ url('images/dummyimg.jpg') }}" class="w-full h-full object-cover group-hover:opacity-90 transition" />
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium line-clamp-3 md:text-md md:font-bold group-hover:text-blue-600 transition-colors">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo.
                        </h4>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo. Donec vitae
                            hendrerit turpis. Vestibulum at dui vitae risus rutrum cursus non at erat. Maecenas vitae porttitor lorem.
                            Curabitur finibus magna ut tincidunt vehicula.
                        </p>
                        <p class="text-xs text-gray-400 mt-1">Aug 6, 2024</p>
                    </div>
                </a>

                <!-- Item 2 -->
                <a href="/berita/slug-2" class="flex items-start gap-4 group">
                    <div class="w-50 h-40 bg-gray-300 rounded-lg overflow-hidden shrink-0">
                        <img src="{{ url('images/dummyimg.jpg') }}" class="w-full h-full object-cover group-hover:opacity-90 transition" />
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium line-clamp-3 md:text-md md:font-bold group-hover:text-blue-600 transition-colors">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo.
                        </h4>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo. Donec vitae
                            hendrerit turpis. Vestibulum at dui vitae risus rutrum cursus non at erat. Maecenas vitae porttitor lorem.
                            Curabitur finibus magna ut tincidunt vehicula.
                        </p>
                        <p class="text-xs text-gray-400 mt-1">Aug 6, 2024</p>
                    </div>
                </a>

                <!-- Item 3 -->
                <a href="/berita/slug-3" class="flex items-start gap-4 group">
                    <div class="w-50 h-40 bg-gray-300 rounded-lg overflow-hidden shrink-0">
                        <img src="{{ url('images/dummyimg.jpg') }}" class="w-full h-full object-cover group-hover:opacity-90 transition" />
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium line-clamp-3 md:text-md md:font-bold group-hover:text-blue-600 transition-colors">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo.
                        </h4>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac elit at sem sagittis commodo. Donec vitae
                            hendrerit turpis. Vestibulum at dui vitae risus rutrum cursus non at erat. Maecenas vitae porttitor lorem.
                            Curabitur finibus magna ut tincidunt vehicula.
                        </p>
                        <p class="text-xs text-gray-400 mt-1">Aug 6, 2024</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Tombol mobile -->
        <div class="mt-8 text-center md:hidden">
            <a href="/berita" class="px-5 py-2 border border-blue-600 text-blue-600 bg-white rounded-full text-sm font-medium transition hover:bg-blue-600 hover:text-white">
                Lihat semua berita
            </a>
        </div>
    </div>
</section>
@endsection

@section('additional_script')
<!-- Swiper JS (sebelum </body>) -->
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