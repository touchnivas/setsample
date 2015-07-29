<?php

echo __FILE__;
$str = addcslashes("Hello World!","W");
echo($str); 



<?php
$number = 8;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt;
?>  
?>