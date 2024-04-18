<?php

//importo la classe Production
require_once __DIR__ . "/models/Production.php";

//istanzio 2 oggetti
$production1 = new Production("Avatar", "english", "10");
$production2 = new Production("Titanic", "english", "8");
$production3 = new Production("Titanic", "english", "12");
var_dump($production1, $production2, $production3);
