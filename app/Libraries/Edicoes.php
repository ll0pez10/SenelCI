<?php namespace App\Libraries;

use App\Models\EventosModel;
use App\Models\DepoimentosModel;
use App\Models\FotosModel;
use App\Models\PatrocinadoresModel;
use App\Models\ProgramacaoModel;

class Edicoes{
    public function eventos(array $params=[]){
        $model = new EventosModel();
        $eventos = $model->findAll($params['evento_id']);

        echo "<pre>";
        print_r ($eventos);
        echo "</pre>";
        
        return view('partials/tema', ['eventos' => $eventos[0]]);
    }
    public function depoimentos(array $params=[]){
        $model = new DepoimentosModel();
        $depoimentos = $model->findAll($params['ano']);

        echo "<pre>";
        print_r ($depoimentos);
        echo "</pre>";


        return view('partials/depoimentos', ['depoimento'=> $depoimentos[0]]);
    }
    public function fotos(array $params=[]){
        $model = new FotosModel();
        $fotos = $model->findAll($params['ano']);

        echo "<pre>";
        print_r ($fotos);
        echo "</pre>";
        $data = ['fotos'=> $fotos];

        return view('partials/fotos', $data);
    }
    public function patrocinadores(array $params=[]){
        $model = new PatrocinadoresModel();
        $patrocinadores = $model->findAll($params['ano']);
        
        echo "<pre>";
        print_r ($patrocinadores);
        echo "</pre>";
        $patrocinadores = ['patrocinadores'=> $patrocinadores];
        
        return view('partials/patrocinadores', $patrocinadores);
    }
    public function programacao(array $params=[]){
        $model = new ProgramacaoModel();
        $programacao = $model->findAll($params['ano']);

        
        echo "<pre>";
        print_r ($programacao);
        echo "</pre>";
        $programacao = ['programacao'=> $programacao[0]];
        

        return view('partials/programacao', $programacao);
    }
}