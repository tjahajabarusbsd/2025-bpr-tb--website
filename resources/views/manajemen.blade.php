@extends('layouts.app')

@section('title', 'BPR Tjahaja Baru | Manajemen & Struktur Perusahaan')

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-10 text-gray-800">Manajemen Perusahaan</h1>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition">
                <h2 class="text-xl font-semibold text-gray-800">Rosman Anwar</h2>
                <p class="text-sm text-blue-600 font-medium mb-2">Komisaris Utama</p>
                <p class="text-gray-600 text-sm">Dilahirkan di Padang, 24 Juli 1953. Lulusan Fakultas Ekonomi Universitas Ekasakti Padang, 2002.</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition">
                <h2 class="text-xl font-semibold text-gray-800">Jimmy Gani</h2>
                <p class="text-sm text-blue-600 font-medium mb-2">Komisaris</p>
                <p class="text-gray-600 text-sm">Dilahirkan di Padang, 25 Maret 1980. Lulusan Boston University, 2001.</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition">
                <h2 class="text-xl font-semibold text-gray-800">Eddy Febrian</h2>
                <p class="text-sm text-blue-600 font-medium mb-2">Direktur Utama</p>
                <p class="text-gray-600 text-sm">Dilahirkan di Jakarta, 02 Februari 1975. Lulusan STIE Perbankan Indonesia, 2021.</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition">
                <h2 class="text-xl font-semibold text-gray-800">Marcellinus Joko Anggoro Sutriono</h2>
                <p class="text-sm text-blue-600 font-medium mb-2">Direktur</p>
                <p class="text-gray-600 text-sm">Dilahirkan di Salatiga, 18 Juni 1963. Lulusan Universitas Kristen Satya Wacana Salatiga, 1990.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-16 mt-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Struktur Organisasi</h2>
        <div class="flex justify-center">
            <img src="{{ url('/images/struktur-organisasi.jpg') }}" alt="Struktur Organisasi" class="rounded-lg shadow-lg max-w-full h-auto">
        </div>
    </div>
</section>
@endsection