<?php
//get the file contents from the server
If (isset($_REQUEST['file'])) {
$file = basename($_REQUEST['file']);
echo file_get_contents('./Project/'.$file);
} Else {
If (is_dir('./Project') && $handle = opendir('./Project/')) {
While (False !== ($entry = readdir($handle))) {
If (!is_dir($entry)) {
echo basename($entry)."\n";
}
}
closedir($handle);
} Else {
header("HTTP/1.0 404 Not Found");
}
}
