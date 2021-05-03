<?php
namespace App\Controllers;
use App\Models\testingmodel;

class Testing extends BaseController
{
	protected $testing;
	public function __construct(){

		$this->testing = new testingmodel();

	}

	public function index()
	{
		echo "hello world";
	}

	public function testing()
	{
		$data['nama'] = $this->testing->data();
		return view('testing', $data);
	}
}


