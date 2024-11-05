@extends('layout.master')

@section('konten')
<h3 class="text-left">Software Engineering</h3>

<div class="row mb-4">
    <div class="col-3 ms-5">
        <img src="{{ asset('img/Softeng.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
    </div>
    <div class="col-8 d-flex flex-column">
        <h2 class="text-left">Pengenalan Software Engineering</h2>
        <h6>23 Maret 2024 | by: Renjun</h6>
        <p>Software Engineering adalah bidang yang sangat penting dalam dunia teknologi informasi, di mana perangkat lunak menjadi inti dari banyak aplikasi dan layanan yang kita gunakan sehari-hari.</p>
        <div class="mt-auto">
            <a href="{{ route('article.softeng1') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>
        </div>
    </div>

</div>
<div class="row mb-4">
<div class="col-3 ms-5">
    <img src="{{ asset('img/softeng1.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
</div>
<div class="col-8 d-flex flex-column">
    <h2 class="text-left"> Peran Agile dalam Software Engineering</h2>
    <h6>07 Agustus 2024 | by: Jaemin</h6>
    <p>Proses pengujian ini melibatkan berbagai metode, mulai dari pengujian unit untuk setiap komponen kecil perangkat lunak hingga pengujian integrasi untuk memastikan berbagai bagian bekerja harmonis.</p>
    <div class="mt-auto">
        <a href="{{ route('article.softeng2') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>
    </div>
</div>

</div>

<div class="row mb-4">
    <div class="col-3 ms-5">
        <img src="{{ asset('img/softeng2.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
    </div>
    <div class="col-8 d-flex flex-column">
        <h2 class="text-left">Praktik Pengujian Perangkat Lunak</h2>
        <h6>29 June 2024 | by: Chenle</h6>
        <p>Interactive multimedia telah mengubah cara perusahaan berinteraksi dengan pelanggan mereka.</p>
        <div class="mt-auto">
            <a href="{{ route('article.softeng3') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>
        </div>
    </div>
    
    </div>

@endsection