@extends('layouts.app')

@section('content')
@component('components.card')

@slot('judul')
Program
@endslot
@slot('konten')
Ini adalah Halaman Program !!
</br>
</br>
<p>Link Halaman Program :</p>
<ul>
    <li><a href="https://www.educastudio.com/program/{{ $link }}">{{ $link }}</a></li>
</ul>

@endslot
@endcomponent

@endsection
