<?php

  session_start();
  session_destroy();

  header('Location: /job-finder', true, 301);

?>