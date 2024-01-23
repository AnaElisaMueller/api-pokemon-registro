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

for (%n = 0; $n<10; $n++){
foreach ($res_json->results as $ator) {

    $ator->name;
   // echo "\n"; "Nome: " .
  //  echo "URL: " . $ator->url;
echo "\n";
echo "_______";
echo "\n";
}  

}

   for ($n = 0; $n<10; $n++){
       
    }

$item["results"];
endforeach;
} */
$i=0;
//transformar em json
$res_json = json_decode($retornoApi);

header('Content-Type: application/json');
//var_dump($res_json);
foreach ($res_json->results as $ator) {

    echo  $ator->name;
   // echo "\n"; "Nome: " .
   //echo $pagina;
  //  echo "URL: " . $ator->url;
echo "\n";
}


?>
