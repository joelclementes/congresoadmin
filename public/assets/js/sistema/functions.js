function alertSuccess(mensaje="Operación realizada con éxito") {
    Swal.fire({
        html:`
        <h4 class="mb-0">
        </h4>
        <p style="color: #4caf50">${mensaje}</p>
        `,
        confirmButtonColor: '#4caf50',
    });
}

function alertError(mensaje="Ocurrió un error inesperado") {
    Swal.fire({
        html:`
        <h4 class="mb-0">Error</h4>
        <p style="color: #d33">${mensaje}</p>
        `,
        confirmButtonColor: '#d32f2f',
    });
}
function alertWarning(mensaje="Aviso") {
    Swal.fire({
        html:`
        <h4 class="mb-0">Aviso</h4>
        <p style="color: #FFC107">${mensaje}</p>
        `,
        confirmButtonColor: '#FFC107',
    });
}