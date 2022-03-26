#!/bin/python3
#
import apphtml as hh
file="adm-paper.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Zeitschriften Verwalten", "back":"adm-start.php", "help":"help.php" }
#
# Hier die Prompts auflisten
# --------------------------
#
b001 = { "check":"login.php", "send":"login.php", "tabindex":"3" }
#
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
p001 = { "class":"left", "width":"90%", "prompt":"Magazine/Zeitungen Listen" }
p002 = { "class":"left", "width":"90%", "prompt":"Neue Magazine/Zeitungen" }
#
i001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "action":"papr-list.php", 
         "name":"papr-list", "value":"PRPLIST", "autofocus":"on", "tabindex":"1" }
i002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "action":"papr-neu.php", 
         "name":"papr-neu", "value":"PRPNEU", "tabindex":"2" }
#
# Hier die Inputs auflisten
# -------------------------
#
#
h.prolog(title="ADMPAPER")
h.Header(defh=h001)
h.include("php/adm-paper-p01.php");
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
#
# Hier die Zeilen einrichten
# --------------------------
h.Line_Rev(t001,i001,p001,file,"39")
h.Line_Rev(t001,i002,p002,file,"40")
#
h.Table_End()
h.Page_End()
h.show()
#
#
#
#
#
#
