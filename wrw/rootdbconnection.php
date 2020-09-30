<?php
    $db_host   = 'passwordmanager.cvi3sx6t4sbm.us-east-1.rds.amazonaws.com';
	$db_name   = 'passwordmanager';
	$db_user   = 'cosc349';
	$db_passwd = 'cosc2020';
	
	$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }