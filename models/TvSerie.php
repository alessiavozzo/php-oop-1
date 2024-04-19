<?php

class TvSerie extends Production
{
    //deve ereditare le proprietà del padre + avere le sue nuove
    public function __construct(public string $title, public string $language, public string $rating, public array $genre, public int $seasons, public int $episodes)
    {
        //recupero le proprietà del padre
        parent::__construct($title, $language, $rating, $genre);
    }
}
