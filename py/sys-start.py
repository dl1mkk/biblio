#!/bin/python3
#!/bin/python3
#
import apphtml as hh
file = "sys-start.py"
#
h = hh.apphtml()
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
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"System-Administration", "back":"index.php", "help":"help.php" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"3" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
p001 = { "class":"left", "width":"90%", "prompt":"Konstanten-Parameter Pflegen" }
p002 = { "class":"left", "width":"90%", "prompt":"Benutzer System-Pflege" }
#
f001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"SYSPAR",
         "action":"sys-param.php", "autofocus":"on", "tabindex":"1" }
#
f002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"SYSUSR",
         "action":"sys-users.php", "tabindex":"2" }
#
h.prolog(title="SYSTEM")
h.Header(defh=h001)
h.include('php/sys-start-p01.php')
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
#
# Hier die Zeilen einrichten
# --------------------------
h.Line_Rev(t001,f001,p001,file,"42")
h.Line_Rev(t001,f002,p002,file,"43")
#
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
#
#
#
#
#
#
