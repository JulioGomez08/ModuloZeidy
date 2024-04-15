    <table class="table">

        <thead>
            <tr>
                <th scope="col">Valores</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" checked class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="0">
                        <label class="form-check-label" for="flexCheckDefault">
                            Nombre
                        </label>
                    </div>
                </th>
                <td>alumno en tramite</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input checked name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="1">
                        <label class="form-check-label" for="flexCheckDefault">
                            Curp
                        </label>
                    </div>
                </th>
                <td>uso de identidad</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="2">
                        <label class="form-check-label" for="flexCheckDefault">
                            Sexo
                        </label>
                    </div>
                </th>
                <td>Masculino/Femenino</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="3">
                        <label class="form-check-label" for="flexCheckDefault">
                            Institucion
                        </label>
                    </div>
                </th>
                <td>escuela perteneciente</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input checked name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="4">
                        <label class="form-check-label" for="flexCheckDefault">
                            No.Control
                        </label>
                    </div>
                </th>
                <td>codigo de escuela</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="5">
                        <label class="form-check-label" for="flexCheckDefault">
                            Inicial
                        </label>
                    </div>
                </th>
                <td>Periodo escolar</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="6">
                        <label class="form-check-label" for="flexCheckDefault">
                            Final
                        </label>
                    </div>
                </th>
                <td>Terminacion escolar</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="7">
                        <label class="form-check-label" for="flexCheckDefault">
                            PLan de estudios
                        </label>
                    </div>
                </th>
                <td>carrera</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="8">
                        <label class="form-check-label" for="flexCheckDefault">
                            e-mail
                        </label>
                    </div>
                </th>
                <td>Correo personal</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="9">
                        <label class="form-check-label" for="flexCheckDefault">
                            clave
                        </label>
                    </div>
                </th>
                <td>-------</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="10">
                        <label class="form-check-label" for="flexCheckDefault">
                            creditos
                        </label>
                    </div>
                </th>
                <td>Total de puntos</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="11">
                        <label class="form-check-label" for="flexCheckDefault">
                            solicitado
                        </label>
                    </div>
                </th>
                <td>Fecha de solicitud</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input checked name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="12">
                        <label class="form-check-label" for="flexCheckDefault">
                            Status
                        </label>
                    </div>
                </th>
                <td>Proceso / avance</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input name="data[]" class="form-check-input" type="checkbox" id="flexCheckDefault"
                            value="13">
                        <label class="form-check-label" for="flexCheckDefault">
                            Preparatoria
                        </label>
                    </div>
                </th>
                <td>Terminacion de laescolaridad</td>
            </tr>
        </tbody>
    </table>
    <div style="text-align: center">
        <a id="btn_ok" class="btn btn-success">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
        </a>
        <a class="btn btn-primary" href="{{ route('graficas.index') }}">Graficar</a>
        <button class="btn btn-danger">

            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
              </svg>
        </button>
    </div>
    <br>
    <br>
    <br>