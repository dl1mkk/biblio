#!/bin/python3
#
import apphtml as hh
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"UNTERTITEL", "back":"index.php", "help":"help.php" }
#
p001 = { "class":"right", "width":"12%", "prompt":"Login : " }
p002 = { "class":"right", "width":"12%", "prompt":"Passwort : " }
#
i001 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fixreq", "size":"20", "name":"login",
         "required":"yes", "autofocus":"on", "tabindex":"1" }
i002 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"password", "class":"fixreq", "size":"20", "name":"passwort", "tabindex":"2" }
#
b001 = { "check":"login.php", "send":"login.php", "tabindex":"3" }
#
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
h.prolog(title="LOGIN")
h.Header(defh=h001)
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
h.Line(t001,p001,i001)
h.Line(t001,p002,i002)
h.Table_End()
h.Table(t002)
h.CheckButtons(t002,b001)
h.Table_End()
h.Form_End()
h.Page_End()
h.show()
#
#
#
#
#
#
