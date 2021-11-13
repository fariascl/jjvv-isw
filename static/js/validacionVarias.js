function noBlank() {

    const nombre = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;


    if (nombre === "" || descripcion === "") { //revisa si estan los campos vacios
        alert("Todos los campos obligatorios");
        return false;
    }
}
function ValidacionCrearReunion() {
    expresionTitulo = /^[a-zA-ZÀ-ÿ0-9\s\#]{1,}$/;
    expresionUbicacion = /^[a-zA-ZÀ-ÿ0-9\s\#\,\.]{1,}$/;
    expresionDescripcion = /^[a-zA-ZÀ-ÿ0-9\s\,\.\"\'\$]{1,}$/;

    const titulo = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;
    const ubicacion = document.getElementById("ubicacion").value;
    const fecha = document.getElementById("dia").value;
    const hora = document.getElementById("hora").value;

    const fechainicial = new Date(fecha);
    const fechaActual = Date.now();
    const hoy = new Date(fechaActual);
    const dia = 1;
    fechainicial.setDate(fechainicial.getDate() + dia);



    if (titulo === "" || fecha === "" || hora === "" || ubicacion === "" || descripcion === "") {
        alert("Todos los campos obligatorios");
        return false
    } else if (titulo.length < 5 || titulo.length >= 50) {
        alert("El título debe tener como mínimo 5 caracteres y 50 como máximo");
        return false;
    } else if (!expresionTitulo.test(titulo)) {
        alert("El título no puede contener simbolos, exceptuando el '#'");
        return false
    } else if (hoy >= fechainicial) {
        alert("No se pueden agendar reuniones con fechas pasadas");
        return false
    } else if (ubicacion.length < 4 || ubicacion.length >= 80) {
        alert("La ubicación debe tener como mínimo 4 caracteres y 80 como máximo");
        return false
    } else if (!expresionUbicacion.test(ubicacion)) {
        alert("La ubicación no puede contener símbolos, exceptuando el '#'");
        return false
    } else if (descripcion.length < 5 || descripcion >= 500) {
        alert("La descripción debe tener como mínimo 5 caracteres y 500 como máximo");
        return false
    } else if (!expresionDescripcion.test(descripcion)) {
        alert("La descripción solo puede tener los siguientes símbolos EJ: ',' '.' '('')' '$' ");
        return false
    }
}

function date() {

    const inicial = new Date(document.getElementById("date-inicial").value);
    const final = new Date(document.getElementById("date-final").value);

    const dia = 1;
    inicial.setDate(inicial.getDate() + dia);
    final.setDate(final.getDate() + dia);


    if (final < inicial) {
        alert("La fecha final no puede ser antes de la fecha inicial");
        return false
    }


}
