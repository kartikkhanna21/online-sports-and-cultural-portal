<?php
/**
 * download.php
 */

if (!empty($_GET['file'])) {
    // Security, down allow to pass ANY PATH in your server
    $fileName = basename($_GET['file']);
} else {
    return;
}

$filePath = '../Docs/'. $fileName;
if (!file_exists($filePath)) {
    return;
}
$iparr = explode (".", $fileName);

if($iparr[1]=='pdf'){
header("Content-disposition: attachment; filename=" . $fileName);
header("Content-type: application/pdf");
readfile($filePath);
}
else if($iparr[1]=='zip')
{
    header("Content-disposition: attachment; filename=" . $fileName);
    header("Content-type: application/zip");
    readfile($filePath);
}

?>