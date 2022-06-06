<!DOCTYPE html>
<html lang="de">
<head>
<?php
include ('../config/config.php');
include ('../config/button.php');
$data = shell_exec('uptime');
$data = substr($data,12,9);
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $Call;?> DJpot Remote Controller</title>
<link rel="icon" type="image/x-icon" href="/config/smiley.png">
<!-- Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet">

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

<script src="../js/jquery-3.5.0.js" type="text/javascript"></script>
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

</head>
<body>

<?php include ("../config/navbar.php");?>
<body style="text-align:center">   
<body bgcolor=lightgrey>

<div class="container">
<div class="panel panel-default">
 <div class="panel-heading">
 <h1 class="panel-title"><?php echo $Call;?> - DjSpot  Status</h2></div>
     <div class="panel-body">
   <div class="md-6">

 <?php echo $status;?>
    <form method="post">
<input style="height: 75px; width: 45%;"type="submit" name="button1"
        	class="button" value="Verbund trennen" />          
<input style="height: 75px; width: 45%;"type="submit" name="button2"
                class="button" value="Verbund zuschalten" /></br></p>
<!--<input style="height: 75px; width: 20%;"type="submit" name="button1"
                class="button" value="Verbund trennen THR" />    
<input style="height: 75px; width: 20%;"type="submit" name="button2"
                class="button" value="Verbund zuschalten THR" />

<input style="height: 75px; width: 20%;"type="submit" name="button01"
                class="button" value="Verbund trennen BB" />    
<input style="height: 75px; width: 20%;"type="submit" name="button02"
                class="button" value="Verbund zuschalten BB" />-->
<br><p></p>

<input style="height: 75px; width: 25%" type="submit" name="button3"
                class="button" value="<?php echo $btn_name3 ;?>" />    
<input style="height: 75px; width: 25%;"type="submit" name="button4"
                class="button" value="<?php echo $btn_name4 ;?>" />
<input style="height: 75px; width: 25%;" type="submit" name="button5"
                class="button" value="<?php echo $btn_name5 ;?>" /><br></p></p>

<input style="height: 125px; width: 30%;"type="submit" name="button6"
                class="button" value="1"  />
<input style="height: 125px; width: 30%;" type="submit" formmethod="post" name="button7"
                class="button" value="2" />
<input style="height: 125px; width: 30%;"type="submit" name="button8"
                class="button" value="3" /><br></p>

<input style="height: 125px; width: 30%;"type="submit" name="button9"
                class="button" value="4" />
<input style="height: 125px; width: 30%;"type="submit" name="button10"
                class="button" value="5" />
<input style="height: 125px; width: 30%;"type="submit" name="button11"
                class="button" value="6" /><br></p>

<input style="height: 125px; width: 30%;"type="submit" name="button12"
                class="button" value="7" />
<input style="height: 125px; width: 30%;"type="submit" name="button13"
                class="button" value="8" />
<input style="height: 125px; width: 30%;"type="submit" name="button14"
                class="button" value="9" /><br></p>

<input style="height: 125px; width: 30%;"type="submit" name="button15"
                class="button" value="*" />
<input style="height: 125px; width: 30%;"type="submit" name="button16"
                class="button" value="0" />
<input style="height: 125px; width: 30%;"type="submit" name="button17"
                class="button" value="#" /><br><br></p>

<input style="height: 75px; width: 25%;"type="submit" name="button18"
                class="button" value="<?php echo $btn_name18;?>" />
<input style="height: 75px; width: 25%;"type="submit" name="button18a"
                class="button" value="<?php echo $btn_name18a;?>" />
<input style="height: 75px; width: 25%;"type="submit" name="button19"
                class="button" value="<?php echo $btn_name19;?>" /><br></p>



<input style="height: 75px; width: 25%;"type="submit" name="button19a"
                class="button" value="<?php echo $btn_name19a;?>" />
<input style="height: 75px; width: 25%;"type="submit" name="button19b"
                class="button" value="<?php echo $btn_name19b;?>" /><br></p>


<input style="height: 75px; width: 20%;"type="submit" name="button20"
                class="button" value="<?php echo $btn_name20;?>" />
<input style="height: 75px; width: 20%;"type="submit" name="button21"
                class="button" value="<?php echo $btn_name21;?>" />

<input style="height: 75px; width: 20%;"type="submit" name="button22"
                class="button" value="<?php echo $btn_name22;?>" />
<input style="height: 75px; width: 20%;"type="submit" name="button23"
                class="button" value="<?php echo $btn_name23;?>" />

</form>
</div></div>
</div>
<a href="https://thueringen.link"><?php echo 'Uptime',$data, ' ','Version'," >> ", $version;?></a>
</head>
</body>  
</html>
