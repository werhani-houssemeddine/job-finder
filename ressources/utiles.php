<?php

function getFile($path){
  if(file_exists($path)){
    require $path;
  } else {
    echo "Warning file does not exist or $path is invalid";
  }
}

?>