<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>rekenBtw</title>
  </head>
  <body>
  	<h1> - Enes Sertdemir</h1>
    <div>
      <form class="form" action="" method="post">
  	    <br><br>
        <input type="number" name="bedrag">
  	    <br><br>
        <input type="submit" name="inclusief" value="inclusief">
        <input type="submit" name="exclusief" value="exclusief">
  	    <br><br><br><br><br>
      </form>
    </div>
  </body>
</html>

<?php

require 'extractCalc.php';

if(isset($_POST['inclusief'])){
  $bedrag = $_POST['bedrag'];
  $bereken = new extBtw($bedrag);
  // indexes worden gebruikt om de berekening van de array af te halen
  echo 'Totaal bedrag: ' . $bereken->exclBtw()[0] . '<br>BTW: ' . $bereken->exclBtw()[1];
}

if(isset($_POST['exclusief'])){
  $bedrag = $_POST['bedrag'];
  $bereken = new extBtw($bedrag);
  // indexes worden gebruikt om de berekening van de array af te halen
  echo 'Totaal bedrag: ' . $bereken->inclBtw()[0] . '<br>BTW: ' . $bereken->inclBtw()[1];
}

?>
