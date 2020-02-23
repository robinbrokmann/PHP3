<?php

class Kaart{

    private $waarde;

    /**
     * Kaart constructor.
     * @param int $waarde
     */
    public function __construct($waarde){
        $this->waarde = $waarde;
    }

    /**
     * @return int
     */
    public function getWaarde(){
        return $this->waarde;
    }

}