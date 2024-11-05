@extends('layout.master')

@section('konten')

<h2 class="p-2 ms-3 mt-5 text-start">Popular Articles:</h2>

<div class="row mb-5 mt-5">
    @foreach($articles as $article)
        <div class="col-4 mb-4">
            <!-- Tambahkan gambar default -->
            <img src="{{ asset('img/Mulmed.jpg') }}" alt="Default Article Image" class="rounded mb-3" width="100%" height="200">
            
            <h3>{{ $article->title }}</h3>
            <p>By: {{ $article->writer->name }}</p>
            <p>{{ Str::limit($article->content, 100) }}</p>
            <a type="button" href="{{ route('articles.show', $article->id) }}" class="btn btn-secondary mt-2">Read more...</a>
        </div>
    @endforeach
</div>

<!-- Menambahkan tautan pagination -->
<div class="row">
    <div class="col-12 text-center">
        {{ $articles->links() }} <!-- Ini akan menampilkan tautan pagination -->
    </div>
</div>

@endsection
