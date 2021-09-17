<?php

class Board
{

    public function __construct(string $name, ?string $description)
    {
        $this->name = $name;
        $this->description = $description;

    }
}