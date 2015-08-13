<?php

    class ScrabbleCounter {

        function countScrabble($word) {

            //check if the user enters the input and words
            if ($word == null) {
                return  "Why you gotta do me like that?!";
            }

            // list of letters and their value for each
            $letters_value = array("a"=>1, "e"=>1, "i"=>1, "o"=>1, "u"=>1, "l"=>1, "n"=>1,"r"=>1, "s"=>1, "t"=>1, "d"=>2,"g"=>2, "b"=>2, "c"=>2, "m"=>2, "p"=>3, "f"=>4, "h"=>4, "v"=>4, "w"=>4, "y"=>4, "k"=>5, "j"=>8, "x"=>8, "q"=>10, "z"=>10);

            //lowcase the inputted word
            $lowcase_word = strtolower($word);

            //break the word into array of letters
            $word_to_letters = str_split($lowcase_word);

            //flip the key value
            $flipped = array_flip($word_to_letters);

            // matching the keys from $word_to_letters with $flipped and return the value from $letter_value
            $matched_letters = array_intersect_key($letters_value, $flipped);

            // sum the values
            $total_count = array_sum($matched_letters);

        return $total_count;
        }
    }
?>


function array_intersect_fixed($array1, $array2) {
    $result = array();
    foreach ($array1 as $val) {
      if (($key = array_search($val, $array2, TRUE))!==false) {
         $result[] = $val;
         unset($array2[$key]);
      }
    }
    return $result;
}
