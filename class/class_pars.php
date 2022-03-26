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
   require_once("defines.php");
   
   class Pars {
      public $db;
      public $sql;
      public $res;
      public $row;
      //
      public function __construct() {
         if (!$this->db = db_connect("pars")) die("Kann Verbindung zum Server nicht herstellen.");
         return $this;
      }
      //
      public function close() { $this->db->close(); }
      //
      public function exec($sql=NULL,$file=__FILE__,$line=__LINE__) {
         if ($sql) {
            $this->sql=$sql;
            $_COOKIE["sql"]=$sql;
            $_COOKIE["file"]=$file;
            $_COOKIE["line"]=$line;
            if (!$this->res = $this->db->query($sql)) {
               $this->error($file,$line);
            }
            return $this->res;
         } else die("Empty SQL-Statement in ".__FILE__."(".__LINE__.")\n");
      }
      //
      public function query($sql) {
         $this->sql = $sql;
         $_COOKIE["sql"]=$sql;
         return $this->res = $this->db->query($sql);
      }
      //
      public function error($file=__FILE__,$line=__LINE__) {
         $_COOKIE["Werrno"]=$this->db->errno;
         $_COOKIE["Werror"]=$this->db->error;
         $_COOKIE["file"]=$file;
         $_COOKIE["line"]=$line;
         echo "SQL-Statement: '".$this->sql."'<br>";
         echo "Error-No:       ".$this->db->errno."<br>";
         echo "Error-Message: '".$this->db->error."<br>";
         die("Abort after error in ".$file."(".$line.")<br>");
         exit;
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
      // ASK FOR NUM OF ROWS
      //
      public function num_rows($file=__FILE__,$line=__LINE__)
      {
         if ($this->res) {
            return $this->res->num_rows;
         }
         return 0;
      }
   }   
   //
   class Log extends Pars {
      public $id;
      public $logtime;
      public $uname;
      public $session;
      public $url;
      public $msg;
      //
      public function __construct() {
         parent::__construct();
         return $this;
      }
      //
      // READ LOGFILE ROW
      //
      public function get_row()
      {
         if (!isset($this->res->num_recs)) return NULL;
         if (($this->res->num_recs > 0) && ($this->row = $this->res->fetch_assoc())) {
            $row = $this->row;
            $this->id      = $row["id"];
            $this->logtime = $row["logtime"];
            $this->uname   = $row["uname"];
            $this->session = $row["session"];
            $this->url     = $row["url"];
            $this->msg     = $row["msg"];
            return $row;
         } else return NULL;
      }
      //
      // SELECT LOGFILE
      //
      public function select_logfile($file=__FILE__,$line=__LINE__)
      {
         $sql = "SELECT * FROM log ORDER BY logtime";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         return $this->res = $res;
      }
      //
      // INSERT LOGFILE ENTRY
      //
      public function log($url,$msg,$file=__FILE__,$line=__LINE__)
      {
         $this->logtime = date("Y/m/d H:i:s",time());
         $this->uname   = $_COOKIE["uname"];
         $this->modus   = $_COOKIE["modus"];
         $this->session = $_COOKIE["PHPSESSID"];
         $this->url     = $url;
         $this->msg     = $msg;
         setcookie("file",$url);
         setcookie("lastact",time());
         $sql = "INSERT INTO log SET logtime='".$this->logtime."',uname='".$this->uname."',
                 session='".$this->session."',url='".$this->url."',msg='".$this->msg."',
                 modus='".$this->modus."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $sql = "UPDATE user SET lastact='".time()."' WHERE uname='".$this->uname."'";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
         $sql = "DELETE FROM log WHERE logtime < DATE_SUB(CURRENT_DATE, INTERVAL 31 DAY)";
         if (!$res = $this->exec($sql,$file,$line)) $this->error($file,$line);
      }
   }
?>

