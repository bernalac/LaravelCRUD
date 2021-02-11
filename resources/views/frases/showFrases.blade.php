@extends('frases.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Frase</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('frases.index') }}"> Atrás</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $frases->descripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                {{ $frases->categoria }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <h2>Autor de la frase</h2>
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $aut->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nacimiento:</strong>
                {{ $aut->fecha_nac }}
            </div>
        </div>
        
        
            
        
        
    </div>
@endsection