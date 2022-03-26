<?php
   include_once("class/class_user.php");
   include_once("class/class_adresse.php");
   $usr = new User();
   $adr = new Adresse();
   $log->log("adm-usrneu1.php","Execute App",__FILE__,__LINE__);
   //
   $username   = test_input(post("username"));
   $modus      = test_input(post("modus"));
   $anrede     = test_input(post("anrede"));
   $titel      = test_input(post("titel"));
   $firma      = test_input(post("firma"));
   $nachname   = test_input(post("nachname"));
   $vorname    = test_input(post("vorname"));
   $postfach   = test_input(post("postfach"));
   $strasse    = test_input(post("strasse"));
   $hausnr     = test_input(post("hausnr"));
   $landkz     = test_input(post("landkz"));
   $plz        = test_input(post("plz"));
   $stadt      = test_input(post("stadt"));
   $telefon    = test_input(post("telefon"));
   $mail       = test_input(post("mail"));
   //
   $sql = "SELECT * FROM rlandkz WHERE landkz='".$landkz."'";
   if (!$res = $adr->exec($sql,__FILE__,__LINE__)) $adr->error(__FILE__,__LINE__);
   $row = $res->fetch_assoc();
   $landvorwahl = $row["landvorwahl"];
   $land        = $row["land"];
   //
   $adr->uname       = $username;
   $adr->anrede      = $anrede;
   $adr->titel       = $titel;
   $adr->firma       = $firma;
   $adr->nachname    = $nachname;
   $adr->vorname     = $vorname;
   $adr->postfach    = $postfach;
   $adr->strasse     = $strasse;
   $adr->hausnr      = $hausnr;
   $adr->landkz      = $landkz;
   $adr->plz         = $plz;
   $adr->stadt       = $stadt;
   $adr->land        = $land;
   $adr->landvorwahl = $landvorwahl;
   $adr->telefon     = $telefon;
   $adr->mail        = $mail;
   $adr->lastact     = time();
   $adr->soundex     = xsoundex($nachname.$vorwahl);
   $res = $adr->insert(__FILE__,__LINE__);
   //
   $opt = [ 'cost'=>'12', ];
   $usr->uname    = $username;
   $usr->modus    = $modus;
   $usr->password = password_hash("passwort",PASSWORD_BCRYPT,$opt);
   $usr->lastact  = time();
   $res = $usr->new_user($user=$usr->uname,$pass=$usr->password,$modus=$usr->modus,__FILE__,__LINE__);
   //
   header("Location: adm-user.php");
   exit;
   //   
?>
   
