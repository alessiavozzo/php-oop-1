<?php

require_once __DIR__ . "/Genre.php";
//definisco la class Production
class Production
{
    public function __construct(public string $title, public string $language, public string $rating, public array $genre)
    {
        $this->title = $title;
        $this->language = $language;
        $this->setRating($rating);
        $this->genre = $genre;
    }

    public function setRating($rating)
    {
        if ($rating >= 1 && $rating <= 10) {
            $this->rating = $rating;
        } else {
            $this->rating = "rating non valido";
        }
    }
}
