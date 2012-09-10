<?php 
echo "Surrogate Capabilities: " . $_SERVER['HTTP_SURROGATE_CAPABILITY'] . "\n";
if (in_array('HTTP_SURROGATE_CAPABILITY', $_SERVER)) {
  echo "Looks like an upstream surrogate supports ESI";
} else {
  echo "Looks like there is no ESI capable upstream";
}
?>

