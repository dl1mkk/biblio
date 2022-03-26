<?php
   $ind = [];
   foreach ($tab as &$tup) {
      $index = $tup["aut_init"];
      if (!search($index,$ind)) {
         $ind[] = $index;
      }
   }
?>
      <tr class="center" width="80%">
         <td class="center" width="80%">
<?php
   $i=1;
   foreach ($ind as &$index) {
?>
            <input class="nav" type="submit" formaction="book-lstaut1.php" name="send" value="<?php echo $index; ?>"
<?php
      if ($i==1) {
?>
                  autofocus="on" tabindex="<?php echo $i; ?>" />
                  &nbsp;&nbsp;
<?php
      } else {
?>
                  tabindex="<?php echo $i; ?>" />
                  &nbsp;&nbsp;
<?php
      }
?>           
<?php
      $i++;
   }
?>
         </td>
      </tr>

