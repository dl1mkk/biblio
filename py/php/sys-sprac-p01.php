<?php
   include_once("class/class_param.php");
   $spr = new Sprachen();
   $log->log("sys-sprac.php","Execute App",__FILE__,__LINE__);
   $sprache = test_input(post("sprache"));
   $lang = test_input(post("lang"));
   $coll = $spr->collect_sprache(__FILE__,__LINE__);
?>
   
