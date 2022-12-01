<?php

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

session_start();
$_SESSION['isAuthenticate'] = true;

header('Location: /job-finder', true, 301);

?>