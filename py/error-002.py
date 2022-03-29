#!/bin/python3
import apphtml as hh
file = "error-002.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Fehler 002: Signatur bereits vorhanden", "back":"adm-book.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
h.prolog(title="ERROR002")
h.Header(defh=h001)
h.include("php/error-002-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.include("php/error-002-p02.php")
#
h.Table_End()
h.Form_End()
#
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
