@extends('layout.main')
@section('title', 'HDC Eventes')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Procurar eventos</h1>
    <form action="/" method="get">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por:{{ $search }}</h2>
    @else

    <h2>Proximo eventos</h2>
    <p  class = "subtitle">Veja os eventos dos proximos dias</p>
    @endif

    <div id="cards-container" class="row">
      @foreach ($events as $event)
      <div class="card col-md-3">
        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
        <div class="card-body">
            <p class="card-date">{{ date('d/m/y',strtotime($event->date)) }}</p>
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-participants">X Participantes</p>
            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
        </div>
    </div>

      @endforeach

      @if (count($events)==0 && $search)
      <p>Não ha eventos com {{ $search }}! <a href="/">Ver todos</a></p>
      @elseif(count($events)== 0)
      <p>nao há eventos</p>

      @endif
    </div>
</div>

@endsection


