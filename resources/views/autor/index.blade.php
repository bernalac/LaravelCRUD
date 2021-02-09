@extends('autor.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Proyecto Laravel Febrero Javier Bernal</h2>
            </div>
        </div>
    </div>
   
   
    <table class="table table-bordered">
        <tr>
            <th>Nº</th>
            <th>Nombre</th>
            <th>Nacimiento</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($autor as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->fecha_nac }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('autor.show',$product->id) }}">Show</a>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $autor->links() !!}
      
@endsection
