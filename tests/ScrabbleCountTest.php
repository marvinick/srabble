<?php

    require_once "src/ScrabbleCounter.php";

    class ScrabbleCountTest extends PHPUnit_Framework_TestCase
    {

        function test_makeScrabble()
        {

            //Arrange
            $test_ScrabbleCounter = new ScrabbleCounter;
            $input = "dog";

            //Act
            $result = $test_ScrabbleCounter->countScrabble($input);

            //Assert
            $this->assertEquals(array(5), $result);
        }
    }
