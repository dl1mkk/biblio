#!/bin/python3
#!/bin/python3
#
import apphtml as hh
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Interner Fehler", "back":"index.php", "help":"help.php" }
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
#
# Enter Page contents here
#
h.include("php/error-p01.php")
h.Page_End()
h.show()
#
#
#
#
#
#
