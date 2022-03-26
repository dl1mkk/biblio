<?php   
   $i = 1;
   foreach ($z as &$kurz) {
?>
      <input class="nav" type="submit" name="send" value="<?php echo $kurz; ?>" formaction="book-lsthrg2.php" tabindex="<?php echo $i++; ?>" />
      &nbsp; &nbsp;
<?php
   }
?>
