<?php
class Config{
  private $SuggestionBoxClasses = array('suggestionBox','input');

  public function getClasses(){
    $classes = "";
    foreach ($this->SuggestionBoxClasses as $classe) {
      $classes .= " ".$classe;
    }
    return trim($classes);
  }

}


 ?>
