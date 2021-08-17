@extends('layout.main')
@section('title', 'HDC Eventes')
@section('content')


        <h1>Algum titulo</h1>
        <img src="/img/bannr.jpg" alt="bannr">
        @if(10 > 15)
            <p>A condiao é verdadeira</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>TO nome é pedro</p>
        @elseif ( $nome  ==  "Matheus" )
        <p>TO nome é Pedro{{ $nome }} e tem  {{ $idade2 }} years old, and works as {{ $profession }} </p>
        @else
        <p>The nome is not Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

        @foreach ( $nomes  as  $nome )
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $nome = "João";
            echo $nome;
        @endphp
@endsection


