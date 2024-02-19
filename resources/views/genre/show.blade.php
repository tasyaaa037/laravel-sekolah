@extends('template.master')

@section('h1')
    GENRE
@endsection
@section('content')
<div>
    <h1>Genre</h1>
    <h2>ID: {{$genresShow->id}}</h2>
    <h4>Nama: {{$genresShow->nama}}</h4>
</div>
    
@endsection