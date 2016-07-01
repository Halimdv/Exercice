<?php

require_once 'vendor/autoload.php';
require_once 'header.php';
if(file_exists('config.php')){
	require_once 'config.php';
} else {
	echo "Vous devez configurer votre base de données.";
}

$router = new AltoRouter();
$router->setBasePath('/cours/35git');

echo "test";
$router->map('GET','/',function(){
	echo "Hello world";
	
});

$router->map('GET','/[:slug]',function($slug){
	echo "Hello ".$slug;
});

$router->map('GET','/faker/add',function($slug){
	
});

$match = $router->match();

if($match && is_callable($match['target'])){
	//echo "La page existe";
	//echo $match['target']($match['params']);
	call_user_func_array($match['target'], $match['params']);
} else {
	echo "404";
}


require_once 'footer.php';
?>