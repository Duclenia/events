@extends('layout.main')
@section('title', 'produtos')


@section('content')
<h1>tela de produto</h1>
@if($busca != '')
<p>O usuario está buscando por: {{ $busca }}</p>
@endif
@endsection
