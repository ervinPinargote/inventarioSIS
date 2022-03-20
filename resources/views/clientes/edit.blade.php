<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Editar Datos</h3>
        </div>

            <div class="modal-body">

                <form role="form" method="post" action="{{ url ("/clientes/{$client->id}")}}">
                    <fieldset>
                        @csrf
                        {{method_field('PUT')}}

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Cedula/Pasaporte</label>
                                    <input class="form-control"  value="{{$client->ci}}" placeholder="Cedula" name="ci" type="hidden" autofocus="">
                                    <input type="text" name="ci" value="{{$client->ci}}" class="form-control" disabled="True" maxlength="10"  id="id_ci">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Nombres: </label>
                                    <input class="form-control" placeholder="nombres" name="nombres" type="text" value="{{$client->nombres}}" autofocus="">

                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Apellidos: </label>
                                    <input class="form-control" placeholder="apellidos" name="apellidos" value="{{$client->apellidos}}" type="text" autofocus="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Fecha Nacimiento: </label>
                                    <input class="form-control" placeholder="fecha_Nac" name="fecha_Nac"  value="{{$client->fecha_Nac}}" type="text" autofocus="">

                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Telefono: </label>
                                    <input class="form-control" placeholder="telefono" name="telefono"  value="{{$client->telefono}}" type="text" autofocus="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Direccion: </label>
                                    <input class="form-control" placeholder="direccion" name="direccion" value="{{$client->direccion}}" type="text" autofocus="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Correo Electronico: </label>
                                    <input class="form-control" placeholder="E-mail" name="correo" type="email" value="{{$client->correo}}" autofocus="">
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Actualizar" name="update" class="btn btn-primary">
                        <a class="btn btn-default" href="">Cancelar</a>
                    </fieldset>
                </form>
            </div>
    </div>
</div>










