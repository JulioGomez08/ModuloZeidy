@extends('secciones.master')

@section('content')
    <form id="formulario" method="POST" action="{{ route('export.store') }} ">
        @csrf
        <div class="container">
            <div style="background: rgb(229, 229, 229); ">

                <div class="row" style="margin: 20px; margin-top: 10px">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fecha Inicio</label>
                            <input required name="date_init" class="form-control form-control-sm" type="date"
                                placeholder=".form-control-sm" aria-label=".form-control-sm example">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fecha Final</label>

                            <input required name="date_end" class="form-control form-control-sm" type="date"
                                placeholder=".form-control-sm" aria-label=".form-control-sm example">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Institución</label>

                            <select name="insti" class="form-select" aria-label="Default select example">
                                @foreach ($instituto as $insti)
                                    <option value="{{ $insti->id }}">{{ $insti->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tipo de Certificado</label>

                            <select name="tipo_certificado" class="form-select" aria-label="Default select example">
                                <option value="1">Incompleto</option>
                                <option value="2">Completo</option>
                                <option value="3">Duplicado</option>
                                <option value="0">Todos</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Carrera</label>

                                <select name="carrera" class="form-select" aria-label="Default select example">
                                    @foreach ($carreras as $items)
                                        <option value="{{ $items->plan_estudios }}">{{ $items->plan_estudios }}</option>
                                    @endforeach
                                    <option value="0">Todos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Genero</label>

                                <select name="genero" class="form-select" aria-label="Default select example">
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                    <option value="A">todos</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Estatus</label>

                                <select name="status" class="form-select" aria-label="Default select example">
                                    <option value="1">Proceso</option>
                                    <option value="2">Validacion</option>
                                    <option value="3">Firma</option>
                                    <option value="0">Todos</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Reporte</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Graficas</button>
                    </li>

                </ul>


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">

                            <div class="col">
                                @include('secciones.table')
                            </div>

                            <div class="col overflow-scroll" style="height: 700px; width: 600px;">
                                <h4>REPORTE</h4>
                                <embed id="doc_pdf" type="application/pdf" width="100%" height="100%">
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        jajaja
                    </div>

                </div>



            </div>
    </form>
    <script>
        const ruta = '{{ route('reportes.store') }}';

        document.addEventListener('DOMContentLoaded', function() {
            doc_pdf = document.getElementById('doc_pdf');
            btn_ok = document.getElementById("btn_ok");
            formulario = document.getElementById("formulario");

            btn_ok.addEventListener("click", () => {
                fetch(ruta, {
                        method: "POST",
                        body: new FormData(formulario)
                    }).then(response => response.text())
                    .then(response => {
                        doc_pdf.innerHTML = response;
                        //  console.log(response);
                    });
            });
        });


        
    </script>
@endsection
