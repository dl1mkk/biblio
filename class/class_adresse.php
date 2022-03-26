<?php
//
//Disclaimer of Copyrights:
//(c)2018 by Veit Heise, DK2VH, 63477 Maintal, Germany
//All rights depends to Zend-Technologies and IonCube Ltd. for PHP-Coding
//All rights depends to Veit Heise, PQM-Consulting, 63477 Maintal for PHP and HTML-User Code
//All rights depends to W3C for HTML and CSS and CSS2
// (C)2019 BY VEIT HEISE, PQM-CONSULTING, MAINTAL
// PROJECT: BIBLIOTHEK PIER CARLO RABINO, 60388 FRANKFURT AM MAIN
// THIS PROJECT IS HANDLED UNDER PRIVATE DOMAIN LICENCE
// COPY AND DISTRIBUTION WITHOUT PERMISSION OF THE AUTHOR VEIT HEISE IS NOT PERMITTED
// SERVICE NOTICES PLEASE SENT TO veit.heise@heise-media.eu//
//
   $debug="yes";

   require_once("defines.php");
   include_once("class_pars.php");
   //
   //
   class Adresse extends Pars {
      //
      public $id;
      public $uname;
      public $soundex;
      public $anrede;
      public $titel;
      public $firma;
      public $nachname;
      public $vorname;
      public $postfach;
      public $strasse;
      public $hausnr;
      public $landkz;
      public $plz;
      public $stadt;
      public $land;
      public $landvorwahl;
      public $telefon;
      public $mail;
      public $lastact;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      // READ ROW DATA FROM CURRENT DATASET
      // ----------------------------------
      //
      public function get_row($row,$file=__FILE__,$line=__LINE__)
      {
         if ($row) {
            $this->row           = $row;
            $this->uname         = $row["uname"];
            $this->id            = $row["id"];
            $this->soundex       = $row["soundex"];
            $this->titel         = $row["titel"];
            $this->anrede        = $row["anrede"];
            $this->firma         = $row["firma"];
            $this->nachname      = $row["nachname"];
            $this->vorname       = $row["vorname"];
            $this->postfach      = $row["postfach"];
            $this->strasse       = $row["strasse"];
            $this->hausnr        = $row["hausnr"];
            $this->landkz        = $row["landkz"];
            $this->plz           = $row["plz"];
            $this->stadt         = $row["stadt"];
            $this->land          = $row["land"];
            $this->landvorwahl   = $row["landvorwahl"];
            $this->telefon       = $row["telefon"];
            $this->mail          = $row["mail"];
            $this->lastact       = $row["lastact"];
         } else $this->row = NULL;
         return $this->row;
      }
      //
      // INSERT NEW DATASET
      // ------------------
      //
      public function insert($file=__FILE__,$line=__LINE__)
      {
         $sql = "INSERT INTO adresse SET uname='".$this->uname."',soundex='".$this->soundex."',
                 titel='".$this->titel."',anrede='".$this->anrede."',firma='".$this->firma."',nachname='".$this->nachname."',
                 vorname='".$this->vorname."',postfach='".$this->postfach."',strasse='".$this->strasse."',
                 hausnr='".$this->hausnr."',landkz='".$this->landkz."',plz='".$this->plz."',stadt='".
                 $this->stadt."',land='".$this->land."',landvorwahl='".$this->landvorwahl."',
                 telefon='".$this->telefon."',mail='".$this->mail."',lastact='".time()."'";
         if (!$res = $this->exec($sql,$file,$line)) { $this->error($file,$line); }
         return $res;
      }
      //
      // UPDATE DATASET
      // --------------
      //
      public function update($file=__FILE__,$line=__LINE__)
      {
         $sql = "UPDATE adresse SET soundex='".$this->soundex."',uname='".$this->uname."',titel='".$this->titel."',
                 anrede='".$this->anrede."',firma='".$this->firma."',nachname='".$this->nachname."',
                 vorname='".$this->vorname."',postfach='".$this->postfach."',strasse='".$this->strasse."',
                 hausnr='".$this->hausnr."',landkz='".$this->landkz."',plz='".$this->plz."',stadt='".
                 $this->stadt."',land='".$this->land."',landvorwahl='".$this->landvorwahl."',
                 telefon='".$this->telefon."',mail='".$this->mail."',lastact='".time()."'
                 WHERE id='".$this->id."'";
         if (!$res = $this->exec($sql,$file,$line)) { $this->error($file,$line); }
         return $res;
      }
      //
      // SELECT DATASET FROM ADRESSE BY UNAME
      // ------------------------------------
      //
      public function get_user($user,$file=__FILE__,$line=__LINE__)
      {
         $sql = "SELECT * FROM adresse WHERE uname='".$user."'";
         if (!$res = $this->exec($sql,$file,$line)) return NULL;
         $row = $res->fetch_assoc();
         return $this->get_row($row,$file,$line);
      }
      //
      // SELECT DATASET FROM ADRESSE BY ID
      //
      public function get_id($id,$file=__FILE__,$line=__LINE__)
      {
         $sql = "SELECT * FROM adresse WHERE id='".$id."'";
         if (!$res = $this->exec($sql,$file,$line)) return NULL;
         $row = $res->fetch_assoc();
         return $this->get_row($row,$file,$line);
      }
      //
      // SEND ERROR FROM RUNTIME-ERROR
      // -----------------------------
      //
      public function send_error($target,$url,$file=__FILE__,$line=__LINE__)
      {
         setcookie("Wid",$target);
         setcookie("Wsql",$this->sql);
         setcookie("Werrno",$this->db->errno);
         setcookie("Werror",$this->db->error);
         header("Location: error/".$url);
         exit;
      }
      //
      // DELETE LAST INSERTED RECORD
      // ---------------------------
      //
      public function delete_last($file=__FILE__,$line=__LINE__)
      {
         $sql = "DELETE FROM adresse WHERE uname='".$this->uname."'";
         if (!$res = $this->exec($sql,$file,$line)) return NULL;
         return true;
      }
   }
   //
?>
