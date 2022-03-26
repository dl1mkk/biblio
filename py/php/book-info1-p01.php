<?php
   include_once("class/class_buch.php");
   $buc = new Buch();
   $log->log("book-info1.php","Execute App",__FILE__,__LINE__);
   $buc->id          =  test_input(post("id"));
   $buc->signatur    =  test_input(post("signatur"));
   $buc->autor       =  test_input(post("autor"));
   $buc->herausgeber =  test_input(post("herausgeber"));
   $buc->titel       = test_input(post("titel"));
   $buc->kategorie   = test_input(post("kategorie"));
   $buc->reihe       = test_input(post("reihe"));
   $buc->band        = test_input(post("band"));
   $buc->jahr        = test_input(post("jahr"));
   $buc->monat       = test_input(post("monat"));
   $buc->verlag      = test_input(post("verlag"));
   $buc->ort         = test_input(post("ort"));
   $buc->lagerort    = test_input(post("lagerort"));
   $buc->bestallcode = test_input(post("bestallcode"));
   $buc->isbn        = test_input(post("isbn"));
   $buc->klappentext = test_input(post("klappentext"));
   $buc->anschaffung = test_input(post("anschaffung"));
   $buc->preis       = test_input(post("preis"));
   $buc->wert        = test_input(post("wert"));
   $buc->sprache     = test_input(post("sprache"));
   $buc->einband     = test_input(post("einband"));
   $buc->bildurl     = test_input(post("bildurl"));
   $buc->sound_titel = soundex($buc->titel);
   $buc->sound_autor = soundex($buc->autor);
   $buc->sound_herausg = soundex($buc->herausgeber);
   $buc->sound_verlag = soundex($buc->verlag);
   if (!$res = $buc->update(__FILE__,__LINE__)) $buc->error(__FILE__,__LINE__);
   setcookie("signatur","",time()-3600);
   header("Location: book-list.php");
   exit;
?>
   
