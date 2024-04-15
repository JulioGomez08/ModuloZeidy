const ruta = '{{ route('reportes.store') }}';

document.addEventListener('DOMContentLoaded', function () {
    doc_pdf = document.getElementById('doc_pdf');
    btn_ok = document.getElementById("btn_ok");
    formulario = document.getElementById("formulario");

    btn_ok.addEventListener("click", () => {
        fetch(ruta, {
            method: "POST",
            body: new FormData(formulario)
        }).then(response => response.text())
            .then(response => {
                // doc_pdf.src = response;
                console.log(response);
            });
    });
});