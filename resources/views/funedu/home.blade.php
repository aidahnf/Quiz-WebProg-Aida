@extends('layout.master')

@section('konten')
<img src="{{ asset('img/home.jpg') }}" class="img-fluid mb-5" alt="..." width="auto" >
<div class="row mb-4" >
        <div class="col-3 ms-5" >
            <img src="{{ asset('img/Mulmed.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
        </div>
        <div class="col-8 d-flex flex-column">
            <h2 class="text-left">Interactive Multimedia</h2>
            <h6>23 April 2024 | by: Jeno</h6>
            <p>Interactive Multimedia telah menjadi penting dalam dunia pendidikan, hiburan, pemasaran, dan banyak bidang lainnya, memungkinkan cara baru untuk berkomunikasi dan berbagi informasi.</p>
        <div class="mt-auto">
            <a href="{{ route('admin.catmulmed') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>

            </div>
        </div>

</div>

<div class="row mb-4">
    <div class="col-3 ms-5">
        <img src="{{ asset('img/Softeng.jpg') }}" class="img-fluid rounded-4" alt="..." width="300">
    </div>
    <div class="col-8 d-flex flex-column">
        <h2 class="text-left">Software Engineering</h2>
        <h6>23 Maret 2024 | by: Renjun</h6>
        <p>Software Engineering adalah bidang yang sangat penting dalam dunia teknologi informasi, di mana perangkat lunak menjadi inti dari banyak aplikasi dan layanan yang kita gunakan sehari-hari.</p>
        <div class="mt-auto">
            <a href="{{ route('admin.catsofteng') }}" type="button" class="btn" style="background-color: midnightblue; color: white; border-radius: 50px;">Read more...</a>
        </div>
    </div>

</div>
@endsection