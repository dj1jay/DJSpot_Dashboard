<?php 

// Trage hier dein Rufzeichen ein ohne Zusatz
$Call 		= "DJ1JAY";

// Trage hier dein Rufzeichen ein welcher im Verbund genutz wird
$refCall	= "DJ1JAY";

// Handelt es sich im einen VHF DJSpot ? yes / no
$vhf 		= 'no' ;

// Trage den Pfad zum Svxlink Log ein
$log 		= "/var/log/svxlink";

// Trage hier den Pfad zum PTY Symblink von Svxlink ein
$pty 		= "/tmp/simplex_pty";

// Ändere hier die Button der Start und Svx Controllseite

// Trage deine TG ein, es reicht die TG ohne Zusatz
$TGbtn3		= "89";

// Welche Beschriftung soll der Button 3 haben?
$btn_name3	= "TG89 Thr";

// Trage deine TG ein, es reicht die TG ohne Zusatz 
$TGbtn4		= "262";

// Welche  Beschriftung, soll der Button 4 haben? 
$btn_name4	= "TG262 DL";

// Trage deine TG ein, es reicht die TG ohne Zusatz
$TGbtn5		= "777";
// Welche Beschriftung, soll Button 5 haben?
$btn_name5	= "TG777 Multi";


// Die unteren Button sind frei nutzbar, es kann Echolink oder eine TG eingetragen werden!!
// Es muss das gesamte  DTMF Komando eingegeben werden zb EchoLink 2#466108# (DB0MGN)
// $btn20 - 23 jeweils das DTMF Komando  -- $btn_name20 -23 den Button Name
// bei Ansage Modul nicht gefunden in der svxlink.conf #ACTIVATE_MODULE_ON_LONG_CMD=4:EchoLink auskommentieren / oder stern vor dem Befehl zb *91777#

$btn20		= "948#";
$btn_name20	= "TG8 Moni";

$btn21		= "9180#";
$btn_name21	= "TG80";

$btn22		= "912622#";
$btn_name22	= "TG2622";

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
$btn_name18	= "Kill Svx";
$btn_name19	= "Pi Shutdown";


// Bitte nicht Verändern
$version = "<small><b>20211123_V 1.39</b></small>";
?>
