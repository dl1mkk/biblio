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
  $debug="yes";  
  define("MINUTES",60);
  define("HOURS",3600);
  define("DAYS",24*3600);
  define("MONTHS",30*24*3600);
  define("YEARS",12*30*24*3600);
  //
  function db_connect($database=NULL) {
//      $mysqli = new mysqli("dd8208.kasserver.com","d02ebf77","wb9T8x8rU","d02ebf77");
      $mysqli = new mysqli("localhost","root","p3lsk20xp",$database);
      if ($mysqli->connect_errno) die ("Keine Verbindung, ".$mysqli->connect_errno.": ".
           $mysqli->connect_error);
      return $mysqli;
  }
  //
  function error($db,$file=__FILE__,$line=__LINE__) {
    crlf();
    echo "<strong>".$file."(".$line."): Error=".$db->errno." '".$db->error."'</strong>";
    crlf();
    die("aborted.");
  }
  //
  function xerror($msg,$file=__FILE__,$line=__LINE__) {
    echo "<strong>".$msg." in ".$file."(".$line.")</strong><br>";
  }
  //
   function crlf() {
      global $cli;
      if (!isset($cli)) echo "<br>";
      if (session_id()) echo "<br>";
      else echo "\n";
   }
  //
   function stop($file,$line) {
      global $_debug_stop;
      if ((!isset($_debug_stop)) || (empty($_debug_stop))) return;
      crlf();
      echo "=== STOP === ".$file."(".$line.") === STOP ===";
      crlf();
      flush();
      $t = readline();
   }
  //
	// vereinfachte Form von $_GET[<$name>]
	function get($name) {
	   if ($res = isset($_GET[$name])) return $_GET[$name];
	   return NULL;
	}
	//
	function post($name) {
	   if ($res = isset($_POST[$name])) return $_POST[$name];
	   return NULL;
	}
	//
	function cookie($name) {
	   if ($res = isset($_COOKIE[$name])) return $_COOKIE[$name];
	   return NULL;
	}
	//
	function row($row,$name) {
	   if ($res = isset($row[$name])) return $row[$name];
	   return NULL;
	}
  //
  function isunset($x) { 
   	if (!isset($x)) return true; 
   	else return false; 
   }
   //
   function notempty($x) { 
   	if (!empty($x)) return true; 
   	else return false; 
   }
   //
   function test_input($data) {
      if (!isset($data)) return false;
      $data = trim($data);
      $data = stripslashes($data);
      return $data;
   }
   //   
   function generator() {
      $mask = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F',
                    'G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','W',
                    'X','Y','Z');
      $list = "";
      for ($i=0; $i<16; $i++) {
        $j = rand(0,34);
        $list .= $mask[$j];
      }
      return $list;
   }
   //
   function trace($file,$line) {
     global $debug;
     global $cli;
     if ($debug == "yes") echo $file."(".$line."): passed";
     crlf();
   }
	 //
	 function show($desc,$var) {
	   global $debug;
	   if ($debug <> "yes") return $var;
	   echo "[[$".$desc."]] ==> "; flush(); 
	   echo var_dump($var)."<br>"; 
	   crlf(); flush();
	   return $var; 
	 }
  //
  function special($a) { return htmlspecialchars($a); }
  //
  function convert($a) {
    $len = strlen($a);
    $b = "";
    for ($i=0; $i<$len; $i++) {
      $w = substr($a,$i,1);
      //show("w",ord($w));
      switch (ord($w)) {
         case 228: $b .= "&auml;"; break;
         case 246: $b .= "&ouml;"; break;
         case 252: $b .= "&uuml;"; break;
         case 223: $b .= "&szlig;"; break;
         case 196: $b .= "&Auml;"; break;
         case 214: $b .= "&Ouml;"; break;
         case 220: $b .= "&Uuml;"; break;
         default:  $b .= $w;
      }
    }
    return $b;
  }
  //
  function xconvert($a) {
    $b = "";
    $t = mb_convert_encoding($a,"ISO-8859-1","UTF-8");
    $s = str_split($t);
    foreach ($s as &$e) {
//      print(ord($e).",'".$e."'\n");
      switch($e) {
         case "ä": $b .= "ae"; break;
         case "ö": $b .= "oe"; break;
         case "ü": $b .= "ue"; break;
         case "ß": $b .= "ss"; break;
         case "Ä": $b .= "Ae"; break;
         case "Ö": $b .= "Oe"; break;
         case "Ü": $b .= "Ue"; break;
         case 228: $b .= "ae"; break;
         case 246: $b .= "oe"; break;
         case 252: $b .= "ue"; break;
         case 223: $b .= "ss"; break;
         case 196: $b .= "Ae"; break;
         case 214: $b .= "Oe;"; break;
         case 220: $b .= "Ue;"; break;
         default: $b .= $e;
      }
    }
    return $b;
  }
  
   //
   
   function io_select($database,$sql,$field=NULL,$name=NULL,$index=NULL,$default=NULL) {
      $field   = (isset($field))   ? $field   : null;
      $name    = (isset($name))    ? $name    : null;
      $index   = (isset($index))   ? $index   : null;
      $default = (isset($default)) ? $default : null;
      if (!$field)   xerror("tag /io_select/ missing argument /field/\n",   __FILE__, __LINE__);
      if (!$name)    xerror("tag /io_select/ missing argument /name/\n",    __FILE__, __LINE__);
      if (!$default) xerror("tag /io_select/ missing argument /default/\n", __FILE__, __LINE__);
      $db = db_connect($database);
      if (!$ex = $db->query($sql)) error($db,__FILE__,__LINE__);
      $res = '<select name="'.$name.'"';
      if ($index) $res .= ' index="'.$index.'"';
      $res .= ">\n";
      while ($row = $ex->fetch_assoc()) {
         $res .= '<option value="'.$row[$field].'"';
         if ($row[$field] === $default) $res .= ' selected';
         $res .= '>'.$row[$name].'</option>'."\n";
      }
      $res .= '</select>'."\n";
      return $res;
   }

   function xsoundex($s) {
      $d = strtoupper($s);
      $l = strlen($s);
      $p = substr($s,0,1);
      for ($i=1;$i<$l;$i++) {
         $c=substr($d,$i,1);
         switch($c) {
            case 'B':
            case 'F':
            case 'P':
            case 'V':
               $p .= "1";
               break;
            case 'C':
            case 'G':
            case 'J':
            case 'K':
            case 'Q':
            case 'S':
            case 'X':
            case 'Z':
               $p .= "2";
               break;
            case 'D':
            case 'T':
               $p .= "3";
               break;
            case 'L':
               $p .= "4";
               break;
            case 'M':
            case 'N':
               $p .= "5";
               break;
            case 'R':
               $p .= "6";
               break;
         }
      }
      return $p;
   }

   function r_selopt($name,$value,$post,$default) {
      $res = "   <option value=\"".$value."\"";
      if ($default) $res .= " selected";
      $res .= ">".$post."</option>\n";
      return $res;
   }
   
   function r_select_option($sql,$name,$field,$def1,$tab,$ronly=FALSE) {
      if (!$db = db_connect("pars")) die("r_select_option: no database\n");
      if (!$res = $db->query($sql)) error($db,__FILE__,__LINE__);
      $result = "<select id=\"".$name."\" name=\"".$name."\" class=\"fix\"";
      if ($ronly) $result .= " readonly=\"yes\"";
      if ($tab <> 0) $result .= " tabindex=\"".$tab."\"";
      $result .= ">\n";
      while ($row = $res->fetch_assoc()) {
         $value = $row[$name];
         $post = $row[$field];
         $def2 = ($value === $def1);
         $result .= r_selopt($name=$name,$value=$value,$post=$post,$default=$def2);
      }
      $result .= "</select>\n";
      return $result;
   }
   
   function r_option($sql,$name,$field,$def1,$tab,$ronly=FALSE) {
      if (!$db = db_connect("pars")) die("r_select_option: no database\n");
      if (!$res = $db->query($sql)) error($db,__FILE__,__LINE__);
      $result = "<select id=\"".$name."\" name=\"".$name."\" class=\"fix\"";
      if ($ronly) $result .= " readonly=\"yes\"";
      if ($tab <> 0) $result .= " tabindex=\"".$tab."\"";
      $result .= ">\n";
      while ($row = $res->fetch_assoc()) {
         $val = $row[$field];
         $def = ($val === $def1);
         $result .= r_selopt($name=$name,$value=$val,$post=$val,$default=$def);
      }
      $result .= "</select>\n";
      return $result;
   }
   
   function reduce_suche($arr) {
      $res = [];
      $wrd = "";
      $max = count($arr)-1;
      $i = 0;
      while ($i <= $max) {
         if (($arr[$i]==',')||($arr[$i]==' ')||($arr[$i]==':')) {
            if ($wrd) {
               $res[] = $wrd;
               $wrd = "";
               $i = $i + 1;
            } else {
               $i = $i + 1;
            }
         } else {
            $wrd .= $arr[$i];
            $i = $i + 1;
         }
      }
      if ($wrd) $res[] = $wrd;
      return $res;
   }
//
   function do_insert($w,$signatur) {
      if (empty($w)) return;
      $db = db_connect("pars");
      
      $sql = "INSERT INTO volltext SET signatur='".$signatur."',text='".$w."',modus='STD'";
      if (!$res = $db->query($sql)) {
         error($db,__FILE__,__LINE__-1);
      }
   }
   //
   function do_insert_aut($w,$signatur) {
      $db = db_connect("pars");
      $sql = "INSERT INTO volltext SET signatur='".$signatur."',text='".$w."',modus='AUTOR'";
      if (!$res = $db->query($sql)) {
         error($db,__FILE__,__LINE__-1);
      }
   }
   //
   function do_insert_tit($w,$signatur) {
      $db = db_connect("pars");
      $sql = "INSERT INTO volltext SET signatur='".$signatur."',text='".$w."',modus='TITEL'";
      if (!$res = $db->query($sql)) {
         error($db,__FILE__,__LINE__-1);
      }
   }
   //
   function do_insert_kat($w,$signatur) {
      $db = db_connect("pars");
      $sql = "INSERT INTO volltext SET signatur='".$signatur."',text='".$w."',modus='KATEGORIE'";
      if (!$res = $db->query($sql)) {
         error($db,__FILE__,__LINE__-1);
      }
   }
   //
   function do_insert_reihe($w,$signatur) {
      $db = db_connect("pars");
      $sql = "INSERT INTO volltext SET signatur='".$signatur."',text='".$w."',modus='THEMA'";
      if (!$res = $db->query($sql)) {
         error($db,__FILE__,__LINE__-1);
      }
   }
   //
   function insert_voll($str,$signatur) {
      $w = "";
      foreach ($str as &$e) {
         if (($e == ".") | ($e == ",") | ($e == " ") | ($e == ";")) {
            do_insert($w,$signatur);
            $w = "";
         } else {
            $w = $w . $e;
         }
      }
      if ($w <> "") {
         do_insert($w,$signatur);
      }
      return;
   }
   //
      function insert_voll1($s,$signatur) {
      $w = "";
      $str = str_split($s);
      foreach ($str as &$e) {
         if (($e == ".") | ($e == ",") | ($e == " ") | ($e == ";")) {
            do_insert($w,$signatur);
            $w = "";
         } else {
            $w = $w . $e;
         }
      }
      if ($w <> "") {
         do_insert($w,$signatur);
      }
      return;
   }
   //
   function insert_aut($str,$sig) {
      if (!$str) return;
      $w = str_split($str);
      $aut = [];
      $a = "";
      foreach ($w as &$e) {
         switch ($e) {
           case ';': $aut[]=$a;
                     $a="";
                     break;
           default:  $a=$a.$e;
                     break;
         }
      }
      if ($a <> "") $aut[] = $a;
      foreach ($aut as &$e) {
         do_insert_aut($e,$sig);
      }
      insert_voll($w,$sig);
      return;
   }
   //
   function insert_kat($str,$sig) {
      if (!$str) return;
      $w = str_split($str);
      $aut = [];
      $a = "";
      foreach ($w as &$e) {
         switch ($e) {
           case ';': $aut[]=$a;
                     $a="";
                     break;
           case ',': $aut[]=$a;
                     $a="";
                     break;
           default:  $a=$a.$e;
                     break;
         }
      }
      if ($a <> "") $aut[] = $a;
      foreach ($aut as &$e) {
         do_insert_kat($e,$sig);
      }
      insert_voll($w,$sig);
      return;
   }
   //
   function insert_reihe($str,$sig) {
      if (!$str) return;
      $w = str_split($str);
      $aut = [];
      $a = "";
      foreach ($w as &$e) {
         switch ($e) {
           case ';': $aut[]=$a;
                     $a="";
                     break;
           case ',': $aut[]=$a;
                     $a="";
                     break;
           default:  $a=$a.$e;
                     break;
         }
      }
      if ($a <> "") $aut[] = $a;
      foreach ($aut as &$e) {
         do_insert_reihe($e,$sig);
      }
      insert_voll($w,$sig);
      return;
   }
//
   function insert_tit($str,$sig) {
      if (!$str) return;
      $w = str_split($str);
      $aut = [];
      $a = "";
      foreach ($w as &$e) {
         switch ($e) {
           case ';': $aut[]=$a;
                     $a="";
                     break;
           default:  $a=$a.$e;
                     break;
         }
      }
      if ($a <> "") $aut[] = $a;
      foreach ($aut as &$e) {
         do_insert_tit($e,$sig);
      }
      insert_voll($w,$sig);
      return;
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
//
//
//
//
