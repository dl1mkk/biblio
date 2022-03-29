#!/bin/python3
#
import apphtml as hh
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Benutzer Anmelden", "back":"index.php", "help":"help.php" }
#
# Hier die Prompts auflisten
# --------------------------
#
#
# Hier die Inputs auflisten
# -------------------------
#
#
b001 = { "check":"login.php", "send":"login.php", "tabindex":"3" }
#
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
h.prolog(title="LOGIN")
h.Header(defh=h001)
h.include("php/login-p01.php")
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
#
# Hier die Zeilen einrichten
# --------------------------
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
