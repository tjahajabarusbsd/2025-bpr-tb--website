@extends('layouts.app')

@section('title', $post->title)

@section('meta')
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}" />
    <meta property="og:image" content="{{ $post->thumbnail_url ?? asset('/images/banner.png') }}" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:type" content="article" />
    <meta name="twitter:card" content="summary_large_image" />
@endsection

@section('additional_css')
<style>
    .article-content {
        font-family: 'Segoe UI', sans-serif;
        line-height: 1.8;
        color: #1f2937;
        margin-top: 2rem;
    }

    .article-content h1,
    .article-content h2,
    .article-content h3,
    .article-content h4,
    .article-content h5,
    .article-content h6 {
        font-weight: bold;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        color: #111827;
    }

    .article-content h1 {
        font-size: 2rem;
        border-bottom: 2px solid #d1d5db;
        padding-bottom: 0.5rem;
    }

    .article-content h2 {
        font-size: 1.75rem;
    }

    .article-content h3 {
        font-size: 1.5rem;
    }

    .article-content h4 {
        font-size: 1.25rem;
    }

    .article-content h5 {
        font-size: 1rem;
    }

    .article-content h6 {
        font-size: 0.875rem;
    }

    .article-content p {
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    .article-content ul,
    .article-content ol {
        padding-left: 1.5rem;
        margin-bottom: 1rem;
    }

    .article-content ul {
        list-style-type: disc;
    }

    .article-content ol {
        list-style-type: decimal;
    }

    .article-content li {
        margin-bottom: 0.5rem;
    }

    .article-content a {
        color: #2563eb;
        text-decoration: underline;
        transition: color 0.3s ease;
    }

    .article-content a:hover {
        color: #1d4ed8;
    }

    .article-content blockquote {
        border-left: 4px solid #3b82f6;
        padding-left: 1rem;
        color: #374151;
        margin: 1rem 0;
        font-style: italic;
        background-color: #f9fafb;
    }

    .article-content pre,
    .article-content code {
        font-family: 'Fira Code', monospace;
        background: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        color: #1e293b;
    }

    .article-content img {
        max-width: 100%;
        height: auto;
        margin-top: 1rem;
        margin-bottom: 1rem;
        border-radius: 0.5rem;
    }
</style>
@endsection

@section('content')
<div class="container mx-auto py-8">
    <article class="article-content bg-white shadow-md rounded-lg p-6">
        <header class="mb-6">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-2">{{ $post->title }}</h1>
            <p class="text-sm text-gray-500">Published on {{ $post->created_at->format('F d, Y') }}</p>
        </header>
        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
            {!! str($post->content)->sanitizeHtml()->replace('src="storage/', 'src="' . url('storage/') . '/') !!}
        </div>
    </article>
</div>
@endsection