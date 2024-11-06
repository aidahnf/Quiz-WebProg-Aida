@extends('layout.master')

@section('konten')
<h2 class="p-2 ms-3 mt-5 text-start">Our Writers:</h2>

<div class="row mb-5 mt-5">
    @foreach($writers as $writer)
        <div class="p-5 col-6 text-center fs-5">
            <img src="{{ asset('img/Writers3.jpg') }}" class="rounded-4 mx-auto d-block border border-dark" alt="{{ $writer->name }}" width="250" style="border-radius:50%;">
            <h3>{{ $writer->name }}</h3>
            <h4>Computer Science</h4>
        </div>
    @endforeach
</div>
@endsection
