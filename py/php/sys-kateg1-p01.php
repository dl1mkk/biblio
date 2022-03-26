<?php
   include_once("class/class_param.php");
   $kat = new Kategorie();
   $log->log("sys-kateg1.php","Execute App",__FILE__,__LINE__);
   $kategorie = test_input(post("kategorie"));
   $kat->kategorie = $kategorie;
   if (!$res = $kat->insert(__FILE__,__LINE__)) $kat->error(__FILE__,__LINE__);
   header("Location: sys-param.php");
   exit;
?>
   
