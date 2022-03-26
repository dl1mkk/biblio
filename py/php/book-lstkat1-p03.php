<?php
   echo '<td class="center">';
   $i = 1;
   foreach ($rtab as &$reihe) {
      echo '<input class="nav" type="submit" name="send" formaction="book-lstkat2.php" value="'.$reihe.'"';
      if ($i == 1) echo 'autofocus="on" ';
      echo 'tabindex="'.sprintf("%d",$i++).'" />&nbsp;&nbsp;';
   }
   echo '</td>';
?>

