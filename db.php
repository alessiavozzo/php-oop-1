<?php

//importo la classe Production
require_once __DIR__ . "/models/Production.php";
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/TvSerie.php";
require_once __DIR__ . "/models/Genre.php";

//istanzio x oggetti per il genere
$action = new Genre("action", "action description");
$fantasy = new Genre("fantasy", "fantasy description");
$horror = new Genre("horror", "horror description");
$drama = new Genre("drama", "drama description");
$comedy = new Genre("comedy", "comedy description");
$war = new Genre("war", "war description");
$romance = new Genre("romance", "romance description");


//istanzio 2 oggetti
$production1 = new Production("Avatar", "english", "10", [$fantasy, $action]);
$production2 = new Production("Titanic", "english", "8", [$drama]);
$production3 = new Production("San Andreas", "english", "6", [$action]);
$production4 = new Production("Dune", "english", "9", [$fantasy, $action]);
$production5 = new Production("Matrix", "english", "8", [$action]);
$production6 = new Production("Star wars", "english", "10", [$action, $fantasy]);
//var_dump($production1, $production2, $production3, $production4, $production5, $production6);

//Movies instances
$avatar = new Movie("Avatar", "en", "10", [$fantasy, $action], 50, 145);
$titanic = new Movie("Titanic", "en", "9", [$drama], 40, 140);
$lifeIsBeautiful = new Movie("La vita è bella", "it", "10", [$comedy, $drama, $war], 30, 120);

//Tv serie instances
$merlin = new TvSerie("Merlin", "en", "8", [$fantasy], 5, 65);
$greys = new TvSerie("Grey's Anatomy", "en", "8", [$drama, $romance], 22, 500);

//array di produzioni
$productionsList = array($production1, $production2, $production3, $production4, $production5, $production6);
//var_dump($productionsList);

//Movies array
$moviesList = [$avatar, $titanic, $lifeIsBeautiful];

//tv series array
$seriesList = [$merlin, $greys];
