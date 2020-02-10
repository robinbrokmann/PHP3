<?php
class User {
    private $firstname;
    private $lastname;
    private $date;


    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
    public function setLastname($lastname){
        $this->lastname = $lastname;
    }
    public function setDate($date){
        $this->date = $date;
    }

    public function getFirstname() {
        return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getDate(){
        return $this->date;
    }
}

?>