$("#btnLimpiarAlta").click(function (event) {
    event.preventDefault();
    $("#frmProcedimientos")[0].reset();
    $("#frmProcedimientos").find('input, select, textarea').filter(':visible:first').focus();
});

$("#btnGuardar").click(function (event) {
    event.preventDefault();
    var validate = validar('frmProcedimientos');
    const data = $('#frmProcedimientos').serialize();
    if (validate) {
        urlProceso = urlProceso;
        guardarProcedimiento(data, urlProceso);
    } else {
        alertWarning('Por favor complete los campos obligatorios');
    }
});

$("#btnActualizar").click(function (event) {
    event.preventDefault();
    var validate = validar('frmProcedimientos');
    const data = $('#frmProcedimientos').serialize();
    if (validate) {
        urlProceso = urlProceso;
        guardarProcedimiento(data, urlProceso);
    } else {
        alertWarning('Por favor complete los campos obligatorios');
    }
});

$("#btnAgregarArchivo").click(function (event) {
    event.preventDefault();
    var validate = validar('frmArchivos');
    if (validate) {
        var data = new FormData();
        var archivo = $('#ctrl_archivo')[0].files[0]; // Obtiene el archivo seleccionado
        if (archivo) {
            var nombreArchivo = archivo.name; // Obtiene el nombre del archivo
        }
        data.append('nombre', nombreArchivo);
        data.append('procedimiento_numero', $("#procedimiento_numero").html());
        data.append('archivo', $('#ctrl_archivo')[0].files[0]);
        data.append('procedimiento_id', procedimiento_id);
        data.append('procedimiento_nombre',$("#ctrl_proceso option:selected").text());
        data.append('proceso_id', $("#ctrl_proceso").val());
        console.log(data);
        guardarArchivo(data, urlProceso);
    } else {
        alertWarning('Por favor complete los campos obligatorios');
    }

});

function validar(formId) {
    var isValid = true;
    $('#' + formId + ' [required]').each(function () {
        if ($(this).val() === '' || $(this).val() === '0') {
            isValid = false;
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }
    });
    return isValid;
}

function guardarProcedimiento(data, urlProceso) {
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: urlProceso,
        type: 'POST',
        data: data
    }).done(function (response) {
        switch (response.data.respuesta) {
            case 0:
                alertError(response.message);
                break;
            case 1:
                alertSuccess(response.message);
                setTimeout(function () {
                    window.location.replace(response.data.redirect);
                }, 1500);
                break;
            default:

                alertError('Hubo un error al intentar guardar');
                break;
        }
    }).fail(function (response) {
        if (response.responseJSON != undefined) {
            alertError(response.responseJSON.message);
        } else {
            alertError('Error al enviar el procedimiento administrativo');
        }
        console.log(response);
    });
}

function guardarArchivo(data, urlProceso) {
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: urlProceso,
        type: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }).done(function (response) {
        switch (response.data.respuesta) {
            case 0:
                alertError(response.message);
                break;
            case 1:
                alertSuccess(response.message);
                setTimeout(function () {
                    window.location.replace(response.data.redirect);
                }, 1500);
                break;
            default:

                alertError('Hubo un error al intentar guardar');
                break;
        }
    }).fail(function (response) {
        if (response.responseJSON != undefined) {
            alertError(response.responseJSON.message);
        } else {
            alertError('Error al enviar el archivo');
        }
        console.log(response);
    });
}