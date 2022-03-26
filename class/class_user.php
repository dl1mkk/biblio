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
   class User extends Pars {
      //
      public $id;
      public $uname;
      public $modus;
      public $password;
      public $lastact;
      //
      // CONSTRUCTOR
      // -----------
      //
      public function __construct() {
         parent::__construct(); 
         if (!$this->uname = $_COOKIE["login"]) {
            return $this;
         }
         $sql = "SELECT * FROM user WHERE uname='".$this->uname."'";
         if (!$res = $this->exec($sql,__FILE__,__LINE__)) $this->error(__FILE__,__LINE__);
         if ($row = $res->fetch_assoc()) {
            $this->get_row($row);
            return $this;
         } else {
            return NULL;
         }
      }
      //
      // SUCHE UND VERGLEICHE USER UND PASSWORD
      // --------------------------------------
      //
      public function is_valid_user($user,$pass,$file=__FILE__,$line=__LINE__) {
         if (!$user || !$pass) return FALSE;
         $sql = "SELECT * FROM user WHERE uname='".$user."'";
         if (!$res = $this->exec($sql,__FILE__,__LINE__)) $this->error(__FILE__,__LINE__);
         if ($row = $res->fetch_assoc()) {
            if (password_verify($pass,$row["password"])) {
               return TRUE;
            } else {
               return FALSE;
            }
         } else { 
           return FALSE;
         }
      }
      //
      // GET ROW = ZEILE EINLESEN
      // ------------------------
      //
      public function get_row($row) {
         $this->row      = $row;
         $this->id       = $row["id"];
         $this->uname    = $row["uname"];
         $this->modus    = $row["modus"];
         $this->password = $row["password"];
         $this->lastact  = $row["lastact"];
         return $row;
      }
      //
      // NEW USER = NEUEN BENUTZER ANLEGEN
      // ---------------------------------
      //
      public function new_user($user,$pass,$modus,$file=__FILE__,$line=__LINE__) {
         if (!$this->is_valid_user($user,$pass,$file,$line)) {
            $option = [ "cost" => 12, ];
            $phash = password_hash($pass,PASSWORD_BCRYPT,$option);
            $sql = "INSERT INTO user SET uname='".$user."',modus='".$modus."',password='".$phash."',lastact=".time();
            if (!$this->res = $this->exec($sql,$file,$line)) $this->error($file,$line);
            return TRUE;
         }
         return FALSE;
      }
      //
      // UPDATE USER LASTACT = ZEIT FUER LETZTE AKTIVITAET EINTRAGEN
      // -----------------------------------------------------------
      //
      public function lastact($file=__FILE__,$line=__LINE__) {
         $sql = "UPDATE user SET lastact=".time()." WHERE uname='".$this->uname."'";
         if (!$this->res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return;
      }
      //
      // CHECK LOGIN = PRUEFT DIE GUELTIGKEIT DES LOGINS ZUR LAUFZEIT
      // ------------------------------------------------------------
      //
      public function check_login() {
         if (!isset($_COOKIE["login"])) return FALSE;
         // if (!isset($_COOKIE["modus"])) return FALSE;
         if (!isset($_COOKIE["session"])) return FALSE;
         if ($_COOKIE["PHPSESSID"] <> $_COOKIE["session"]) return FALSE;
         return TRUE;
      }
      //
      // SELECT ALL USERS = ALLE BENUTZER AUSWÄHLEN
      // ------------------------------------------
      //
      public function select_all($file=__FILE__,$line=__LINE__) {
         $sql = "SELECT * FROM user ORDER BY uname";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return $res;
      }
      //
      // SELECT USER BY NAME = BENUTZER NACH NAMEN AUSWÄHLEN
      // ---------------------------------------------------
      //
      public function select_user($user,$file=__FILE__,$line=__LINE__) {
         $sql = "SELECT * FROM user WHERE uname='".$user."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $row = $res->fetch_assoc();
         $res = $this->get_row($row);
         return $row;
      }
      //
      // SELECT LAND BY LANDKZ IN USER-ADRESS
      // ------------------------------------
      //
      public function select_land($landkz,$file=__FILE__,$line=__LINE__) {
         $sql = "SELECT land FROM rlandkz WHERE landkz='".$landkz."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $row = $res->fetch_assoc();
         return $row["land"];
      }
      //
      // SELECT DATASET FROM ADRESSE BY ID
      //
      public function get_name($id,$file=__FILE__,$line=__LINE__)
      {
         $sql = "SELECT * FROM user WHERE id='".$id."'";
         if (!$res = $this->exec($sql,$file,$line)) return NULL;
         $row = $res->fetch_assoc();
         return $row["uname"];
      }
      // SELECT DATASET FROM USER BY UNAME
      public function get_id($name,$file=__FILE__,$line=__LINE__)
      {
         $sql = "SELECT id FROM user WHERE uname='".$name."'";
         if (!$res = $this->exec($sql,$file,$line)) return NULL;
         $row = $res->fetch_assoc();
         return $row["id"];
      }
      // UPDATE USER
      public function update($file=__FILE__,$line=__LINE__)
      {
         $sql = "UPDATE user SET password='".$this->password."',lastact='".time()."'
                 WHERE uname='".$this->uname."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return true;
      }    
   }
   //
   //   
?>










