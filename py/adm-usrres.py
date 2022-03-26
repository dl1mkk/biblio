#!/bin/python3
import apphtml as hh
file = "adm-usrres.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Benutzer Passwort zurücksetzen", "back":"adm-user.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":"adm-usrres1.php", "tabindex":"96" }
#
p001 = { "class":"right", "width":"20%" , "prompt":"Benutzer : " }
p002 = { "class":"right", "width":"20%" , "prompt":"Neues Passwort : " }
#
i001 = { "tdclass":"left", "tdwidth":"80%", "option":"r_uname", "class":"fixreq", "tabindex":"1" }
i002 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fixreq",
         "name":"newpassw", "value":"<?php echo $newpassw; ?>", "size":"20", "required":"yes", "tabindex":"2" }
#
h.prolog(title="USRRES")
h.Header(defh=h001)
h.include("php/adm-usrres-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line(t001,p001,i001,file,"01")
h.Line(t001,p002,i002,file,"02")
#
h.Table_End()
h.Table(deft=t002)
h.CheckButtons(t002,b001)
h.Table_End()
h.Form_End()
h.Page_End()
#
h.show()
#
#
#
#
#
#
