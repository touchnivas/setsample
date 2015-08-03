<?php

$http="http://img3.nrtwebservices.com/MidAtlantic/Properties/JPG_Main/313/1471313_2.jpg";
echo $is_http = strpos(trim($http), 'http');
if($is_http!==FALSE)
echo "NO HTTP";
else
echo "HTTP";
?>