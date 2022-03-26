#!/bin/python3
import apphtml as hh
file = "book-lsthrg2.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Liste der Herausgeber", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"book-list.php", "send":"book-list.php", "tabindex":"96" }
i001 = { "tdclass":"center","tdwidth":"5%","input":"on","type":"submit","name":"send","value":"<?php echo $signatur; ?>", "action":"book-info.php", "tabindex":"<?php echo $i++; ?>" }
i002 = { "class":"left","width":"30%","prompt":"<?php echo $autor; ?>" }
i003 = { "class":"left","width":"65%","prompt":"<?php echo $titel; ?>" }
#
h.prolog(title="LSTHRG2")
h.Header(defh=h001)
h.include("php/book-lsthrg2-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
h.include("php/book-lsthrg2-p02.php")
h.Row(defr=t001)
h.Field(deff=i001)
h.Prompt(defp=i002)
h.Prompt(defp=i003)
h.Row_End()
h.out('<?php } ?>')
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
