<?php

require_once 'User.php';

$user = new User();

$user->setFirstName('Naren');
$user->setLastName('Chitrakar');
$user->setEmail('narenChitrakar.com');

try {
if( $user->isValid()) {
	$user->register();	
}
 } catch( \Exception $exeption ) {
 	echo $exeption->getMessage();
}
