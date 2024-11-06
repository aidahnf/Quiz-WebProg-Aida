@extends('layout.master')

@section('konten')

<h2 class="p-2 ms-3 mt-5 text-start">Popular Articles:</h2>

<div class="row mb-5 mt-5">
    @foreach($articles as $article)
        <div class="col-12 mb-4">
            <!-- Gunakan d-flex untuk tata letak horizontal -->
            <div class="d-flex align-items-start">
                <!-- Gambar artikel -->
                <img src="{{ asset('img/Mulmed.jpg') }}" alt="Default Article Image" class="rounded me-3" width="200" height="200">
                
                <!-- Konten artikel -->
                <div>
                    <h3>{{ $article->title }}</h3>
                    <p>By: {{ $article->writer->name }}</p>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a type="button" href="{{ route('articles.show', $article->id) }}" class="btn btn-secondary mt-2">Read more...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Menambahkan tautan pagination di tengah -->
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $articles->links() }} 
    </div>
</div>

@endsection
