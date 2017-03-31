<?php

class HomeController extends Controller{

	protected $user;

	public function __construct(){
		$this->user = $this->model('User');
	}
	public function index(){
		return $this->view('home', ['nama' => 'aji','umur' => '15']);
	}

	public function name($name){
		echo $name;
	}

	public function getuser(){
		//$model = User::all();
		//$model->index();
		$userr = $this->user->all();
		return $this->view('user', ['users' => $userr]);
	}
}