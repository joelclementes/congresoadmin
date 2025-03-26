/**
 * getData
 * Función Asíncrona para hacer consultas Ajax, utilizando jquery
 * @param {text} url_proceso Es la URL del archivo proceso.php
 * @param {object} paramAjax Es el arreglo JSON que contiene los parámetros para proceso.php
 */
export async function getData(url_proceso, paramAjax) {
  return new Promise((resolve, reject) => {
    $.ajax({
      data: paramAjax,
      url: url_proceso,
      type: "POST",
      success: function (resp) {
        // console.log("Respuesta:", resp);
        resolve(JSON.parse(resp));
      },
    });
  });
}

/**
 * Función que lee el manifest del proyecto
 * @returns JSON con los datos del archivo manifest.json
 */
export async function readJsonFile(filename) {
  try {
    const respuesta = await fetch(filename);
    const resultado = await respuesta.json();
    return resultado;
  } catch (error) {
    console.error("Error al leer el archivo manifest:", error);
    return null; // O cualquier valor por defecto en caso de error
  }
}

export async function apiGetData() {
  let headersList = {
    Accept: "*/*",
  };

  //  Especificamos la URL de petición, el método y los headers
  let response = await fetch(
    "http://localhost/apiinventarioinformatica/inventario",
    {
      method: "GET",
      headers: headersList,
    }
  );

  //  Devolvemos la información en formato json
  let data = await response.json();
  return data;
}
