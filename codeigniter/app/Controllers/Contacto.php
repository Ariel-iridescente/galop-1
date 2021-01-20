<?php namespace App\Controllers;

use App\Models\BlogModel;

class Contacto extends BaseController
{
	public function index()
	{
		$model = new BlogModel();
		$locale = $this->request->getLocale();
		helper(['form']);
		$data['locale'] = $locale;

		if ($this->request->getMethod() == 'post') {
			$rules = [
				'mail' => 'required',
				'name' => 'required|min_length[3]|max_length[25]',
				'mensaje' => 'required'
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {
				// guardamos en la db
			}
		}

		
		echo view('templates/header',$data);
		echo view('users/contacto');
		echo view('templates/footer');
    }
    
}