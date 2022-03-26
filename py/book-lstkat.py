#!/bin/python3
import apphtml as hh
#
h = hh.apphtml()
file = "book-lstkat.py"
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Buch-Titel nach Kategorien", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"book-list.php", "send":"book-list.php", "tabindex":"96" }
#
#
h.prolog(title="LSTKAT")
h.Header(defh=h001)
h.include("php/book-lstkat-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.include("php/book-lstkat-p02.php")
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

