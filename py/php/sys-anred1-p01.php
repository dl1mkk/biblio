<?php
   include_once("class/class_param.php");
   $anr = new Anrede();
   $log->log("sys-anred1.php","Execute App",__FILE__,__LINE__);
   $anrede = test_input(post("anrede"));
   $anr->anrede = $anrede;
   if (!$res = $anr->insert(__FILE__,__LINE__)) {
      echo("FEHLER: diese Anrede ist bereits vorhanden.\n");
      flush();
      echo('<a href="sys-param.php">WEITER</a>&nbsp;hier klicken.');
      crlf();
      flush();
      exit;
   }
   header("Location: sys-param.php");
   exit;
?>
   
