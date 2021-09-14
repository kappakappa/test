<?php
$t=rand(1,3);
sleep($t);
header("myapp_time: ".$t);
echo "<html><body><p>response: $t</p></body></html>";
?>
/* new line */
/*comment*/
