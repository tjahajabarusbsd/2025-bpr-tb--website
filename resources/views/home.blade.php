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
        <div class="text-center mb-10">
            <p class="text-sm uppercase text-gray-400 tracking-wide">Update Terbaru</p>
            <h2 class="text-4xl font-extrabold">Berita & Artikel</h2>
        </div>

        <!-- Swiper -->
        <div class="pb-10 swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <a href="/berita/detail-slug" class="block group rounded overflow-hidden">
                        <img src="{{ url('images/dummyimg.jpg') }}" class="w-full h-64 object-cover" alt="Thumbnail Berita" />
                        <div class="py-4">
                            <p class="text-xs text-gray-400 mb-1">December 21, 2024</p>
                            <h3 class="text-lg font-bold mb-1 group-hover:text-blue-600 transition-colors">
                                Lorem ipsum dolor sit amet consectetur
                            </h3>
                            <p class="text-gray-500 text-sm">adipisicing elit. Quos incidunt nihil atque blanditiis rem laboriosam officiis [...]</p>
                        </div>
                    </a>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <a href="/berita/detail-slug" class="block group rounded overflow-hidden">
                        <img src="{{ url('images/dummyimg.jpg') }}" class="w-full h-64 object-cover" alt="Thumbnail Berita" />
                        <div class="py-4">
                            <p class="text-xs text-gray-400 mb-1">December 21, 2024</p>
                            <h3 class="text-lg font-bold mb-1 group-hover:text-blue-600 transition-colors">
                                Lorem ipsum dolor sit amet consectetur
                            </h3>
                            <p class="text-gray-500 text-sm">adipisicing elit. Quos incidunt nihil atque blanditiis rem laboriosam officiis [...]</p>
                        </div>
                    </a>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <a href="/berita/detail-slug" class="block group rounded overflow-hidden">
                        <img src="{{ url('images/dummyimg.jpg') }}" class="w-full h-64 object-cover" alt="Thumbnail Berita" />
                        <div class="py-4">
                            <p class="text-xs text-gray-400 mb-1">December 21, 2024</p>
                            <h3 class="text-lg font-bold mb-1 group-hover:text-blue-600 transition-colors">
                                Lorem ipsum dolor sit amet consectetur
                            </h3>
                            <p class="text-gray-500 text-sm">adipisicing elit. Quos incidunt nihil atque blanditiis rem laboriosam officiis [...]</p>
                        </div>
                    </a>
                </div>

                <!-- Tambahkan slide lain sesuai kebutuhan -->
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
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