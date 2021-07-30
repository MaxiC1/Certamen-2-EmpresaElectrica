@extends('layouts.home')

@section('contenido')
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <span>Filtrar</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtro-cbx">
                        <option value="todos">Todas las Medidas</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-secondary text-white">
                    <tr>
                        <td>Fecha</td>
                        <td>Hora</td>
                        <td>Medidor</td>
                        <td>Valor</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-lecturas">

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section("javascript")
    <script src="{{asset('js/servicios/medidoresService.js')}}"></script>
    <script src="{{asset('js/servicios/registrosService.js')}}"></script>
    <script src="{{asset('js/servicios/tiposDeMedidaService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/lecturas.js')}}"></script>
@endsection