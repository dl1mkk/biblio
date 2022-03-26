import apphtml
#
h = apphtml()
#
h001 = { "${1:title}":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "${2:sub}":"UNTERTITEL", "back":"${3:index.php}", "help":"${4:help.php}" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
b001 = { "check":"login.php", "send":"login.php", "tabindex":"96" }
#
h.prolog(title="${5:TITLE}")
h.Header(defh=h001)
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t001)
#
h.Table_End()
h.Form_End()
#
h.Page_End()
#
#
h.Form_Self()
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
