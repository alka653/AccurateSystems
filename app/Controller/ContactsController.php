<?php
	App::uses('AppController', 'Controller');
	class ContactsController extends AppController {
		public $name = 'Contacts'; 
		public $components = array('RequestHandler', 'Session');
		public $helpers = array('Html', 'Js', 'Form', 'Time', 'Session');
		public function new_contact(){
			$this->set('title', 'Contactenos');
		}
		public function save(){
			if($this->request->is('post')){
				$this->Contact->create();
				if($this->Contact->save($this->request->data)){
					$msg = 'Gracias por escribirnos, pronto nos pondremos en contácto contigo.';
	    			$type = 'success text-center';
	    		}else{
					$msg = 'Ha ocurrido un error';
	    			$type = 'warning text-center';
	    		}
	    	}else{
	    		$msg = 'Ha ocurrido un error';
	    		$type = 'warning text-center';
			}
			$this->Session->setFlash(__($msg), 'default', array('class' => $type));
			$this->redirect(array('action' => 'new_contact'));
		}
	}
?>