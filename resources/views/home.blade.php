@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse ($links as $link)

                <div class="card mb-3">
                    <div class="card-header">
                        Creado: {{ $link->created_at }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $link->title }}</h5>
                        <p class="card-text">{{ $link->description }}</p>
                        <a href="#" class="">{{ $link->url }}</a>
                    </div>
                </div>

            @empty
                <h2>¡No hay links para mostrar!</h2>
            @endforelse
        </div>
    </div>
</div>
@endsection
