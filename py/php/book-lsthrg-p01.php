<?php
   function search($index,$list) {
      foreach ($list as &$e) {
         if ($index === $e) return true;
      }
      return false;
   }
   include_once("class/class_buch.php");
   $buc = new Buch();
   $tmp = new tmpherausg();
   $log->log("book-lsthrg.php","Execute App",__FILE__,__LINE__);
   if ($tmp->locked) {
      $log->log("book-lsthrg.php","Tabelle tmp_admin_1_lock gesperrt! Bitte warten.",__FILE__,__LINE__);
      setcookie("bokerr","004");
      setcookie("boknext","book-lsthrg.php");
      setcookie("bokmsg","Tabelle tmp_admin_1_lock gesperrt! Bitte warten.");
      header("Location: php/error-004.php");
      exit;
   }
   $tab = $tmp->init();
?>
