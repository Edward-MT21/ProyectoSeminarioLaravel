@extends('layouts.master')

@section('content')
    
    <div class="row" >
		
		<div class="col-sm-8">
			<div class="container w-75 border p-4 mt-4">
				<img src="{{$arrayProductos['imagen']}}" style="height: 460px">
			</div>	
		</div>
		<div class="col-sm-4">
			<h2>{{$arrayProductos['nombre']}}</h2>
		</div>
		
    </div>    
@stop