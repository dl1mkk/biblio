## Klasse apphtml
### Komplexe Methoden
  Hier werden die komplexen Methoden der Klasse __apphtml__ beschrieben.
#### Methodik:
  Um möglichst komplexe Definitionen für die HTML5-Inhalte in den Generatoren darzustellen, werden sogenannte *Dictionary-Listen* aus Python3 verwendet.
  Sie werden Variablen zugeordnet, die entweder als *Dictionary-Entry* oder als *Dictionary-Liste* an eine übergeordnete Funktion übergeben werden.
  So können übersichtliche Seiten-Definitionen gestaltet werden:
  
  ```
#!/bin/python3
#
import apphtml as hh
#
h = hh.apphtml()
file="adm-start.py"
#
h001 = { "title":"BIBLIOTHEK CHIARA & PIER CARLO RABINO", "sub":"Administration", "back":"index.php", "help":"help.php" }
#
# Hier die Prompts auflisten
# --------------------------
#
p001 = { "class":"left", "width":"95%", "prompt":"Bücher Verwalten" }
p002 = { "class":"left", "width":"95%", "prompt":"Noten Verwalten" }
p003 = { "class":"left", "width":"95%", "prompt":"Zeitschriften Verwalten" }
p004 = { "class":"left", "width":"95%", "prompt":"Benutzer verwalten" }
p005 = { "class":"left", "width":"95%", "prompt":"Software Rollout holen" }
#
# Hier die Inputs auflisten
# -------------------------
#
i001 = { "tdclass":"right", "tdwidth":"5%", "input":"on", "type":"submit", "class":"nav", 
          "action":"adm-book.php", "value":"ADMBOOK", "autofocus":"on", "tabindex":"1" }
i002 = { "tdclass":"right", "tdwidth":"5%", "input":"on", "type":"submit", "class":"nav",
         "action":"adm-noten.php", "value":"ADMNOTEN", "tabindex":"2" }
i003 = { "tdclass":"right", "tdwidth":"5%", "input":"on", "type":"submit", "class":"nav",
         "action":"adm-paper.php", "value":"ADMPAPER", "tabindex":"3" }
i004 = { "tdclass":"right", "tdwidth":"5%", "input":"on", "type":"submit", "class":"nav",
         "action":"adm-user.php", "value":"ADMUSER", "tabindex":"4" }
i005 = { "tdclass":"right", "tdwidth":"5%", "input":"on", "type":"submit", "class":"nav",
         "action":"adm-rollout.php", "value":"ADMROLL", "tabindex":"5" }
#
t001 = { "class":"left", "width":"80%" }
t002 = { "class":"center", "width":"80%" }
#
h.prolog(title="ADMSTART")
h.Header(defh=h001)
h.include("php/adm-start-p01.php");
#
# Enter Page contents here
#
h.Form_Self()
h.Table(t001)
#
# Hier die Zeilen einrichten
# --------------------------
h.Line_Rev(t001,i001,p001,file,"45")
h.Line_Rev(t001,i002,p002,file,"46")
h.Line_Rev(t001,i003,p003,file,"47")
h.Line_Rev(t001,i004,p004,file,"48")
h.Line_Rev(t001,i005,p005,file,"49")
#
h.Table_End()
h.Form_End()
h.Page_End()
h.show()
```
#### Die Methoden im Einzelnen:
  Es ist wichtig, zu verstehen, dass die Basis-Methoden (iplus, isub, indent, out, show, include, echo, echoi,
  echof, value) Teil der hier vorgestellten komplexeren Methoden sind. Über das Argument _self_ werden diese
  Methoden intern aufgerufen.
##### def error(self,msg=None,file=None,line=None):
  Um beim Parsieren der komplexen Datenstrukturen, die als konstante _Directory-Listen_ übergeben werden, sicher
  gehen zu können, dass alles in Ordnung ist, müssen hier und da übergebene Argumente in den Methoden überprüft
  werden. Stellt sich dabei ein Fehler heraus, kann mit der __Variablen file__ und einer zuätzlichen Kennung
  eine Fehler-Position im Traceback der betreffenden Python3-Datei ausgegeben werden.
  
  Die Argumente der Methode __error__ sind:
  + self -------> Die Instanz der Klasse __apphtml__
  + msg --------> Die Fehlermeldung selbst
  + file -------> Der Dateiname, wie im Kopf der *__template-Datei__* defintiert
  + line -------> Die Fehler-Position
  
##### def prolog(self,title=None):
##### def z(self,x,y):
##### def CheckButtons(self,deft=None,defb=None):
##### def Div(self):
##### def Div_End(self):
##### def Field(self,deff=None):
##### def Form(self,deff=None):
##### def Form_End(self):
##### def Form_Self(self):
##### def Header(self,defh):
##### def Line(self,deft=None,defp=None,defi=None,f="",l=""):
##### def Line2(self,deft=None,defp=None,defi1=None,defi2=None,defz=None,f="",l=""):
##### def Line_Rev(self,deft=None,defi=None,defp=None,f="",l=""):
##### def Page_End(self):
##### def Prompt(self,defp=None):
##### def Row_End(self):
##### def Table(self,deft=None):
##### def Table_End(self):
##### def _Field(self,deff=None):_ 
##### def _Header(self):_
