@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de productos
            <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        @include('products.fragment.info')
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">Id</th>
                    <th>Nombre del Producto</th>
                    <th>Short</th>
                    <th colspan="3">&nbsp;</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><strong>{{ $product->name }}</strong></td>
                        <td>{{ $product->short }}<td>
                    
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning">Ver</a>
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}"   class="btn btn-success">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">Eliminar</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
    <div class="col-sm-4">
        @include('products.fragment.aside')
    </div>
@endsection