<?php

// Dieses File ist zuständig für DJSpot hört ;-)
// DO NOT TOUCH THIS FILE

include ('./config.php');

$tg_db_array = [
    '27'		=> '<small>TG27</small> Local only DO0HWI',
    '28' 		=> '<small>TG28</small> Local only DO0RDG',
    '8'			=> '<small>TG8</small> Local Quasselstrippe',
    '80' 		=> '<small>TG80 Mecklenburg Vorpommern</small',    
    '81' 		=> '<small>TG81</small> Berlin Brandenburg',
    '82' 		=> '<small>TG82</small>',
    '83' 		=> '<small>TG83</small>',
    '84' 		=> '<small>TG84</small> NRW',
    '85' 		=> '<small>TG85</small>',
    '86' 		=> '<small>TG86</small>',
    '87' 		=> '<small>TG87</small>',
    '88' 		=> '<small>TG88</small> Bayern',
    '89'		=> '<small>TG89</small> Thüringen',
    '232'		=> '<small>TG232</small> Austria',
    '2327'		=> '<small>TG2327</small> OE Tirol',
    '262' 		=> '<small>TG262 DL</small> Link-Verbund',
    '2621'		=> '<small> Berlin Brandenburg <br> Link-Verbund</small>',
    '2622'		=> '<small>TG2622</small> Hamburg / SH',
    '2629'		=> '<small>TG2629  Thüringen / Sachsen Linkverbund</small>',
    '777'		=> '<small>TG777</small>  MultiRegioLink',
    '31868' 		=> '<small>TG31868 Weserbergland',
    '34497'		=> '<small>TG34497 Korbach / Goldhausen </small>',
    '37574' 		=> '<small>TG37574 Local Bierstadt Einbeck </small>',
    '9999'		=> 'TG9999',
    'TG2622	'	=> 'Elbe Relais Verbund'];

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

if(!empty($tg_db_array[$last_logic])) {
  $last_logic = $tg_db_array[$last_logic];
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
