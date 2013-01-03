<?php
error_reporting(0);
 
for ($host=1;$host<=255;$host++) {
$hostname = '192.168.1.'.$host;
$port = 80;
$timeout = 3;
$fp = fsockopen ($hostname, $port ,$errno ,$errstr, $timeout);
    if($fp) {
     echo "Host $hostname RISPONDE.\n";
    } else {
     echo "Host $hostname non risponde.\n";
    }
}
?>
