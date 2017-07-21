<?php

	Router::connect('/', array('controller' => 'posts', 'action' => 'index'));


	CakePlugin::routes();


	require CAKE . 'Config' . DS . 'routes.php';
