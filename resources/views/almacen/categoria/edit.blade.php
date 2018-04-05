@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <h3>Editar Categoria: {{ $categoria->nombre}} </h3>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {!!Form::model($categoria,['method'=>'PATCH','route'=>['almacen.categoria.update',$categoria->idcategoria]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" class="form-control" placeholder="Descripcion">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection