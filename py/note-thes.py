#!/bin/python3
import apphtml as hh
file = "note-thes.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Thesaurus für Musikalien verwalten", "back":"adm-noten.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
h.prolog(title="NOTETHES")
h.Header(defh=h001)
h.include("php/note-thes-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
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
