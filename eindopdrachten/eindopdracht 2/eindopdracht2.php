<html>
<header>
    <title>PHP 3 - Eindopdracht 2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</header>
<style>
    td {
        width: 70px;
        height: 120px;
        font-size: 20px;
        border: 1px solid black;
        text-align: center;
    }

    .wrong {border: red 2px solid;}
    .selected {border: green 2px solid;}
</style>
<body>
<?php
//Ik heb Javascript voor deze opdracht gebruikt in overleg met Sander.
//De Javascript code heb ik in een apart .js bestand gedaan in de opdracht map.

//Importeer de classes.
include "Spelbord.class.php";
include "Kaart.class.php";

//Maak een nieuw Spelbord object aan.
$bord = new Spelbord();

//Genereer de kaarten.
for($rij = 0; $rij < 4; $rij++) {
    for ($kolom = 0; $kolom < 4; $kolom++) {
        //Genereer een willekeurig nummer.
        $randomWaarde = $bord->getRandomNummer();
        //Maak een nieuw Kaart object aan met de willekeurige waarde.
        $kaart = new Kaart($randomWaarde);
        //Voeg de kaart toe aan de Spelbord class.
        $bord->voegKaartToe($rij, $kolom, $kaart);
    }
}
//Krijg de gevulde array met kaarten.
$kaarten = $bord->getKaarten();

//Maak de tabel
echo "<table>";
for ($kaartRij = 0; $kaartRij < 4; $kaartRij++) {
    echo "<tr>";
    for ($kaartKolom = 0; $kaartKolom < 4; $kaartKolom++) {
        $kaart = $kaarten[$kaartRij][$kaartKolom];
        $kaartWaarde = $kaart->getWaarde();
        echo('<td onclick="klikKaart(this, \'' . $kaartWaarde . '\')"></td>');
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>