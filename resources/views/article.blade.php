@extends('template')
 
@section('title')
   <h1> Les articles</h1>
@endsection
 
@section('contenu')
    <p>C'est l'article n° {{ $numero }}</p>
@endsection