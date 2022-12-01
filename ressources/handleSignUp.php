<?php

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

session_start();

header('Location: /job-finder', true, 301);

?>