@extends('layouts.main')

@section('title', 'ducky')
@section('sidebar')
@include('layouts.side')
@endsection

@section('content')
<div id="main-banner">

    <img src="/img/banners/shutdown.jpg" alt="" id="imgbanner">
</div>
{{-- <script src="/js/musicfunctions.js"></script> --}}
{{-- <h1 id="greeting"></h1>
<p id="currentTime"></p> --}}
<div id="songs-session">
    <ul class="song-list">
    @foreach($musics as $music)
    <li>
        <div id="song-block">
            <img id='song-cover' onclick="selecionado({{$music}})" src="/img/covers/{{$music->image}}" alt="Capa do album {{$music->album}}">
            <a id='selected-song-name' onclick="selecionado({{$music}})">{{$music->name}}</a>
        </div>
    </li>
    @endforeach
</ul></div>

@endsection