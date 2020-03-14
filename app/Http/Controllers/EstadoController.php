<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estado;

class EstadoController extends Controller
{
    public function estadoInfo($estado){
        $dadosEstado = Estado::where('sigla', $estado)->first();
        return view('estado', compact("dadosEstado"));
    }
    public function nacionalInfo(){
        $dadosEstado =(object) [
            'sigla'=>'BR',
            'nome'=> 'Brasil',
            'bandeira' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/120px-Flag_of_Brazil.svg.png',
            'confirmado'=>Estado::get()->sum("confirmado"),
            'suspeito'=>Estado::get()->sum("suspeito"),
            'letal'=>Estado::get()->sum("letal"),
            'descartasdo'=>Estado::get()->sum("descartasdo"),
            'updated_at'=>\Carbon\Carbon::parse(Estado::get()->max('updated_at'))->format('d/m/Y H:i'),
            'lista'=>Estado::all()

        ];
        $estadosLista =(Object) ['teste'=>null];

        return view('estado', compact("dadosEstado","estadosLista"));
    }
}
