const cargarMedidor = async()=>{
    let medidor = await getMedidores();
    let medidorSelect = document.querySelector("#medidor-select");
    medidor.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidorSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarMedidor();
});

const cargarTiposDeMedidas = async()=>{
    let medidas = await getTiposDeMedidas();
    let medidasSelect = document.querySelector("#tipoMedida-select");
    medidas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidasSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarTiposDeMedidas();
});