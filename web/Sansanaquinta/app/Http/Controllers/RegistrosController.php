<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function getMedidores(){
        $medidores = array();
        $medidores[] = "1";
        $medidores[] = "2";
        $medidores[] = "3";
        $medidores[] = "4";
        $medidores[] = "5";
        $medidores[] = "6";
        $medidores[] = "7";
        $medidores[] = "8";
        $medidores[] = "9";
        $medidores[] = "10";

        return $medidores;
    }

    public function getTiposDeMedidas(){
        $tipoDeMedida = array();
        $tipoDeMedida[] = "Kilowatts";
        $tipoDeMedida[] = "Watts";
        $tipoDeMedida[] = "Temperatura";

        return $tipoDeMedida;
    }

    public function getRegistros(){
        $registros = Registro::all();
        return $registros;  
    }

    public function filtrarRegistros(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $registros = Registro::where("medidor", $filtro)->get();
        return $registros;
    }

    public function crearRegistro(Request $request){
        $input = $request->all(); 
        $registro = new Registro;
        $registro->nombre = $input["fecha"];
        $registro->medidor = $input["medidor"];
        $registro->direccion = $input["direccion"];
        $registro->valor = $input["valor"];
        $registro->tipoMedida = $input["tipoMedida"];

        $registro->save();
        return $registro;
    }

    public function eliminarRegistro(Request $request){
       $input = $request->all(); 
       $id = $input["id"];
       $registro = Registro::FindOrFail($id);
       $registro->delete();
       return "ok";
    }

}
}
