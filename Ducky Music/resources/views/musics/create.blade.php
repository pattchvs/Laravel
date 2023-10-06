@extends('layouts.main')

@section('title', 'ducky')
@section('sidebar')
@include('layouts.side')
@endsection
@section('content')

    <div id="music-create-container" class="col-md-6 offset-md-3 form-container"> <!-- Adicione a classe form-container aqui -->
    <h1>Adicione sua música</h1>
    <form action="/musics" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Cover:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="image">Música:</label>
            <input type="file" id="song" name="song" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Nome da música:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome da música">
        </div>
        <div class="form-group">
            <label for="title">Artista:</label>
            <input type="text" class="form-control" id="artist" name="artist" placeholder="Nome do artista">
        </div>
        {{-- <div class="form-group">
            <label for="title">Data de postagem:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div> --}}
        <div class="form-group">
            <label for="title">Álbum:</label>
            <input type="text" class="form-control" id="album" name="album" placeholder="Nome do álbum">
        </div>
        <div class="form-group">
            <label for="title">A musica é explicita?</label>
            <select name="isExplicit" id="isExplicit" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        
            
        <input type="submit" class="btn btn-primary" value="Adicionar música">
    </form>
</div> 

@endsection

