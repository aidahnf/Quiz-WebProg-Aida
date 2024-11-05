@extends('layout.master')

@section('konten')
<div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
    @if(isset($article) && $article)
        <h2 class="mt-4 text-center">{{ $article->title }}</h2>
        <div class="text-center">
            <img src="{{ asset($article->image_path ?: 'img/mulmedd.jpg') }}" alt="{{ $article->title }}" class="img-fluid" style="width: 100%; margin-bottom: 30px;">
            <p>{{ $article->content }}</p>
            <p>By: {{ $article->writer->name }}</p>
        </div>
    @else
        <h2 class="mt-4 text-danger text-center">Artikel tidak ditemukan</h2>
    @endif
</div>

@endsection
