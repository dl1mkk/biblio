#!/bin/python3
import apphtml as hh
file = "book-lsthrg1.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Liste der Herausgeber", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
h.prolog(title="LSTHRG1")
h.Header(defh=h001)
h.include("php/book-lsthrg1-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t002)
h.Row(defr=t002)
h.out('<td class="center" width="80%">')
h.include("php/book-lsthrg1-p02.php")
h.out('</td>')
h.Row_End()
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
