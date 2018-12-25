<?php
$filecontent = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'sample.json');
$result = json_decode($filecontent, true);

print_r($result['title']);

?>