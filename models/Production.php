<?php

//definisco la class Production
class Production
{
    public function __construct(public string $title, public string $language, public string $rating)
    {
        $this->title = $title;
        $this->language = $language;
        $this->setRating($rating);
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
