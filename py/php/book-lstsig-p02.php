   <tr class="center" width="80%">
      <td class="center" width="80%">
<?php
   $i = 1;
   foreach ($tab as &$e) {
?>
         <input class="nav" type="submit" name="send" formaction="book-info.php"
<?php
      if ($i==1) {
?>
         autofocus="on" value="<?php echo $e; ?>" tabindex="<?php echo $i++; ?>" />
         &nbsp;&nbsp;
<?php
      } else {
?>
         value="<?php echo $e; ?>" tabindex="<?php echo $i++; ?>" />
         &nbsp;&nbsp;
<?php
      }
   }
?>
      </td>
   </tr>
