<div class="modal fade modal-slide-in-right" aria-hidden="true" tabindex="-1" role="dialog"
id="modal-delete-{{$cat->idcategoria}}">

  {{Form::open(array('action'=>array('CategoriaController@destroy',$cat->idcategoria),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Eliminar categoria</h4>
            
            </div>
            <div class="modal-body">
            <p>confirme que desea eliminar categoria</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">confirmar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    {{Form::close()}}

</div>