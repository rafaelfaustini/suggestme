<?php
require Config.php;

class SuggestionBox {
  private $name;
  private $text;
  private $classes= Array();
  private $config;
  private $html;

  private function setConfig($name){
      $this->$config = new Config();
  }

  private function send(){
    // Sends suggestion to the config email

  }

  private function checkPOST(){
    $content =$_POST[$this->$name];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Works like a POST listener
      if(isset($content)){
        $this->send();
      }
    }
  }

  private function createForm($input){
    $open = "<form class";
  }

  private function setHtml(){
    $classes = $this->config->getClasses();
    $input = "<textarea class='$classes' name="$this->$name"></textarea>";

    $this->createForm($input);

  }

  private function setName($name){
    $this->$name = $name;
  }
  public function __construct ( $name ) {
    $this->$setName($name);

  }


  public function show(){

  }

}

 ?>
