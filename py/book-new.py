#!/bin/python3
import apphtml as hh
file = "book-new.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Neuen Buchtitel Erfassen", "back":"adm-book.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":"book-new1.php", "tabindex":"96" }
bild = '<input type="submit" name="send" value="Bild" formaction="book-bild.php" tabindex="22" />'
#
h.prolog(title="BOOKNEW")
h.Header(defh=h001)
h.include("php/book-new-p01.php")
#
p001 = { "class":"right", "width":"12%", "prompt":"Signatur : " }
p002 = { "class":"right", "width":"12%", "prompt":"Autor : " }
p003 = { "class":"right", "width":"12%", "prompt":"Herausgeber : " }
p004 = { "class":"right", "width":"12%", "prompt":"Titel : " }          # 3   req
p005 = { "class":"right", "width":"12%", "prompt":"Kategorie : " }      # 4   req
p006 = { "class":"right", "width":"12%", "prompt":"Reihe : " }          # 5   req
p007 = { "class":"right", "width":"12%", "prompt":"Band : " }           # 6
p008 = { "class":"right", "width":"12%", "prompt":"Jahr : " }           # 7   req
p009 = { "class":"right", "width":"12%", "prompt":"Monat : " }          # 8
p010 = { "class":"right", "width":"12%", "prompt":"Verlag : " }         # 9   req
p011 = { "class":"right", "width":"12%", "prompt":"Ort : " }            # 10
p012 = { "class":"right", "width":"12%", "prompt":"Lagerort : " }       # 11  req
p013 = { "class":"right", "width":"12%", "prompt":"Bestellcode : " }    # 12
p014 = { "class":"right", "width":"12%", "prompt":"ISBN : " }           # 13
p015 = { "class":"right", "width":"12%", "prompt":"Klappentext : " }    # 14  req
p016 = { "class":"right", "width":"12%", "prompt":"Anschaffung : " }    # 15  req
p017 = { "class":"right", "width":"12%", "prompt":"Anschaffungs-Preis : " }         # 16  req
p018 = { "class":"right", "width":"12%", "prompt":"Wiederverkaufs-Wert : " }        # 17  req
p019 = { "class":"right", "width":"12%", "prompt":"Sprache : " }        # 18  req
p020 = { "class":"right", "width":"12%", "prompt":"Einband : " }        # 19  req
p021 = { "class":"right", "width":"12%", "prompt":"Bild-URL : " }       # 20  
#
i001 = { "pos":"left", "width":"88%", "input":"on", "class":"fixreq", "name":"signatur", "tabindex":"1",  "size":"20", "value":h.echo("signatur"), "required":"yes", "autofocus":"on" }
v001 = { "pos":"left", "width":"88%", "input":"on", "class":"fixreq", "name":"signatur", "tabindex":"1",  "size":"20", "value":h.echo("signatur"), "readonly":"yes" }
i002 = { "pos":"left", "width":"88%", "input":"on", "class":"fix", "name":"autor", "tabindex":"2",  "size":"80", "value":h.echo("autor"), "autofocus":"on" }
i003 = { "pos":"left", "width":"88%", "input":"on", "class":"fix", "name":"herausgeber", "tabindex":"3", "size":"80", "value":h.echo("herausgeber") }
i004 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"titel", "size":"128", "value":h.echo("titel"), "required":"yes", "tabindex":"3" }
i005 = { "tdclass":"left", "tdwidth":"88%", "option":"r_kategorie", "class":"fixreq", "tabindex":"4" }
i006 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"reihe", "size":"80", "value":h.echo("reihe"), "required":"yes", "tabindex":"5" }
i007 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"band", "size":"5", "value":h.echo("band"), "tabindex":"6" }
i008 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "type":"number", "class":"fixreq", "name":"jahr", "size":"6", "value":h.echo("jahr"),
         "min":"1600", "max":"2029", "required":"yes", "tabindex":"7" }
i009 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "type":"number", "class":"fixreq", "name":"monat", "size":"4", "value":h.echo("monat"),
         "min":"1", "max":"12", "required":"yes", "tabindex":"8" }
i010 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"verlag", "size":"80", "value":h.echo("verlag"), "required":"yes", "tabindex":"9" }
i011 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"ort", "size":"80", "value":h.echo("ort"), "tabindex":"10" }
i012 = { "tdclass":"left", "tdwidth":"88%", "option":"r_lagerort", "class":"fixreq", "tabindex":"11" }
i013 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"bestellcode", "size":"22", "value":h.echo("bestellcode"), "tabindex":"12" }
i014 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"isbn", "size":"25", "value":h.echo("isbn"), "tabindex":"13" }
i015 = { "tdclass":"left", "tdwidth":"88%", "textarea":h.echo("klappentext"), "class":"fixreq", "rows":"10", "cols":"80", "name":"klappentext", "required":"yes", "tabindex":"14" }
i016 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "type":"date", "name":"anschaffung", "value":h.echo("anschaffung"),
         "min":"1600-01-01", "max":"2029-12-31", "required":"yes", "tabindex":"15" }
i017 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "type":"number", "name":"preis", "value":h.echof("preis"),
         "min":"0.01", "max":"999999.99", "step":"0.01", "required":"yes", "tabindex":"16", "add":"EUR" }
i018 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "type":"number", "name":"wert", "value":h.echof("wert"),
         "min":"0.01", "max":"999999.99", "step":"0.01", "required":"yes", "tabindex":"17", "add":"EUR" }
i019 = { "tdclass":"left", "tdwidth":"88%", "option":"r_sprache", "class":"fixreq", "tabindex":"18" }
i020 = { "tdclass":"left", "tdwidth":"88%", "option":"r_einband", "class":"fixreq", "tabindex":"19" }
i021 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "type":"url", "class":"fixreq", "name":"bildurl", "size":"128", "value":h.echo("bildurl"), 
         "tabindex":"20", "add":bild }
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.include("php/book-new-p02.php")
h.Line(t001,p001,i001,file,"24")
h.out('<input type="hidden" name="status" value="<?php echo $status; ?>" />')
h.include("php/book-new-p03.php")
h.Line(t001,p001,v001,file,"25")
h.Line(t001,p002,i002,file,"26")
h.Line(t001,p003,i003,file,"27")
h.Line(t001,p004,i004,file,"28")
h.Line(t001,p005,i005,file,"29")
h.Line(t001,p006,i006,file,"30")
h.Line(t001,p007,i007,file,"31")
h.Line(t001,p008,i008,file,"32")
h.Line(t001,p009,i009,file,"33")
h.Line(t001,p010,i010,file,"34")
h.Line(t001,p011,i011,file,"35")
h.Line(t001,p012,i012,file,"36")
h.Line(t001,p013,i013,file,"37")
h.Line(t001,p014,i014,file,"38")
h.Line(t001,p015,i015,file,"39")
h.Line(t001,p016,i016,file,"40")
h.Line(t001,p017,i017,file,"41")
h.Line(t001,p018,i018,file,"42")
h.Line(t001,p019,i019,file,"43")
h.Line(t001,p020,i020,file,"44")
h.Line(t001,p021,i021,file,"45")
h.out('<input type="hidden" name="status" value="<?php echo $status; ?>" />')
h.out('<input type="hidden" name="sound_titel" value="<?php echo soundex($titel); ?>" />')
h.out('<input type="hidden" name="sound_autor" value="<?php echo soundex($autor); ?>" />')
h.out('<input type="hidden" name="sound_herausg" value="<?php echo soundex($herausgeber); ?>" />')
h.out('<input type="hidden" name="sound_verlag" value="<?php echo soundex($verlag); ?> />')
h.include("php/book-new-p99.php")
#
h.Table_End()
#
#
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
