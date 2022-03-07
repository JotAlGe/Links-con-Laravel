@extends('layouts.app')

@section('Header', 'Crear nuevo link')

@section('content')
    <form class="col-lg-6 mx-auto border p-4 rounded" method="POST" action="{{ route('links.store') }}">
        @csrf

        {{-- session message --}}
        @if(@session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Exito!</strong> {{@session('success')}}
            </div>
        @endif

        {{-- errors --}}
        @if ($errors->any())

            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                @foreach ($errors->all() as $error)
                    <strong>¡Error!</strong> {{ $error }}
                    <br>
                @endforeach

            </div>
        @endif

        {{-- slug --}}
        <input type="hidden" name="slug">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese un título..." name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Escriba una descripción...">{{ old('description') }}</textarea>
        </div>
        <div class="btn-group" role="group">
            <input type="submit" class="btn btn-outline-info" value="Guardar">
            <a href="{{route('links.index')}}" class="btn btn-outline-danger">Cancelar</a>
        </div>
    </form>
@endsection

