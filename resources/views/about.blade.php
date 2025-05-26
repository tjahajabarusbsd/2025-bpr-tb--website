@extends('layouts.app')

@section('title', 'Tentang BPR TJAHAJA BARU')

@section('content')
<section class="relative bg-blue-900 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Tentang BPR TJAHAJA BARU</h1>
        <p class="text-xl">Mitra Finansial Terpercaya untuk Masa Depan Anda</p>
    </div>
</section>

<section class="bg-white py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="text-2xl font-bold text-center mb-10">Sejarah Perusahaan</h2>

        <div class="border-l-4 border-blue-600 pl-6 space-y-6">
            <div>
                <h3 class="text-lg font-semibold text-blue-900">Januari 2018</h3>
                <p class="text-gray-700">Hasil Akuisisi dari BPR LPN Magek</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-900">21 Agustus 2018</h3>
                <p class="text-gray-700">Pemindahan alamat kantor BPR LPN Magek ke Padang</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-900">27 Februari 2019</h3>
                <p class="text-gray-700">Disetujui oleh OJK mengenai pengalihan izin usaha atas perubahan bentuk badan hukum dan nama menjadi PT. BPR Tjahaja Baru</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-900">13 Desember 2024</h3>
                <p class="text-gray-700">Disetujui oleh OJK tentang perubahan nama dari PT. Bank Perkreditan Rakyat Tjahaja Baru menjadi PT. Bank Perekonomian Rakyat Tjahaja Baru</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-2xl font-bold text-center mb-10">Pengumuman Perubahan Nama Perusahaan</h2>

        <div class="grid gap-6 md:grid-cols-2">
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold text-blue-900 mb-2">1. RUPS-LB</h3>
                <p class="text-gray-700">Keputusan para Pemegang Saham PT BPR Tjahaja Baru pada Rapat Umum Pemegang Saham Luar Biasa (RUPS-LB) tertanggal <strong>12 November 2024</strong></p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold text-blue-900 mb-2">2. Akta Notaris</h3>
                <p class="text-gray-700">Akta No. 07 tanggal <strong>28 November 2024</strong> oleh Notaris Intania Selly, S.H., M.Kn. di Kota Padang</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold text-blue-900 mb-2">3. Kemenkumham</h3>
                <p class="text-gray-700">Keputusan Menteri Hukum & HAM No. AHU-0077844.AH.01.02.TAHUN 2024 tanggal <strong>02 Desember 2024</strong></p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold text-blue-900 mb-2">4. OJK Sumbar</h3>
                <p class="text-gray-700">Keputusan OJK Sumatera Barat No. S-785/KO.153/2024 tanggal <strong>13 Desember 2024</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-10">Visi & Misi</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold mb-3">Visi</h3>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi BPR yang tumbuh dan berkembang secara sehat, wajar serta menjadi Lembaga Jasa Keuangan yang terpercaya dan pilihan terbaik bagi Masyarakat.
                </p>
            </div>
            <div class="bg-gray-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold mb-3">Misi</h3>
                <p class="text-gray-700 leading-relaxed">
                    Meningkatkan kinerja keuangan yang sehat dan profesional sebagai mitra terpercaya oleh Masyarakat dalam melayani transaksi keuangan, dan membantu usaha masyarakat dalam meningkatkan perekonomian untuk mencapai kesejahteraan.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-10">Mengapa Memilih Kami?</h2>
        <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-6 text-center">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <img src="/images/badge.png" alt="Prioritas" class="mx-auto mb-3 w-12 h-12">
                <h3 class="font-semibold text-lg mb-2">Kepuasan Anda Adalah Prioritas Kami</h3>
                <p class="text-gray-600 text-sm">Kami berkomitmen memberikan layanan terbaik untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <img src="/images/statistics.png" alt="Investasi Aman" class="mx-auto mb-3 w-12 h-12">
                <h3 class="font-semibold text-lg mb-2">Investasi Aman, Nyaman, dan Menguntungkan</h3>
                <p class="text-gray-600 text-sm">Pilihan tepat untuk masa depan finansial yang lebih baik.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <img src="/images/stopwatch.png" alt="Proses Cepat" class="mx-auto mb-3 w-12 h-12">
                <h3 class="font-semibold text-lg mb-2">Proses Cepat dan Syarat Mudah</h3>
                <p class="text-gray-600 text-sm">Ajukan layanan dengan mudah dan tanpa hambatan berarti.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue-900 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-4">Siap Mewujudkan Tujuan Finansial Anda?</h2>
        <p class="mb-6">Bergabunglah bersama BPR Tjahaja Baru dan nikmati kemudahan layanan keuangan kami.</p>
        <a href="/kontak" class="bg-white text-blue-900 font-semibold px-6 py-3 rounded-full hover:bg-gray-100 transition">Hubungi Kami</a>
    </div>
</section>
@endsection