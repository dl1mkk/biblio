#!/bin/python3
#
import apphtml as hh
file="adm-book.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Bücher Verwalten", "back":"adm-start.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
# Hier die Prompts auflisten
# --------------------------
#
p001 = { "class":"left", "width":"90%", "prompt":"Bücher auflisten" }
p002 = { "class":"left", "width":"90%", "prompt":"Neues Buch erfassen" }
p003 = { "class":"left", "width":"90%", "prompt":"Kategorien verwalten" }
p004 = { "class":"left", "width":"90%", "prompt":"Thesaurus verwalten" }
#
# Hier die Inputs auflisten
# -------------------------
#
i001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"booklist", "value":"BOOKLIST",
         "action":"book-list.php", "autofocus":"on", "tabindex":"1" }
#
i002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"booknew", "value":"BOOKNEW",
         "action":"book-new.php", "tabindex":"2" }
#
i003 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"bookkat", "value":"BOOKKAT",
         "action":"book-kat.php", "tabindex":"3" }
#
i004 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"booktes", "value":"BOOKTES",
         "action":"book-thes.php", "tabindex":"4" }
#
h.prolog(title="ADMBOOK")
h.Header(defh=h001)
h.include("php/adm-book-p01.php");
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
#
# Hier die Zeilen einrichten
# --------------------------
h.Line_Rev(t001,i001,p001,file,48)
h.Line_Rev(t001,i002,p002,file,49)
h.Line_Rev(t001,i003,p003,file,50)
h.Line_Rev(t001,i004,p004,file,51)
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
