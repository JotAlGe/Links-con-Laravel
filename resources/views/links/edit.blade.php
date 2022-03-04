@extends('layouts.app')

@section('title', "Editando a $link->title")

@section('Header', "Editar a $link->title")

@section('content')
    @include('layouts.partials._form')
@endsection
