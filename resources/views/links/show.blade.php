@extends('layouts.app')

@section('content')
    <div>Título: {{ $link->title }}</div>
    <div>URL: {{ $link->slug }}</div>
    <div>Descripción: {{ $link->description }}</div>
    <div>Creado hace: {{ $link->created_at->diffForHumans() }}</div>
@endsection
