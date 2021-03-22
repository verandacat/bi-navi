<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
ini_set('display_errors', 'On');
ini_set('default_charset', 'UTF-8');
ini_set('mbstring.http_input', 'auto');
ini_set('mbstring.http_output', 'UTF-8');
ini_set('mbstring.internal_encoding', 'UTF-8');

$agent = $_SERVER['HTTP_USER_AGENT'];

if($_GET['f']){
	$fileName = "./".$_GET['f'];
	if(file_exists($fileName)){
		include_once($fileName);
	}elseif(file_exists($fileName."index.php")){
		include_once($fileName."index.php");
	}else{
		//header("HTTP/1.0 404 Not Found");
		//header("Location: ./index.php");
		$fileName = "../".$_GET['f'];
		if(file_exists($fileName)){
			include_once($fileName);
		}elseif(file_exists($fileName."index.php")){
			include_once($fileName."index.php");
		}else{
			header("HTTP/1.0 404 Not Found");
		}
	}
}else{
	include('./index.php');
}
?>