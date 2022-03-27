@extends('layouts.master')

@section('content')
    CATALOGO
	<h1>Titulo de prueba </h1>
	@for($i	=	0;	$i	<	10;	$i++)
		El	valor	actual	es	{{	$i	}}
	@endfor	
@stop

