@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="grupo">
        <div class="row justify-content-center"> <!-- Cambié 'content-center' por 'justify-content-center' -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- Asegúrate de que la columna ocupe el espacio adecuado en diferentes tamaños de pantalla -->
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Agregar Nuevo Tóner</strong>
                    </div>
                    <div class="card-body card-block">
                        <!-- Aquí comienza el formulario -->
                        <form method="POST" action="{{route('toners.store')}}">
                            @csrf <!-- Token de seguridad para formularios en Laravel -->

                            <!-- Campo Modelo de Impresora -->
                            <div class="form-group">
                                <label>Modelo de Impresora:</label>
                                <select class="form-control input-lg" name="id_modeloimp" required="">
                                    <option value="">Seleccionar Modelo</option>
                                    @foreach($modelosimpresoras as $modeloimp)
                                    <option value="{{$modeloimp->id}}">{{$modeloimp->marca . " - " . $modeloimp->modelo}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Campo Modelo de Impresora -->
                            <div class="form-group">
                                <label>Modelo de toner:</label>
                                <select class="form-control input-lg" name="id_modelotoner" required="">
                                    <option value="">Seleccionar Modelo</option>
                                    @foreach($modelosToners as $modelotoner)
                                    <option value="{{$modelotoner->id}}">{{$modelotoner->marca . " - " . $modelotoner->modelo}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Campo Stock de Compra -->
                            <div class="form-group">
                                <label class="form-control-label">Nro de Orden</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-number"></i></div>
                                    <input type="number" name="orden" class="form-control"
                                        placeholder="Ingrese el nro de orden" min="1" required>
                                </div>
                            </div>


                            <!-- Campo Ubicacion -->
                            <div class="form-group">
                                <label class="form-control-label">Ubicacion</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
                                    <input type="text" name="ubicacion" class="form-control"
                                    placeholder="Ej. Personal01" min="1" required>
                                </div>
                            </div>

                            <!-- Botón para enviar el formulario -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Guardar Tóner</button>
                            </div>
                        </form>
                        <!-- Fin del formulario -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->
@endsection