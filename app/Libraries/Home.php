<?php namespace App\Libraries;

use App\Models\EventosModel;

class Home{
    public function eventos(){
        $model = new EventosModel();
        $eventos = $model->findAll();

        return view('partials/equipe', ['eventos'=> $eventos]);
    }
}