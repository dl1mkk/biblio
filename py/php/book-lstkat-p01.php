<?php
   include_once("class/class_buch.php");
   $buc = new Buch();
   $tab = [];
   $sql = "SELECT DISTINCT kategorie FROM buch ORDER BY kategorie";
   if (!$res = $buc->exec($sql,__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
   while ($row = $res->fetch_assoc()) {
      $tab[] = $row["kategorie"];
   }
?>

