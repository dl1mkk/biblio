<?php
  session_start();
  $session_id=session_id();
  $debug="yes";
  error_reporting(E_ERROR | E_PARSE | E_NOTICE);
  include_once("class/class_pars.php");
  $log = new Log();
?>
<!DOCTYPE html SYSTEM 'about:legacy-compat'>
  <!-- Copyright disclosure 2021
    Copyright 2021 by Veit Heise, PQM-Consulting, Germany
    All rights are reserved.
    Diese Software wurde maschinell durch das Tool zend2 erstellt.
    zend2 ist ein Produkt von PQM-Consulting, Germany
    Widerrechtliches Kopieren oder ungenehmigtes Verwenden wird strafrechtlich verfolgt.
    Zum Einsatz des Tool zend2 oder der durch das Tool zend2 erstellten HTML-Skripte
    ist eine Genehmigung durch den Autor Veit Heise erforderlich.
    Autor: Veit Heise, Breslauer Strasse 24, D-63477 Maintal, Germany
    im weiteren auch 'PQM-Consulting' genannt.
    Kontakt veit.heise@heise-media.eu oder +49-6181-369-8511
  -->
<html>
