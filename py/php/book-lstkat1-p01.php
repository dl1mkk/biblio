<?php
   include_once("class/class_buch.php");
   $buc = new Buch();
   $tmp = new tmpkatalog();
   $uname = test_input(cookie("uname"));
   $log->log("book-lstkat1.php","Execute App",__FILE__,__LINE__);
   $kategorie = test_input(post("send"));
   $tmp->kategorie = $kategorie;
   $sql = "SELECT signatur,kategorie,reihe FROM buch WHERE kategorie='".$kategorie."'";
   if (!$res = $buc->exec($sql,__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
   $rows = [];
   while ($row = $res->fetch_assoc()) {
      $rows[] = $row;
   }
   foreach ($rows as &$row) {
      $tab[] = $tmp->reihe_separator($row["reihe"],$row["signatur"]);
   }
   $tmp->search[] = $tmp->shorten_reihe($tab);
?>
   
