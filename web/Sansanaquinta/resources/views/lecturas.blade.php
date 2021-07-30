@extends("layouts.home")

@section("contenido")

    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <span>Registrar lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha-txt">
                    </div>
                    <!--TODO: FALTA LABEL DE LA HORA  -->
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label">Medidor</label>
                        <select class="form-select" id="medidor-select">

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion-txt">
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number" class="form-control" id="valor-txt">
                    </div>
                    <div class="mb-3">
                        <label for="tipoMedida-select" class="form-label">Tipo de Medida</label>
                        <select class="form-select" id="tipoMedida-select"></select>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("javascript")
    <script src="{{asset('js/servicios/medidoresService.js')}}"></script>
    <script src="{{asset('js/servicios/registrosService.js')}}"></script>
    <script src="{{asset('js/servicios/tiposDeMedidaService.js')}}"></script>
    <script src="{{asset('js/lecturas.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection
