<?php
   include_once("class/class_user.php");
   include_once("class/class_adresse.php");
   $log->log("adm-usrinfo1.php","Execute App",__FILE__,__LINE__);
   $adr = new Adresse();
   $usr = new User();
   $username = test_input(post("username"));
   $sql = "SELECT * FROM user WHERE uname='".$username."'";
   if (!$res = $usr->exec($sql,__FILE__,__LINE__)) $usr->error(__FILE__,__LINE__);
   if ($row = $res->fetch_assoc()) {
      $usr->id       = $row["id"];
      $usr->uname    = $row["uname"];
      $usr->password = $row["password"];
      $usr->modus    = $row["modus"];
      $usr->lastact  = time();
   }
   $sql = "SELECT * FROM adresse WHERE uname='".$username."'";
   if (!$res = $adr->exec($sql,__FILE__,__LINE__)) $adr->error(__FILE__,__LINE__);
   if ($row = $res->fetch_assoc()) {
      $adr->id          = $row["id"];
      $adr->uname       = $row["uname"];
      $adr->anrede      = $row["anrede"];
      $adr->titel       = $row["titel"];
      $adr->soundex     = $row["soundex"];
      $adr->firma       = $row["firma"];
      $adr->nachname    = $row["nachname"];
      $adr->vorname     = $row["vorname"];
      $adr->strasse     = $row["strasse"];
      $adr->hausnr      = $row["hausnr"];
      $adr->postfach    = $row["postfach"];
      $adr->landkz      = $row["landkz"];
      $adr->plz         = $row["plz"];
      $adr->stadt       = $row["stadt"];
      $adr->land        = $row["land"];
      $adr->landvorwahl = $row["landvorwahl"];
      $adr->telefon     = $row["telefon"];
      $adr->mail        = $row["mail"];
      $adr->lastact     = time();
   }
   $usr->modus = ($usr->modus != test_input(post("modus"))) ? test_input(post("modus"))   :  $usr->modus;
   $adr->anrede      = ($adr->anrede      != test_input(post("anrede")))      ?  test_input(post("anrede"))       : $adr->anrede;
   $adr->titel       = ($adr->titel       != test_input(post("titel")))       ?  test_input(post("titel"))        : $adr->titel;
   $adr->firma       = ($adr->firma       != test_input(post("firma")))       ?  test_input(post("firma"))        : $adr->firma;
   $adr->nachname    = ($adr->nachname    != test_input(post("nachname")))    ?  test_input(post("nachname"))     : $adr->nachname;
   $adr->vorname     = ($adr->vorname     != test_input(post("vorname")))     ?  test_input(post("vorname"))      : $adr->vorname;
   $adr->strasse     = ($adr->strasse     != test_input(post("strasse")))     ?  test_input(post("strasse"))      : $adr->strasse;
   $adr->hausnr      = ($adr->hausnr      != test_input(post("hausnr")))      ?  test_input(post("hausnr"))       : $adr->hausnr;
   $adr->postfach    = ($adr->postfach    != test_input(post("postfach")))    ?  test_input(post("postfach"))     : $adr->postfach;
   $adr->landkz      = ($adr->landkz      != test_input(post("landkz")))      ?  test_input(post("landkz"))       : $adr->landkz;
   $adr->plz         = ($adr->plz         != test_input(post("plz")))         ?  test_input(post("plz"))          : $adr->plz;
   $adr->stadt       = ($adr->stadt       != test_input(post("stadt")))       ?  test_input(post("stadt"))        : $adr->stadt;
   $adr->land        = ($adr->land        != test_input(post("land")))        ?  test_input(post("land"))         : $adr->land;
   $adr->landvorwahl = ($adr->landvorwahl != test_input(post("landvorwahl"))) ?  test_input(post("landvorwahl"))  : $adr->landvorwahl;
   $adr->telefon     = ($adr->telefon     != test_input(post("telefon")))     ?  test_input(post("telefon"))      : $adr->telefon;
   $adr->mail        = ($adr->mail        != test_input(post("mail")))        ?  test_input(post("mail"))         : $adr->mail;
   $adr->lastact     = time();
   $adr->soundex     = xsoundex($adr->nachname.$adr->vorname);
   if (!$res = $usr->update(__FILE__,__LINE__)) $usr->error(__FILE__,__LINE__);
   if (!$res = $adr->update(__FILE__,__LINE__)) $adr->error(__FILE__,__LINE__);
   header("Location: adm-user.php");
   exit;
?>
   
