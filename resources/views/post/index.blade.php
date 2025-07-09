@extends('layouts.app')

@section('title', 'BPR Tjahaja Baru | Informasi')

@section('content')
<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-8">Semua Informasi</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            @php
                preg_match('/<img[^>]+src="([^">]+)"/', $post->content, $matches);
                $firstImage = $matches[1] ?? url('images/dummyimg.jpg');
            @endphp
            <a href="{{ route('post.show', $post->slug) }}" class="bg-white rounded-lg shadow hover:shadow-lg overflow-hidden group hover:scale-[1.03] transition duration-300">
                <div class="h-48 bg-gray-200">
                    <img src="{{ $firstImage }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:opacity-90 transition" />
                </div>
                <div class="p-4">
                    <h4 class="text-lg font-semibold mb-2 group-hover:text-blue-600 transition-colors">
                        {{ $post->title }}
                    </h4>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-3">
                        {!! Str::limit(strip_tags(preg_replace('/<figcaption[^>]*>.*?<\/figcaption>/is', '', $post->content)), 200) !!}
                    </p>
                    <p class="text-xs text-gray-400">{{ $post->created_at->format('M d, Y') }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection