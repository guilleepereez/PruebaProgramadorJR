function agregarHabilidad(){
    nuevaHabilidadUsuario = document.getElementById("seleccionarHabilidad").value;

    if (nuevaHabilidadUsuario == 0 )
    {
        alert("No selecciono habilidad...");
    }
    else{
        habilidades = document.getElementById("habilidadesDeUsuario");
        habilidades.value += "/" + nuevaHabilidadUsuario;
    }

}

