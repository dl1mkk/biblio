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
   include_once("./define.php");
   //
   class Database {
      public $db = NULL;
      public $sql = "";
      public $res = NULL;
      public $row = NULL;
      public $errno = 0;
      public $error = "";
      public $database = NULL;
      //
      public function __construct($database="") {
         if (!$database) $this->database="pars";
         else $this->database=$database;
         $this->db = db_open($database);
         return $this;
      }
      //
      public function error($file=__FILE__,$line=__LINE__) {
         echo ("Error ".$this->db->errno.": ".$this->db->error." in ".$file."(".$line.")"); flush();
         if ($this->sql) {
            echo ("Last SQL-Statement:\n"); flush();
            echo ("=> ".$this->sql."\n");
         }
         die("Aborted after error in database '".$this->database."\n");
      }
      //
      public function exec($sql,$file=__FILE__,$line=__LINE__) {
         $this->sql = $sql;
         if ($this->res = $this->db->query($sql)) {
            $this->errno = $db->errno;
            $this->error = $db->error;
         }
         return $this->res;
      }
      //
   };
   //
