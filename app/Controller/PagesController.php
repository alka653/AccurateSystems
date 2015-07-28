<?php
	App::uses('AppController', 'Controller');
	class PagesController extends AppController {
		public function index(){
			$this->set('title', 'Bienvenido');
		}
	}
?>