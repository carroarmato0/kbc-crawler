<?php

class Crawler {

  public function __construct() {
    $conf = $this->loadconf();
  }

  private function loadconf() {
    $ini_array = @parse_ini_file('config.ini', true) or die("Couldn't find a conf.ini file");
    return $ini_array;
  }

}