<?php

class User{
    public $username;
    public $passowrd;

   // private $conn;

   //public function__construct($username, $passowrd){
   //    $this->username = $username;
    //   $this->password = $passowrd;

  // }

   public function chechUser(){
    //   $sql = "SELECT * FROM users WHERE username like ? and password like ?";
        if ($this->username == "abc" && $this->password == "abc") {
        return true;
        } else {
        return false;
        }
   }
}
?>