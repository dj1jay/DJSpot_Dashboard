<style>
body {
  margin: ;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 12px 26px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>

<body>

<div class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="../index.php"><?php echo $Call;?></a></div>
<div id="navbar" class="navbar-collapse">
<ul class="nav navbar-nav">
<li>  	<a href="../index.php">Home</a></li>
<li>  	<a href="../io/io.php">Svx Controll</a></li>
<li>	<a href="../dashboard.php">Dashboard</a></li>
<li>	<a href="../volume.php">Lautstärke</a></li>
<li>  <a href="../channel.php">Kanalwechsel</a></li>
</ul></div>
</div>
</div>
</nav>


