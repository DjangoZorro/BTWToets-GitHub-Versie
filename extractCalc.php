<?php

require ('percCalc.class.php');

class extBtw extends percCalc {

  /*
  *  Met __construct() methode defined in een
  *  (extends)class wordt die methode automatisch aangeroepen
  *  wanneer iemand een nieuw object van die class maakt.
  */
  function __construct($bedrag) {
    $this->_bedrag = $bedrag;
  }

  // array om meerdere outputs te returnen
  public function inclBtw () {
    $totaal = $this->excl();
    return array (
      round($totaal, 2),
      round($this->_bedrag - $totaal, 2)
    );
  }

  // array om meerdere outputs te returnen
  public function exclBtw () {
    $totaal = $this->incl();
    return array (
      round($totaal, 2),
      round($totaal - $this->_bedrag, 2)
    );
  }
}

?>
