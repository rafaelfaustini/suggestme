<?php
public class Config{
  private $SuggestionBoxClasses = ['suggestionBox','input'];

  public function getClasses(){
    $classes = "";
    foreach ($this->$SuggestionBoxClasses as $classe) {
      $classes .= " ".$classe;
    }
    return $classes;
  }

}


 ?>
