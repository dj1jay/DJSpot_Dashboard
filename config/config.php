<?php 

// Trage hier dein Rufzeichen ein ohne Zusatz
$Call 		= "DB9HE";

// Trage hier dein Rufzeichen ein welcher im Verbund genutz wird
$refCall	= "DB9HE";

// Handelt es sich im einen VHF DJSpot ? yes / no
$vhf 		= 'no' ;

// WLAN Info im Dashboard anzeigen (yes / no )
$WLAN           = 'yes';

// Verbindung zum Verbund anzeigen (yes / no)
$lnk_info       = 'yes';

// Zur Anzeige im Dasboard, Was benutzt du? DJSpot / F8ASB (DjSpot / SvxHotspot) 
$type           = 'Djspot';

// Trage hier den Namen des Verbundes ein, der im Dashboard angezeigt werden soll
$verbund_name1  = 'FM-Funknetz';
// Name des LINKS aus der Svxlink.conf
$verbund_link1  = 'ReflectorLogic';

// Weiterer Verbund ? (yes / no)
//$verbund2       = 'no';
//$verbund_name2  = 'Verbund Berlin';
//$verbund_link2  = 'ReflectorLogic1';

// Trage den Pfad zum Svxlink Log ein
$log 		= "/var/log/svxlink";

// Trage hier den Pfad zum PTY Symblink von Svxlink ein
$pty 		= "/tmp/simplex_pty";

// Ändere hier die Button der Start und Svx Controllseite

// Trage deine TG ein, es reicht die TG ohne Zusatz
$TGbtn3		= "262";

// Welche Beschriftung soll der Button 3 haben?
$btn_name3	= "TG262 DL";

// Trage deine TG ein, es reicht die TG ohne Zusatz 
$TGbtn4		= "2620";

// Welche  Beschriftung, soll der Button 4 haben? 
$btn_name4	= "TG2620 DL";

// Trage deine TG ein, es reicht die TG ohne Zusatz
$TGbtn5		= "777";

// Welche Beschriftung, soll Button 5 haben?
$btn_name5	= "TG777 Multi";


// Die unteren Button sind frei nutzbar, es kann Echolink oder eine TG eingetragen werden!!
// Es muss das gesamte  DTMF Komando eingegeben werden zb EchoLink 2#466108# (DB0MGN)
// $btn20 - 23 jeweils das DTMF Komando  -- $btn_name20 -23 den Button Name
// bei Ansage Modul nicht gefunden in der svxlink.conf #ACTIVATE_MODULE_ON_LONG_CMD=4:EchoLink auskommentieren / oder stern vor dem Befehl zb *91777#

$btn20		= "942620#";
$btn_name20	= "TG2620 Monitor";

$btn21		= "912622#";
$btn_name21	= "TG2622";

$btn22		= "912629#";
$btn_name22	= "TG2629";

$btn23		= "9191#";
$btn_name23	= "TG 91 WW";

$btn24          = "1#";
$btn_name24     = "Papagei";

$btn25          = "2#";
$btn_name25     = "Echolink aktiv";

$btn26          = "##";
$btn_name26     = "alles trennen";

$btn27          = "*#";
$btn_name27     = "Status";

 /// DO NOT TOUCH
$btn_name18	= "(re)Start Svxlink";
$btn_name18a	= "Stop Svxlink";
$btn_name19	= "Pi Shutdown";
$btn_name19a	= "Update Dashboard";
$btn_name19b	= "Update SvxLink";


// Bitte nicht Verändern
$version = "<small><b>20220610_V 1.60</b></small>";
?>
