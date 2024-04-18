<?php

//importo la classe Production
require_once __DIR__ . "/models/Production.php";
require_once __DIR__ . "/models/Genre.php";

//istanzio x oggetti per il genere
$action = new Genre("action", "super-cool");
$fantasy = new Genre("fantasy", "super-cool");
$horror = new Genre("horror", "super-cool");
$drama = new Genre("drama", "super-cool");


//istanzio 2 oggetti
$production1 = new Production("Avatar", "english", "10", $fantasy);
$production2 = new Production("Titanic", "english", "8", $drama);
$production3 = new Production("San Andreas", "english", "6", $action);
$production4 = new Production("Dune", "english", "9", $fantasy);
$production5 = new Production("Matrix", "english", "8", $action);
$production6 = new Production("Star wars", "english", "10", $action);
var_dump($production1, $production2, $production3, $production4, $production5, $production6);

//array di produzioni
$productionsList = array($production1, $production2, $production3, $production4, $production5, $production6);
//var_dump($productionsList);
