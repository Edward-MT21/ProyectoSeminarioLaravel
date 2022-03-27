@extends('layouts.master')

@section('content')

    <div class="container w-25 border p-4 mt-4">

        <!--<form method="POST" action="/productos">-->
        <form method="POST" action="{{ route('productos-update', ['id' => $producto->id]) }}">


            @csrf
            {{ method_field('PATCH') }}

            <div class="mb-3 col">

                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('nombre')
                    <!--<div class="alert alert-danger">{{ $message }}</div>-->
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror                

                <label for="nombre" class="form-label">Título del producto</label>
                <input type="text" class="form-control mb-2" name="nombre" id="exampleFormControlInput1" placeholder="Ingresar producto" value="{{ $producto->nombre }}">
                <input type="text" class="form-control mb-2" name="imagen" id="exampleFormControlInput1" placeholder="Ingresar imagen" value="{{ $producto->imagen }}">
                <input type="submit" value="Actualizar producto" class="btn btn-primary my-2" />
            </div>
        </form>       
        
    </div>    
@endsection

