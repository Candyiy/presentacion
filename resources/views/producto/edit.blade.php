@extends('welcome')

@section('contenido')

<h2>Editar producto</h2>

<form action="{{ route('producto.update',$producto) }}" method="POST">

    @csrf
    @method('PUT')

    <!-- Campos -->

    <button class="btn btn-warning">
        Actualizar
    </button>

</form>

@endsection