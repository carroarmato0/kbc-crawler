<?php

include './src/Crawler.php';

class KBC_Crawler {

  public function __construct() {

    new Crawler();

  }

}

new KBC_Crawler();