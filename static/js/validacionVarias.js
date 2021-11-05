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