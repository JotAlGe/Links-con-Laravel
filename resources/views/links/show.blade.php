@extends('layouts.app')

@section('Header', $link->title)
@section('content')
    <div class="card col-lg-6 mx-auto">
        <div class="card-header bg-info text-white">
         Creado hace: {{ $link->created_at->diffForHumans() }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $link->title }}</h5>
            <p class="card-text">{{ $link->description }}</p>

            {{-- btn group --}}
            <div class="d-flex justify-content-between">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="{{ route('links.edit', $link) }}" class="btn btn-outline-warning">Editar</a>
                <button class="btn btn-outline-danger">Delete</button>
            </div>
            <div><a href="{{ route('links.index')}}" class="btn btn-info text-white">Inicio</a></div>
            </div>
        </div>
    </div>
@endsection
