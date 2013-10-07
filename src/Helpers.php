<?php

class Helpers {

  /**
  * Recursively loop through arrays and output how deep the deepest array is.
  * @return int Minimal depth is 1
  */
  public static function array_depth(array $array) {
    $max_depth = 1;

    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = Helpers::array_depth($value) + 1;

            if ($depth > $max_depth) {
                $max_depth = $depth;
            }
        }
    }

    return $max_depth;
  }

}