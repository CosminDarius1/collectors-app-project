<?php

require('../src/Movie.php');

use PHPUnit\Framework\TestCase;

class MovieTest extends TestCase {

    public function testCreateCard_succesfull()
    {
        $movieTest = new Movie('Barbie', 'Greta Gerwig', 'Comedy', 2023);
        $expectedOutput = 
        "<div class='card'>" .
            "<h1>Barbie</h1>" . 
            "<p>Director: Greta Gerwig</p>" .
            "<p>Genre: Comedy</p>" . 
            "<p>Year: 2023</p>" . 
        "</div>";
        $actualOutput = $movieTest->createCard();
        $this->assertEquals($expectedOutput, $actualOutput);
    }
};

