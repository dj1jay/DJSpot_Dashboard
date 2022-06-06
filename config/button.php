<?php
include ('config.php');

if (empty($status)) {
$status =  "No Data";
};


if (isset($_POST['button1']))
    {
        shell_exec('echo "9#" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Thr_Link getrennt</center></h5></p></pre>');
    }

if (isset($_POST['button2']))
    {
        shell_exec('echo "910# " > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Thr_Link zugeschaltet</center></h5></p></pre>');
    }
if (isset($_POST['button01']))
    {
        shell_exec('echo "8#" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Berlin getrennt</center></h5></p></pre>');
    }

if (isset($_POST['button02']))
    {
        shell_exec('echo "810# " > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Berlin zugeschaltet</center></h5></p></pre>');
    }

if (isset($_POST['button3']))
    {
        shell_exec('echo "91 '. $TGbtn3.'# " > '.$pty.' ');
        $status = ('<pre><h5<center><p style="color: red; ">Zuletzt Button: TG'.$TGbtn3.', gedrückt</center></h5></p></pre>');
    }
if (isset($_POST['button4']))
    {
        shell_exec('echo "91 '. $TGbtn4.'# " > '.$pty.' ');
	$status = ('<pre><h5><center><p style="color: red; ">Zuletzt Button: TG'.$TGbtn4.' gedrückt</center></h5></p></pre>');
    }
if (isset($_POST['button5']))
    {
        shell_exec('echo "91 '. $TGbtn5.'# " > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Zuletzt Button: TG'.$TGbtn5.' gedrückt</center></h5></p></pre>');
    }

if (isset($_POST['button6']))
    {
        shell_exec('echo "1" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button7']))
    {
        shell_exec('echo "2 " > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button8']))
    {
        shell_exec('echo "3" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button9']))
    {
        shell_exec('echo "4" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button10']))
    {
        shell_exec('echo "5" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button11']))
    {
        shell_exec('echo "6" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button12']))
    {
        shell_exec('echo "7" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button13']))
    {
        shell_exec('echo "8" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button14']))
    {
        shell_exec('echo "9" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button15']))
    {
        shell_exec('echo "*" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button16']))
    {
        shell_exec('echo "0" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }
if (isset($_POST['button17']))
    {
        shell_exec('echo "#" > '.$pty.' ');
    //    echo '<pre><h5><center><p style="color: red; ">Letztes Kommando: TG777 geschaltet</center></h5></p></pre>';
    }

if (isset($_POST['button18']))
    {
        shell_exec('sh /var/www/html/io/start_svx.sh');
        $status = ('<pre><h5><center><p style="color: red; ">(re)Start Svxlink </center></h5></p></pre>');
    }
if (isset($_POST['button18a']))
    {
        shell_exec('sh /var/www/html/io/stop_svx.sh');
        $status = ('<pre><h5><center><p style="color: red; ">Stop Svxlink </center></h5></p></pre>');
    }

if (isset($_POST['button19']))
    {
        shell_exec('/sbin/shutdown -h now');
        $status = ('<pre><h5><center><p style="color: red; "Shutdown</center></h5></p></pre>');
    }

if (isset($_POST['button19a']))
    {
        shell_exec('mosquitto_pub -h localhost -t "/djspot/channel/" -m "/var/www/html/io/update_dashboard_button.sh"');
        $status = ('<pre><h5><center><p style="color: red; "Update Dashboard</center></h5></p></pre>');
    }

if (isset($_POST['button19b']))
    {
        shell_exec('mosquitto_pub -t "/djspot/core/" -m "/var/www/html/config/svx_make_button.sh"');
        $status = ('<pre><h5><center><p style="color: red; "Update SvxLink</center></h5></p></pre>');
    }

if (isset($_POST['button20']))
    {
        shell_exec('echo "'.$btn20.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn20.' </center></h5></p></pre>');
    }
if (isset($_POST['button21']))
    {
        shell_exec('echo " '.$btn21.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn21.' </center></h5></p></pre>');
    }
if (isset($_POST['button22']))
    {
        shell_exec('echo "'.$btn22.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn22.' </center></h5></p></pre>');
    }
if (isset($_POST['button23']))
    {
        shell_exec('echo " '.$btn23.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn23.' </center></h5></p></pre>');
    }

if (isset($_POST['button24']))
    {
        shell_exec('echo "'.$btn24.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn24.' </center></h5></p></pre>');
    }
if (isset($_POST['button25']))
    {
        shell_exec('echo " '.$btn25.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn25.' </center></h5></p></pre>');
    }
if (isset($_POST['button26']))
    {
        shell_exec('echo "'.$btn26.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn26.' </center></h5></p></pre>');
    }
if (isset($_POST['button27']))
    {
        shell_exec('echo " '.$btn27.'" > '.$pty.' ');
        $status = ('<pre><h5><center><p style="color: red; ">Letztes DTMF Kommando: '.$btn27.' </center></h5></p></pre>');
    }
?>
