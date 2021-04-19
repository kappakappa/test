<?php
$t=sleep(rand(1,3));
header("myapp_time: $t");
echo "<html><body><p>response: $t</p></body></html>";

?>
