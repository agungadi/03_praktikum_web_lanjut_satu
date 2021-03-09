@extends('layouts.app')

@section('content')
@component('components.card')

@slot('judul')
Product
@endslot
@slot('konten')
Ini adalah Product !!
</br>
</br>
<p>Link Halaman Product :</p>
<ul>
    <li><a href="https://www.educastudio.com/category/{{ $link }}">{{ $link }}</a></li>
</ul>

@endslot
@endcomponent

@endsection
