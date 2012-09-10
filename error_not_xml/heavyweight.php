<?php
// Set Cache-Control to expire after 12 seconds (realistically this would be minutes or hours)
header("Cache-Control: max-age=12")
?>
I'm heavy. Rendered at <?php echo time(); ?>.  I'll re-render every 12 seconds.
