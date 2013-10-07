<?php

include './src/Helpers.php';

class Crawler {

  public function __construct() {
    $conf = $this->loadconf();
  }

  /**
  * Attempts to load the config.ini file and read in the info as a series of associative arrays
  * @return mixed Returns a series of associative arrays of false
  */
  private function loadconf() {
    $ini_array = @parse_ini_file('config.ini', true) or die("Couldn't find a config.ini file\n");
    $ok = $this->validate_conf($ini_array);

    if ($ok) return $ini_array;
    return false;
  }

  /**
  * Validate the configuration file
  * @return bool Returns true if everything is validated, otherwise false
  */
  private function validate_conf($config) {
    $array_depth = Helpers::array_depth($config);

    # Check max depth of found arrays
    if ($array_depth != 3) die ("Malformated config.ini file. Configuration section too deep or shortcoming.\n");

    return true;
  }

}