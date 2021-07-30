document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#fecha-txt").value.trim();
    let medidor = document.querySelector("#medidor-select").value.trim();
    let direccion = document.querySelector("#direccion-txt").value.trim();
    let valor = document.querySelector("#valor-txt").value.trim();
    let tipoMedida = document.querySelector("#tipoMedida-select").value.trim();
    
    let errores = [];

    if(isNaN(fecha)){
        errores.push("La fecha debe ser numerica");
    }else if( +fecha < 0){
        errores.push("La fecha es incorrecta");
    }

    if(errores.length == 0){
        let registro = {};
        registro.fecha = fecha;
        registro.medidor = medidor;
        registro.direccion = direccion;
        registro.valor = valor;
        registro.tipoMedida = tipoMedida;
 
        let res = await crearRegistro(registro);
        await Swal.fire("Registro Creado", "Registro Creado Exitosamente", "info");
        window.location.href = "ver_datos";

    }else{
        Swal.fire({
            title: "Errores de Registro",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});