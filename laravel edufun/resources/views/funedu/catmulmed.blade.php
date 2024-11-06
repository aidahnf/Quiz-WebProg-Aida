@extends('layout.master')

@section('konten')
<h3 class="text-left">Interactive Multimedia</h3>
<div class="row mb-4" >
    <div class="col-3 ms-5" >
        <img src="{{ asset('img/Mulmed.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
    </div>
    <div class="col-8 d-flex flex-column">
        <h2 class="text-left"> Apa itu Interactive Multimedia</h2>
        <h6>23 April 2024 | by: Jeno</h6>
        <p>Interactive Multimedia telah menjadi penting dalam dunia pendidikan, hiburan, pemasaran, dan banyak bidang lainnya, memungkinkan cara baru untuk berkomunikasi dan berbagi informasi.</p>
    <div class="mt-auto">
        <a href="{{ route('article.mulmed1') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>

        </div>
    </div>

</div>

<div class="row mb-4">
<div class="col-3 ms-5">
    <img src="{{ asset('img/mulmedd.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
</div>
<div class="col-8 d-flex flex-column">
    <h2 class="text-left"> Manfaat Interactive Multimedia</h2>
    <h6>09 September 2024 | by: Mark</h6>
    <p>Interactive multimedia memberikan berbagai manfaat dalam dunia pendidikan.</p>
    <div class="mt-auto">
        <a href="{{ route('article.mulmed2') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>
    </div>
</div>

</div>

<div class="row mb-4">
    <div class="col-3 ms-5">
        <img src="{{ asset('img/mulmedd1.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
    </div>
    <div class="col-8 d-flex flex-column">
        <h2 class="text-left">Peran Interactive Multimedia</h2>
        <h6>07 July 2024 | by: Haechan</h6>
        <p>Interactive multimedia telah mengubah cara perusahaan berinteraksi dengan pelanggan mereka</p>
        <div class="mt-auto">
            <a href="{{ route('article.mulmed3') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>
        </div>
    </div>
    
    </div>

@endsection