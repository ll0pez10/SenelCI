<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index(){
		
		return view('paginas/home');
	}

	function show404(){
		echo 'erro 404 pagina indisponivel';
    }

	//--------------------------------------------------------------------

}