<?php
include ('./config.php');


if (isset($_POST['vol1']))
    {
        shell_exec('amixer set Speaker 10+');
        $status = ('<pre><h5><center><p style="color: red; ">Verbund getrennt</center></h5></p></pre>');
    }

if (isset($_POST['vol2']))
    {
        shell_exec('amixer set Speaker 10-');
        $status = ('<pre><h5><center><p style="color: red; ">Verbund eingeschaltet</center></h5></p></pre>');
    }

if (isset($_POST['vol3']))
    {
        shell_exec('echo “AT+DMOSETGROUP=0,432.8000,432.80000,0,2,0,0,1” > /dev/ttyS0 ');
        $status = ('<pre><h5<center><p style="color: red; ">Zuletzt Button: TG'.$TGbtn3.', gedrückt</center></h5></p></pre>');
    }
if (isset($_POST['vol4']))
    {
        shell_exec('echo “AT+DMOSETGROUP=0,432.8250,432.8250,0,2,0,0,1” > /dev/ttyS0 ');
	$status = ('<pre><h5><center><p style="color: red; ">Zuletzt Button: TG'.$TGbtn4.' gedrückt</center></h5></p></pre>');
    }
if (isset($_POST['channel5']))
    {
        shell_exec('echo “AT+DMOSETGROUP=0,432.8500,432.8500,0,2,0,0,1” > /dev/ttyS0 ');
        $status = ('<pre><h5><center><p style="color: red; ">Zuletzt Button: TG'.$TGbtn5.' gedrückt</center></h5></p></pre>');
    }

if (isset($_POST['channel6']))
    {
        shell_exec('echo “AT+DMOSETGROUP=0,432.8750,432.8750,0,2,0,0,1” > /dev/ttyS0 ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel7']))
    {
        shell_exec('echo "2 " > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel8']))
    {
        shell_exec('echo "3" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel99']))
    {
        shell_exec('echo "4" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel10']))
    {
        shell_exec('echo "5" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel11']))
    {
        shell_exec('echo "6" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel12']))
    {
        shell_exec('echo "7" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel13']))
    {
        shell_exec('echo "8" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['cannel14']))
    {
        shell_exec('echo "9" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel15']))
    {
        shell_exec('echo "*" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel16']))
    {
        shell_exec('echo "0" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['channel17']))
    {
        shell_exec('echo "#" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }

if (isset($_POST['channel18']))
    {
        shell_exec('killall svxlink');
        $status = ('<pre><h5><center><p style="color: red; ">Svxlink</center></h5></p></pre>');
    }

if (isset($_POST['channel19']))
    {
        shell_exec('/sbin/shutdown -h now');
        $status = ('<pre><h5><center><p style="color: red; "Shutdown</center></h5></p></pre>');
    }

if (isset($_POST['channel20']))
    {
        shell_exec('echo "'.$btn20.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn20.' </center></h5></p></pre>');
    }
if (isset($_POST['channel21']))
    {
        shell_exec('echo " '.$btn21.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn21.' </center></h5></p></pre>');
    }
if (isset($_POST['channel22']))
    {
        shell_exec('echo "'.$btn22.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn22.' </center></h5></p></pre>');
    }
if (isset($_POST['channel23']))
    {
        shell_exec('echo " '.$btn23.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn23.' </center></h5></p></pre>');
    }

?>
