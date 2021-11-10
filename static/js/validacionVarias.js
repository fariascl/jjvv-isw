function noBlank() {

    const nombre = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;


    if (nombre === "" || descripcion === "") { //revisa si estan los campos vacios
        alert("Todos los campos obligatorios");
        return false;
    }
}
function noBlank_exp() {
    expresionTitulo = /^[a-zA-ZÀ-ÿ0-9\s\#]{5,50}$/;
    expresionUbicacion = /^[a-zA-ZÀ-ÿ0-9\s\#\,\.]{5,80}$/;
    expresionDescripcion = /^[a-zA-ZÀ-ÿ0-9\s\,\.\"\'\$]{5,500}$/;

    const titulo = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;
    const ubicacion = document.getElementById("ubicacion").value;
    const fecha = document.getElementById("dia").value;
    const hora = document.getElementById("hora").value;

    const fechainicial = new Date(fecha);
    const fechaActual = Date.now();
    const hoy = new Date(fechaActual);


    if (titulo === "" || fecha === "" || hora === "" || ubicacion === "" || descripcion === "") {
        alert("Todos los campos obligatorios");
        return false
    } else if (!expresionTitulo.test(titulo)) {
        alert("El título no puede contener simbolos");
        return false
    } else if (!expresionUbicacion.test(ubicacion)) {
        alert("La ubicación no puede contener símbolos, exceptuando el '#'");
        return false
    } else if (hoy > fechainicial) {
        alert("No se pueden agendar reuniones con fechas pasadas");
        return false
    } else if (!expresionDescripcion.test(descripcion)) {
        alert("La descripción posee cáracteres inválidos");
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
