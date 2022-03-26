<?php
    //
    $ftp = ftp_connect('w00b6ff8.kasserver.com');
    if (!$res=ftp_login($ftp,'f014b242','QTWAEVbXFbuzuGq6'))
        die('Login failed.');
    if (!$res=ftp_get($ftp,'/tmp/zend-install.tgz','zend-install.tgz'))
        die('Get failed.');  
    exit;
    //
?>
