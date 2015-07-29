<?php
echo __FILE__;
echo "<br>file 3 <br>";
function writeMsg() {
    echo "Hello world!";
}

writeMsg();
echo "<br>New changes made<br>";
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>