expresionNombre =  /[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]/;
expresionLetraYNumeros = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1])[a-zA-ZÀ-ÿ\u00f1\u00d1]\s[#][0-9]+$/g;

function noBlank(){

    const nombre = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;


    if(nombre === "" || descripcion === ""){ //revisa si estan los campos vacios
        alert("Todos los campos obligatorios");
        return false;
    }
}
function noBlank_exp(){

    const nombre = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;
    const ubicacion = document.getElementById("ubicacion").value;
    const fecha = document.getElementById("dia").value;
    const hora = document.getElementById("hora").value;

    if(nombre === "" || descripcion === "" || fecha === ""|| hora === "" || ubicacion === ""){
        alert("Todos los campos obligatorios");
        return false
    }
    const fechainicial = new Date(fecha);
    const fechaActual = Date.now();
    const hoy = new Date(fechaActual);

    
    if(hoy > fechainicial){
        alert("La fecha no corresponde");
        return false
    }
    /*
    else if(!expresionNombre.test(nombre)){
        alert("El nombre no puede contener números, ni símbolos");
        return false
    }else if (!expresionNombre.test(ubicacion) || !expresionLetraYNumeros.test(ubicacion)){
        alert("Sintaxis en el campo Ubicacion es incorrecta, Ej: 'Online', 'Direccion #123' ");
        return false
    }*/
    
}

function date(){

    const inicial = new Date(document.getElementById("date-inicial").value);
    const final = new Date(document.getElementById("date-final").value);

    const dia = 1;
    inicial.setDate(inicial.getDate()+dia);
    final.setDate(final.getDate()+dia);


    if(final < inicial){
        alert("La fecha final no puede ser antes de la fecha inicial");
        return false
    }


}
