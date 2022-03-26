<?php
   include_once("class/class_user.php");
   $usr = new User();
   $log->log("adm-usrres1.php","Execute App",__FILE__,__LINE__);
   $username = test_input(post("username")) ? test_input(post("username")) : false;
   $newpassw = test_input(post("newpassw")) ? test_input(post("newpassw")) : "passwort";
   $option = [ 'cost'=>12, ];
   $hash = password_hash($newpassw,PASSWORD_BCRYPT,$option);
   $sql = "UPDATE user SET password='".$hash."',lastact='".time()."' WHERE uname='".$username."'";
   if (!$res = $usr->exec($sql,__FILE__,__LINE__)) $usr->error(__FILE__,__LINE__);
   header("Location: adm-user.php");
   exit;
?>
   
