#!/bin/python3
import apphtml as hh
file = "note-list.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Liste der Musikalien", "back":"adm-noten.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
h.prolog(title="NOTELST")
h.Header(defh=h001)
h.include("php/note-list-p01.php")
#
p001 = { "class":"left", "width":"90%", "prompt":"Signaturen auflisten" }
p002 = { "class":"left", "width":"90%", "prompt":"Autoren / Komponisten auflisten" }
p003 = { "class":"left", "width":"90%", "prompt":"Kategorien auflisten" }
p004 = { "class":"left", "width":"90%", "prompt":"Suchkriterien auflisten" }
#
i001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"notesig", "value":"NOTESIG",
         "action":"note-lstsig.php", "autofocus":"on", "tabindex":"1" }
#
i002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"noteaut", "value":"NOTEAUT",
         "action":"note-lstaut.php", "tabindex":"2" }
#
i003 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"notekat", "value":"NOTEKAT",
         "action":"note-lstkat.php", "tabindex":"3" }
#
i004 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"notesuc", "value":"NOTESUC",
         "action":"note-lstsuc.php", "tabindex":"4" }
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line_Rev(t001,i001,p001,file,"37")
h.Line_Rev(t001,i002,p002,file,"38")
h.Line_Rev(t001,i003,p003,file,"39")
h.Line_Rev(t001,i004,p004,file,"40")
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
