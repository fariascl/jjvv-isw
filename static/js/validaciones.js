
function checkInputs() { // validaciones

    //llamadas de variables
    const email = document.getElementById("email").value;
    const nombre = document.getElementById("name").value;
    const rut = document.getElementById("rut").value;
    const password = document.getElementById("password").value;
    expresionCorreo = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
    expresionNombre = /^[a-zA-ZÀ-ÿ\s]{1,}$/;


    if (email === "" || nombre === "" || rut === "" || password === "") { //revisa si estan los campos vacios
        alert("Todos los campos obligatorios");
        return false;
    } else if (!expresionCorreo.test(email)) { //valida el correo con una expresion regular
        alert("El email no cumple con el formato, Ej: email@email.cl");
        return false;
    } else if (!expresionNombre.test(nombre)) { //valida el nombre con una expresion regular
        alert("El nombre no puede conener números ni símbolos");
        return false;
    } else if (nombre.length < 5 || nombre.length >= 50) { //valida el largo del nombre
        alert("El nombre debe tener al menos 5 caracteres y no mas de 50 caracteres");
        return false;
    } else if (password.length < 5 || password.length >= 9) { //valida el largo de la password
        alert("La contraseña debe tener al menos 5 caracteres y no mas de 9 caracteres");
        return false;
    }

}
