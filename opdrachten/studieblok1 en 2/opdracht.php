<?php
include("User.class.php");

$user = new User();
$user->setFirstname('Robin');
$user->setLastname('Brokmann');
$user ->setDate('21-05-1998');


echo "Voornaam: " . $user->getFirstname() . "<br>";
echo "Achternaam: " . $user->getLastname() . "<br>";
echo "Geboortedatum: " . $user->getDate() . "<br>";
