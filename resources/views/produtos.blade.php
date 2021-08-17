@extends('layout.main')
@section('title', 'produtos')


@section('content')
@if($id !=null)
<p>produto {{ $id }}</p>
@endif
@endsection
