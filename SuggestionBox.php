<?php
require Config.php;

class SuggestionBox {
  private $text;
  private $classes= Array();
  private $config;
  private $html;

  private function setConfig($name){
      $this->$config = new Config();
  }

  private function setHtml(){
    $classes = $this->config->getClasses();
    $str = "<textarea class='$classes'></textarea>";
  }
  public function __construct (  ) {

  }


  public function show(){

  }

}

 ?>
