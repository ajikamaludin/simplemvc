<?php

class HomeController extends Controller{

	public function index(){
		return $this->view('home', ['nama' => 'aji','umur' => '15']);
	}

	public function name($name){
		echo $name;
	}

	public function getuser(){
		$model = $this->model('User')->index();
		//$model->index();
		return $this->view('user', ['users' => $model]);
	}
}