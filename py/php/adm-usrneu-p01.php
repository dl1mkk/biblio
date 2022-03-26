<?php
   include_once("class/class_adresse.php");
   include_once("class/class_user.php");
   $adr = new Adresse();
   $usr = new User();   
   $log->log("adm-usrneu.php","Execute App",__FILE__,__LINE__);
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
   $username   = $username ? $username : "";
   $modus      = $modus ? $modus : "USR";
   $anrede     = $anrede ? $anrede : "Frau" ;
   $titel      = $titel ? $titel : "";
   $firma      = $firma ? $firma : "";
   $nachname   = $nachname ? $nachname : "";
   $vorname    = $vorname ? $vorname : "";
   $postfach   = $postfach ? $postfach : "";
   $strasse    = $strasse ? $strasse : "";
   $hausnr     = $hausnr ? $hausnr : "";
   $landkz     = $landkz ? $landkz : "D";
   $plz        = $plz ? $plz : "";
   $stadt      = $stadt ? $stadt : "";
   $telefon    = $telefon ? $telefon : "";
   $mail       = $mail ? $mail : "";
   //
   $s_modus = "SELECT * FROM rmodus ORDER BY modus";
   $r_modus = r_option($sql=$s_modus,$name="modus",$field="modus",$def1=$modus,$tab="2",$ronly=true);
   $s_anrede = "SELECT * FROM ranrede ORDER BY anrede";
   $r_anrede = r_option($sql=$s_anrede,$name="anrede",$field="anrede",$def1=$anrede,$tab="3",$ronly=true);
   $s_landkz = "SELECT * FROM rlandkz ORDER BY landkz";
   $r_landkz = r_option($sql=$s_landkz,$name="landkz",$field="landkz",$def1=$landkz,$tab="11",$ronly=true);
?>
   
