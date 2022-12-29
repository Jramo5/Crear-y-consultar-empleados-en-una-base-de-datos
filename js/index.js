let Registro = document.getElementById("Registro");
let registroForm = document.getElementById("Registro-form");
let ocultarRegistro = document.getElementById("ocultar-Registro");
let consultar = document.getElementById("Consultar"); 
let btnConsultar = document.getElementById("btn-Consultar");
let Consultarform = document.getElementById("Consultar-form");
let ocultarConsulta = document.getElementById("ocultar-consulta");
let btnRegistro = document.getElementById("btn-Registro");
let contador =0; 

Registro.addEventListener('click', () => {
    if(contador==0){
        ocultarRegistro.style.width = "100%"
        ocultarRegistro.classList.remove("ocultar-Registro")
        consultar.style.display = "none";
        contador=1;
    } else{
        consultar.style.display = "block";
        ocultarRegistro.classList.add("ocultar-Registro")
        contador=0;
    }
});



btnConsultar.addEventListener('click', () =>{
    Registro.style.display = "none";
    consultar.style.display = "block";
    ocultarRegistro.classList.add("ocultar-Registro")
    ocultarConsulta.classList.remove("ocultar-consulta");    
    contador==0;
})

consultar.addEventListener('click', () => {
    if(contador == 0){
        Registro.style.display = "none";
        btnRegistro.style.display = "block";
        btnRegistro.style.width = "70%";
        ocultarConsulta.style.width = "100%";
        ocultarConsulta.classList.remove("ocultar-consulta");
        contador = 1;
    } else {
        Registro.style.display = "block";
        ocultarConsulta.classList.add("ocultar-consulta");
        contador = 0;
    }
});

btnRegistro.addEventListener('click', () => {
    ocultarConsulta.classList.add("ocultar-consulta");
    Registro.style.display = "block";
    consultar.style.display = "none"
    ocultarRegistro.classList.remove("ocultar-Registro")
    ocultarRegistro.style.width = "100%"
    contador == 0;
});