<?php
   include_once("class/class_adresse.php");
   $adr = new Adresse();
   $log->log("adm-usrlst1.php","Execute App",__FILE__,__LINE__);
   $id = get("send");
   $sql = "SELECT * FROM adresse WHERE id='".$id."'";
   if (!$res = $adr->exec($sql,__FILE__,__LINE__)) $adr->error(__FILE__,__LINE__);
   if ($row = $res->fetch_assoc()) {
      setcookie("username",$row["uname"]);
      header("Location: adm-usrinfo.php");
      exit;
   }
   die("Stop #13\n");
   exit;
?>
   
