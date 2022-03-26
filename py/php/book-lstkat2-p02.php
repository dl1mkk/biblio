<?php
   $i = 1;
   while ($row = $res->fetch_assoc()) {
      $signatur = $row["signatur"];
      $sql1 = "SELECT * FROM buch WHERE signatur='".$signatur."'";
      if (!$res1 = $buc->exec($sql1,__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
      $row1 = $res1->fetch_assoc();
      if ($i == 1) $af = 'autofocus="on" ';
      else $af = '';
      $l = '<td class="center" width="5%">'.
           '<input class="nav" type="submit" name="send" formaction="book-info.php" '.
           'value="'.$row1["signatur"].'" '.$af.' tabindex="'.sprintf("%d",$i++).'" />'.
           '</td>';
      $a = $row1["autor"];
      if ($a=="") $a = $row1["herausgeber"];
      $a = '<td class="left" width="15%">'.$a.'</td>';
      $t = $row1["titel"];
      $t = '<td class="left" width="70%">'.$t.'</td>';
      $line = $l.$a.$t;
?>
