#!/bin/python3
file = "book-list.py"
#
import apphtml as hh
#
h = hh.apphtml()
#
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Bücher auflisten", "back":h.echo("back"), "help":"help.php" }
#
# Hier die Prompts auflisten
# --------------------------
#
p001 = { "class":"left", "width":"90%", "prompt":"Bücher nach Signaturen auflisten" }
p002 = { "class":"left", "width":"90%", "prompt":"Bücher nach Autoren auflisten" }
p003 = { "class":"left", "width":"90%", "prompt":"Bücher nach Herausgebern auflisten" }
p004 = { "class":"left", "width":"90%", "prompt":"Bücher nach Kategorien auflisten" }
p005 = { "class":"left", "width":"90%", "prompt":"Bücher nach Suchkriterien auflisten" }
#
# Hier die Inputs auflisten
# -------------------------
i001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"book-lstsig", "value":"LSTSIG",
         "action":"book-lstsig.php", "autofocus":"on", "tabindex":"1" }
#
i002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"book-lstaut", "value":"LSTAUT",
         "action":"book-lstaut.php", "tabindex":"2" }
#
i003 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"book-lsthrg", "value":"LSTHRG",
         "action":"book-lsthrg.php", "tabindex":"3" }
#
i004 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"book-lstkat", "value":"LSTKAT",
         "action":"book-lstkat.php", "tabindex":"4" }
#
i005 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"book-lsttes", "value":"LSTTES",
         "action":"book-lsttes.php", "tabindex":"5" }
#
b001 = { "check":"login.php", "send":"login.php", "tabindex":"3" }
#
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
h.prolog(title="BOOKLST")
h.include("php/book-list-p00.php")
h.Header(defh=h001)
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
#
# Hier die Zeilen einrichten
# --------------------------
h.Line_Rev(t001,i001,p001,file,"51")
h.Line_Rev(t001,i002,p002,file,"52")
h.Line_Rev(t001,i003,p003,file,"53")
h.Line_Rev(t001,i004,p004,file,"54")
h.Line_Rev(t001,i005,p005,file,"55")
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
