@extends('welcome')

@section('contenido')

<h2>Lista de principal lista xdxd</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

  <!-- Card 1 -->
  <div class="bg-white rounded-xl shadow-lg p-6">
    <h2 class="text-xl font-bold">Card 1</h2>
    <p>Contenido de la tarjeta.</p>
  </div>

  <!-- Card 2 -->
  <div class="bg-white rounded-xl shadow-lg p-6">
    <h2 class="text-xl font-bold">Card 2</h2>
    <p>Contenido de la tarjeta.</p>
  </div>

  <!-- Card 3 -->
  <div class="bg-white rounded-xl shadow-lg p-6">
    <h2 class="text-xl font-bold">Card 3</h2>
    <p>Contenido de la tarjeta.</p>
  </div>

  <!-- Card 4 -->
  <div class="bg-white rounded-xl shadow-lg p-6">
    <h2 class="text-xl font-bold">Card 4</h2>
    <p>Esta aparece en la segunda fila.</p>
  </div>

  <!-- Card 5 -->
  <div class="bg-white rounded-xl shadow-lg p-6">
    <h2 class="text-xl font-bold">Card 5</h2>
    <p>Contenido de la tarjeta.</p>
  </div>

</div>

@endsection