<?php

header('Content-Type: text/event-stream'); //required

$s = date('s');

if($s & 1) print 'data: odd - '.$s."\n\n"; 

else print 'data: even - '.$s."\n\n";

?>
