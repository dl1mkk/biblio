<?php
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
   include_once("class/class_pars.php");
   //
   class Anrede extends Pars {
      public $id;
      public $anrede;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      // Sammelt alle vorhandenen Anreden
      //
      public function collect_anrede($file=__FILE__,$line=__LINE__) {
         $sql = "SELECT * FROM ranrede ORDER BY anrede";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $coll = [];
         while ($row = $res->fetch_assoc()) {
            $coll[] = array("id"=>$row["id"], "anrede"=>$row["anrede"]);
         }
         return $coll;
      }
      //
      // Insert neue Anrede
      // 
      public function insert($file=__FILE__,$line=__LINE__) {
         $sql = "INSERT INTO ranrede SET anrede='".$this->anrede."'";
         if (!$res = $this->query($sql)) return false;
         return $res;         
      }
   }
   //
   //
   class Einband extends Pars {
      public $id;
      public $einband;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      // Sammelt alle Einbandbezeichnungen
      //
      public function collect_einband($file=__FILE__,$line=__LINE__) {
         $sql = "SELECT * FROM reinband ORDER BY einband";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $coll = [];
         while ($row = $res->fetch_assoc()) {
            $coll[] = array("id"=>$row["id"], "einband"=>$row["einband"]);
         }
         return $coll;
      }
      //
      // Insert neue Einbände
      // 
      public function insert($file=__FILE__,$line=__LINE__) {
         $sql = "INSERT INTO reinband SET einband='".$this->einband."'";
         if (!$res = $this->query($sql)) return false;
         return $res;         
      }
   }
   //
   //
   class Kategorie extends Pars {
      public $id;
      public $kategorie;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      //
      public function collect_kategorie($file=__FILE__,$line=__LINE__) {
         $sql = "SELECT * FROM rkategorie ORDER BY kategorie";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $coll = [];
         while ($row = $res->fetch_assoc()) {
            $coll[] = array("id"=>$row["id"],"kategorie"=>$row["kategorie"]);
         }
         return $coll;
      }
      //
      //
      public function insert($file=__FILE__,$line=__LINE__) {
         $sql = "INSERT INTO rkategorie SET kategorie='".$this->kategorie."'";
           if (!$res = $this->query($sql)) return false;
         return $res;         
      }
      //
   }
   //
   //
   class Lagerort extends Pars {
      public $id;
      public $lagerort;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      public function collect_lagerort($file=__FILE__,$line=__LINE__) {
         $sql = "SELECT * FROM rlagerort ORDER BY lagerort";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $coll = [];
         while ($row = $res->fetch_assoc()) {
            $coll[] = array("id"=>$row["id"],"lagerort"=>$row["lagerort"]);
         }
         return $coll;
      }
      //
      public function insert($file=__FILE__,$line=__LINE__) {
         $sql = "INSERT INTO rlagerort SET lagerort='".$this->lagerort."'";
         if (!$res = $this->query($sql)) return false;
         return $res;         
      }
      //
   }
   //
   //
   class Sprachen extends Pars {
      public $id;
      public $sprache;
      public $lang;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      public function collect_sprache($file=__FILE__,$line=__LINE__) {
         $sql = "SELECT * FROM rsprache ORDER BY lang";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $coll = [];
         while ($row = $res->fetch_assoc()) {
            $coll[] = array("id"=>$row["id"],"sprache"=>$row["sprache"],"lang"=>$row["lang"]);              
         }
         return $coll;
      }
      //
      public function insert($file=__FILE__,$line=__LINE__) {
         $sql = "INSERT INTO rsprache SET sprache='".$this->sprache."', lang='".$this->lang."'";
         if (!$res = $this->query($sql)) return false;
         return $res;         
      }    
   }
?>
