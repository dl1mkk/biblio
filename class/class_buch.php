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
   class Buch extends Pars {
      public $id;             // INT
      public $signatur;       // VAR(20)
      public $autor;          // VAR(80)
      public $herausgeber;    // VAR(80)
      public $titel;          // VAR(128)
      public $kategorie;      // VAR(12)
      public $reihe;          // VAR(80)
      public $band;           // VAR(5)
      public $jahr;           // INT
      public $monat;          // INT
      public $verlag;         // VAR(80)
      public $ort;            // VAR(80)
      public $lagerort;       // VAR(20)
      public $bestellcode;    // VAR(22)
      public $isbn;           // VAR(22)
      public $klappentext;    // TEXT
      public $anschaffung;    // DATE
      public $preis;          // DEC(10,2)
      public $wert;           // DEC(10,2)
      public $sprache;        // VAR(3)
      public $bildurl;        // VAR(128)
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
            $this->autor         = $row["autor"];
            $this->herausgeber   = $row["herausgeber"];
            $this->titel         = $row["titel"];
            $this->kategorie     = $row["kategorie"];
            $this->band          = $row["band"];
            $this->reihe         = $row["reihe"];
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
         $sql .= "kategorie='".$this->kategorie."',jahr='".$this->jahr."',monat='".$this->monat."',";
         $sql .= "reihe='".$this->reihe."',band='".$this->band."',";
         $sql .= "verlag='".$this->verlag."',ort='".$this->ort."',lagerort='".$this->lagerort."',";
         $sql .= "bestellcode='".$this->bestellcode."',isbn='".$this->isbn."',";
         $sql .= "klappentext='".$this->klappentext."',anschaffung='".$this->anschaffung."',";
         $sql .= "preis='".$this->preis."',wert='".$this->wert."',sprache='".$this->sprache."',";
         $sql .= "sound_autor='".soundex($this->autor)."',sound_herausg='".soundex($this->herausgeber)."',";
         $sql .= "sound_verlag='".soundex($this->verlag)."',";
         $sql .= "bildurl='".$this->bildurl."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return TRUE;
      }
      //
      //
      public function update($file=__FILE__,$line=__LINE__) {
         $sql = "UPDATE buch SET signatur='".$this->signatur."',autor='".$this->autor."',";
         $sql .= "herausgeber='".$this->herausgeber."',titel='".$this->titel."',";
         $sql .= "kategorie='".$this->kategorie."',jahr='".$this->jahr."',monat='".$this->monat."',";
         $sql .= "reihe='".$this->reihe."',band='".$this->band."',";
         $sql .= "verlag='".$this->verlag."',ort='".$this->ort."',lagerort='".$this->lagerort."',";
         $sql .= "bestellcode='".$this->bestellcode."',isbn='".$this->isbn."',";
         $sql .= "klappentext='".$this->klappentext."',anschaffung='".$this->anschaffung."',";
         $sql .= "preis='".$this->preis."',wert='".$this->wert."',sprache='".$this->sprache."',";
         $sql .= "sound_autor='".soundex($this->autor)."',sound_herausg='".soundex($this->herausgeber)."',";
         $sql .= "sound_verlag='".soundex($this->verlag)."',bildurl='".$this->bildurl."' WHERE id='".$this->id."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return TRUE;
      }
      //
      //
      public function read_buch($sql,$file=__FILE__,$line=__LINE__) {
         if (!$this->res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return $this->res;
      }
      //
      //
      public function remove_cat($signatur) {
         $sql = "DELETE FROM buch WHERE signatur='".$signatur."'";
         if (!$res = $this->exec($sql,__FILE__,__LINE__)) $this->error(__FILE__,__LINE__);
         $sql = "DELETE FROM volltext WHERE signatur='".$signatur."'";
         if (!$res = $this->exec($sql,__FILE__,__LINE__)) $this->error(__FILE__,__LINE__);
         return $res;
      }
      //
      //
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
   // Diese Klasse wird zur Verwaltung der Lagerorte verwendet.
   // =========================================================
   //
   class Lagerort extends PARS {
      public $id;
      public $lagerort;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      public function _update($l) {
         $sql = "SELECT id, lagerort FROM rlagerort WHERE lagerort='".$l."'";
         if (!$res = $this->exec($sql,__FILE__,__LINE__)) $this->error(__FILE__,__LINE__);
         if ($res->num_recs == 1) return true;
         $sql = "INSERT INTO rlagerort SET lagerort='".$l."'";
         return true;
      }
   }
   //
   // Diese Klasse wird zur temporären Datensammlung in der App book-lstsig.php verwendet.
   // Es werden Register angelegt, um die Auswahl von Signaturen sortiert zu sammeln.
   // 
   class tmpautoren extends PARS {
      public $id;
      public $autinit;
      public $autkurz;
      public $autor;
      public $signatur;
      public $locked;
      public $uname;
      //
      // Initilisiere Objekt
      //
      public function __construct($login=false) {
         if ($login) {
            $uname = $login;
            $this->uname = $uname;
         } else {
            $uname = test_input($_COOKIE["uname"]);
            $this->uname = $uname;
         }
         if (!$uname) {
            die("FATAL ERROR: Kann nicht auf die interne Variabe '\$db[0].\$uname' zugreifen\n\r".
                "Bitte rufen Sie den Administrator an (Rufnummer +49(6181)369-8511). Danke.");
            exit;
         }
         $this->db = db_connect("pars");
         $this->unlock();
         $this->locked   = $this->init_lock($uname);
         $this->autinit  = NULL;
         $this->autkurz  = NULL;
         $this->autor    = NULL;
         $this->signatur = NULL;
         return $this;
      }
      //
      // Initialisiert die temporäre Tabelle mit den Autoren-Namen
      //
      public function init() {
         $sql = "SELECT * FROM buch ORDER BY signatur";
         $tab = [];
         if ($res = $this->exec($sql,__FILE__,__LINE__)) {
            while ($row = $res->fetch_assoc()) {
               $autor = $row["autor"];
               $signatur = $row["signatur"];
               if (test_input($autor)) {
                  $tab[] = $this->separate($autor,$signatur);
               }
            }
         } else {
            die("FATAL ERROR: Kann nicht auf die interne Tabelle 'tmp_admin_1' zugreifen\n\r".
                "Bitte rufen Sie den Administrator an (Rufnummer +49(6181)369-8511). Danke.");
         }
         unset($tab);
         $tab = [];
         $sql = "SELECT * FROM tmp_admin_1 ORDER BY aut_init, aut_kurz, autor, signatur";
         if ($res = $this->exec($sql,__FILE__,__LINE__)) {
            while ($row = $res->fetch_assoc()) {
               $tab[] = array('aut_init'=>$row["aut_init"],'aut_kurz'=>$row["aut_kurz"],
                              'autor'=>$row["autor"], "signatur"=>$row["signatur"]);
            }
         }
         $this->unlock();
         return $tab;
      }
      //
      // Initialisiert Tabelle tmp_admin_1 und setzt einen LOCK
      //
      public function init_lock($uname) {
         $sql = "SELECT * FROM tmp_admin_1_lock";
         $res = $this->exec($sql,__FILE__,__LINE__);
         if (!$res) {
            die("FATAL ERROR: Kann nicht auf die interne Tabelle 'tmp_admin_1_lock' zugreifen\n\r".
                "Bitte rufen Sie den Administrator an (Rufnummer +49(6181)369-8511). Danke.");
         }
         $row = $res->fetch_assoc();
         if (!$row) {
            $sql = "DELETE FROM tmp_admin_1 WHERE 1";
            $res = $this->exec($sql,__FILE__,__LINE__);
            $sql = "INSERT INTO tmp_admin_1_lock SET uname='".$uname."'";
            $res = $this->exec($sql,__FILE__,__LINE__);
            return false;
         }
         return true;
      }
      //
      // Trennt den Autoren-Eintrag nach Namen
      //
      public function separate($autor,$signatur) {
         $this->autor = $autor;
         $ent = [];
         $tup = array( 'initial'=>NULL, 'short'=>NULL, 'lastname'=>NULL, 'firstname'=>NULL, "signatur"=>NULL );
         $tab = str_split($autor);
         $SP_INIT=0;
         $SP_SHORT=1;
         $SP_LASTNAME=2;
         $SP_FIRSTNAME = 3;
         $SP_STORAGE = 4;
         $status = $SP_INIT;
         for ($i=0; $i<count($tab); $i++) {
            $c = $tab[$i];
            if ($c == ' ' and $i<count($tab)) { $i++; $c = $tab[$i]; }
            switch ($status) {
               case $SP_STORAGE:
                  $ent[] = $this->insert($tup);
                  $tup["initial"] = strtoupper($c);
                  $tup["short"] = strtoupper($c);
                  $tup["lastname"] = strtoupper($c);
                  $tup["firstname"] = "";
                  $tup["signatur"] = $signatur;
                  $status = $SP_SHORT;
                  break;
               case $SP_FIRSTNAME:               
                  if ($c == ' ' and $tup["firstname"]==NULL) break;
                  if ($c==';') {
                     $status = $SP_STORAGE;
                     break;                     
                  }
                  $tup["firstname"] .= $c;
                  if ($i == count($tab)-1) {
                     $ent[] = $this->insert($tup);
                     return $ent;
                  }
                  break;
               case $SP_LASTNAME:
                  if ($c==',' or $c==';') {
                     $status = $SP_FIRSTNAME;
                     break;
                  }
                  $tup["lastname"] .= $c;
                  break;
               case $SP_SHORT:
                  if ($c==',' or $c==';') {
                     // Alle Zeichen, die nicht Komma oder Semikolon sind,
                     // werden an den Kurznamen weitergereicht. Ansonsten
                     // wird hier mit SP_LASTNAME weitergemacht.
                     $status = $SP_LASTNAME;
                     break;
                  }
                  if (strlen($tup["short"]) > 2) {
                     $tup["lastname"] .= $c;
                     // Der nächste Buchstaben wird an den Nachnamen angefügt
                     // Dann wird bei SP_LASTNAME weitergemacht.
                     $status = $SP_LASTNAME;
                     break;
                  } else {
                     // Alle Zeichen ungleich Komma und Semicolon sind,
                     // werden an den Kurznamen angehängt. Ebenso an den Nachnamen.
                     if ($c == ' ') break;
                     $tup["short"] .= $c;
                     $tup["lastname"] .= $c;
                     break;
                  }
               case $SP_INIT:
                  $tup["initial"] .= strtoupper($c);
                  $tup["short"] .= strtoupper($c);
                  $tup["lastname"] .= strtoupper($c);
                  $tup["signatur"] = $signatur;
                  // Das erste Zeichen vom Nachnamen wurde übernommen
                  // und in einen Großbuchstaben umgewandelt
                  $status = $SP_SHORT;
                  break;
            }
         }
         return ent;
      }
      //
      // Die Tabelle mit den Tupel sortieren
      // ===================================
      //
      public function insert($tup) {
         $sql = 'INSERT INTO tmp_admin_1 SET aut_init="'.$tup["initial"].'", aut_kurz="'.$tup["short"].'", '.
                'autor="'.$tup["lastname"].', '.$tup["firstname"].'", signatur="'.$tup["signatur"].'"';
         if (!$res = $this->exec($sql,__FILE__,__LINE__)) {
            die("FATAL ERROR: Konnte keinen Datensatz speichern.");
         }
         return $tup;
      }
      //
      // Den Lock auf die Tabelle tmp_admin_1 wieder aufheben
      //
      public function unlock() {
         $sql = "DELETE FROM tmp_admin_1_lock";
         $res = $this->exec($sql,__FILE__,__LINE__);
         if (!$res) $this->error(__FILE__,__LINE__);
         $sql = "DELETE FROM tmp_admin_1";
         $res = $this->exec($sql,__FILE__,__LINE__);
         if (!$res) $this->error(__FILE__,__LINE__);
         $this->locked = false;
         return;
      }
      
   }
   //
   //
   // Diese Klasse wird zur temporären Datensammlung in der App book-lstsig.php verwendet.
   // Es werden Register angelegt, um die Auswahl von Signaturen sortiert zu sammeln.
   // 
   class tmpherausg extends tmpautoren {
      //
      // Initilisiere Objekt
      //
      public function __construct($login=false) {
         if ($login) {
            $uname = $login;
            $this->uname = $uname;
         } else {
            if (isset($_COOKIE["uname"])) {
               $uname = test_input($_COOKIE["uname"]);
               $this->uname = $uname;
            } else {
               die("FATAL ERROR: Kann nicht auf die interne Variabe '\$db[0].\$uname' zugreifen\n\r".
                   "Bitte rufen Sie den Administrator an (Rufnummer +49(6181)369-8511). Danke.");
               exit;
            }
         }
         if (!$uname) {
            die("FATAL ERROR: Kann nicht auf die interne Variabe '\$db[0].\$uname' zugreifen\n\r".
                "Bitte rufen Sie den Administrator an (Rufnummer +49(6181)369-8511). Danke.");
            exit;
         }
         $this->db = db_connect("pars");
         $this->unlock();
         $this->locked   = $this->init_lock($uname);
         $this->autinit  = NULL;
         $this->autkurz  = NULL;
         $this->autor    = NULL;
         $this->signatur = NULL;
         return $this;
      }
      //
      // Initialisiert die temporäre Tabelle mit den Herausgeber-Namen
      //
      public function init() {
         $sql = "SELECT * FROM buch ORDER BY signatur";
         $tab = [];
         if ($res = $this->exec($sql,__FILE__,__LINE__)) {
            while ($row = $res->fetch_assoc()) {
               $herausgber = $row["herausgeber"];
               $signatur = $row["signatur"];
               if (test_input($herausgber) != "") {
                  $tab[] = $this->separate($herausgber,$signatur);
               }
            }
         } else {
            die("FATAL ERROR: Kann nicht auf die interne Tabelle 'tmp_admin_1' zugreifen\n\r".
                "Bitte rufen Sie den Administrator an (Rufnummer +49(6181)369-8511). Danke.");
         }
         unset($tab);
         $tab = [];
         $sql = "SELECT * FROM tmp_admin_1 ORDER BY aut_init, aut_kurz, autor, signatur";
         if ($res = $this->exec($sql,__FILE__,__LINE__)) {
            while ($row = $res->fetch_assoc()) {
               $tab[] = array('aut_init'=>$row["aut_init"],'aut_kurz'=>$row["aut_kurz"],
                              'autor'=>$row["autor"], "signatur"=>$row["signatur"]);
            }
         }
         $this->unlock();
         return $tab;
      }
   }

   class tmpkatalog extends Pars {
      public $uname;          // Benutzername
      public $gewicht;        // Gewichtung >= 50%
      public $tup = [];
      public $search = [];
      public $kategorie;
      public $reihe = [];
      //
      // Initialisieren
      //
      public function __construct($uname=NULL) {
         parent::__construct();
         $file = __FILE__;
         if (!$uname) {
            if (!$this->uname = test_input($_COOKIE["uname"])) {
               die("Interner Fehler in ".$file."(".__LINE__."): \$uname nicht gefunden.\n");
            }
            $this->tup = array("uname"=>$this->uname, "signatur"=>NULL, "wort"=>NULL, "gewicht"=>NULL);
         }
         $this->gewicht = 0.0;
         $this->search = [];
         $this->tup = [];
         $this->reihe = [];
         $this->kategorie = "";
         return $this;
      }      
      //
      // Suche nach Kategorien und lade jeden Buch-Titel nach Kategorie zusammen
      // mit Signatur, Kategorie und Reihe in eine Struktur ["signatur"=>$signatur,
      // "kategorie"=>$kategorie, "reihe"=>[]], wobei Reihe eine Liste von Dictionary-
      // Einträgen ist, die nach Wertigkeit (wichtigste Reihe zuerst, am wenigsten 
      // wichtige Reihe zuletzt) aufgelistet ist.
      // 
      // Die Separator-Funktion
      // ======================
      //
      public function reihe_separator($reihe,$signatur) {
         $zeile = str_split($reihe.";");
         $worte = [];
         $i = 0;
         $w = "";
         foreach ($zeile as &$ch) {
            switch ($ch) {
               case ',':
               case ';':
               case ':':
               case ' ':
                  if ($w !== "") {
                     if (!array_search($w,$worte)) {
                        $worte[] = $w;
                        $w = "";
                     }
                  }
                  break;
               default:
                  $w .= $ch;
                  break;
            }
         }
         $t = ["signatur"=>$signatur,"list"=>$worte];
         return $t;
      }
      //
      // Separator String nach Liste
      // ===========================
      //
      public function separator($s) {
         $ts = str_split($s);
         $tab = [];
         $word = "";
         foreach ($ts as &$ch) {
            switch($ch) {
               case ' ':
               case ':':
               case ',':
               case ';':
                  if ($word !== "") {
                     $tab[] = $word;
                     $word = "";
                  }
                  break;
               default:
                  $word .= $ch;
                  break;
            }
         }
         return $tab;
      }
      //
      // Shorten Reihe
      // =============
      //
      // Diese Funktion löst die JSON-Struktur { "signatur"=>$signatur, "list"=>[ "reihe", "reihe", ... ] } auf
      //
      //
      public function singular($list) {
         $tab = [];
         foreach($list as &$word) {
            $found = false;
            foreach ($tab as &$e) {
               if ($e === $word) $found = true;
            }
            if (!$found) $tab[] = $word;
         }
         return $tab;
      }
      //
      public function shorten_reihe($struct) {
         $tab = [];
         foreach ($struct as &$e) {
            $tab[] = array("signatur"=>$e["signatur"],"reihe"=>$this->singular($e["list"]));
         }
         return $tab;
      }
   }
