<?php
   include_once("class/class_buch.php");
   $buc = new Buch();
   $tmp = new tmpkatalog();
   $reihe = test_input(post("send"));
   $uname = test_input(cookie("uname"));
   $sql = "SELECT * FROM tmp_admin_2 WHERE uname='".$uname."' AND reihe='".$reihe."' ORDER BY signatur";
   if (!$res = $tmp->exec($sql,__FILE__,__LINE__)) $tmp->error(__FILE__,__LINE__);
?>      
