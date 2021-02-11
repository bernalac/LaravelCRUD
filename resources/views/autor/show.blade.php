@extends('autor.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Autor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('autor.index') }}"> Atrás</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $autor->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nacimiento:</strong>
                {{ $autor->fecha_nac }}
            </div>
            <h2>Frases del autor</h2>
        </div>
        
        @foreach($array as $element)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    {{ $element->descripcion }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categoria:</strong>
                    {{ $element->categoria }}
                </div>
            </div>
        @endforeach
            
        
        
    </div>
@endsection
