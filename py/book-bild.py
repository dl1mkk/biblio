#!/bin/python3
import apphtml as hh
file = "book-bild.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Buch-Titel Abbildung", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
p001 = { "class":"right", "width":"50%", "prompt":"<b><?php echo $signatur; ?></b>" }
i001 = { "tdclass":"left", "tdwidth":"50%", "input":"on", "type":"submit", "action":"book-list.php", "autofocus":"on", "tabindex":"1" }
#
h.prolog(title="BOOKBILD")
h.Header(defh=h001)
h.include("php/book-bild-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t002)
h.Line(t002,p001,i001)
h.include("php/book-bild-p02.php")
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
