<?php
require 'jwt_helper.php';

function authenticate () {
    $secret_key = 'some_test_key';
    $valid_for = '3600';
    $headers = getallheaders();
    if (array_key_exists('Authorization', $headers)) {
        $jwt = $headers['Authorization'];
        $token = JWT::decode($jwt, $secret_key);
        if ($token->exp >= time()) {
            if ($token->role === "admin") {
    	        //loggedin
		return true;
	    }
        } 
    } else {
	$token = array();
	$token['role'] = "guest";
	$token['exp'] = time();
	echo('Authorization: ' . JWT::encode($token, $secret_key));
        return false;
    }
}
    $valid_for = '3600';
    $secret_key = 'some_test_key';
	$token = array();
	$token['role'] = "admin";
	$token['exp'] = time()+2000;
	echo('Authorization: ' . JWT::encode($token, $secret_key));
	echo("\n\n");

?>
