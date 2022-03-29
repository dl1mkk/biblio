#!/bin/python3
import apphtml as hh
file = "error-003.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Fehler 003: Variable nicht gefunden", "back":"adm-book.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"adm-book.php", "send":"adm-book.php", "tabindex":"96" }
#
h.prolog(title="ERROR003")
h.Header(defh=h001)
h.include("php/error-003-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.include("php/error-003-p02.php")
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
