<?php
if(file_exists('vendor/autoload.php')){
	require_once 'vendor/autoload.php';
} else {
	echo "Vous devez lancer un composer install.";
}
require_once 'header.php';
if(file_exists('config.php')){
	require_once 'config.php';
} else {
	echo "Vous devez configurer votre base de données.";
}

$router = new AltoRouter();
$router->setBasePath('/cours/35git');



$router->map('GET','/',function(){
	echo "Hello world";
	?> 
	<div id="contact"></div>
	<?php
});

$router->map('GET','/[:slug]',function($slug){
	echo "Hello ".$slug;
});

$router->map('GET','/faker/add',function(){
	$faker = Faker\Factory::create("fr_FR");
	;
	$data = '{ "contacts": [';
	for($i = 0; $i <3; $i++){
		$prenom = $faker->firstName();
		$nom = $faker->lastName();
		$tel = $faker->phoneNumber();
		$data .= json_encode(array("firstName" => $prenom, "lastName" => $nom, "phone" => $tel));
		if($i<2){
			$data .=',';
		}
	}
	$data .= ']}';
	$file = fopen("data.json", "w");
	fwrite($file, $data);
	fclose($file);

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