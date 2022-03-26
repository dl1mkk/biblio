#!/bin/php
<?php
   include_once("class/defines.php");
   $uname = test_input($_COOKIE["uname"]);
   $hash  = test_input($_COOKIE["hash"]);
   $modus = test_input($_COOKIE["modus"]);
   $sql   = test_input($_COOKIE["sql"]);
   $error = test_input($_COOKIE["error"]);
   $errno = test_input($_COOKIE["errno"]);
   $file  = test_input($_COOKIE["file"]);
   $line  = test_input($_COOKIE["line"]);
   $err   = test_input($_COOKIE["err"]);
   $zeit  = date("Y-m-d H:i:s",time());
   switch ($err) {
      case 1:
         $msg = "Passwort falsch oder unbekannter Benutzer";
?>
   <h3 class="left">Fehler #001: <?php echo $msg; ?> um <?php echo $zeit; ?></h3>
<?php
         break;
      default:
         $msg = "Unbekannter Fehler";
?>
   <h3 class="left">Fehler #FFF: <?php echo $msg; ?> um <?php echo $zeit; ?></h3>
<?php
         break;
   }
?>
   <form id="checkbutton" class="nav" action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" method="post" >
      <table class="center">
         <tr class="center">
            <td class="center">
               <input class="nav" type="submit" name="check" value="Prüfen" tabindex="1" autofocus:"on" />
               &nbsp;
               <input class="nav" type="submit" name="send" formaction="index.php" tabindex="2" />
            </td>
         </tr>
       </table>
    </form>

