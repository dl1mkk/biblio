#!/bin/python3
import apphtml as hh
file = "book-lstaut.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Buch-Titel nach Autoren", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"center", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
#
# Hier die Prompts auflisten
# --------------------------
#
#
# Hier die Inputs auflisten
# -------------------------
#
#
#
h.prolog(title="LSTSIG")
h.include("php/book-lstaut-p01.php")
h.Header(defh=h001)
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
#
# Hier die Zeilen einrichten
# --------------------------
h.include("php/book-lstaut-p02.php")
#
h.Table_End()
h.Table(t001)
h.CheckButtons(t002,b001)
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
