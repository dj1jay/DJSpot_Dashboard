<?php
include ('config.php');
if (empty($status)) {
$status =  "No Data";
};

if (isset($_POST['vol1']))
    {
        shell_exec('amixer set Speaker 5+');
        $status = ('<pre><h5><center><p style="color: red; ">Lauter</center></h5></p></pre>');
    }

if (isset($_POST['vol2']))
    {
        shell_exec('amixer set Speaker 5-');
        $status = ('<pre><h5><center><p style="color: red; ">Leiser</center></h5></p></pre>');
    }

if (isset($_POST['vol3']))
    {
        shell_exec('amixer set Speaker 96% ');
        $status = ('<pre><h5<center><p style="color: red; ">Volume 90%</center></h5></p></pre>');
    }
if (isset($_POST['vol4']))
    {
        shell_exec('amixer set Speaker 0 ');
	$status = ('<pre><h5><center><p style="color: red; ">Mute</center></h5></p></pre>');
    }
if (isset($_POST['vol5']))
    {
        shell_exec('amixer set Speaker 85% ');
        $status = ('<pre><h5><center><p style="color: red; ">Volume 50%</center></h5></p></pre>');
    }
/*
if (isset($_POST['vol6']))
    {
        shell_exec ('');
    //    $status = ('<pre><h5><center><p style="color: red; ">Keine Funktion zugewiesen</center></h5></p></pre>');
    }
if (isset($_POST['vol7']))
    {
        shell_exec('');
    //    $status =  ('<pre><h5><center><p style="color: red; ">Keine Funktion zugewiesen</center></h5></p></pre>');
    }
if (isset($_POST['vol8']))
    {
        shell_exec(' ');
    //    $status =  ('<pre><h5><center><p style="color: red; ">Keine Funktion zugewiesen</center></h5></p></pre>');
    }
*/
?>
