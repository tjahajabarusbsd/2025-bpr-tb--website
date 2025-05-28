@extends('layouts.app')

@section('title', 'Deposito')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="bg-gradient-to-r from-emerald-800 via-emerald-700 to-emerald-600 text-white rounded-xl p-6 mb-8 shadow-lg">
        <h1 class="text-3xl font-bold mb-1">DEPOSITO BERJANGKA</h1>
        <p class="text-lg">Investasi aman, nyaman dan menguntungkan</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 text-emerald-800">Fitur Deposito</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Dana aman, dijamin oleh Lembaga Penjamin Simpanan (LPS)</li>
                <li>Bunga bersaing</li>
                <li>Dapat dijadikan agunan kredit</li>
                <li>Jangka waktu 1, 3, 6, dan 12 bulan</li>
            </ul>
            <p class="italic mt-4 text-gray-600">“Investasi aman, nyaman dan menguntungkan”</p>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 text-emerald-800">Syarat dan Ketentuan</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Fotokopi KTP</li>
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