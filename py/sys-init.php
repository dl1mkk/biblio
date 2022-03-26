<?php
   include_once("class/class_pars.php");
   include_once("class/class_user.php");
   //
   $debug = "yes";
   $option = ['cost'=>12, ];
   $hash = password_hash("passwort",PASSWORD_BCRYPT,$option);
   $sql = "UPDATE user SET password='".$hash."' WHERE uname='veith'";
   $log = new Log();
   $usr = new User();
   $log->log("init-sys.php","Implement System Access",__FILE__,__LINE__);
   if (!$res = $usr->exec($sql,__FILE__,__LINE__)) {
      $usr->error(__FILE__,__LINE__);
      exit;
   }
   $sql = "UPDATE user SET password='".$hash."' WHERE uname='admin'";
   $log = new Log();
   $usr = new User();
   $log->log("init-sys.php","Implement System Access",__FILE__,__LINE__);
   if (!$res = $usr->exec($sql,__FILE__,__LINE__)) {
      $usr->error(__FILE__,__LINE__);
      exit;
   }
   $sql = "UPDATE user SET password='".$hash."' WHERE uname='carlo'";
   $log = new Log();
   $usr = new User();
   $log->log("init-sys.php","Implement System Access",__FILE__,__LINE__);
   if (!$res = $usr->exec($sql,__FILE__,__LINE__)) {
      $usr->error(__FILE__,__LINE__);
      exit;
   }
   $sql = "UPDATE user SET password='".$hash."' WHERE uname='heise'";
   $log = new Log();
   $usr = new User();
   $log->log("init-sys.php","Implement System Access",__FILE__,__LINE__);
   if (!$res = $usr->exec($sql,__FILE__,__LINE__)) {
      $usr->error(__FILE__,__LINE__);
      exit;
   }
   header("Location: index.php");
   exit;
?>
