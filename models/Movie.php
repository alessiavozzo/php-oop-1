<?php

class Movie extends Production
{
    //deve ereditare le proprietà del padre + avere le sue nuove
    public function __construct(public string $title, public string $language, public string $rating, public array $genre, public int $profit, public int $length)
    {
        //recupero le proprietà del padre
        parent::__construct($title, $language, $rating, $genre);
    }

    public function getProfit()
    {
        return $this->profit * 100000 . "$";
    }

    public function getLength()
    {
        return $this->length . "min";
    }
}
