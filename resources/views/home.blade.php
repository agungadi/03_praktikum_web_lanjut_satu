@extends('layouts.app')

@section('content')
@component('components.card')

@slot('judul')
Home
@endslot
@slot('konten')
Ini adalah halaman home !!
</br>
</br>
<p>Link Halaman Home :</p>
<a href="{{ $link }}"> {{ $link }}</a>

@endslot
@endcomponent

@endsection
