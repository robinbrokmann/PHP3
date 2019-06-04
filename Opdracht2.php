<?php
class User {
    public $username;

    public function setUsername($name) {
        $this->username = $name;
    }
    public function setLastname($lastname){
        $this->lastname = $lastname;
    }

    public function getUsername() {
        return $this->username;
    }
    public function getLastname(){
        return $this->lastname;
    }
}

$jan = new User();
$jan->setUsername('Jan');
$jan->setLastname('Jansen');

$inge = new User();
$inge->setUsername('Inge');
$inge->setLastname('Bakker');

echo 'Dit script kent twee gebruikers: '.$jan->getUsername().' '.$jan->getLastname(). ' en '.$inge->getUsername().' '.$inge->getLastname().'.';

?>