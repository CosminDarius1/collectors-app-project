<?php

require('../src/functions.php');

use PHPUnit\Framework\TestCase;

class MovieTest extends TestCase {

    public function testCreateCard_succesfull()
    {
        $this->assertIsString();
    }


};

