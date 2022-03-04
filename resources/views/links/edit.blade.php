@extends('layouts.app')

@section('Header', "Editar a $link->title")
@section('content')
    <form class="col-lg-6 mx-auto border p-4 rounded">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $link->title }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $link->description }}</textarea>
        </div>
        <div class="btn-group" role="group" aria-label="">
            <a href="#" class="btn btn-outline-info">Guardar Cambios</a>
            <a href="{{ route('links.show', $link)}}" class="btn btn-outline-danger">Cancelar</a>
        </div>
    </form>
@endsection
