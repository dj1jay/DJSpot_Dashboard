<style>
table {
    background: aliceblue;
    border-collapse: separate;
    border: 5px solid gainsboro;
    border-radius: 25px;
    width: 80%;
    height: 100px;
 }
td, th, tr {
    text-align: center;
    padding: .1em .4em;
    border-radius: 5px;
    height: 20px;
    width:10%;
 
</style>
<?php

// Dieses File ist zuständig für DJSpot hört ;-)
// DO NOT TOUCH THIS FILE

include ('./config.php');
include ('./tgdb.php');
include ('./tx.php');

$last_time	= shell_exec('grep -a "Talker" '.$log.' -w | grep -a '.$refCall.' -i | tail -1 | cut -d: -f1-3');
$last_tg 	= shell_exec('grep -a "Talker" '.$log.' | tail  -1 | cut -d" " -f8 | cut -d: -f1 | cut -c 2- ');
//$last_tg_l	= shell_exec('grep -a "talker" '.$log.' | tail -1 |
$last_logic 	= shell_exec('grep -a "Talker" '.$log.' -w | grep -a '.$refCall.' -i | tail  -1 | cut -d" " -f7-8');
$last_call 	= shell_exec('grep -a "Talker" '.$log.' | tail -1 | cut -d" " -f9' );
$tx_stat 	= shell_exec('grep -a "Turning the transmitter" '.$log.' | tail -1 | cut -d" " -f7');
$talk1 		= exec ('grep -a "The squelch is" '.$log.' | tail -1 | cut -d" " -f7');
$talk 		= exec ('grep -a "Talker" '.$log.' -w | grep -a '.$refCall.' | tail  -1 | cut -d" " -f5');
$talk2 		= exec ('grep -a "Talker" '.$log.' -w | tail  -1 | cut -d" " -f5');

$timestamp 	= time();
$datum 		= date ("d.m.Y - H:i:s", $timestamp);

$last_logic 	= substr($last_logic,4,-2);

//if(empty($last_call)) {
//  $last_call 	= "DJSpot TX";
//}

if(empty($last_time)) {
  $last_time 	= "$datum";
}

if(empty($last_logic)) {
  $last_logic = "Keine Daten";
}

if(!empty($tgdb_array[$last_logic])) {
  $last_logic = $tgdb_array[$last_logic];
}
if(!empty($tgdb_array[$last_tg])) {
    $last_tg = $tgdb_array[$last_tg];
}

if(empty($last_tg)) {
$last_tg = "";
}else{
$last_tg1 = "in TG $last_tg";
}
if($tx_stat  > 'ON'){
    $tx_stat = ($talk2 == 'start') ? "<font size='5'><b><i><p style='background-color:red'>$tx $last_call <small>$last_tg1</small></i><b/></font></p>" : "<font size='5'><b><i><p style='background-color:red'>$tx TX $tx</i></b></font>";
}else{
    $tx_stat =  "<font size='5'><b><i><p style='background-color:palegreen'>$type bereit </i></b></font>";
}
if($talk1 == 'OPEN'){
    $heard_you = ($talk == 'start') ? "<font size='5'><b><p style='background-color:cyan'>I Heard You <i><small>$last_tg1</i></small></b></font></p>" : "<font size='5'><b><p style='background-color:cyan'>I Heard You</b></font>";
}

//////////////////////////// Status Ansicht //////////////////////
echo '<body>';
echo'<center>';
echo '</hr>';
echo '<table>';
echo '<tr><td>';
if(empty($talk1)) {
echo $talk1 = $tx_stat;
}
else{
echo ($talk1 == 'CLOSED') ? " $tx_stat" : "$heard_you";
}
echo '</td></tr>';
echo '<tr><td align=center height=5>';
//echo '<br>';
if(empty($last_tg)) {
echo '<center><p style="background-color:lightgreen"><small><i>keine Daten</i></small></center></p>';
}else{
echo '<center><small><i><p style="background-color:lightgreen">Lh: '.$last_call.' TG '.$last_tg.'</i></small></center></p>';
}
echo '</td>';
echo '</tr>';

//echo '<p>';
echo '<tr>';
echo '<td><center>';
if(empty($talk)) {
echo ($talk == 'stop') ? " $last_logic" : "<small><b><font color=000ff>Noch nichts von dir gehört</b></small> ";
}else{
echo ($talk == 'stop') ? "<br><small>deine letzte TG:</small></br>  $last_logic <br>" : "<p style='background-color:lightgreen'>TG $last_logic<br>";
}
echo '</center></td></tr>';
echo '<tr><td><center>';
echo  '<i><small>', $last_time, '</small></i>';
echo '</center></td></tr>';
echo '</table>';

//echo ' <b>Lokal Zeit:',$datum,' Uhr</b></small>';
?>
</center>
</body>
