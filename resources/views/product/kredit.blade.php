@extends('layouts.app')

@section('title', 'Kredit')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="bg-gradient-to-r from-blue-900 via-blue-700 to-blue-600 text-white rounded-xl p-6 mb-8 shadow-lg">
        <h1 class="text-3xl font-bold mb-1">KREDIT</h1>
        <p class="text-lg">Fasilitas pinjaman cepat dan terpercaya untuk kebutuhan Anda</p>
    </div>

    <div class="pb-8">
        <div class="max-w-md rounded-lg overflow-hidden shadow-lg">
            <video 
                src="{{ url('/videos/kredit.mp4') }}" 
                autoplay 
                muted 
                loop 
                playsinline 
                controls 
                class="w-full h-auto">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="mb-8">
        <h1 class="text-3xl font-bold">FASILITAS KREDIT YANG DIBERIKAN:</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">• Kredit Konsumtif :</h2>
            <p class="mb-6 text-gray-600">Merupakan fasilitas pinjaman untuk masyarakat umum dalam pembelian sepeda motor baru merk Yamaha.</p>

            <h2 class="text-xl font-semibold mb-4">• Kredit Modal Kerja :</h2>
            <p class="text-gray-600">Merupakan fasilitas pinjaman yang diberikan dalam rangka membantu masyarakat untuk mengembangkan usaha dengan agunan sepeda motor.</p>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Syarat dan Ketentuan</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Foto copy KTP</li>
                <li>Foto copy KK</li>
                <li>Foto copy surat nikah</li>
                <li>Foto copy KTP Penjamin/Ahli waris</li>
                <li>Slip gaji / Pendapatan</li>
                <li>Foto copy agunan / BPKB untuk modal usaha atau dana tunai</li>
            </ul>

            <div class="mt-6 text-gray-700">
                <p class="mb-1">Untuk keterangan lebih lanjut silakan menghubungi:</p>
                <p class="font-semibold">ALDI:</p>
                <div class="flex items-center space-x-2 mt-1">
                    <a class="btn-wa flex items-center space-x-2"
                        href="https://api.whatsapp.com/send?phone=6289653083783&amp;text=Halo admin, saya ingin menanyakan"
                        target="_blank" rel="noopener noreferrer">
                        
                        <div class="bg-[#25D366] p-1.5 rounded-full">
                            <img src="{{ url('/images/wa.png') }}" alt="WhatsApp" class="w-4 h-4">
                        </div>
                        
                        <span class="text-gray-800">0896-5308-3783</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="mt-12 text-center">
        <p class="text-2xl font-bold italic">“PROSES CEPAT, <br /> SYARAT MUDAH”</p>
    </div> -->
</div>
@endsection