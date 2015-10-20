<?php

Class User {

  protected $firstName;
  protected $lastName;
  protected $password;
  protected $title;
  protected $beatle;
  protected $username;



//First two letters of the firstname +
public function userName(){
  if(isset($_POST['firstName'])) {
    $this->firstName = $_POST['firstName'];
    $uFirstName = substr($this->firstName, 0, 2);
    echo 'First Name: ' . $this->firstName . '<br>';
  }
  else {
    echo "This is stupid<br>";
  }

//Last two letters of the lastname +
  if(isset($_POST['lastName'])) {
    $this->lastName = $_POST['lastName'];
    $uLastName = substr($this->lastName, -2);
    echo 'Last Name: ' . $uLastName . '<br>';
  }
  else {
    echo "This is stupid<br>";
  }
//password not part of username
  if(isset($_POST['password'])) {
    $this->password = $_POST['password'];
    echo 'Password: ' . $this->password . '<br>';
  }
  else {
    echo "This is stupid<br>";
  }
//title not part of username
  if(isset($_POST['title'])) {
    $titleArray = array('Mrs.', 'Ms.', 'Mr', 'Undetermined');
    $this->title = $_POST['title'];
    $titleName = $titleArray[$this->title];
    echo 'Title: ' . $titleName . '<br>';
  }
  else {
    echo "This is stupid<br>";
  }


//Index of the selected Beatle (0 or 1 or 2 or 3)+
//first two letters and last letter of the selected Beatles name.
  if(isset($_POST['beatle'])) {
    $beatleArray = array('George', 'Ringo', 'Paul', 'John');
    $nBeatle = $_POST['beatle'];
    $beatleName = $beatleArray[$nBeatle];
    $fBeatle = substr($beatleName, 0, 2);
    $lBeatle = substr($beatleName, -2);
    $uBeatle = ($nBeatle . $fBeatle . $lBeatle);
    $this->beatle = $beatleName;
//  testing elements
//    echo $nBeatle . '<br>';
    echo 'Favorite Beatle: ' . $beatleName  . '<br>';
//    echo $uBeatle . '<br>';

}
  $this->username = $uFirstName . $uLastName . $uBeatle;
  echo 'Username: ' . $this->username . '<br>';
}
}
