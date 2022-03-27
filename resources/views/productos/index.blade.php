@extends('layouts.master')

@section('content')

    <div class="container w-25 border p-4 mt-4">

        <!--<form method="POST" action="/productos">-->
        <form method="POST" action="{{route('productos')}}">
            
            @csrf
            <div class="mb-3 col">

                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('nombre')
                    <!--<div class="alert alert-danger">{{ $message }}</div>-->
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror                

                <label for="nombre" class="form-label">Título del producto</label>
                <input type="text" class="form-control mb-2" name="nombre" id="exampleFormControlInput1" placeholder="Ingresar producto">
                <input type="submit" value="Crear producto" class="btn btn-primary my-2" />
            </div>
        </form>

        <div>
            @foreach ($productos as $producto)
            
                <div class="row py-1">
                    <div class="col-md-9 d-flex align-items-center">
                        <a href="{{ route('productos-edit', ['id' => $producto->id]) }}">{{ $producto->nombre }}</a>
                    </div>

                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="{{ route('productos-destroy', [$producto->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
                
            @endforeach
        </div>        
        
    </div>    
@endsection

