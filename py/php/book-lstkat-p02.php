      <tr class="center" width="80%">
         <td class="center" width="80%">
<?php
   $i=1;
   foreach ($tab as &$index) {
?>
            <input class="nav" type="submit" formaction="book-lstkat1.php" name="send" value="<?php echo $index; ?>"
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

