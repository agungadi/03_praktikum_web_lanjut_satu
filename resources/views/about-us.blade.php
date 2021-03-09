
    @extends('layouts.app')

    @section('content')
    @component('components.card')

    @slot('judul')
    About Us
    @endslot
    @slot('konten')
    Ini adalah halaman About Us !!
    </br>
    </br>
    <p>Halaman About Us :</p>
       <a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>
    @endslot
    @endcomponent

    @endsection
