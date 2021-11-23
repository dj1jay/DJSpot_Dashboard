<!DOCTYPE html>
<html lang="de">
<head>
<?php
include ('./config/config.php');
include ('./config/button.php');
include ('./config/channelbtn.php');
include_once('./config/volbtn.php');
//include ('./config/lh.php');
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


<pre><iframe style="width:300px; height:180px;" src="https://thueringen.link/lh/lh1_index.html" frameborder="0"></iframe> <iframe style="width:300px; height:180px;" src="./config/lh1_index.html" frameborder="0"></iframe></pre>
<pre><?php echo $tg;?></pre>
  <?php echo $status;?>

    <form method="post">
<input style="height: 75px; width: 45%;"type="submit" name="vol1"
        	class="button" value="vol +" />    
<input style="height: 75px; width: 45%;"type="submit" name="vol2"
                class="button" value="vol-" />

<br></p>
<input style="height: 75px; width: 25%" type="submit" name="vol3"
                class="button" value="90%" />    
<input style="height: 75px; width: 25%;"type="submit" name="vol4"
                class="button" value="0%" />
<input style="height: 75px; width: 25%;" type="submit" name="vol5"
                class="button" value="-" />
<br>
<!--
<input style="height: 200px; width: 25%;"type="submit" name="button6"
                class="button" value="432.875"  />
<!--
<input style="height: 200px; width: 25%;" type="submit" formmethod="post" name="button7"
                class="button" value="2" />
<input style="height: 200px; width: 25%;"type="submit" name="button8"
                class="button" value="3" /><br>

<input style="height: 200px; width: 25%;"type="submit" name="button9"
                class="button" value="4" />
<input style="height: 200px; width: 25%;"type="submit" name="button10"
                class="button" value="5" />
<input style="height: 200px; width: 25%;"type="submit" name="button11"
                class="button" value="6" /><br>

<input style="height: 200px; width: 25%;"type="submit" name="button12"
                class="button" value="7" />
<input style="height: 200px; width: 25%;"type="submit" name="button13"
                class="button" value="8" />
<input style="height: 200px; width: 25%;"type="submit" name="button14"
                class="button" value="9" /><br>

<input style="height: 200px; width: 25%;"type="submit" name="button15"
                class="button" value="*" />
<input style="height: 200px; width: 25%;"type="submit" name="button16"
                class="button" value="0" />
<input style="height: 200px; width: 25%;"type="submit" name="button17"
                class="button" value="#" /><br><br>

<input style="height: 75px; width: 25%;"type="submit" name="button18"
                class="button" value="Restart svxlink --  Not Working " />
<input style="height: 75px; width: 25%;"type="submit" name="button19"
                class="button" value="Shutdown Pi" />

<br><p>
<input style="height: 75px; width: 20%;"type="submit" name="button20"
                class="button" value="<?php echo $btn_name20;?>" />
<input style="height: 75px; width: 20%;"type="submit" name="button21"
                class="button" value="<?php echo $btn_name21;?>" />

<input style="height: 75px; width: 20%;"type="submit" name="button22"
                class="button" value="<?php echo $btn_name22;?>" />
<input style="height: 75px; width: 20%;"type="submit" name="button23"
                class="button" value="<?php echo $btn_name23;?>" />
-->
</form>
</div>
</div>
<a href="https://thueringen.link"><?php echo /*$data*/'Version'," >> ", $version;?></a>
</head>
</body>  
</html>
