<?php 
if (in_array('HTTP_SURROGATE_CAPABILITY', $_SERVER)) {
  echo "Surrogate Capabilities: '" . $_SERVER['HTTP_SURROGATE_CAPABILITY'] . "'\n";
  echo "Looks like an upstream surrogate supports ESI";
} else {
  echo "Surrogate Capabilities: ''\n";
  echo "Looks like there is no ESI capable upstream";
}
?>

