<?php

    require_once "src/ScrabbleCounter.php";

    class ScrabbleCountTest extends PHPUnit_Framework_TestCase
    {

        function test_makeScrabble()
        {

            //Arrange
            $test_ScrabbleCounter = new ScrabbleCounter;
            $word = "dog";

            //Act
            $result = $test_ScrabbleCounter->countScrabble($word);

            //Assert
            $this->assertEquals(5, $result);
        }

        function test_noScrabble()
        {
            //Arrange
            $test_ScrabbleCounter = new ScrabbleCounter;
            $word = null;

            //Act
            $result = $test_ScrabbleCounter->countScrabble($word);

            //Assert
            $this->assertEquals("Why you gotta do me like that?!", $result);

        }
    }
