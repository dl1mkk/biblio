## Datei apphtml.py
### Klasse apphtml
#### Methode __init__(self):
  Diese Methode initialisiert die jeweilige Instanz der Klasse __apphtml__
##### Attribut page = list(' ')
  Dieses Attribut ist der Speicher-Puffer des HTML5-Kontext, der durch die verschiedenen Methoden von __apphtml__ erzeugt wird. Er wird mit der Methode     __out(self, text):__ gefüllt und kann durch die Methode __show(self):__ ausgelesen werden.
##### Attribut ind = 0
  Dieses Attribut ist der Zähler für das automatische Einrücken um jeweils 4 Leerzeichen.
##### tself = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'
  Dieses Attribut ist eine Konstante für die Formular-Struktur mit **action='self'**.
##### tformself = '<form id="header" class="fix" action="'+tself+'" method="post" enctype="UTF-8">'
  Dieses Attribut ist eine Konstakte für die Formular-Struktur mit **action='self'**.
### def iplus(self):
  Diese Methode rückt den Ausgabe-Kontext in **page** um eine Stufe ein.
### def isub(self):
  Diese Methode setzt das Einrücken des Ausgabe-Kontext in **page** um eine Stufe zurück.
### def indent(self): -> type(str)
  Diese Methode liefert den String für das automatische Einrücken.
### def out(self, arg):
  Diese Methode schreibt das Argument __arg__ in den Ausgabepuffer __self.page__.
### def include(self, m=None):
  Diese Methode fügt eine Datei (Dateiname im Argument ''m'' als 'type(str)') in den aktuellen
  HTML-Kontext in __self.page__ ein.
### def show(self):
  Diese Methode schreibt den Inhalt des Attributs __self.page__ in das Gerät __/dev/stdout__.
  Anschließend wird das Attribut __self.page__ wieder auf __list(' ')__ zurückgesetzt.
### def echo(self, t):
  Diese Methode schreibt das Argument als Ausgabe-Kommando für __/dev/stdout__ in einen String,
  der als Variable für zusammengesetzte Strings verwendet werden kann. Dabei ist das Argument __t__
  der Name einer __PHP-Variable__.
### def echof(self, t):
  Diese Methode schreibt das Argument als Ausgabe-Kommando für __/dev/stdout__ in einen String,
  der als Variable für zusammengesetzte Strings verwendet werden kann. Dabei ist das Argument __t__
  der Name einer __PHP-Variable__ vom Typ Gleitzahl. Ist der Inhalt der PHP-Varable (__$t__ == 0.0), 
  dann wird der String "0.00" übergeben.
### def echoi(self, t):
  Diese Methode schreibt das Argument als Ausgabe-Kommando für __/dev/stdout__ in einen String,
  der als Variable für zusammengesetzte Strings verwendet werden kann. Dabei ist das Argument __t__
  der Name einer __PHP-Variable__ vom Typ Gleitzahl. Ist der Inhalt der PHP-Varable (__$t__ == 0), 
  dann wird der String "0" übergeben.
### def value(self, t):
  Diese Methode gibt das Argument _t_ als Ausgabe-Kommando für __/dev/stdout__ in einem String
  zurück. Das Argument __t__ muss vom __type(str)__ sein!
### Komplexe Methoden in apphtml.py
  Hier werden die [Komplexen Methoden](doc/komplex.md) in der Klasse __apphtml.py__ Beschreieben.
  
