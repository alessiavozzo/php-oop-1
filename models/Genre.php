<?php

class Genre
{
    public function __construct(public $name, public string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
}
