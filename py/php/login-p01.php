<?php
   require_once("class/defines.php");
   require_once("class/class_pars.php");
   require_once("class/class_user.php");
   $log = new Log();
   $usr = new User();
   $log->log("login.php","Execute App",__FILE__,__LINE__);
   $login = test_input(post("login"));
   $passwort = test_input(post("passwort"));
   $sql = "SELECT * FROM user WHERE uname='".$login."'";
   if ($res = $usr->exec($sql,__FILE__,__LINE__)) {
      if ($row = $res->fetch_assoc()) {
         $hash = $row["password"];
         $usr->id       = $row["id"];
         $usr->uname    = $row["uname"];
         $usr->password = $row["password"];
         $usr->modus    = $row["modus"];
         $usr->lastact  = $row["lastact"];
         $res = $usr->is_valid_user($login,$passwort,__FILE__,__LINE__);
         setcookie("uname",$usr->uname);
         setcookie("modus",$usr->modus);
         setcookie("hash",$hash);
         setcookie("error",$usr->db->error);
         setcookie("errno",$usr->db->errno);
         setcookie("sql",$usr->sql);
         setcookie("file",__FILE__);
         setcookie("line",__LINE__);
         setcookie("err",0);
         if (!$res) {
            setcookie("err",1);
            header("Location: error.php");
            exit;
         }
         $res = $usr->lastact(__FILE__,__LINE__);
         switch ($usr->modus) {
            case 'ADM':
               header("Location: adm-start.php");
               exit;
            case 'SYS':
               header("Location: sys-start.php");
               exit;
            default:
               header("Location: usr-start.php");
               exit;
         }
      }
   }
?>
            

