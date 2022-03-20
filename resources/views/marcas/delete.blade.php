<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Eliminar</h3>
        </div>

        <div class="modal-body">

            <form role="form" method="post" action="{{ url ("/marcas/{$marca->id}")}}">
                <fieldset>
                    @csrf
                    {{method_field('DELETE')}}
                    <h3>¿Desea eliminar la Marca: <b>{{$marca->Nombre_Marca}} </b>?</h3>
                    <input type="submit" value="Eliminar" name="update" class="btn btn-danger">
                    <a class="btn btn-default" href="">Cancelar</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
