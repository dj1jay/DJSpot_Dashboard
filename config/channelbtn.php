<?php
include ('./config.php');


if (isset($_POST['channel1']))
    {
        shell_exec('sh /var/www/html/config/channels/430.025.sh');
    }

if (isset($_POST['channel2']))
    {
        shell_exec('sh /var/www/html/config/channels/430.050.sh');
    }

if (isset($_POST['channel3']))
    {
        shell_exec('sh /var/www/html/config/channels/432.800.sh');
    }
if (isset($_POST['channel4']))
    {
        shell_exec('sh /var/www/html/config/channels/432.825.sh');
    }
if (isset($_POST['channel5']))
    {
        shell_exec('sh /var/www/html/config/channels/432.850.sh');
    }

if (isset($_POST['channel6']))
    {
        shell_exec('sh /var/www/html/config/channels/432.875.sh');
    }
if (isset($_POST['channel7']))
    {
	shell_exec("sh /var/www/html/config/channels/145.2125.sh");
    }
if (isset($_POST['channel8']))
    {
        shell_exec('sh /var/www/html/config/channels/145.225.sh');
    }
if (isset($_POST['channel9']))
    {
        shell_exec('sh /var/www/html/config/channels/145.2375.sh');
    }
if (isset($_POST['channel10']))
    {
        shell_exec('sh /var/www/html/config/channels/145.250.sh');
    }
if (isset($_POST['channel11']))
    {
        shell_exec('sh /var/www/html/config/channels/145.2625.sh ');
    }
if (isset($_POST['channel12']))
    {
        shell_exec('sh /var/www/html/config/channels/145.275.sh');
    }
if (isset($_POST['channel13']))
    {
        shell_exec('sh /var/www/html/config/channels/145.2875.sh');
    }

/*  // Zur Erweiterung der Channelbuttons
 
if (isset($_POST['cannel14']))
    {
        shell_exec('befehl ');
    }
if (isset($_POST['channel15']))
    {
        shell_exec('Befehl ');
    }
if (isset($_POST['channel16']))
    {
        shell_exec('Befehl ');
    }
if (isset($_POST['channel17']))
    {
        shell_exec('Befehl ');
    }

if (isset($_POST['channel18']))
    {
        shell_exec('Befehl');
    }

if (isset($_POST['channel19']))
    {
        shell_exec('Befehl');
    }

if (isset($_POST['channel20']))
    {
        shell_exec('Befehl');
    }
*/

?>
