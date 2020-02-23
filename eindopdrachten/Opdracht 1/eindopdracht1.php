
<html>
<header>
    <title>PHP 3 - Eindopdracht 1</title>
</header>
<body>
<?php

//Het Huis object met alle waarden toegevoegd.
include "Huis.class.php";
$huis = new Huis("Boermarkeweg", 12, "Emmen");
$huis->setKamers(4);
$huis->setToiletten(2);
$huis->setOppervlakte(120);
$huis->setVerwarming(true);
$huis->setVerwamingSoort("Elektrisch");
$huis->setWozWaarde(247000);

//Laat alle waarden zien op het scherm.
echo "Staatnaam: " . $huis->getStraatnaam() . "<br>";
echo "Huisnummer: " . $huis->getHuisnummer() . "<br>";
echo "Plaats: " . $huis->getPlaats() . "<br><br>";
echo "Aantal kamers: " . $huis->getKamers() . "<br>";
echo "Aantal toiletten: " . $huis->getToiletten() . "<br>";
$verwarming = $huis->heeftVerwarming() ? "Ja" : "Nee";
echo "Heeft verwaming: " . $verwarming . "<br>";
echo "Soort verwaming: " . $huis->getVerwamingSoort() . "<br>";
echo "Oppervlakte: " . $huis->getOppervlakte() . "m²<br>";
echo "Woz waarde: €" . number_format($huis->getWozWaarde()) . "<br><br>";

//Roep de berekenBelasting methode op.
include "BelastingUtils.class.php";
echo "Totale belasting: €" . BelastingUtils::berekenBelasting($huis) . ",-";
?>
</body>
</html>