<?php namespace App\Libraries;

use App\Models\EventosModel;
use App\Models\DepoimentosModel;
use App\Models\FotosModel;
use App\Models\PatrocinadoresModel;
use App\Models\ProgramacaoModel;

class Edicoes{
    public function eventos(){
        $model = new EventosModel();
        $eventos = $model->findAll();

        return view('partials/equipe', ['eventos'=> $eventos]);
    }
    public function depoimentos($ano){
        $model = new DepoimentosModel();
        $depoimentos = $model->find($ano);

        return view('partials/depoimentos', ['depoimento'=> $depoimentos]);
    }
    public function fotos($ano){
        $model = new FotosModel();
        $fotos = $model->find($ano);

        return view('partials/fotos', ['fotos'=> $fotos]);
    }
    public function patrocinadores($ano){
        $model = new PatrocinadoresModel();
        $patrocinadores = $model->find($ano);

        return view('partials/patrocinadores', ['patrocinadores'=> $patrocinadores]);
    }
    public function programcao($ano){
        $model = new PrgramacaoModel();
        $programacao = $model->find($ano);

        return view('partials/programacao', ['programacao'=> $programacao]);
    }
}