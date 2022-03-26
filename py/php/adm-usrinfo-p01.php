<?php
   include_once("class/class_adresse.php");
   include_once("class/class_user.php");
   $adr = new Adresse();
   $usr = new User();
   $log->log("adm-usrinfo.php","Execute App",__FILE__,__LINE__);
   $username = cookie("username");
   $sql = "SELECT * FROM user WHERE uname='".$username."'";
   if ($res = $usr->query($sql)) {
      if ($row = $res->fetch_assoc()) {
         $usr->id      = $row["id"];
         $usr->uname   = $row["uname"];
         $usr->modus   = $row["modus"];
         $usr->lastact = $row["lastact"];
      }
   }
   $sql = "SELECT * FROM adresse WHERE uname='".$username."'";
   if ($res = $adr->query($sql)) {
      if ($row = $res->fetch_assoc()) {
         $adr->id          = $row["id"];
         $adr->uname       = $row["uname"];
         $adr->anrede      = $row["anrede"];
         $adr->titel       = $row["titel"];
         $adr->firma       = $row["firma"];
         $adr->nachname    = $row["nachname"];
         $adr->vorname     = $row["vorname"];
         $adr->strasse     = $row["strasse"];
         $adr->hausnr      = $row["hausnr"];
         $adr->postfach    = $row["postfach"];
         $adr->landkz      = $row["landkz"];
         $adr->land        = $row["land"];
         $adr->landvorwahl = $row["landvorwahl"];
         $adr->plz         = $row["plz"];
         $adr->stadt       = $row["stadt"];
         $adr->telefon     = $row["telefon"];
         $adr->mail        = $row["mail"];
      }
   }
   $uname         = $adr->uname;
   $modus         = test_input(post("modus"))      ? test_input(post("modus"))      : $usr->modus;
   $anrede        = test_input(post("anrede"))     ? test_input(post("anrede"))     : $adr->anrede;
   $titel         = test_input(post("titel"))      ? test_input(post("titel"))      : $adr->titel;
   $firma         = test_input(post("firma"))      ? test_input(post("firma"))      : $adr->firma;
   $nachname      = test_input(post("nachname"))   ? test_input(post("nachname"))   : $adr->nachname;
   $vorname       = test_input(post("vorname"))    ? test_input(post("vorname"))    : $adr->vorname;
   $strasse       = test_input(post("strasse"))    ? test_input(post("strasse"))    : $adr->strasse;
   $hausnr        = test_input(post("hausnr"))     ? test_input(post("hausnr"))     : $adr->hausnr;
   $postfach      = test_input(post("postfach"))   ? test_input(post("postfach"))   : $adr->postfach;
   $landkz        = test_input(post("landkz"))     ? test_input(post("landkz"))     : $adr->landkz;
   $plz           = test_input(post("plz"))        ? test_input(post("plz"))        : $adr->plz;
   $stadt         = test_input(post("stadt"))      ? test_input(post("stadt"))      : $adr->stadt;
   $telefon       = test_input(post("telefon"))    ? test_input(post("telefon"))    : $adr->telefon;
   $mail          = test_input(post("mail"))       ? test_input(post("mail"))       : $adr->mail;
   $s_modus = "SELECT * FROM rmodus ORDER BY modus";
   $r_modus = r_option($sql=$s_modus,$name="modus",$field="modus",$def1=$modus,$tab="2",$ronly=true);
   $s_anrede = "SELECT * FROM ranrede ORDER BY anrede";
   $r_anrede = r_option($sql=$s_anrede,$name="anrede",$field="anrede",$def1=$anrede,$tab="3",$ronly=true);
   $s_landkz = "SELECT * FROM rlandkz ORDER BY landkz";
   $r_landkz = r_option($sql=$s_landkz,$name="landkz",$field="landkz",$def1=$landkz,$tab="11",$ronly=true);
   $sql = "SELECT * FROM rlandkz WHERE landkz='".$landkz."'";
   if (!$res = $adr->query($sql)) {
      if ($row = $res->fetch_assoc()) {
         $landvorwahl = $row["landvorwahl"];
         $land        = $row["land"];
      }
   }
   $landvorwahl   = isset($landvorwahl)   ? $landvorwahl : $adr->landvorwahl;
   $land          = isset($land)          ? $land        : $adr->land;
?>
   
