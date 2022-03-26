<?php
   include_once("class/class_buch.php");
   $uname = $_COOKIE["uname"];
   $index = test_input(post("send"));
   $buc = new Buch();
   $tmp = new tmpherausg($login=$uname);
   $log->log("book-lsthrg2.php","Execute App",__FILE__,__LINE__);
   $sql = "SELECT * FROM buch ORDER BY signatur";
   if (!$res = $buc->exec($sql,__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
   $z = []; $y = [];
   while ($row = $res->fetch_assoc()) {
      $herausg = $row["herausgeber"];
      $signatur = $row["signatur"];
      $x = $tmp->init($herausg,$signatur);      
      foreach ($x as &$tup) {
         if ($tup["aut_kurz"] == $index) {
            $autor = $tup["autor"];
            $signatur = $tup["signatur"];
            if (!in_array(array($autor,$signatur),$z)) $z[] = array($autor,$signatur);
         }
      }      
   }
?>
   
