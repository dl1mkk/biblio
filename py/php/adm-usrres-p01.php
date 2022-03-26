<?php
   include_once("class/class_user.php");
   $usr = new User();
   $log->log("adm-usrres.php","Execute App",__FILE__,__LINE__);
   $sql = "SELECT uname FROM user ORDER BY uname";
   if (!$res = $usr->query($sql)) $usr->error(__FILE__,__LINE__);
   $row = $res->fetch_assoc();
   $default = $row["uname"];
   $option = [ 'cost'=>12, ];
   $username   =  test_input(post("username"))  ?  test_input(post("username"))  :  $default;
   $newpassw   =  test_input(post("newpassw"))  ?  test_input(post("newpassw"))  :  "passwort";
   $s_uname = "SELECT uname FROM user ORDER BY uname";      
   $r_uname = r_option($sql=$s_uname,$name="username",$field="uname",$def1=$default,$tab=1,$ronly=true);
?>
   
