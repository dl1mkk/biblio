<?php
   foreach ($coll as &$elem) {
      $lager = $elem["lagerort"];
      echo '<tr class="left" width="80%">';
      echo '  <td class="right" width="20%">&nbsp;</td>';
      echo '  <td class="left" width="80%">';
      echo '     <input type="text" class="fix" name="old" value="'.$lager.'" size="40" readonly="yes" />';
      echo '  </td>';
      echo '</tr>';
   }
?>
   
