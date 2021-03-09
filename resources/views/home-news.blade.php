@extends('layouts.app')

@section('content')
@component('components.card')

@slot('judul')
News
@endslot
@slot('konten')
Ini adalah halaman News !!
</br>
</br>
<p>Link Halaman Home News :</p>
<a href="https://www.educastudio.com/news">Home</a></br> </br><a href="http://127.0.0.1:8000/news/covid">Covid</a>

@endslot
@endcomponent

@endsection
