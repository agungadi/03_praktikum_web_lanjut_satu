@extends('layouts.app')

@section('content')
@component('components.card')

@slot('judul')
Read News
@endslot
@slot('konten')
Ini adalah halaman artikel News !!
</br>
</br>
<p>Link Halaman News Covid :</p>
<a href="http://127.0.0.1:8000/news/covid">News {{$name}}</a>
@endslot
@endcomponent

@endsection
