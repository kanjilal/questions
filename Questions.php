<?php

$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$txt = $_POST['txt'];
fwrite($myfile, $txt);
echo($txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
