#!/bin/python3
#
import apphtml as hh
file="adm-noten.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Musikalien Verwalten", "back":"adm-start.php", "help":"help.php" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"3" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
# Hier die Prompts auflisten
# --------------------------
#
p001 = { "class":"left", "width":"90%", "prompt":"Noten-Titel auflisten" }
p002 = { "class":"left", "width":"90%", "prompt":"Noten-Titel neu erfassen" }
p003 = { "class":"left", "width":"90%", "prompt":"Kategorien für Noten-Titel verwalten" }
p004 = { "class":"left", "width":"90%", "prompt":"Thesaurus für Noten-Titel verwalten" }
#
# Hier die Inputs auflisten
# -------------------------
#
i001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"notelst", "value":"NOTELST",
         "action":"note-list.php", "autofocus":"on", "tabindex":"1" }
i002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"notenew", "value":"NOTENEW",
         "action":"note-new.php", "tabindex":"2" }
i003 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"notekat", "value":"NOTEKAT",
         "action":"note-kat.php", "tabindex":"3" }
i004 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"notethes", "value":"NOTETHES",
         "action":"note-thes.php", "tabindex":"4" }
#
h.prolog(title="ADMNOTEN")
h.Header(defh=h001)
h.include("php/adm-noten-p01.php");
#
h.Form_Self()
h.Table(t001)
#
# Enter Page contents here
h.Line_Rev(t001,i001,p001,file,48)
h.Line_Rev(t001,i002,p002,file,49)
h.Line_Rev(t001,i003,p003,file,50)
h.Line_Rev(t001,i004,p004,file,51)
#
# Hier die Zeilen einrichten
# --------------------------
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
