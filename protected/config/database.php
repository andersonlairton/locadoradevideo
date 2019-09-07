<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=192.168.14.224;dbname=Teste_0209',
	'emulatePrepare' => true,
	'username' => 'usr_teste',
	'password' => '1234',
	'charset' => 'utf8',
	
);