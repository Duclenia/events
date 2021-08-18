@extends('layout.main')
@section('title', 'Criar eventos')


@section('content')
<h1>Criar eventos</h1>
<div id="event-create-conteiner" class="col-md-6 offset-md-3">
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do eventos</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title"> evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select class="form-control" id="private" name="private" >
            <option value="0">Não</option>
            <option value="1">sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descricão:</label>
            <textarea class="form-control" id="description" name="description" placeholder="O que é?"></textarea>
        </div>
        <button class="btn btn-primary">Criar</button>

    </form>
</div>
@endsection
