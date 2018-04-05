@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <h3>Listado de categorias</h3><a href="categoria/create"><button class="btn btn-success">Nuevo</button></a>
            @include('almacen.categoria.search')
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach ($categorias as $cat)
                    <tr>    
                        <td>{{$cat->idcategoria}}</td>
                        <td>{{$cat->nombre}}</td>
                        <td>{{$cat->descripcion}}</td>
                        <td>
                            <a href="{{ URL::action('CategoriaController@edit',$cat->idcategoria)}}"><button class="btn btn-info">Editar</button></a>
                            <a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal" ><button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include ('almacen.categoria.modal')
                    @endforeach
                </table>
            </div>
            {{$categorias->render()}}
        </div>
    </div>
@endsection