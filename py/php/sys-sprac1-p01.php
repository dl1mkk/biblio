<?php
   include_once("class/class_param.php");
   $spr = new Sprachen();
   $log->log("sys-sprac1.php","Execute App",__FILE__,__LINE__);
   $sprache = test_input(post("sprache"));
   $lang = test_input(post("lang"));
   if ($sprache & $lang) {
      $spr->sprache = $sprache;
      $spr->lang    = $lang;
      if ($res = $spr->insert(__FILE__,__LINE__)) {
         header("Location: sys-sprac.php");
         exit;
      }
   }
   header("Location: sys-param.php");
   exit;
?>
   
