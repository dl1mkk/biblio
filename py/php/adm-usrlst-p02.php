<?php
   $sql = "SELECT * FROM adresse ORDER BY uname";
   if (!$res = $adr->exec($sql,__FILE__,__LINE__)) $adr->error(__FILE__,__LINE__);
   while ($row = $res->fetch_assoc()) {
      $user    = $row["uname"];
      $name    = $row["nachname"].",".$row["vorname"];
      $address = $row["anrede"]." ";
      if ($row["titel"]) $address .= $row["titel"]." ";
      $address .= $row["nachname"].", ".$row["vorname"].", ";
      if ($row["postfach"]) $address .= "Postf. ".$row["postfach"].", ";
      $address .= $row["strasse"]." ".$row["hausnr"].", ";
      if ($row["land"] != "DEUTSCHLAND") $address .= $row["landkz"].", ";
      $address .= $row["plz"]." ".$row["stadt"].", ";
      if ($row["land"] != "DEUTSCHLAND") $address .= $row["land"].", ";
      $address .= "Tel: ".$row["landvorwahl"].$row["telefon"].", ";
      $address .= "Mail: ".$row["mail"];
      $id = $row["id"];
?>





