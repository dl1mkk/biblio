#!/bin/bash
rm -rf ~/biblio/py/__pycache__
sudo mysqldump --add-drop-database --add-drop-table --add-locks pars --databases pars >~/biblio/pars.sql
tar cf ~/Nextcloud/backup/zend-install.tgz ~/.bashrc ~/.profile ~/bin/act ~/bin/backup-zend \
       ~/biblio ~/biblio/pars.sql ~/parsupdate.sh
tar cf ~/next/backup/zend-install.tgz ~/.bashrc ~/.profile ~/bin/act ~/bin/backup-zend \
       ~/biblio ~/biblio/pars.sql ~/parsupdate.sh
