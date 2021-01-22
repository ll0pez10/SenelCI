<?php namespace App\Controllers;

class Edicoes extends BaseController
{
	public function index(){
		$ano = 2019;
		$id = 1;
		return view('paginas/senel', ["ano" => $ano, "id"=> $id]);
	}

	function show404(){
		echo 'erro 404 pagina indisponivel';
    }

	//--------------------------------------------------------------------

}