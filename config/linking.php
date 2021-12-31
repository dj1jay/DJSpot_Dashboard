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

include ('config.php');
$verbund1 = "ReflectorLink";
$verbund2 = "ReflectorLink1";

define ("danger",'list-group-item list-group-item-danger');
define ("success",'list-group-item list-group-item-success');
define ("run",'verbunden');
define ("stop",'getrennt');
$lnk2 = shell_exec('grep -w "link '.$verbund2.'" '.$log.' | tail -1 | cut -d" " -f3');
$lnk1 = shell_exec('grep -w "link '.$verbund1.'" '.$log.' | tail -1 | cut -d" " -f3');


// check ob Verbund 1 aktiv
if (empty($lnk1)) {
$lnk1		= "getrennt";
}
$link1 		= ($lnk1 > 'Deactivating' ? ''.stop.''  : ''.run.'');
$link1_badge	= ($lnk1 > 'Deactivating' ? ''.danger.'': ''.success.'');

// Check Verbund 2 
if (empty($lnk2)) {
$lnk2		= "getrennt";
}
$link2          = ($lnk2 > 'Deactivating' ? ''.stop.''  : ''.run.'');
$link2_badge    = ($lnk2 > 'Deactivating' ? ''.danger.'': ''.success.'');

?>

<li class="<?php echo $link1_badge;?>"><span class="badge"><?php echo $link1;?></span>Thueringen.link </li><p>
<!--<li class="<?php echo $link2_badge;?>"><span class="badge"><?php echo $link2;?></span>Verbund Berlin </li>-->
</body>
</html>
