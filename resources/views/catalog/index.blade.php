@extends('layouts.master')

@section('content')

    <div align='center'>
        <h1>CATALOGO DE PRODUCTOS</h1>
    </div>
    
    <div class="row">
			@foreach($arrayProductos as	$key =>	$producto)
				<div class="col-xs-6	col-sm-4	col-md-3	text-center">
						<a href="{{url('/catalogo/show/'.$key)}}">
                            <img src="{{$producto['imagen']}}"	style="height:200px"/>
                            <h4	style="min-height:45px;margin:5px	0	10px	0">
                                {{$producto['nombre']}}
                            </h4>
						</a>
				</div>
			@endforeach
    </div>    
@stop