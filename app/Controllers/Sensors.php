<?php

namespace App\Controllers;

class Sensors extends BaseController
{
	public function index()
	{
		$data = [];
		
		echo view('templates/header', $data);
		echo view('sensors');
		echo view('templates/footer');
	}
}
