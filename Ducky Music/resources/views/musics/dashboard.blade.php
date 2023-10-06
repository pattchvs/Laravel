@extends('layouts.main')

@section('title', 'ducky')
@section('sidebar')
@include('layouts.side')
@endsection

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Lista de músicas</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-musics-container">
    @if (count($musics) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>Artista</th>
                    <th scope="col">Album</th>
                    <th scope='col'>Ações</th>

                </tr>
            </thead>
      
        <tbody>
            @foreach ($musics as $music)
                <tr>
                    <td scropt='row'>{{ $loop-> index + 1 }}</td>
                    <td><a style="cursor: pointer;" onclick="selecionado({{$music}})">{{$music->name}}</a></td>
                    <td>{{$music->artist}}</td>
                    <td>{{$music->album}}</td>
                    <td>
                        <a href="/musics/edit/{{$music->id}}" class='btn btn-info edit-btn'> <ion-icon name='create-outline'></ion-icon> Editar</a> 
                        <form action="/musics/{{$music->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name='trash-outline'></ion-icon> Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    @else
    <p>Você ainda não tem musicos, deseja <a href="/musics/create">criar um musico</a>? </p>
    @endif
</div>

@endsection