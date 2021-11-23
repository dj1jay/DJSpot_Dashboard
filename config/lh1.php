<?php

// Dieses File ist zuständig für DJSpot hört ;-)
// DO NOT TOUCH THIS FILE

include ('./config.php');
include ('tgdb.php');


$last_time	= shell_exec('grep -a "Talker" '.$log.' -w | grep -a '.$refCall.' -i | tail -1 | cut -d: -f1-3');
$last_tg 	= shell_exec('grep -a "Talker" '.$log.' -w | grep -a '.$refCall.' -i | tail  -1 | cut -d" " -f8 | cut -d: -f1 | cut -c 2- ');
$last_logic 	= shell_exec('grep -a "Talker" '.$log.' -w | grep -a '.$refCall.' -i | tail  -1 | cut -d" " -f7-8');

$timestamp 	= time();
$datum 		= date ("d.m.Y - H:i:s", $timestamp);

$last_logic 	= substr($last_logic,4,-2);

if(empty($last_call)) {
  $last_call 	= "You Talk on5343 TG";
}

if(empty($last_time)) {
  $last_time 	= "Keine Daten";
}

if(empty($last_logic)) {
  $last_logic = "Keine Daten";
}

if(!empty($tgdb_array[$last_logic])) {
  $last_logic = $tgdb_array[$last_logic];
}



echo '<body>';
echo'<center>';

$talk = exec ('grep -a "Talker" '.$log.' -w|grep -a '.$refCall.' -i | tail  -1 | cut -d" " -f5');
echo '</hr>';
//if(empty($talk)) {
// echo  $talk    = "<h2><i><p style='background-color:palegreen'> DJSpot wartet</i></h2>";
echo ($talk == 'stop') ? "<h2><i><p style='background-color:palegreen'> DJSpot hört</i></h2> " : "<h2><p style='background-color:red'>You Talk on TG$last_tg</h2>";
echo ($talk == 'stop') ? " $last_logic" : "<p style='background-color:lightgreen'>$last_logic";
//}
echo  ' <small><p>',   ' <i>zuletzt gesendet',  '--', $last_time, ' <br></i>';
echo ' <b>Lokal Zeit:',$datum,' Uhr</b></small>';
?>
</center>
</body>
