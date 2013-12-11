<?php
class validate {
 
  public $errors = array();
 
  public function validateEmail($emailVal, $emailName){
    if(strlen($emailVal) <= 0) {
      $this->setError($emailName, "Please enter an Email Address");
    } else if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $emailVal)) {
      $this->setError($emailName, "Please enter a Valid Email Address");
        }
  }
  
  public function validateFirstName($firstname, $firstval){
     if(strlen($firstval) <= 0) {
      $this->setError($firstname, "Please enter First Name");
    } 
  }
  
  public function validateLastName($lastname, $lastval){
     if(strlen($lastval) <= 0) {
      $this->setError($lastname, "Please enter First Name");
    } 
  }
  
  public function validateComments($cVal, $comments){
    if(strlen($cVal) <= 0) {
      $this->setError($comments, "Please enter comments");
    }
  }
  private function setError($element, $message) {
    $this->errors[$element] = $message;
  }
  
  
  public function getError($elementName) {
    if($this->errors[$elementName]) {
      return $this->errors[$elementName];
    } else {
      return false;
    }
  }
  
  public function displayErrors() {
    $errorsList = "<ul class=\"errors\">\n";
    foreach($this->errors as $value) {
      $errorsList .= "<li>". $value . "</li>\n";
    }
    $errorsList .= "</ul>\n";
    return $errorsList;
  }
  
  public function hasErrors() {
    if(count($this->errors) > 0) {
      return true;
    } else {
      return false;
    }
  }
  
  public function errorNumMessage() {
    if(count($this->errors) > 1) {
            $message = "There were " . count($this->errors) . " errors sending your message!\n";
        } else {
            $message = "There was an error sending your message!\n";
        }
    return $message;
  }
}
?>