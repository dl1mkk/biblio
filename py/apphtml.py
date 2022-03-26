#!/bin/python3
import time
class apphtml:
   #
   page = list(' ')           # DAS LEERE ARRAY PAGE
   ind = 0;                   # DIE ANZAHL DER EINRÜCKUNG
   tself = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'
   tformself = '<form id="header" class="fix" action="'+tself+'" method="post" enctype="UTF-8">'
   #
   #  ERZEUGT DAS OBJEKT DER KLASSE APPHTML
   #  =====================================
   #
   def __init__(self):
      pass;
   #
   # EINE STUFE EINRÜCKEN MEHR
   # =========================
   #
   def iplus(self):
      self.ind += 1;
      pass
   #
   # EINE STUFE EINRÜCKEN WENIGER
   # ============================
   #
   def isub(self):
      if self.ind > 0:  # PRÜFT, OB NOCH EINGERÜCKT WERDEN KANN
         self.ind -= 1;
      pass
   #
   # ERZEUGT DIE ANZAHL LEERZEICHEN FÜR DIE STUFE DES EINRÜCKENS
   # ===========================================================
   #
   def indent(self):
      t=''
      for i in range(self.ind):
         t=t+'   '
      return t;
   #
   # ERZEUGT DEN OUTPUT IN DAS ARRAY PAGE
   # ====================================
   #
   def out(self,arg):
      t=self.indent()+arg
      g=len(self.page)
      self.page.insert(len(self.page),str(t))
      pass;
   #
   #
   def Space(self,width):
      t = '<td class="left" width="'+width+'">&nbsp;</td>'
      self.out(t)
      pass
   #
   #  ERZEUGT EINEN PHP-INCLUDE-AUFRUF
   #  ================================
   #
   def include(self,m=None):
      f="apphtml.py"
      l="include"
      if m is None:
         self.error("Fehler: Datei-Argument 'm' nicht gefunden.",f,l)
      fobj = open(m,"r")
      for line in fobj:
         wlen = len(line)-1
         ws = str(line[0:wlen])
         if ws > "":
            self.out(ws)
      fobj.close()
      pass
   #
   def show(self):
      for x in self.page:
         if x != ' ':
            print(x)
   #
   def echo(self,t):
      return '<?php echo $'+t+'; ?>'
   #
   def echof(self,t):
      return '<?php if ($'+t+' != 0) echo $'+t+'; else echo "0.00"; ?>'
   #
   def echoi(self,t):
      return '<?php if ($'+t+' != 0) echo $'+t+'; else echo "0"; ?>'
   #
   def value(self,t):
      return '<?php echo "'+t+'"; ?>'
   #
   #  ERZEUGT DEN <head> EINER HTML-DATEI
   #  ===================================
   #
   def head(self,title=None):
      self.out('<title>'+title+'</title>')
      descr="HTML CONTENT GENERATOR ZEND 2.1"
      keywd="Bibliothek,Software,Verwaltung"
      d=time.asctime()
      t="<head>"
      self.out(t)
      self.iplus()
      t1='<meta name="date" content="'+d+'">'
      t2='<meta name="author" content="Veit Heise, PQM Consulting, Germany">'
      t3='<meta name="copyright" content="(C)2021 by Veit Heise. All rights reserved.">'
      t4='<meta name="keywords" content="'+keywd+'">'
      t5='<meta name="description" content="'+descr+'">'
      t6='<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">'
      t7='<meta name="generator" content="frame#2/composer Version 1.4.0">'
      t8='<meta http-equiv="content-type" content="text/html; charset=UTF-8">'
      t9='<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">'
      t10='<meta http-equiv="content-style-type" content="text/css">'
      t11='<meta http-equiv="expires" content="0">'
      t12='<link href="standard.css" rel="stylesheet" type="text/css">'
      t13='<link href="w3cssconf.css" rel="stylesheet" type="text/css">'
      self.out(t1)
      self.out(t2)
      self.out(t3)
      if (keywd>""):
         self.out(t4)
      if (descr>""):
         self.out(t5)
      self.out(t6)
      self.out(t7)
      self.out(t8)
      self.out(t9)
      self.out(t10)
      self.out(t11)
      self.out(t12)
      self.out(t13)
      self.isub()
      self.out("</head>")
      self.out("<body>")
      self.iplus()
      pass
   #
   #  ERZEUGT DEN PROLOG FÜR DAS HTML-DOKUMENT
   #  ========================================
   #
   def prolog(self,title=None):
      self.include(m="prolog.php")
      self.iplus()
      self.head(title)
      pass
   #
   # ERZEUGT EINE FEHLERMELDUNG UND BRICHT DIE ERZEUGUNG DER HTML-SEITE AB
   # =====================================================================
   #
   def error(self,msg=None,file=None,line=None):
      self.out('### FEHLER in Datei ###')
      if file:
         if line:
            self.out("### Datei='"+file+"("+line+")': ###")
         else:
            self.out("### Datei='"+file+"': ###")
         self.out("+++ "+msg+" +++")
         self.show()
         exit();
      else:
         self.out("+++ "+msg+" +++")
         self.show()
         exit();
      
   #
   #  PRUEFT AUF DAS VORHANDENSEIN EINES DICTIONARY-EINTRAGS
   #  ======================================================
   #
   def z(self,x,y):
      try:
         return x[y]
      except:
         return None
   #
   # ERZEUGT CHECKBUTTON META
   # ========================
   #
   def CheckButtons(self,deft=None,defb=None):
      f="apphtml.py"
      l="CheckButtons"
      if deft is None:
         self.error("Argument 'deft' fehlt in Checkbutton().",f,l)
         self.show()
         exit()
      if defb is None:
         self.error("Argument 'defb' fehlt in CheckButton().",f,l)         
         self.show()
         exit()
      z01=self.z(defb,"check")
      z02=self.z(defb,"send")
      z03=self.z(defb,"tabindex")
      if z03:
         tab1=int(z03)
         tab2=tab1+1
      else:
         tab1=0
         tab2=0
      self.Row(deft)
      self.iplus()
      if z01=="self":
         t='<td class="center"><input type="submit" class="nav" name="check" value="Prüfen" tabindex="'+str(tab1)+'"></td>'
      else:
         t='<td class="center"><input type="submit" class="nav" name="check" formaction="'+z01+'" value="Prüfen" tabindex="'+str(tab1)+'" /></td>'
      t=t+'&nbsp;'
      if z02:
         t=t+'<td class="center"><input type="submit" class="nav" name="send" formaction="'+z02+'" value="Senden" tabindex="'+str(tab2)+'" /></td>'
      self.out(t)
      self.isub()
      self.Row_End()
      pass
      
      
      pass
   #
   # ERZEUGT DIV TAG
   # ===============
   #
   def Div(self):
      self.out('<div>')
      pass
   #
   # ERZEUGT /DIV TAG
   # ================
   #
   def Div_End(self):
      self.isub()
      self.out('</div>')
      pass
   #
   # ERZEUGT META FIELD
   # ==================
   #
   def Field(self,deff=None):
      f="apphtml.py"
      l="Field"
      if deff is None:
         self.error("Argument 'deff' fehlt in Field().",f,l)
         pass
      z01 = self.z(deff,"tdclass")
      z02 = self.z(deff,"tdstyle")
      z03 = self.z(deff,"tdwidth")
      z28 = self.z(deff,"space")
      z04 = self.z(deff,"input")
      z05 = self.z(deff,"class")
      z06 = self.z(deff,"type")
      z07 = self.z(deff,"name")
      z08 = self.z(deff,"action")
      z09 = self.z(deff,"method")
      z10 = self.z(deff,"target")
      z11 = self.z(deff,"size")
      z12 = self.z(deff,"maxlength")
      z13 = self.z(deff,"autofocus")
      z14 = self.z(deff,"readonly")
      z15 = self.z(deff,"required")
      z16 = self.z(deff,"tabindex")
      z17 = self.z(deff,"echo")
      z18 = self.z(deff,"strong")
      z19 = self.z(deff,"value")
      z20 = self.z(deff,"option")
      z21 = self.z(deff,"add")
      z22 = self.z(deff,"textarea")
      z23 = self.z(deff,"rows")
      z24 = self.z(deff,"cols")
      z25 = self.z(deff,"min")
      z26 = self.z(deff,"max")
      z27 = self.z(deff,"step")
      if z04:
         t='<td '
         if z01:
            t=t+'class="'+z01+'" '
         if z02:
            t=t+'style="'+z02+'" '
         if z03:
            t=t+'width="'+z03+'" '
         t=t+'><input '
         if z05:
            t=t+'class="'+z05+'" '
         if z06:
            t=t+'type="'+z06+'" '
         else:
            t=t+'type="text" '
         if z07:
            t=t+'name="'+z07+'" '
         if z19:
            t=t+'value="'+z19+'" '
         if z25:
            t=t+'min="'+z25+'" '
         if z26:
            t=t+'max="'+z26+'" '
         if z27:
            t=t+'step="'+z27+'" '
         if z08:
            t=t+'formaction="'+z08+'" '
         if z09:
            t=t+'formmethod="'+z09+'" '
         if z10:
            t=t+'target="'+z10+'" '
         if z11:
            t=t+'size="'+str(z11)+'" '
         if z12:
            t=t+'maxlength="'+str(z12)+'" '
         else:
            t=t+'maxlength="'+str(z11)+'" '
         if z13:
            t=t+'autofocus="on" '
         if z14:
            t=t+'readonly="yes" '
         if z15:
            t=t+'required="yes" '
         if z16:
            t=t+'tabindex="'+z16+'" '
         t=t+'/>'
         if z21:
            t=t+'&nbsp;'+z21+'&nbsp;'
         t=t+'</td>'
         self.out(t)
         pass
      if z17:
         t='<td '
         if z01:
            t=t+'class="'+z01+'" '
         if z02:
            t=t+'style="'+z02+'" '
         if z03:
            t=t+'width="'+z03+'" '
         t=t+'><p '
         if z05:
            t=t+'class="'+z05+'" '
         t=t+'>'
         if z18:
            t=t+'<strong>'
         if z19:
            t=t+z19
         else:
            t=t+z17
         if z18:
            t=t+'</strong>'
         t=t+'</p>'
         if z21:
            t=t+'&nbsp;'+z21+'&nbsp;'
         t=t+'</td>'
         self.out(t)
         pass
      if z20:
         t='<td '
         if z01:
            t=t+'class="'+z01+'" '
         if z02:
            t=t+'style="'+z02+'" '
         if z03:
            t=t+'width="'+z03+'" '
         t=t+'><p '
         if z05:
            t=t+'class="'+z05+'" '
         t=t+'>'
         if z20:
            t=t+'<?php echo $'+z20+'; ?>'
         t=t+'</p>'
         if z21:
            t=t+'&nbsp;'+z21+'&nbsp;'
         t=t+'</td>'
         self.out(t)
         pass
      if z22:
         t='<td '
         if z01:
            t=t+'class="'+z01+'" '
         if z02:
            t=t+'style="'+z02+'" '
         if z03:
            t=t+'width="'+z03+'" '
         t=t+'><textarea '
         if z05:
            t=t+'class="'+z05+'" '
         if z07:
            t=t+'name="'+z07+'" '
         if z23:
            t=t+'rows="'+z23+'" '
         if z24:
            t=t+'cols="'+z24+'" '
         if z14:
            t=t+'readonly="yes" '
         if z15:
            t=t+'required="yes" '
         if z16:
            t=t+'tabindex="'+z16+'" '
         t=t+'>'+z22+'</textarea></td>'
         self.out(t)
         pass
      if z28:
         t='<td '
         if z01:
            t=t+'class="'+z01+'" '
         if z02:
            t=t+'style="'+z02+'" '
         if z03:
            t=t+'width="'+z03+'" '
         t=t+'>&nbsp;</td>'
         self.out(t)
         pass
      pass
   #
   # ERZEUGT FORM TAG
   #
   def Form(self,deff=None):
      f="apphtml.py"
      l="Form"
      if deff is None:
         self.error("Argument 'deff' fehlt in Form().",f,l)
         pass
      if deff:
         f01=self.z(deff,"id")
         f02=self.z(deff,"class")
         f03=self.z(deff,"action")
         f04=self.z(deff,"accept-charset")
         f05=self.z(deff,"autocomplete")
         f06=self.z(deff,"enctype")
         f07=self.z(deff,"method")
         f08=self.z(deff,"name")
         f09=self.z(deff,"novalidate")
         f10=self.z(deff,"rel")
         f11=self.z(deff,"target")
         t='<form '
         if f01:
            t=t+'id="'+f01+'" '
         if f02:
            t=t+'class="'+f02+'" '
         if f03:
            t=t+'action="'+f03+'" '
         if f04:
            t=t+'accept-charset="'+f04+'" '
         if f05:
            t=t+'autocomplete="on" '
         if f06:
            t=t+'enctype="'+f06+'" '
         if f07:
            t=t+'method="'+f07+'" '
         if f08:
            t=t+'name="'+f08+'" '
         if f09:
            t=t+'novalidate '
         if f10:
            t=t+'rel="'+f10+'" '
         if f11:
            t=t+'target="'+f11+'" '
         self.out(t)
         self.iplus()
         pass
   #
   # ERZEUGT /FORM TAG
   # =================
   #
   def Form_End(self):
      self.isub()
      self.out('</form>')
      pass
   #
   # ERZEUGT FORM_SELF TAG
   # =====================
   #
   def Form_Self(self):
      self.iplus()
      self.out(self.tformself)
      self.iplus()
      pass
   #
   # ERZEUGT HEADER TAG
   # ==================
   #
   def _Header(self):
      self.out('<header>')
      self.iplus()
      pass
   #
   # ERZEUGT HEADER META
   # ===================
   #
   def Header(self,defh):
      h01=self.z(defh,"title")
      h02=self.z(defh,"sub")
      h03=self.z(defh,"back")
      h04=self.z(defh,"help")
      f="apphtml.py"
      l="Header"
      if h01 is None:
         self.error("Argument 'title' fehlt in Header().",f,l)
         pass
      if h02 is None:
         self.error("Argument 'sub' fehlt in Header().",f,l)
         pass
      if h03 is None:
         self.error("Argument 'back' fehlt in Header().",f,l)
         pass
      if h04 is None:
         self.error("Argument 'help' fehlt in Header().",f,l)
         pass
      self.out('<header>')
      self.iplus()
      self.out(self.tformself)
      self.iplus()
      self.out('<table class="center">')
      self.iplus()
      self.out('<tr class="center">')
      self.out('<td class="center"><h2>'+h01+'</h2></td></tr>')
      self.out('<tr class="center">')
      self.out('<td class="center"><h3>'+h02+'</h3></td></tr>')
      self.out('<tr class="center">')
      self.out('<td class="center">')
      self.iplus()
      self.out('<input class="fix" type="submit" name="back" value="Zurück" formaction="'+h03+'" tabindex="98"/>')
      self.out('&nbsp;')
      self.out('<input class="fix" type="submit" name="help" value="Hilfe" formaction="'+h04+'" tabindex="99"/>')
      self.isub()
      self.out('</td></tr>')
      self.isub()
      self.out('</table>')
      self.isub()
      self.out('</form>')
      self.isub()
      self.out('</header>')
      self.out('<aside>')
      self.iplus()
      pass     
   #
   # ERZEUGT META LINE
   # =================
   #
   def Line(self,deft=None,defp=None,defi=None,f="",l=""):
      if deft is None:
         self.error("Argument 'deft' fehlt in Line().",f,l)
         pass
      if defp is None:
         self.error("Argument 'defp' fehlt in Line().",f,l)
         pass
      if defi is None:
         self.error("Argument 'defi' fehlt in Line().",f,l)
         pass
      self.Row(defr=deft)
      self.Prompt(defp)
      self.Field(defi)
      self.Row_End()
      pass
   #
   #
   def Line2(self,deft=None,defp=None,defi1=None,defi2=None,defz=None,f="",l=""):
      if deft is None:
         self.error("Argument 'deft' fehlt in Line2().",f,l)
         pass
      if defp is None:
         self.error("Argument 'defp' fehlt in Line2().",f,l)
         pass
      if defi1 is None:
         self.error("Argument 'defi1' fehlt in Line2().",f,l)
         pass
      if defi2 is None:
         self.error("Argument 'defi2' fehlt in Line2().",f,l)
         pass
      if defz is None:
         self.error("Argument 'defz' fehlt in Line2().",f,l)
         pass
      self.Row(defr=deft)
      self.Prompt(defp)
      self.Field(defi1)
      self.Field(defi2)
      self.Space(defz)
      self.Row_End()
      pass

   def Line_Rev(self,deft=None,defi=None,defp=None,f="",l=""):
      if deft is None:
         self.error("Argument 'deft' fehlt in Line().",f,l)
         pass
      if defp is None:
         self.error("Argument 'defp' fehlt in Line().",f,l)
         pass
      if defi is None:
         self.error("Argument 'defi' fehlt in Line().",f,l)
         pass
      self.Row(defr=deft)
      self.Field(defi)
      self.Prompt(defp)
      self.Row_End()
      pass
      
   #
   # ERZEUGT META PAGE_END
   # =====================
   #
   def Page_End(self):
      self.isub()
      self.out('</aside>')
      self.out('<footer>')
      self.iplus()
      self.out('<?php include_once("footer.php"); ?>')
      self.isub()
      self.out('</footer>')
      self.isub()
      self.out('</body>')
      self.isub()
      self.out('</html>')
      self.out('<!--')
      self.iplus()
      self.out('Do not Enter Code after this place!')
      self.out(' ')
      self.out(' ')
      self.isub()
      self.out('-->')
      self.out(' ')
      pass
   #
   # ERZEUGT META PROMPT
   # ===================
   #
   def Prompt(self,defp=None):
      f="apphtml.py"
      l="Prompt"
      if defp is None:
         self.error("Argument 'defp' fehlt in Prompt().",f,l)
      p01 = self.z(defp,"class")
      p02 = self.z(defp,"width")
      p03 = self.z(defp,"style")
      p04 = self.z(defp,"prompt")
      #
      t='<td '
      if p01:
         t=t+'class="'+p01+'" '
      if p02:
         t=t+'width="'+p02+'" '
      if p03:
         t=t+'style="'+p03+'" '
      if p04:
         t=t+'><p class="fix"><strong>'+p04+'</strong></p>'
      t=t+'</td>'
      self.out(t)
      pass
   #
   # ERZEUGT ROW META
   # ================
   #
   def Row(self,defr=None):
      if defr is None:
         defr={ "class":"left", "width":"80%" }
      z01 = self.z(defr,"class")
      z02 = self.z(defr,"style")
      z03 = self.z(defr,"width")
      t='<tr '
      if z01:
         t=t+'class="'+z01+'" '
      if z02:
         t=t+'style="'+z02+'" '
      if z03:
         t=t+'width="'+z03+'" '
      t=t+'>'
      self.out(t)
      self.iplus()
      pass
   #
   # ERZEUGT ROW_END META
   # ====================
   #
   def Row_End(self):
      self.isub()
      self.out('</tr>')
      pass
   #
   # ERZEUGT TABLE TAG
   # =================
   #
   def Table(self,deft=None):
      if deft is None:
         self.out('<table class="center" width="80%">')
         self.iplus()
         pass
      else:
         t01 = self.z(deft,"accesskey")
         t02 = self.z(deft,"class")
         t03 = self.z(deft,"contenteditable")
         t04 = self.z(deft,"data")
         t05 = self.z(deft,"dir")
         t06 = self.z(deft,"draggable")
         t08 = self.z(deft,"id")
         t09 = self.z(deft,"lang")
         t10 = self.z(deft,"spellcheck")
         t11 = self.z(deft,"style")
         t12 = self.z(deft,"tabindex")
         t13 = self.z(deft,"title")
         t14 = self.z(deft,"translate")
         t='<table '
         if t01:
            t=t+'accesskey="'+t01+'" '
         if t02:
            t=t+'class="'+t02+'" '
         if t03:
            t=t+'contenteditable="true" '
         if t04:
            t=t+'data-'+t04+'-type '
         if t05:
            t=t+'dir="'+t05+'" '
         if t06:
            t=t+'draggable="true" '
         if t08:
            t=t+'id="'+t08+'" '
         if t09:
            t=t+'lang="'+t09+'" '
         if t10:
            t=t+'spellcheck="true" '
         if t11:
            t=t+'style="'+t11+'" '
         if t12:
            t=t+'tabindex="'+t12+'" '
         if t13:
            t=t+'title="'+t13+'" '
         if t14:
            t=t+'translate="yes" '
         t=t+'>'
         self.out(t)
         self.iplus()
         pass
   #
   # ERZEUGT /TABLE TAG
   # ==================
   #
   def Table_End(self):
      self.isub()
      self.out('</table>')
      pass      
      
   def _Field(self,deff=None):
      f="apphtml.py"
      l="Field"
      if deff is None:
         self.error("Argument 'deff' fehlt in Field().",f,l)
         pass
      z28 = self.z(deff,"space")
      z04 = self.z(deff,"input")
      z05 = self.z(deff,"class")
      z06 = self.z(deff,"type")
      z07 = self.z(deff,"name")
      z08 = self.z(deff,"action")
      z09 = self.z(deff,"method")
      z10 = self.z(deff,"target")
      z11 = self.z(deff,"size")
      z12 = self.z(deff,"maxlength")
      z13 = self.z(deff,"autofocus")
      z14 = self.z(deff,"readonly")
      z15 = self.z(deff,"required")
      z16 = self.z(deff,"tabindex")
      z17 = self.z(deff,"echo")
      z18 = self.z(deff,"strong")
      z19 = self.z(deff,"value")
      z20 = self.z(deff,"option")
      z21 = self.z(deff,"add")
      z22 = self.z(deff,"textarea")
      z23 = self.z(deff,"rows")
      z24 = self.z(deff,"cols")
      z25 = self.z(deff,"min")
      z26 = self.z(deff,"max")
      z27 = self.z(deff,"step")
      if z04:
         t='<input '
         if z05:
            t=t+'class="'+z05+'" '
         if z06:
            t=t+'type="'+z06+'" '
         else:
            t=t+'type="text" '
         if z07:
            t=t+'name="'+z07+'" '
         if z19:
            t=t+'value="'+z19+'" '
         if z25:
            t=t+'min="'+z25+'" '
         if z26:
            t=t+'max="'+z26+'" '
         if z27:
            t=t+'step="'+z27+'" '
         if z08:
            t=t+'formaction="'+z08+'" '
         if z09:
            t=t+'formmethod="'+z09+'" '
         if z10:
            t=t+'target="'+z10+'" '
         if z11:
            t=t+'size="'+str(z11)+'" '
         if z12:
            t=t+'maxlength="'+str(z12)+'" '
         else:
            t=t+'maxlength="'+str(z11)+'" '
         if z13:
            t=t+'autofocus="on" '
         if z14:
            t=t+'readonly="yes" '
         if z15:
            t=t+'required="yes" '
         if z16:
            t=t+'tabindex="'+z16+'" '
         t=t+'/>'
         if z21:
            t=t+'&nbsp;'+z21+'&nbsp;'
         self.out(t)
         pass
      if z17:
         t='<p '
         if z05:
            t=t+'class="'+z05+'" '
         t=t+'>'
         if z18:
            t=t+'<strong>'
         if z19:
            t=t+z19
         else:
            t=t+z17
         if z18:
            t=t+'</strong>'
         t=t+'</p>'
         if z21:
            t=t+'&nbsp;'+z21+'&nbsp;'
         self.out(t)
         pass
      if z20:
         t=""
         if z20:
            t=t+'<?php echo $'+z20+'; ?>'
         if z21:
            t=t+'&nbsp;'+z21+'&nbsp;'
         self.out(t)
         pass
      if z22:
         t='<textarea '
         if z05:
            t=t+'class="'+z05+'" '
         if z07:
            t=t+'name="'+z07+'" '
         if z23:
            t=t+'rows="'+z23+'" '
         if z24:
            t=t+'cols="'+z24+'" '
         if z14:
            t=t+'readonly="yes" '
         if z15:
            t=t+'required="yes" '
         if z16:
            t=t+'tabindex="'+z16+'" '
         t=t+'>'+z22+'</textarea>'
         self.out(t)
         pass
      if z28:
         t=t+'&nbsp;'
         self.out(t)
         pass
      pass
