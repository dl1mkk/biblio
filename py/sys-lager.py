#!/bin/python3
import apphtml as hh
file = "sys-lager.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Parameter LAGERORTE", "back":"sys-param.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":"sys-lager1.php", "tabindex":"96" }
#
p001 = { "class":"right", "width":"20%", "prompt":"Neuer Lagerort : " }
#
i001 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fix", "name":"lagerort", "size":"40",
        "value":"<?php echo $lagerort; ?>", "required":"yes", "autofocus":"on", "tabindex":"1" }
#
h.prolog(title="TITLE")
h.Header(defh=h001)
h.include("php/sys-lager-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line(t001,p001,i001,file,"25")
h.include("php/sys-lager-p02.php");
#
h.Table_End()
h.Form_End()
#
h.Form_Self()
h.Table(deft=t002)
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
