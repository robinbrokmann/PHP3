<?php
class Spelbord{
    //Een array met Kaart objecten.
    private $kaarten;
    //Een array met de gebruikte waarden voor Kaarten.
    private $gebruikteNummers;
    //Het laatst gegenereerde willekeurige nummer.
    private $laatsteNummer;

    /**
     * Spelbord constructor.
     */
    public function __construct() {
        $this->kaarten = array();
        $this->gebruikteNummers = array();
        $this->laatsteNummer = 0;
    }

    /**
     * Voegt het gegeven Kaart object toe aan de kaarten array.
     *
     * @param $row int De rij van de kaart op het bord.
     * @param $kolom int De kolom van de kaart op het bord.
     * @param $kaart Kaart Het kaart object.
     */
    public function voegKaartToe($row, $kolom, $kaart){
        $this->kaarten[$row][$kolom] = $kaart;
    }

    /**
     * Maak een willekeurig nummer aan voor de waarde van de kaart.
     *
     * @param int $tries Hoe vaak het een nummer heeft geprobeert om 2 nummers naast elkaar te zetten.
     * Dit is zodat het niet vastloopt wanneer het de laatste nummer moet genereren maar het laatst gebruikte cijfer alleen mogelijk is.
     * Dit nummer moet niet handmatig worden verandert.
     *
     * @return int Het gegenereerde nummer
     */
    public function getRandomNummer($tries = 0){
        //Genereer het nummer
        $random = mt_rand(1, 8);
        if(!isset($this->gebruikteNummers["waarde" . $random])){
            //Als het nog niet in de gebruikteNummers array zit.
            //Dus het nummer is nog 0 keer gebruikt.
            $this->gebruikteNummers["waarde" . $random] = 1;
            $this->laatsteNummer = $random;
            return $random;
        }
        if($random == $this->laatsteNummer){
            //Als het nummer gelijk is aan het laatst gebruikte nummer.
            //2 dezelfde cijfers moeten normaal niet naast elkaar kunnen komen.
            if($tries > 5){
                //Als er 5 mislukte pogingen zijn gedaan om een ander cijfer te vinden.
                //Dan zetten we gewoon 2 dezelfde nummers naast elkaar.
                return $random;
            }
            //Voer de methode opnieuw uit en genereer een nieuw nummer.
            return $this->getRandomNummer($tries + 1);
        }
        if($this->gebruikteNummers["waarde" . $random] == 1){
            //Als het nummer in de array staat met een waarde van 1.
            //Dus het nummer is 1 keer gebruikt.
            $this->gebruikteNummers["waarde" . $random] = 2;
            $this->laatsteNummer = $random;
            return $random;
        }
        //Als het nummer al 2 keer gebruikt is en als het niet het laatste nummer was.
        return $this->getRandomNummer($tries);
    }

    /**
     * Returned de kaarten array.
     *
     * @return Kaart[][]
     */
    public function getKaarten() {
        return $this->kaarten;
    }
}