<?php
$ip=$_SERVER["REMOTE_ADDR"];
$tab =explode(".",$ip);
if($tab[0]=="192"){
echo " domain :france(192) <br>";
echo "adress :".$tab[1]. "." .$tab[2]. "." .$tab[3];
}
else {
echo "ip ".$ip;
}
?>