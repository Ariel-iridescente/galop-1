<?php namespace App\Controllers;

class Institucional extends BaseController
{
	public function index()
	{
    
		$locale = $this->request->getLocale();

		$data['locale'] = $locale;

		echo view('templates/header',$data);
		echo view('pages/institucional');
		echo view('templates/footer');
	}

}
