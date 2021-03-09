
    @extends('layouts.app')

@section('content')
@component('components.card')

@slot('judul')
Program
@endslot
@slot('konten')
Ini adalah halaman Program !!
</br>
</br>
<p>Link Halaman Daftar Program :</p>
<ul>
    <li><a href="https://www.educastudio.com/program/karir">Karir</a></li>
    <li><a href="https://www.educastudio.com/program/magang">Magang</a></li>
    <li><a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a></li>
</ul>

@endslot
@endcomponent

@endsection
