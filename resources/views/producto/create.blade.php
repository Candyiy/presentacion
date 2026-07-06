@extends('welcome')

@section('contenido')

<h2>Nuevo producto</h2>

<form action="{{ route('producto.store') }}" method="POST">
    @csrf
    @method('post')

    <div>
      <label class="text-dark dark:text-darklink font-semibold mb-2 bolck">Nombre</label>
      <input class="form-control py-2" type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
      @error('nombre')
          <span class="text-error">{{$message}}</span>
      @enderror
    </div>

    <br>

    <div>
      <label class="text-dark dark:text-darklink font-semibold mb-2 bolck">Descripción</label>
      <textarea class="form-control py-2" name="descripcion" id="descripcion">{{old('descripcion')}}</textarea>
      @error('descripcion')
          <span class="text-error">{{$message}}</span>
      @enderror
    </div>

    <br>

    <!-- NUEVO SECTOR: Selector de Categoría -->
    <div>
      <label class="text-dark dark:text-darklink font-semibold mb-2 bolck">Categoría</label>
      <select class="form-control py-2" name="categoria" id="categoria">
          <option value="" disabled {{ old('categoria') === null ? 'selected' : '' }}>Seleccione una categoría</option>
          <option value="electrodomesticos" {{ old('categoria') == 'electrodomesticos' ? 'selected' : '' }}>Electrodomésticos</option>
          <option value="infantil" {{ old('categoria') == 'infantil' ? 'selected' : '' }}>Infantil</option>
          <option value="ropa" {{ old('categoria') == 'ropa' ? 'selected' : '' }}>Ropa</option>
      </select>
      @error('categoria')
          <span class="text-error">{{$message}}</span>
      @enderror
    </div>

    <br>
    <div>
      <label class="text-dark dark:text-darklink font-semibold mb-2 bolck">precio</label>
      <input class="form-control py-2" type="number" step="0.01" name="precio" id="precio" value="{{old('precio')}}">
      @error('precio')
          <span class="text-error">{{$message}}</span>
      @enderror
    </div>
    
    <br>
    <div>
      <label class="text-dark dark:text-darklink font-semibold mb-2 bolck">stock</label>
      <input type="number" class="form-control py-2" name="stock" id="stock" value="{{old('stock')}}">
      @error('stock')
          <span class="text-error">{{$message}}</span>
      @enderror
    </div>
    <br>

    <button class="btn btn-success">
        Guardar
    </button>

</form>

@endsection
