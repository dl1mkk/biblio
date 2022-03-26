#!/bin/python3
import apphtml as hh
file = "book-info.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Buch-Titel anzeigen/editieren", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":h.echo("back"), "tabindex":"22" }
bild = '<input type="submit" name="send" value="Bild" formaction="book-bild.php" tabindex="21" />'
#
p001 = { "class":"right", "width":"10%", "prompt":"Id : " }             # 
p002 = { "class":"right", "width":"10%", "prompt":"Signatur : " }       # 
p003 = { "class":"right", "width":"12%", "prompt":"Autor : " }          # 1 
p004 = { "class":"right", "width":"12%", "prompt":"Herausgeber : " }    # 2
p005 = { "class":"right", "width":"12%", "prompt":"Titel : " }          # 3   req
p006 = { "class":"right", "width":"12%", "prompt":"Kategorie : " }      # 4   req
p007 = { "class":"right", "width":"12%", "prompt":"Reihe : " }          # 5   req
p008 = { "class":"right", "width":"12%", "prompt":"Band : " }           # 6
p009 = { "class":"right", "width":"12%", "prompt":"Jahr : " }           # 7   req
p010 = { "class":"right", "width":"12%", "prompt":"Monat : " }          # 8
p011 = { "class":"right", "width":"12%", "prompt":"Verlag : " }         # 9   req
p012 = { "class":"right", "width":"12%", "prompt":"Ort : " }            # 10
p013 = { "class":"right", "width":"12%", "prompt":"Lagerort : " }       # 11  req
p014 = { "class":"right", "width":"12%", "prompt":"Bestellcode : " }    # 12
p015 = { "class":"right", "width":"12%", "prompt":"ISBN : " }           # 13
p016 = { "class":"right", "width":"12%", "prompt":"Klappentext : " }    # 14  req
p017 = { "class":"right", "width":"12%", "prompt":"Anschaffung : " }    # 15  req
p018 = { "class":"right", "width":"12%", "prompt":"Anschaffungs-Preis : " }         # 16  req
p019 = { "class":"right", "width":"12%", "prompt":"Wiederverkaufs-Wert : " }        # 17  req
p020 = { "class":"right", "width":"12%", "prompt":"Sprache : " }        # 18  req
p021 = { "class":"right", "width":"12%", "prompt":"Einband : " }        # 19  req
p022 = { "class":"right", "width":"12%", "prompt":"Bild-URL : " }       # 20  
#
i001 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "type":"number", "class":"fix", "name":"id", "size":"7", "readonly":"yes",
         "min":"1", "max":"99999", "value":h.echo("id") }
i002 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"signatur", "size":"20", "readonly":"yes", "value":h.echo("signatur") }
i003 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"autor", "size":"80", "value":h.echo("autor"),
         "autofocus":"on", "tabindex":"1" }
i004 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"herausgeber", "size":"80", "value":h.echo("herausgeber"), "tabindex":"2" }
i005 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"titel", "size":"128", "value":h.echo("titel"), "required":"yes", "tabindex":"3" }
i006 = { "tdclass":"left", "tdwidth":"88%", "option":"r_kategorie", "class":"fixreq", "tabindex":"4" }
i007 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"reihe", "size":"80", "value":h.echo("reihe"), "required":"yes", "tabindex":"5" }
i008 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"band", "size":"5", "value":h.echo("band"), "tabindex":"6" }
i009 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "type":"number", "class":"fixreq", "name":"jahr", "size":"6", "value":h.echo("jahr"),
         "min":"1600", "max":"2029", "required":"yes", "tabindex":"7" }
i010 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "type":"number", "class":"fixreq", "name":"monat", "size":"4", "value":h.echo("monat"),
         "min":"1", "max":"12", "required":"yes", "tabindex":"8" }
i011 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"verlag", "size":"80", "value":h.echo("verlag"), "required":"yes", "tabindex":"9" }
i012 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "name":"ort", "size":"80", "value":h.echo("ort"), "tabindex":"10" }
i013 = { "tdclass":"left", "tdwidth":"88%", "option":"r_lagerort", "class":"fixreq", "tabindex":"11" }
i014 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"bestellcode", "size":"22", "value":h.echo("bestellcode"), "tabindex":"12" }
i015 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fix", "name":"isbn", "size":"25", "value":h.echo("isbn"), "tabindex":"13" }
i016 = { "tdclass":"left", "tdwidth":"88%", "textarea":h.echo("klappentext"), "class":"fixreq", "rows":"10", "cols":"80", "name":"klappentext", "required":"yes", "tabindex":"14" }
i017 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "type":"date", "name":"anschaffung", "value":h.echo("anschaffung"),
         "min":"1600-01-01", "max":"2029-12-31", "required":"yes", "tabindex":"15" }
i018 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "type":"number", "name":"preis", "value":h.echof("preis"),
         "min":"0.01", "max":"999999.99", "step":"0.01", "required":"yes", "tabindex":"16", "add":"EUR" }
i019 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "class":"fixreq", "type":"number", "name":"wert", "value":h.echof("wert"),
         "min":"0.01", "max":"999999.99", "step":"0.01", "required":"yes", "tabindex":"17", "add":"EUR" }
i020 = { "tdclass":"left", "tdwidth":"88%", "option":"r_sprache", "class":"fixreq", "tabindex":"18" }
i021 = { "tdclass":"left", "tdwidth":"88%", "option":"r_einband", "class":"fixreq", "tabindex":"19" }
i022 = { "tdclass":"left", "tdwidth":"88%", "input":"on", "type":"url", "class":"fixreq", "name":"bildurl", "size":"128", "value":h.echo("bildurl"), 
         "tabindex":"20", "add":bild }
#
h.prolog(title="BOOKINFO")
h.include("php/book-info-p00.php")
h.Header(defh=h001)
h.include("php/book-info-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Line(t001,p001,i001,file,"73")
h.Line(t001,p002,i002,file,"74")
h.Line(t001,p003,i003,file,"75")
h.Line(t001,p004,i004,file,"76")
h.Line(t001,p005,i005,file,"77")
h.Line(t001,p006,i006,file,"78")
h.Line(t001,p007,i007,file,"79")
h.Line(t001,p008,i008,file,"80")
h.Line(t001,p009,i009,file,"81")
h.Line(t001,p010,i010,file,"82")
h.Line(t001,p011,i011,file,"83")
h.Line(t001,p012,i012,file,"84")
h.Line(t001,p013,i013,file,"85")
h.Line(t001,p014,i014,file,"86")
h.Line(t001,p015,i015,file,"87")
h.Line(t001,p016,i016,file,"88")
h.Line(t001,p017,i017,file,"89")
h.Line(t001,p018,i018,file,"90")
h.Line(t001,p019,i019,file,"91")
h.Line(t001,p020,i020,file,"92")
h.Line(t001,p021,i021,file,"93")
h.Line(t001,p022,i022,file,"94")
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
