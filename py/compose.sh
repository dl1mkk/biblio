#!/bin/bash
#set -x
export retpath=`pwd`
export dest=/var/www/html/zend
export base=~/biblio
export back=~/Nextcloud/backup
cd $base/py
chmod +x *.py
chmod -x *.php
#
# Hier die Python3-Scripts übertragen mach ..
set -v
adm-book.py       >../adm-book.php
adm-noten.py      >../adm-noten.php
adm-paper.py      >../adm-paper.php
adm-rollout.py    >../adm-rollout.php
adm-start.py      >../adm-start.php
adm-user.py       >../adm-user.php
adm-usrinfo.py    >../adm-usrinfo.php
adm-usrinfo1.py   >../adm-usrinfo1.php
adm-usrlst.py     >../adm-usrlst.php
adm-usrlst1.py    >../adm-usrlst1.php
adm-usrneu.py     >../adm-usrneu.php
adm-usrneu1.py    >../adm-usrneu1.php
adm-usrres.py     >../adm-usrres.php
adm-usrres1.py    >../adm-usrres1.php
book-bild.py      >../book-bild.php
book-info.py      >../book-info.php
book-info1.py     >../book-info1.php
book-kat.py       >../book-kat.php
book-list.py      >../book-list.php
book-lstaut.py    >../book-lstaut.php
book-lstaut1.py   >../book-lstaut1.php
book-lstaut2.py   >../book-lstaut2.php
book-lsthrg.py    >../book-lsthrg.php
book-lsthrg1.py   >../book-lsthrg1.php
book-lsthrg2.py   >../book-lsthrg2.php
book-lstkat.py    >../book-lstkat.php
book-lstkat1.py   >../book-lstkat1.php
book-lstkat2.py   >../book-lstkat2.php
book-lstsig.py    >../book-lstsig.php
book-lsttes.py    >../book-lsttes.php
book-new.py       >../book-new.php
book-new1.py      >../book-new1.php
book-thes.py      >../book-thes.php
error.py          >../error.php
error-002.py      >../error-002.php
error-003.py      >../error-003.php
index.py          >../index.php
login.py          >../login.php
note-list.py      >../note-list.php
note-lstaut.py    >../note-lstaut.php
note-lstkat.py    >../note-lstkat.php
note-lstsig.py    >../note-lstsig.php
note-lstsuc.py    >../note-lstsuc.php
note-new.py       >../note-new.php
note-kat.py       >../note-kat.php
note-thes.py      >../note-thes.php
sys-anred.py      >../sys-anred.php
sys-anred1.py     >../sys-anred1.php
sys-einbd.py      >../sys-einbd.php
sys-einbd1.py     >../sys-einbd1.php
sys-kateg.py      >../sys-kateg.php
sys-kateg1.py     >../sys-kateg1.php
sys-lager.py      >../sys-lager.php
sys-lager1.py     >../sys-lager1.php
sys-param.py      >../sys-param.php
sys-sprac.py      >../sys-sprac.php
sys-sprac1.py     >../sys-sprac1.php
sys-start.py      >../sys-start.php
sys-users.py      >../sys-users.php
usr-leihe.py      >../usr-leihe.php
usr-passw.py      >../usr-passw.php
usr-passw1.py     >../usr-passw1.php
usr-start.py      >../usr-start.php
usr-suche.py      >../usr-suche.php
set -
#
cp *.php $base
rm -rf __pycache__
cd $base
chmod +x -R *.php
sudo chmod g+w $dest/tmp
sudo cp -ru * $dest
cd $dest
sudo chown -fR www-data:www-data *
cd $retpath
datum=`date +'%Y%m%d-%H%M%S'`
export datei='/home/heise/Nextcloud/backup/zend-oben.tgz'
cd $pub
tar cf $datei --exclude="./.git/*" $base/*.css $base/footer.php $base/prolog.php $base/class $base/py $base/sig \
       $base/tmp ~/bin/act ~/bin/backup-zend ~/.bashrc 
cp $back/zend-oben.tgz $back/zend-install.tgz
cp $back/zend-oben.tgz ~/next/backup/zend-install.tgz
