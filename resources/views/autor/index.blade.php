@extends('autor.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Proyecto Laravel Febrero Javier Bernal</h2>
            </div>
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('autor.create') }}"> Crear nuevo autor</a>

            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    @if ($message = Session::get('error'))

        <div class="alert alert-danger">

            <p>{{ $message }}</p>

        </div>

    @endif
   
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
            <form action="{{ route('autor.destroy',$product->id) }}" method="POST">

   

                <a class="btn btn-info" href="{{ route('autor.show',$product->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('autor.edit',$product->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $autor->links() !!}
      
@endsection
