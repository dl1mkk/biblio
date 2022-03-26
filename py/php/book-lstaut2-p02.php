<?php
   foreach ($z as &$tup) {
      $signatur = $tup[1];
      $autor    = $tup[0];
      $sql = "SELECT titel FROM buch WHERE signatur='".$signatur."'";
      if (!$res = $buc->exec($sql,__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
      if ($row = $res->fetch_assoc()) {
         $titel = $row["titel"];
      } else {
         die("Interner Fehler #1 in php/book-lstaut2-p02.php Zeile 9");
      }
?>
   
