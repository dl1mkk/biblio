#!/bin/python3
import apphtml as hh
file = "usr-passwd.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"BENUTZER PASSWORT ÄNDERN", "back":"usr-start.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":"usr-passw1.php", "tabindex":"96" }
#
p001 = { "class":"right", "width":"20%" , "prompt":"Altes Passwort : " }
p002 = { "class":"right", "width":"20%" , "prompt":"Neues Passwort : " }
p003 = { "class":"right", "width":"20%" , "prompt":"Wiederholung Passwort : " }
#
i001 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"password", "class":"fixreq",
         "name":"oldpassw", "value":"<?php $oldpassw; ?>", "size":"20", "required":"yes", "autofocus":"on", "tabindex":"1" }
i002 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"password", "class":"fixreq",  
         "name":"newpassw", "value":"<?php $newpassw; ?>", "size":"20", "required":"yes", "tabindex":"2" }
i003 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"password", "class":"fixreq",
         "name":"reppassw", "value":"<?php $reppassw; ?>", "size":"20", "required":"yes" , "tabindex":"3" }
#
h.prolog(title="PASSWD")
h.Header(defh=h001)
h.include("php/usr-passw-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line(t001,p001,i001,file,"01")
h.Line(t001,p002,i002,file,"02")
h.Line(t001,p003,i003,file,"03")
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
