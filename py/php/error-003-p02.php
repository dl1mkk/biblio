<?php
   $label = test_input($_COOKIE["label"]);
?>
<tr class="left" width="80%">
   <td class="left" width="80%">
      <h2>FEHLER 003: VARIABLE '<?php echo $label; ?>' NICHT DEFINIERT.</h2>
   </td>
</tr>
<tr class="left" width="80%">
   <td class="left" width="80%">
      <p class="just">
         Intern ist bei 'book-new1.php' bei der Signatur '<?php echo $signatur; ?>' und der Variablen '$<?php echo $label; ?>' ein Fehler aufgetreten.
      </p>
   </td>
</tr>

