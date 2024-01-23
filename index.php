<?php

$pokemonTxt = 'pokemon.txt';


if (!file_exists($pokemonTxt)){ //não existir = "cria"

$apiGet = "https://pokeapi.co/api/v2/pokemon?offset=0&limit=150";

$retornoApi = file_get_contents($apiGet);

file_put_contents($pokemonTxt, $retornoApi);

}/*else{

} */

header('Content-Type: application/json');
echo $retornoApi;


?>
