<?php

//definisco la class Production
class Production
{
    public $title;
    public $language;
    public $rating;

    public function __construct($title, $language, $rating)
    {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }
}
