<?php
   include_once("class/class_user.php");
   $usr = new User();
   $log->log("usr-passw1.php","Execute App",__FILE__,__LINE__);
   $newpassw   = test_input(post("newpassw"));
   $oldpassw   = test_input(post("oldpassw"));
   $reppassw   = test_input(post("reppassw"));
   $uname      = cookie("uname") ?  cookie("uname")   : false;
   $sql = "SELECT * FROM user WHERE uname='".$uname."'";
   if (!$res = $usr->query($sql)) $usr->error(__FILE__,__LINE__);
   if ($row = $res->fetch_assoc()) {
      $id      =  $row["id"];
      $modus   =  $row["modus"];
      $lastact =  time();
      $option  =  [ 'cost'=>12, ];
      if ($newpassw & $oldpassw & $reppassw) {
         if ($newpassw == $reppassw) {
            $hash = password_hash($newpassw,PASSWORD_BCRYPT,$option);
            $sql = "UPDATE user SET password='".$hash."' WHERE id='".$id."'";
            if (!$res = $usr->query($sql)) $usr->error(__FILE__,__LINE__);
            header("Location: usr-start.php");
            exit;
         } else {
            die("error-007\n");
            exit;
         }
      } else {
         die("error-006\n");
         exit;
      }
   } else {
      // error-005
      die("error-005\n");
      exit;
   }
?>
   
