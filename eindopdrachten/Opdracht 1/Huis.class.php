<?php



class Huis {
    private $straatnaam;
    private $huisnummer;
    private $plaats;

    private $kamers = 0;
    private $toiletten = 0;
    private $verwarming = false;
    private $verwamingSoort = "";
    private $oppervlakte = 0;
    private $wozWaarde = 0;

    /**
     * Huis constructor.
     *
     * @param string $straatnaam
     * @param int $huisnummer
     * @param string $plaats
     */
    public function __construct($straatnaam, $huisnummer, $plaats) {
        $this->straatnaam = $straatnaam;
        $this->huisnummer = $huisnummer;
        $this->plaats = $plaats;
    }

    /**
     * Geeft de straatnaam van dit Huis object.
     *
     * @return string
     */
    public function getStraatnaam() {
        return $this->straatnaam;
    }

    /**
     * Verandert de staatnaam van dit Huis object naar het gegeven argument.
     *
     * @param string $straatnaam
     */
    public function setStraatnaam($straatnaam) {
        $this->straatnaam = $straatnaam;
    }

    /**
     * Geeft het huisnummer van dit Huis object.
     *
     * @return int
     */
    public function getHuisnummer() {
        return $this->huisnummer;
    }

    /**
     * Verandert het huisnummer van dit Huis object naar het gegeven argument.
     *
     * @param int $huisnummer
     */
    public function setHuisnummer($huisnummer) {
        $this->huisnummer = $huisnummer;
    }

    /**
     * Geeft het huisnummer van dit Huis object.
     *
     * @return string
     */
    public function getPlaats() {
        return $this->plaats;
    }

    /**
     * Verandert de plaats van dit Huis object naar het gegeven argument.
     *
     * @param string $plaats
     */
    public function setPlaats($plaats) {
        $this->plaats = $plaats;
    }

    /**
     * Geeft het aantal kamers van dit Huis object.
     *
     * @return int
     */
    public function getKamers() {
        return $this->kamers;
    }

    /**
     * Verandert het aantal kamers van dit Huis object naar het gegeven argument.
     *
     * @param int $kamers
     */
    public function setKamers($kamers) {
        $this->kamers = $kamers;
    }

    /**
     * Geeft het aantal toiletten van dit Huis object.
     *
     * @return int
     */
    public function getToiletten() {
        return $this->toiletten;
    }

    /**
     * Verandert het aantal toiletten van dit Huis object naar het gegeven argument.
     *
     * @param int $toiletten
     */
    public function setToiletten($toiletten) {
        $this->toiletten = $toiletten;
    }

    /**
     * Geeft aan of het huis van dit Huis object verwaming heeft.
     *
     * @return bool
     */
    public function heeftVerwarming() {
        return $this->verwarming;
    }

    /**
     * Verandert of dit Huis object verwaming heeft.
     *
     * @param bool $verwarming
     */
    public function setVerwarming($verwarming) {
        $this->verwarming = $verwarming;
    }

    /**
     * Geeft het soort verwaming van dit Huis object.
     *
     * @return string
     */
    public function getVerwamingSoort() {
        return $this->verwamingSoort;
    }

    /**
     * Verandert het soort verwaming van dit Huis object naar het gegeven argument.
     *
     * @param string $verwamingSoort
     */
    public function setVerwamingSoort($verwamingSoort) {
        $this->verwamingSoort = $verwamingSoort;
    }

    /**
     * Geeft het oppervlakte (m²) van dit Huis object.
     *
     * @return int
     */
    public function getOppervlakte() {
        return $this->oppervlakte;
    }

    /**
     * Verandert de oppervlakte (m²) van dit Huis object naar het gegeven argument.
     *
     * @param int $oppervlakte
     */
    public function setOppervlakte($oppervlakte) {
        $this->oppervlakte = $oppervlakte;
    }

    /**
     * Geeft de Woz waarde van dit Huis object.
     *
     * @return int
     */
    public function getWozWaarde() {
        return $this->wozWaarde;
    }

    /**
     * Verandert de Woz waarde van dit Huis object naar het gegeven argument.
     *
     * @param int $wozWaarde
     */
    public function setWozWaarde($wozWaarde) {
        $this->wozWaarde = $wozWaarde;
    }
}