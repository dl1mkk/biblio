<?php
   //
   //
   $tmp->search = $tmp->search[0];
   $sql = "DELETE FROM tmp_admin_2 WHERE uname='".$uname."'";
   if (!$res = $tmp->exec($sql,__FILE__,__LINE__)) $tmp->error(__FILE__,__LINE__);
   $rtab = [];
   foreach ($tmp->search as &$search) {
      $r = $search["reihe"];
      $s = $search["signatur"];
      foreach ($r as &$reihe) {
         $sql1 = "INSERT INTO tmp_admin_2 SET
                  uname='".$uname."',signatur='".$s."',reihe='".$reihe."'";
         if (!$res1 = $tmp->query($sql1)) continue;
         if (!array_search($reihe,$rtab)) $rtab[] = $reihe;
      }
   }
   natsort($rtab);
?>
