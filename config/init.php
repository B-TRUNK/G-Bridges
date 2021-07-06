<?php

//Autoloader function

require_once('config.php');

function __autoLoad($class_name){
	require_once '../lib/'. $class_name . '.php';
}
