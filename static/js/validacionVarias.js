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

    if(nombre === "" || descripcion === "" || ubicacion === ""){
        alert("Todos los campos obligatorios");
        return false
    }

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