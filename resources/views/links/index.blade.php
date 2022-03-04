@extends('layouts.app')


@section('content')

    @foreach ($links as $link)
        <div class="card my-3">
            <h5 class="card-header">Creado: {{ $link->created_at->format('d/m/y') }}</h5>

            <div class="card-body">
                <h5 class="card-title text-success">{{ $link->title }}</h5>
                <p class="card-text">
                    {{ $link->description }}
                </p>
                <hr>
                <a href="{{ route('links.show', $link) }}" class="text-dark text-decoration-none">{{ $link->slug}}</a>
            </div>
        </div>
    @endforeach
@endsection
