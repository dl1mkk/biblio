#!/bin/python3
import apphtml as hh
file = "book-lstkat1.py"
#
def kategorie(h,t):
   h.Row(defr=t)
   h.out('<td class="center"><h3><strong>KATEGORIE : <?php echo strtoupper($kategorie); ?></strong></h3></td>')
   h.Row_End()
   pass
#
def reihe(h,t):
   h.Row(defr=t)
   h.out('<td class="center"><h4 class="center"><u><?php echo $reihe; ?></u></h4></td>')
   h.Row_End()
#
h = hh.apphtml()
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Buch-Titel nach Kategorien", "back":"book-list.php", "help":"help.php" }
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
h.prolog(title="LSTKAT1")
h.Header(defh=h001)
h.include("php/book-lstkat1-p01.php")
#
# Enter Page contents here
h.Form_Self()
h.Table(deft=t002)
kategorie(h,t002)
h.Table_End()
#
h.include("php/book-lstkat1-p02.php")
h.Table(deft=t002)
h.Row(defr=t002)
h.include("php/book-lstkat1-p03.php")
h.Row_End()
h.Table_End();
#
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
