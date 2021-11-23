<!DOCTYPE html>
<html lang="de">
<head>
<?php
require_once('./config/config.php');
require_once ('./config/channelbtn.php');
//include_once ('./config/lh.php');
$data = shell_exec('uptime');
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<meta name="viewport" content="width=device-width, initial-scale=-4">-->
<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

<title><?php echo $Call;?> DJpot Channel Controller</title>

<!-- Bootstrap -->
<link href="./css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<!--<script language="JavaScript">// <![CDATA[
window.setTimeout("location.reload()",3000);
// ]]></script>
-->
</head>
<body>
<?php include ("./config/navbar.php");?>

<body style="text-align:center">   
<body bgcolor=lightgrey>

<div class="container">
<div class="panel panel-default">
 <div class="panel-heading">
 <h1 class="panel-title"><?php echo $Call;?> - DjSpot Channel Controller</h2></div>
     <div class="panel-body">
   <div class="row">

<!--
<pre><iframe style="width:300px; height:180px;" src="https://thueringen.link/lh/lh1_index.html" frameborder="0"></iframe> <iframe style="width:300px; height:180px;" src="./config/lh1_index.html" frameborder="0"></iframe></pre>
<pre><?php echo $tg;?></pre>
  <?php echo $status;?>
-->
    <form method="post">
<?php 
if ($vhf == no) {
echo '<input style="height: 75px; width: 25%;"type="submit" name="channel1"';
echo '        	class="button" value="430.025" /> ';

echo '<input style="height: 75px; width: 25%;"type="submit" name="channel2"';
echo '                class="button" value="430.050" /> ';


echo '<input style="height: 75px; width: 25%" type="submit" name="channel3"';
echo '                class="button" value="432.800" /> ';    

echo '<br></p>';

echo '<input style="height: 75px; width: 25%;"type="submit" name="channel4"';
echo '                class="button" value="432.825" /> ';

echo '<input style="height: 75px; width: 25%;" type="submit" name="channel5"';
echo '                class="button" value="432.850" /> ';

echo '<input style="height: 75px; width: 25%;"type="submit" name="button6"';
echo '                class="button" value="432.875"  /> ';
echo '<br>';
}

if ($vhf == yes) {
echo '<input style="height: 75px; width: 25%;"type="submit" name="channel7" ';
echo '          class="button" value="145.2125" /> ';

echo '<input style="height: 75px; width: 25%;"type="submit" name="channel8" ';
echo '                class="button" value="145.225" /> ';

echo '<input style="height: 75px; width: 25%" type="submit" name="channel9" ';
echo '                class="button" value="145.2375" /> ';    
echo '<br></p>';
echo '<input style="height: 75px; width: 30%;"type="submit" name="channel10" ';
echo '                class="button" value="145.250" /> ';
echo '<input style="height: 75px; width: 30%;" type="submit" name="channel11" ';
echo '                class="button" value="145.2625" /> ';
echo '<br></p>';

echo '<input style="height: 75px; width: 30%;"type="submit" name="channel12" ';
echo '                class="button" value="145.275"  /> ';

echo '<input style="height: 75px; width: 30%;"type="submit" name="channel13" ';
echo '                class="button" value="145.2875"  />';
echo '<br>';
}
?>

</form>
</div>
</div>
<a href="https://thueringen.link"><?php echo /*$data*/'DJSpot-Dashboard Version'," >> ", $version;?></a>
</head>
</body>  
</html>
