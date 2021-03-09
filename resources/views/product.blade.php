@extends('layouts.app')

@section('content')
@component('components.card')

@slot('judul')
Product
@endslot
@slot('konten')
Ini adalah halaman Product !!
</br>
</br>
<p>Link Halaman Product :</p>
<ul>
    <li><a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games</a></li>
    <li><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a></li>
    <li><a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a></li>
    <li><a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a></li>
</ul>

@endslot
@endcomponent

@endsection
