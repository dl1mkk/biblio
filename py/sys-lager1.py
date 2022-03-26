#!/bin/python3
import apphtml as hh
file = "sys-lager1.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Parameter LAGERORT", "back":"sys-param.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":"sys-param.php", "tabindex":"96" }
#
h.prolog(title="LAGER1")
h.Header(defh=h001)
h.include("php/sys-lager1-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Table_End()
h.Form_End()
#
h.Page_End()
h.show()
#
#
#
#
#
#
