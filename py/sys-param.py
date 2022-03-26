#!/bin/python3
import apphtml as hh
file = "sys-param.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Konstanten Paramter Pflegen", "back":"sys-start.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
h.prolog(title="SYSPARAM")
h.Header(defh=h001)
h.include("php/sys-param-p01.php")
#
p001 = { "class":"left", "width":"90%", "prompt":"Parameter ANREDE" }
p002 = { "class":"left", "width":"90%", "prompt":"Parameter EINBAND" }
p003 = { "class":"left", "width":"90%", "prompt":"Parameter KATEGORIE" }
p004 = { "class":"left", "width":"90%", "prompt":"Parameter LAGERORT" }
p005 = { "class":"left", "width":"90%", "prompt":"Parameter SPRACHE" }
#
f001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "class":"nav", "type":"submit", "name":"send", "value":"SYSANR",
         "action":"sys-anred.php", "autofocus":"on", "tabindex":"1" }
f002 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "class":"nav", "type":"submit", "name":"send", "value":"SYSEIN",
         "action":"sys-einbd.php", "tabindex":"2" }
f003 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"SYSKAT",
         "action":"sys-kateg.php", "tabindex":"3" }
f004 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"SYSLAG",
         "action":"sys-lager.php", "tabindex":"4" }
f005 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":"SYSSPR",
         "action":"sys-sprac.php", "tabindex":"5" }
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line_Rev(t001,f001,p001,file,"37")
h.Line_Rev(t001,f002,p002,file,"38")
h.Line_Rev(t001,f003,p003,file,"39")
h.Line_Rev(t001,f004,p004,file,"40")
h.Line_Rev(t001,f005,p005,file,"41")
#
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
