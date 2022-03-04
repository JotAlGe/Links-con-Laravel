@extends('layouts.app')

@section('title', 'Links')

@section('Header', 'Listado de links')

@section('content')
    <a class="btn btn-outline-primary" href="{{ route('links.create') }}">Crear Nuevo</a>
    @foreach ($links as $link)
        <div class="card my-3">
            <h5 class="card-header bg-info text-white">Creado hace: {{ $link->created_at->diffForHumans() }}</h5>
            <a href="{{ route('links.show', $link) }}" class="text-dark text-decoration-none">
                <div class="card-body">
                    <h5 class="card-title text-info">{{ $link->title }}</h5>
                    <p class="card-text">
                        {{ $link->description }}
                    </p>
                    <hr>

                    <strong>Slug: {{ $link->slug}}</strong>
                </div>
            </a>
        </div>
    @endforeach
@endsection
