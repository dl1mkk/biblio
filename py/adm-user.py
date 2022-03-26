#!/bin/python3
import apphtml as hh
file = "adm-user.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Benutzer Verwalten", "back":"adm-start.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
i001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"adm-usrlst", "value":"USRLST",
         "action":"adm-usrlst.php",  "autofocus":"on", "tabindex":"1" }
i002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"adm-usrneu", "value":"USRNEU",
         "action":"adm-usrneu.php", "tabindex":"2" }
i003 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"adm-usrres", "value":"USRRES",
         "action":"adm-usrres.php", "tabindex":"3" }

#
p001 = { "class":"left", "width":"90%", "prompt":"Liste der Benutzer" }
p002 = { "class":"left", "width":"90%", "prompt":"Neuer Benutzer" }
p003 = { "class":"left", "width":"90%", "prompt":"Benutzer-Passwort zurücksetzen" }
#
h.prolog(title="ADMUSER")
h.Header(defh=h001)
h.include("php/adm-user-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line_Rev(t001,i001,p001,file,"25")
h.Line_Rev(t001,i002,p002,file,"26")
h.Line_Rev(t001,i003,p003,file,"27")
#
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
