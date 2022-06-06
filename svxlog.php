<!DOCTYPE html>
<html lang="de">
<head>
<?php
require_once('./config/config.php');
require_once ('./config/button.php');
//include_once ('./config/lh.php');
//$data = shell_exec('uptime');
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<meta name="viewport" content="width=device-width, initial-scale=-4">-->
<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="refresh" content="10">


<title><?php echo $Call;?> DJpot Channel Controller</title>
<link rel="icon" type="image/x-icon" href="/config/smiley.png">

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
<center><font size=3>SvxLog</font></center></br>
    <form method="post">

<script src="./js/jquery-3.5.0.js" type="text/javascript"></script>
 <script>
  $(document).ready(function() {
    if (localStorage.getItem("scroll") != null) {
      $(window).scrollTop(localStorage.getItem("scroll"));
    }

    $(window).on("scroll", function() {
      localStorage.setItem("scroll", $(window).scrollTop());
    });

});
    </script>

<html>


 <body>

 <h3>Logfile /var/log/svxlink:</h3>
 <textarea cols="80%" rows="25" style="overflow:scroll; font-family: Arial; font-size: 9pt; border: 3px solid; border-radius: 10px;">

<?php
	$zeilen1 = file ('/var/log/svxlink');
	$anzahl = count($zeilen1);
	for ($i=$anzahl-20; $i<$anzahl; $i++)
	{
	echo "{$zeilen1[$i]}";
	}
?>
 </textarea>
 <h3>Logfile /var/log/update:</h3>
  <textarea cols="80%" rows="16" style="overflow:scroll; font-family: Arial; font-size: 10pt; border: 3px solid; border-radius: 10px;">
<?php
	$zeilen2 = file ('/var/log/update');
	$anzahl = count($zeilen2);
	for ($i=$anzahl-15; $i<$anzahl; $i++)
	{
	echo "{$zeilen2[$i]}";
	}
?>
  </textarea>
<br>
    <form method="post">
<input style="height: 65px; width: 40%;"type="submit" name="button19b"
                class="button" value="Update Svxlink" />    
</form>

 </body>


</html>




</form>
</div>
</div>
<a href="https://thueringen.link"><?php echo /*$data*/'DJSpot-Dashboard Version'," >> ", $version;?></a>
</head>
</body>  
</html>





