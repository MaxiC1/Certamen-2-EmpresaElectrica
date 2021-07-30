const getMedidor = async (filtro ="Todas las Medidas")=>{
    let resp;
    if(filtro == "Todas las Medidas"){
        resp = await axios.get("api/medidores/get");
    }else{
        resp = await axios.get(`api/registros/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};

const crearRegistro = async(registro)=>{
    let resp = await axios.post("api/registros/post", registro, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const eliminarRegistro = async(id)=>{
    try{
        let resp = await axios.post("api/registros/delete", {id}, {
            headers: {
                'Content-Type': 'application/json'
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};