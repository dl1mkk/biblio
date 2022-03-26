<?php
   include_once("class/class_param.php");
   $lag = new Lagerort();
   $log->log("sys-lager.php","Execute App",__FILE__,__LINE__);
   $lagerort = test_input(post("lagerort"));
   if ($lagerort) $lag->lagerort = $lagerort;
   $coll = $lag->collect_lagerort(__FILE__,__LINE__);
?>
   
