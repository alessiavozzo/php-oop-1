<?php

class Genre
{
    public function __construct(public string $name, public string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
}
