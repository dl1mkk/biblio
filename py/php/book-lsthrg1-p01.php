<?php
   include_once("class/class_buch.php");
   $buc = new Buch();
   $log->log("book-lsthrg1.php","Execute App",__FILE__,__LINE__);
   $log->log("book-lsthrg1-p01.php","Execute App",__FILE__,__LINE__);
   $uname = test_input($_COOKIE["uname"]);
   $tmp = new tmpherausg($login=$uname);
   if (!$uname) die ("Interner Fehler #1");
   $index = test_input(post("send"));
   $sql = "SELECT * from buch ORDER BY signatur";
   if (!$res = $buc->exec($sql,__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
   $z = [];
   while ($row = $res->fetch_assoc()) {
      $autor = $row["herausgeber"];
      $signatur = $row["signatur"];
      $x = $tmp->init($autor,$signatur);      
      foreach ($x as &$tup) {
         if ($tup["aut_init"] == $index) {
            $kurz = $tup["aut_kurz"];
            if (!in_array($kurz,$z)) $z[] = $kurz;
         }
      }
   }
?>
   
