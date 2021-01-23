<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Edicoes extends BaseController
{
	public function edicao(){
		$ano = 2019;
		$id = 1;

		return view('paginas/senel', ["ano" => $ano, "id"=> $id]);
	}
	//--------------------------------------------------------------------

}