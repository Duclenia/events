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
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date">
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
        <div class="form-group">
            <label for="title">Add itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeira">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Pauco">Pauco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Agua">Agua
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes">Brindes
            </div>
        </div>
        <button class="btn btn-primary">Criar</button>

    </form>
</div>
@endsection
