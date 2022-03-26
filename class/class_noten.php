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
   class Musikalien extends Pars {
      public $id;             // INT
      public $signatur;       // VAR(20)
      public $autor;          // VAR(80)
      public $herausgeber;    // VAR(80)
      public $titel;          // VAR(128)
      public $untertitel;     // VAR(128)
      public $kategorie;      // VAR(12)
      public $jahr;           // INT
      public $monat;          // INT
      public $verlag;         // VAR(80)
      public $ort;            // VAR(80)
      public $lagerort;       // VAR(20)
      public $bestellcode;    // VAR(22)
      public $isbn;           // VAR(22)
      public $klappentext;    // TEXT
      public $einband;        // VAR(12)
      public $anschaffung;    // DATE
      public $preis;          // DEC(10,2)
      public $wert;           // DEC(10,2)
      public $sprache;        // VAR(3)
      public $sound_titel;    // VAR(5)
      public $sound_autor;    // VAR(5)
      public $sound_herausg;  // VAR(5)
      public $sound_verlag;   // VAR(5)
      
      //
      public function __construct()
      {
         parent::__construct();
         return $this;
      }
      //
      public function get_row($row) {
         if ($row) {
            $this->row           = $row;
            $this->id            = $row["id"];
            $this->signatur      = $row["signatur"];
            $this->einband       = $row["einband"];
            $this->autor         = $row["autor"];
            $this->herausgeber   = $row["herausgeber"];
            $this->titel         = $row["titel"];
            $this->untertitel    = $row["untertitel"];
            $this->kategorie     = $row["kategorie"];
            $this->jahr          = $row["jahr"];
            $this->monat         = $row["monat"];
            $this->verlag        = $row["verlag"];
            $this->ort           = $row["ort"];
            $this->lagerort      = $row["lagerort"];
            $this->bestellcode   = $row["bestellcode"];
            $this->isbn          = $row["isbn"];
            $this->klappentext   = $row["klappentext"];
            $this->anschaffung   = $row["anschaffung"];
            $this->preis         = $row["preis"];
            $this->wert          = $row["wert"];
            $this->sprache       = $row["sprache"];
            $this->sound_titel   = $row["sound_titel"];
            $this->sound_autor   = $row["sound_autor"];
            $this->sound_herausg = $row["sound_herausg"];
            $this->sound_verlag  = $row["sound_verlag"];
            return $row;
         } else FALSE;
      }

      public function insert($file=__FILE__,$line=__LINE__){
         $sql = "INSERT INTO buch SET signatur='".$this->signatur."',autor='".$this->autor."',";
         $sql .= "herausgeber='".$this->herausgeber."',titel='".$this->titel."',";
         $sql .= "untertitel='".$this->untertitel."',";
         $sql .= "kategorie='".$this->kategorie."',jahr='".$this->jahr."',monat='".$this->monat."',";
         $sql .= "verlag='".$this->verlag."',ort='".$this->ort."',lagerort='".$this->lagerort."',";
         $sql .= "bestellcode='".$this->bestellcode."',isbn='".$this->isbn."',";
         $sql .= "klappentext='".$this->klappentext."',anschaffung='".$this->anschaffung."',";
         $sql .= "preis='".$this->preis."',wert='".$this->wert."',sprache='".$this->sprache."',";
         $sql .= "sound_autor='".soundex($this->autor)."',sound_herausg='".soundex($this->herausgeber)."',";
         $sql .= "sound_verlag='".soundex($this->verlag)."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return TRUE;
      }
      //
      //
      public function update($file=__FILE__,$line=__LINE__) {
         $sql = "UPDATE buch SET signatur='".$this->signatur."',autor='".$this->autor."',";
         $sql .= "herausgeber='".$this->herausgeber."',titel='".$this->titel."',";
         $sql .= "untertitel='".$this->untertitel."',";
         $sql .= "kategorie='".$this->kategorie."',jahr='".$this->jahr."',monat='".$this->monat."',";
         $sql .= "verlag='".$this->verlag."',ort='".$this->ort."',lagerort='".$this->lagerort."',";
         $sql .= "bestellcode='".$this->bestellcode."',isbn='".$this->isbn."',";
         $sql .= "klappentext='".$this->klappentext."',anschaffung='".$this->anschaffung."',";
         $sql .= "preis='".$this->preis."',wert='".$this->wert."',sprache='".$this->sprache."',";
         $sql .= "sound_autor='".soundex($this->autor)."',sound_herausg='".soundex($this->herausgeber)."',";
         $sql .= "sound_verlag='".soundex($this->verlag)."' WHERE id='".$this->id."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return TRUE;
      }
      //
      //
      public function read_buch($sql,$file=__FILE__,$line=__LINE__) {
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return $res;
      }
   }
   
   
   class reinband extends Pars
   {
      public $id;
      public $einband;
      //
      public function __construct()
      {
         parent::__construct();
         return $this;
      }
      //
      // EINBAND DATENSATZ LESEN
      //
      public function get($row) {
         if ($row) {
            $this->row  = $row;
            $id         = $row["id"];
            $einband    = $row["einband"];
            return $row;
         } else return FALSE;
      }
      //
      // SELECT ALL AUS REINBAND
      //
      public function select_all($file=__FILE__,$line=__LINE__)
      {
         $sql = "SELECT * FROM reinband ORDER BY einband";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return $res;
      }
   }
   
   class rkategorie extends PARS {
      public $id;
      public $kategorie;
      //
      public function __construct()
      {
         parent::__construct();
         return $this;
      }
      //
      // KATEGORIE DATENSATZ LESEN
      //
      public function get($row) {
         if ($row) {
            $this->row  = $row;
            $id         = $row["id"];
            $einband    = $row["kategorie"];
            return $row;
         } else return FALSE;
      }
      //
      // SELECT ALL AUS KATEGORIE
      //
      public function select_all($file=__FILE__,$line=__LINE__)
      {
         $sql = "SELECT * FROM rkategorie ORDER BY kategorie";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return $res;
      }
   }
//
//
//
//
//
//
//
//
//   
