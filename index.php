<?php

$pokemonTxt = 'pokemon.txt';


if (!file_exists($pokemonTxt)){ //não existir = "cria"

$apiGet = "https://pokeapi.co/api/v2/pokemon?offset=0&limit=150";

$retornoApi = file_get_contents($apiGet);

file_put_contents($pokemonTxt, $retornoApi);

} else{
    $retornoApi = file_get_contents($pokemonTxt);
    file_put_contents($pokemonTxt, $retornoApi);
} 

$pagina =1;
$limite = 10;

//while ($pagina <= 10){

//response = requests.request('GET', $apiGet = $apiGet, );

//}

/*
$pagina =1;
$limite = 10;


//separar em 15 em cada pagina
for ($i=0; $i <150;$i++){
        $retornoApi[$i];
    if( $i % 15 == 0){
        $pagina = 0;
}



$item["results"];
endforeach;
} */

//transformar em json
$res_json = json_decode($retornoApi);
header('Content-Type: application/json');
foreach ($res_json->results as $ator) {
    //var_dump($ator);
    echo  $ator->name;
   // echo "\n"; "Nome: " .
  //  echo "URL: " . $ator->url;
echo "\n";
echo "_______";
echo "\n";
}


?>
