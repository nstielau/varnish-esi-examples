<?php
// Set Cache-Control to expire after 2 seconds (realistically this would be minutes or hours)
header("Cache-Control: max-age=2")
?>
I'm light. Rendered at <?php echo time(); ?>.  I'll refresh every 2 seconds.
