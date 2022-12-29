function validacion() {
    
    // Validacion del numero de dui
    let noDui = document.getElementById("no_dui").value;
    if(isNaN(noDui) || noDui==""){
        alert("Error: Por favor ingrese solo numeros en el campo NO DUI:");
        // document.getElementById('no_dui').classList.add('input');
        document.getElementById('no_dui').focus();
        return false;
    }


    // Validacion de los nombres
    let nombres = document.getElementById("nombres").value;
    if (nombres == null || nombres.length == 0 || !isNaN(nombres)) {
        alert("Error: Por favor ingrese solo letras en el campo Nombres:");
        // document.getElementById('nombres').classList.add('input');
        return false;
    }

    // Validacion de cargo
    if(document.getElementById("cargo").value == 0){
        alert("Error: Por favor seleccione una opcion del campo Cargo:");
            // document.getElementById('cargo').classList.add('input');
            return false;
    }


    // Validacion de los departamentos
    if(document.getElementById("departamentos").value == 0){
        alert("Error: Por favor seleccione un departamentos:");
            // document.getElementById("departamentos").classList.add('input');
            return false;
    }

    // Validacion del salario
    let salario = document.getElementById("Salario").value;
    if(isNaN(salario) || salario==""){
        alert("Error: Por favor ingrese solo numeros en el campo Salario:");
        // document.getElementById('Salario').classList.add('input');
        return false;
    }
}
