<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
define ("danger",'list-group-item list-group-item-danger');
define ("success",'list-group-item list-group-item-success');
define ("run",'Läuft');
define ("stop",'Läuft nicht');


// Check, ob SvxLink läuft
// Wlan signal 
$wlan = exec('iwconfig wlan0 | grep -i quality | cut -d"=" -f3');
$wlan_name = exec('iwconfig wlan0 | grep -i ESSID | cut -d: -f2');
$wlan_speed = exec('iwconfig wlan0 |grep -i Rate | cut -d"=" -f2 | cut -d" " -f1-2 ');
exec("ps aux | grep -i 'svxlink' | grep -v grep", $pid1);
exec("ps aux | grep -c 'svxlink' | grep -v grep", $pid2);

    $service1           = ($pid1==[] ? ''.stop.'' : ''.run.'');
    $service1_badge     = ($pid1==[] ? ''.danger.'' : ''.success.'');
    $double_run		= ($pid2 > [3] ? "<b> wurde mehrfach gestartet, bitte beende den Prozess und starte SvxLink neu</b>" : ""); 
?>
<li class="<?php echo $service1_badge;?>"><span class="badge"><?php echo $service1;?></span><i><b>Svxlink</b></i> <?php echo $double_run;?></li><p>
<li class="list-group-item list-group-item-success"><span class="badge"><?php echo $wlan;?></span><span class="badge"><?php echo $wlan_speed;?></span><span class="badge"><?php echo $wlan_name;?></span><b><i>WLAN Info<b/></i></li>


</body>
</html>
