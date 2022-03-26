#!/bin/python3
import apphtml as hh
file = "adm-usrlst.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Liste der Benutzer", "back":"adm-user.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
#
h002 = '<th class="center" width="10%"><strong>Benutzer</strong></th>'+ \
       '<th class="center" width="3%"><strong>Select</strong></th>'+ \
       '<th class="left" width="25%"><strong>Name, Vorname</strong></th>'+ \
       '<th cöass="left" width="62%"><strong>Postanschrift, Tel, Mail</strong></th>'
f001 = { "tdclass":"center", "tdwidth":"10%", "input":"on", "type":"text", "class":"plain", "name":"user", "value":h.echo("user"),
         "size":"20", "readonly":"on", "tabindex":"1" }
f002 = { "tdclass":"center", "tdwidth":"3%", "input":"on", "type":"submit", "class":"nav", "name":"send", "value":h.echo("id"),
         "size":"3", "action":"adm-usrlst1.php?user=<?php echo $id; ?>", "method":"get", "autofocus":"on", "tabindex":"2" }
f003 = { "tdclass":"left", "tdwidth":"25%", "input":"on", "type":"text", "class":"plain", "name":"name", "value":h.echo("name"),
         "readonly":"on", "tabindex":"3" }
f004 = { "tdclass":"left", "tdwidth":"62%", "input":"on", "type":"submit", "class":"plain", "name":"address", "value":h.echo("address"),
         "readonly":"on", "tabindex":"4" }
#
h.prolog(title="USRLST")
h.Header(defh=h001)
h.include("php/adm-usrlst-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
h.Row(defr=t001)
h.iplus();
h.out(h002);
h.isub();
h.Row_End();
h.include("php/adm-usrlst-p02.php")
h.Row(defr=t001)
h.Field(deff=f001)
h.Field(deff=f002)
h.Field(deff=f003)
h.Field(deff=f004)
h.Row_End()
h.out('<?php } ?>')
#
#
h.Table_End()
h.Form_End()
h.Page_End()
h.Page_End()
#
h.show()
#
#
#
#
#
#
