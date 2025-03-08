@extends('layouts.plantilla')

@section('titulo', 'Universidad')

@section('content')
    <form method="POST" action="{{ route('universidad.store') }}">
        @csrf

        <div class="row">
            <div class="col-ms-12 col-lg-12">

                <div class="card p-4">

                    <div class="card-header">
                        <div class="card-title">Universidad</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <label class='mt-4' for="rif_univ">RIF DE LA UNIVERSIDAD</label>
                            <input type="text" class="form-control" id="rif_univ" placeholder="Rif" />
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <label class='mt-4' for="nombre_univ">NOMBRE DE LA UNIVERSIDAD</label>
                            <input type="text" class="form-control" id="nombre_univ"
                                placeholder="Nombre de la Universidad" />
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <label class='mt-4' for="abreviado_univ">NOMBRE ABREVIADO</label>
                            <input type="text" class="form-control" id="abreviado_univ" placeholder="Nombre Abreviado" />
                        </div>

                        <div class="col-sm-6 col-xl-4 mb-4">
                            <label class='mt-4' for="direccion">DIRECCIÓN</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Dirección" />
                        </div>

                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
