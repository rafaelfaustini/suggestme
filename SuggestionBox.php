<?php
require 'Config.php';

class SuggestionBox {
  private $name;
  private $text;
  private $classes= Array();
  private $config;
  private $html;

  private function setConfig(){
      $this->config = new Config();
  }

  private function send($content){
    // Sends suggestion to the config email
    echo $content;
  }

  private function checkPOST(){
    /*
    It's not necessary a loop checking for the POST, everytime the POST happens, the page is reloaded and the $_POST variables are filled.
    Then, when the form is submited, the page reloads and when the object is recreated, this method checks the POST and does what it mean to do
    */
    $name = $this->getName();
    $content = $_POST[$name];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Works like a POST listener
      if(isset($content)){
        $this->send($content);
      }
    }
  }

  private function createForm($input){
    $action = $_SERVER['PHP_SELF'];
    $name = $this->getName();
    $open = "<form method='POST' action='$action'>";
    echo $open;
    echo "<div class='form-group'>";
    echo $this->html;
    echo "</div>";
    echo "<button name='$name.btn' type='submit' class='btn btn-primary'>Send</button>";
    echo '</form>';
  }

  private function getConfig(){
    return $this->config;
  }

  public function getClasses(){
    $config = $this->getConfig();
    return htmlspecialchars($config->getClasses());
  }

  private function setHtml(){
    $classes = $this->getClasses();
    $name = $this->getName();
    $input = "<textarea class='$classes' name='$name' required></textarea>";
    $this->html = $input;
  }

  private function getHtml(){
    return $this->html;
  }

  public function getName(){
    return htmlspecialchars($this->name);
  }
  private function setName($name){
    $this->name = htmlspecialchars($name);
  }
  public function __construct ($name) {
    $this->setName($name);
    $this->setConfig();
    $this->setHtml();
    $this->show();
    $this->checkPOST();

  }


  public function show(){
    $this->createForm($this->getHtml());
  }

}

 ?>
