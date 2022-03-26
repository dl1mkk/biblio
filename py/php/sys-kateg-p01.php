<?php
   include_once("class/class_param.php");
   $kat = new Kategorie();
   $log->log("sys-kateg.php","Execute App",__FILE__,__LINE__);
   $kategorie = test_input(post("kategorie"));
   if (!$kategorie) $kat->kategorie = $kategorie;
   $coll = $kat->collect_kategorie(__FILE__,__LINE__);
?>
   
