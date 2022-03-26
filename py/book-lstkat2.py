#!/bin/python3
import apphtml as hh
file = "book-lstkat2.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Buch-Titel nach Kategorien", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
h.prolog(title="LSTKAT2")
h.Header(defh=h001)
h.include("php/book-lstkat2-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t002)
h.include("php/book-lstkat2-p02.php")
#
h.Row(defr=t002)
h.out('<?php echo $line; ?>')
h.Row_End()
h.out('<?php } ?>')
#
h.Table_End()
h.Form_End()
#
h.Page_End()
#
h.show()
#
#
#
#
#
#
