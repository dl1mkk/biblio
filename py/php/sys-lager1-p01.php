<?php
   include_once("class/class_param.php");
   $lag = new Lagerort();
   $lagerort = test_input(post("lagerort"));
   if ($lagerort) $lag->lagerort = $lagerort;
   $log->log("sys-lager1.php","Execute App",__FILE__,__LINE__);
   if (!$res = $lag->insert(__FILE__,__LINE__)) $lag->error(__FILE__,__LINE__);
   header("Location: sys-param.php");
   exit;
?>
   
