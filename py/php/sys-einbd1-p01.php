<?php
   include_once("class/class_param.php");
   $ein = new Einband();
   $log->log("book-info.php","Execute App",__FILE__,__LINE__);
   $einband = test_input(post("einband"));
   $ein->einband = $einband;
   if (!$res = $ein->insert(__FILE__,__LINE__)) $ein->error(__FILE__,__LINE__);
   header("Location: sys-param.php");
   exit;
?>
   
