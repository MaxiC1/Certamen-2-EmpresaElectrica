const getMedidores = async ()=>{
    let medidor = await axios.get("api/medidores/get");
    return medidor.data;
};