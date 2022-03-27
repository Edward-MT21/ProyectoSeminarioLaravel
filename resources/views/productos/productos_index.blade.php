@extends('layouts.master')

@section('content')
    PRODUCTOS INDEX
    <h1>Hello, {{ $productos }}</h1>
	<h1>Titulo PRODUCTOS INDEX </h1>
	@for($i	=	0;	$i	<	10;	$i++)
		El	valor	actual	es	{{	$i	}}
	@endfor	
@stop