#!/bin/python3
import apphtml as hh
file = "usr-suche.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"SUCHE NACH BÜCHER", "back":"usr-start.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
p001 = { "class":"left", "width":"90%" , "prompt":"Suche nach Signatur" }
p002 = { "class":"left", "width":"90%" , "prompt":"Suche nach Kategorie" }
p003 = { "class":"left", "width":"90%" , "prompt":"Suche nach Autor/Herausgeber" }
#
i001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"BSSIG",
         "action":"usr-bssig.php",  "autofocus":"on", "tabindex":"1" }
#
i002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"BSKAT",
         "action":"usr-bskat.php",  "tabindex":"2" }
#
i003 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"BSAUT",
         "action":"usr-bsaut.php",  "tabindex":"3" }
#
h.prolog(title="SUCHE")
h.Header(defh=h001)
h.include("php/usr-suche-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line_Rev(t001,i001,p001,file,"01")
h.Line_Rev(t001,i002,p002,file,"02")
h.Line_Rev(t001,i003,p003,file,"03")
#
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
