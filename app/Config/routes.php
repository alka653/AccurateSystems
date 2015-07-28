<?php
	Router::connect('/', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/contactenos', array('controller' => 'contacts', 'action' => 'new_contact'));
	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';
?>