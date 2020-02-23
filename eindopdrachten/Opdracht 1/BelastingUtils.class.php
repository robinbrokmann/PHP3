<?php
//Ik wou voor de belastings berekening een aparte class aanmaken/
//Ik heb er voor gekozen om dit een "static class" te maken omdat de methodes alleen berekeningen uitvoeren op het meegegeven object
//en daarna iets returnen.

class BelastingUtils {

    public static function berekenBelasting(Huis $huis){
        $belasting = 0;

        $belasting += self::berekenWozBelasting($huis->getWozWaarde());
        $belasting += self::berekenKamerBelasting($huis->getKamers());
        $belasting += self::berekenPlaatsBelasting($huis->getPlaats());

        return $belasting;
    }

    private static function berekenWozBelasting($woz){
        if($woz < 100000){
            return 600;
        } else if ($woz < 200000){
            return 2000;
        } else if($woz > 200000){
            return 6000;
        }
        return 0;
    }

    private static function berekenKamerBelasting($kamers){
        if($kamers == 1){
            return 100;
        } else if ($kamers == 2){
            return 300;
        } else if ($kamers > 2){
            return 800;
        }
        return 0;
    }

    private static function berekenPlaatsBelasting($plaats){
        if($plaats == "Amsterdam" || $plaats == "Rotterdam" || $plaats == "Groningen"){
            return 1000;
        }
        return 0;
    }
}