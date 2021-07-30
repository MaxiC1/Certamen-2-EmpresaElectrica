const getTiposDeMedidas = async ()=>{
    let tipoMedidas = await axios.get("api/tipoMedidas/get");
    return tipoMedidas.data;
};