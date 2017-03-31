<?php

class HomeController extends Controller{

	public function index(){
		return $this->view('home');
	}

	public function name($name,$age){
		echo $name.' '.$age;
	}
}