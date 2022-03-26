<?php
   function search($index,$list) {
      foreach ($list as &$e) {
         if ($index === $e) return true;
      }
      return false;
   }
   include_once("class/class_buch.php");
   $buc = new Buch();
   $log->log("book-lstsig.php","Execute App",__FILE__,__LINE__);
   $sql = "SELECT signatur FROM buch ORDER BY signatur";
   $tab = [];
   if (!$res = $buc->exec($sql,__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
   while ($row = $res->fetch_assoc()) {
      if (!search($row["signatur"],$tab)) {
         $tab[] = $row["signatur"];
      }
   }
?>

