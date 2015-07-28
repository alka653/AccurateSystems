<?php
	App::uses('AppModel', 'Model');
	class Contact extends AppModel{
		public $name = 'Contact';
		public $validate = array(
			'email' => array(
				'rule' => 'email',
				'message' => 'Correo Electrónico Erróneo'
			)
		);
	}
?>