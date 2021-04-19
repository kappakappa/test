<?php
$t=sleep(rand(1,3));
echo "response $t";
header('myapp_time: $t');
?>
