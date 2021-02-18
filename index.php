
<form action="" method="POST">

Sunucu İP
<input type="text" name="ip">
<input type="submit">

</form>

<?php

if($_POST){

$ip = $_POST["ip"];

$cek = file_get_contents("https://cs.center/api/$ip/27015/GetServerInfo");
$c = json_decode($cek, 1);

echo $c["data"]["0"]["HostName"]; echo "<br>";

echo $c["data"]["0"]["Map"]; echo "<br>";

echo $c["data"]["0"]["Players"]; echo "/"; echo $c["data"]["0"]["MaxPlayers"];

}

?>