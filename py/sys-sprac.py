#!/bin/python3
import apphtml as hh
file = "sys-sprac.py"
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Parameter SPRACHEN", "back":"sys-param.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"self", "send":"sys-sprac1.php", "tabindex":"96" }
#
p001 = { "class":"right", "width":"20%", "prompt":"Neue Kategorie : " }
#
i001 = '<input type="text" class="fix" name="sprache" size="3" maxlength="3" value="<?php echo $sprache; ?>" required="yes" autofocus="on" tabindex="1" />'
i002 = '<input type="text" class="fix" name="lang" size="40" maxlength="40" value="<?php echo $lang; ?>" required="yes" tabindex="2" />'
#
i003 = '<input type="text" class="fix" name="olds" size="3" maxlength="3" value="'+h.echo("sprache")+'" readonly="yes" />'
i004 = '<input type="text" class="fix" name="oldl" size="40" maxlength="40" value="'+h.echo("lang")+'" readonly="yes" />'
#
t003 = '<tr class="left" width="80%"><td class="right" width="20%">&nbsp;</td><td class="left" width="80%">'
t004 = '</td></tr>'
#
#
h.prolog(title="SPRAC")
h.Header(defh=h001)
h.include("php/sys-sprac-p01.php")
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
h.out(t003)
h.iplus()
h.out(i001)
h.out(i002)
h.isub()
h.out(t004)
h.include("php/sys-sprac-p02.php")
h.out(t003)
h.iplus()
h.out(i003)
h.out(i004)
h.isub()
h.out(t004)
h.include("php/sys-sprac-p03.php")
h.Table_End()
h.Form_End()
h.isub()
#
h.Form_Self()
h.Table(deft=t002)
h.CheckButtons(t002,b001)
h.Table_End()
h.Form_End()
h.isub()
h.Page_End()
h.show()
#
#
#
#
#
#
