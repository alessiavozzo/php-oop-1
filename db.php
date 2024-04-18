<?php

//importo la classe Production
require_once __DIR__ . "/models/Production.php";

//istanzio 2 oggetti
$production1 = new Production("Avatar", "english", "10");
$production2 = new Production("Titanic", "english", "8");
$production3 = new Production("San Andreas", "english", "6");
$production4 = new Production("Dune", "english", "9");
$production5 = new Production("Matrix", "english", "8");
$production6 = new Production("Star wars", "english", "10");
//var_dump($production1, $production2, $production3, $production4, $production5, $production6);

//array di produzioni
$productionsList = array($production1, $production2, $production3, $production4, $production5, $production6);
//var_dump($productionsList);
