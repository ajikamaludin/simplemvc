<?php
class Controller{
	public function view($file){
		require_once '../app/Views/'.$file.'.php';
	}
}