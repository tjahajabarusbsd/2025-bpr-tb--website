@extends('layouts.app')

@section('title', 'Tabungan')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="bg-gradient-to-r from-gray-800 to-gray-700 text-white rounded-xl p-6 mb-8">
        <h1 class="text-3xl font-bold mb-1">TABUNGAN</h1>
        <p class="text-lg">Investasi aman, nyaman dan menguntungkan</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-xl shadow p-6 relative group">
            <img src="{{ url('/images/tabungan_depan.png') }}" alt="Tabungan Tampak Depan" class="w-full h-auto rounded-lg">
            <div class="absolute bottom-2 left-2 bg-gray-800 text-white text-sm px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                Tabungan Tampak Depan
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-6 relative group">
            <img src="{{ url('/images/tabungan_belakang.png') }}" alt="Tabungan Tampak Belakang" class="w-full h-auto rounded-lg">
            <div class="absolute bottom-2 left-2 bg-gray-800 text-white text-sm px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                Tabungan Tampak Belakang
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Fitur Tabungan</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Setoran awal minimal Rp. 50.000,-</li>
                <li>Bunga 2% per tahun</li>
                <li>Biaya administrasi Rp. 2.000,-</li>
                <li>Aman dan terjamin</li>
            </ul>
            <p class="italic mt-4 text-gray-600">“Investasi aman, nyaman dan menguntungkan”</p>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Syarat dan Ketentuan</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Fotokopi KTP</li>
                <li>Foto copy KK</li>
                <li>Mengisi aplikasi pembukaan rekening</li>
                <li>Penarikan & penyetoran dapat dilakukan setiap hari di jam kerja</li>
            </ul>

            <div class="mt-6 text-gray-700">
                <p class="mb-1">Untuk keterangan lebih lanjut silakan menghubungi:</p>
                <p class="font-semibold">RISTA:</p>
                <div class="flex items-center space-x-2 mt-1">
                    <a class="btn-wa flex items-center space-x-2"
                        href="https://api.whatsapp.com/send?phone=6282285003336&amp;text=Halo admin, saya ingin menanyakan"
                        target="_blank" rel="noopener noreferrer">
                        
                        <div class="bg-[#25D366] p-1.5 rounded-full">
                            <img src="{{ url('/images/wa.png') }}" alt="WhatsApp" class="w-4 h-4">
                        </div>
                        
                        <span class="text-gray-800">0822-8500-3336</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection