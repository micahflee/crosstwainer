<?php

// redirect to the readme if they haven't set up config.php
if(!file_exists('config.php')) {
  header("Location: https://github.com/micahflee/crosstwainer/blob/master/README.md");
  die();
}

require_once('config.php');

?>

under construction
