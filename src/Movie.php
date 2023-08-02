<?php

class Movie {
    private string $name;
    private string $director;
    private string  $genre;
    private int $year;

    public function __construct(string $name, string $director, string $genre, int $year)
    {
        $this->name = $name;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function createCard(): string
        {
            return
            "<div class='card'>" .
            "<h1>" .  $this->name . "</h1>" . 
            "<p>Director: " . $this->director . "</p>" .
            "<p>Genre: " . $this->genre . "</p>" . 
            "<p>Year: " . $this->year . "</p>" . 
            "</div>";
        }
    }

