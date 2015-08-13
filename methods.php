unction array_intersect_fixed($array1, $array2) {
    $result = array();
    foreach ($array1 as $val) {
      if (($key = array_search($val, $array2, TRUE))!==false) {
         $result[] = $val;
         unset($array2[$key]);
      }
    }
    return $result;
}

<?php

if (array_key_exists($key, $array))
    $array[$key]['occurances']++;
else
    $array[$key] = array('value'=>$value, 'occurances'=>1);