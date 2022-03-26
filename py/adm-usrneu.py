#!/bin/python3
import apphtml as hh
file = "adm-usrneu.py"
#
h = hh.apphtml()
#
def Strasse_Hausnr(h,deft,defp):
   h.Row(defr=deft)
   h.Prompt(defp)
   h.out('<td class="left" width="20%">')
   h.out('<input type="text" class="fixreq" name="strasse" size="40" maxlength="40" value="<?php echo $strasse; ?>" ')
   h.out('       required="yes" tabindex="9" />')
   h.out('&nbsp;')
   h.out('<input type="text" class="fixreq" name="hausnr" size="4" maxlength="10" value="<?php echo $hausnr; ?>" ')
   h.out('       required="yes" tabindex="10" />')
   h.out('</td>')
   h.Row_End()
   
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Neuer Benutzer", "back":"adm-user.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":"adm-usrneu1.php", "tabindex":"96" }
#
p001 = { "class":"right", "width":"20%", "prompt":"Benutzer-Name : " }
p002 = { "class":"right", "width":"20%", "prompt":"Modus : " }
p003 = { "class":"right", "width":"20%", "prompt":"Anrede : " }
p004 = { "class":"right", "width":"20%", "prompt":"Titel : " }
p005 = { "class":"right", "width":"20%", "prompt":"Firma : " }
p006 = { "class":"right", "width":"20%", "prompt":"Nachname : " }
p007 = { "class":"right", "width":"20%", "prompt":"Vorname : " }
p008 = { "class":"right", "width":"20%", "prompt":"Postfach : " }
p009 = { "class":"right", "width":"20%", "prompt":"Straße / Hausnr. : " }
p011 = { "class":"right", "width":"20%", "prompt":"Landkz / PLZ / Stadt : " }
p014 = { "class":"right", "width":"20%", "prompt":"Telefon (nat.) : " }
p015 = { "class":"right", "width":"20%", "prompt":"E-Mail : " }
#
i001 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fixreq", "name":"username",
         "value":"<?php echo $username; ?>", "required":"yes", "autofocus":"on", "tabindex":"1" }
i002 = { "tdclass":"left", "tdwidth":"80%", "option":"r_modus", "class":"fixreq", "tabindex":"2" }
i003 = { "tdclass":"left", "tdwidth":"80%", "option":"r_anrede", "class":"fixreq", "tabindex":"3" }
i004 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fix",
         "name":"titel", "value":"<?php echo $titel; ?>", "size":"40",  "tabindex":"4" }
i005 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fix",
         "name":"firma", "value":"<?php echo $firma; ?>", "size":"40",  "tabindex":"5" }
i006 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fixreq",   
         "name":"nachname", "value":"<?php echo $nachname; ?>", "size":"40", "required":"yes", "tabindex":"6" }      
i007 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fixreq",
         "name":"vorname", "value":"<?php echo $vorname; ?>", "size":"40", "required":"yes", "tabindex":"7" }
i008 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"text", "class":"fix",
         "name":"postfach", "value":"<?php echo $postfach; ?>", "size":"20", "tabindex":"8" }
g011 = '<td class="left" width="80%">'
i011 = { "option":"r_landkz", "class":"fixreq", "tabindex":"11" }
i012 = { "input":"on", "class":"fixreq", "type":"text", "name":"plz", "size":"5", "maxlength":"10", 
         "value":"<?php echo $plz; ?>", "required":"yes", "tabindex":"12" }
i013 = { "input":"on", "class":"fixreq", "type":"text", "name":"stadt", "size":"40", 
         "value":"<?php echo $stadt; ?>", "required":"yes", "tabindex":"13" }
i014 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"tel", "class":"fixreq", "size":"30",
         "name":"telefon", "value":"<?php echo $telefon; ?>", "required":"yes", "tabindex":"14" }
i015 = { "tdclass":"left", "tdwidth":"80%", "input":"on", "type":"mail", "class":"fixreq", "size":"64",
         "name":"mail", "value":"<?php echo $mail; ?>", "required":"yes", "tabindex":"15" }
#
h.prolog(title="USRNEU")
h.Header(defh=h001)
h.include("php/adm-usrneu-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line(t001,p001,i001,file,"70")
h.Line(t001,p002,i002,file,"71")
h.Line(t001,p003,i003,file,"72")
h.Line(t001,p004,i004,file,"73")
h.Line(t001,p005,i005,file,"74")
h.Line(t001,p006,i006,file,"75")
h.Line(t001,p007,i007,file,"76")
h.Line(t001,p008,i008,file,"77")
Strasse_Hausnr(h,t001,p009)
h.Row(t001)
h.Prompt(p011)
h.out(g011)
h.iplus()
h._Field(i011)
h.out('&nbsp;')
h._Field(i012)
h.out('&nbsp;')
h._Field(i013)
h.isub()
h.out('</td>')
h.Row_End()
h.Line(t001,p014,i014,file,"86")
h.Line(t001,p015,i015,file,"87")
#
h.Table_End()
h.Table(deft=t002)
h.CheckButtons(t002,b001)
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
