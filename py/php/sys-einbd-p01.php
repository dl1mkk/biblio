<?php
   include_once ("class/class_param.php");
   $ein = new Einband();
   $log->log("sys-einbd.php","Execute App",__FILE__,__LINE__);
   $coll = $ein->collect_einband(__FILE__,__LINE__);
   $einband = test_input(post("einband"));
?>
   
