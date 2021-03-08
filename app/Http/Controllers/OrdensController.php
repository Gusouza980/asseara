<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordem;

class OrdensController extends Controller
{
    //
    public function aprovar(Ordem $ordem){
        $ordem->aprovado = true;
        $ordem->save();
        toastr()->success("Emissão aprovada com sucesso!");
        return redirect()->back();
    }

    public function bloquear(Ordem $ordem){
        $ordem->aprovado = false;
        $ordem->save();
        toastr()->success("Emissão bloqueada com sucesso!");
        return redirect()->back();
    }
}
