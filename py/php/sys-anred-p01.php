<?php
   include_once("class/class_param.php");
   $anr = new Anrede();
   $coll = $anr->collect_anrede(__FILE__,__LINE__);
   $log->log("sys-anred.php","Execute App",__FILE__,__LINE__);
   $anrede = test_input(post("anrede"));
?>
   
