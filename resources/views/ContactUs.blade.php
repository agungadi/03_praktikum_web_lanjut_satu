
    @extends('layouts.app')

    @section('content')
    @component('components.card')

    @slot('judul')
    Contact Us
    @endslot
    @slot('konten')
    Ini adalah halaman Contact Us !!
    </br>
    </br>
    <p>Link Contact Us :</p>
       <a href="https://www.educastudio.com/contact-us">Contact us</a>
    @endslot
    @endcomponent

    @endsection
