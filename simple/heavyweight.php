<?php
// Set Cache-Control to expire after 12 seconds (realistically this would be minutes or hours)
header("Cache-Control: max-age=60")
?>
I'm heavy. Rendered at <?php echo date(DATE_RSS, time()); ?> (<?php echo time(); ?>).  I'll refresh every 60 seconds.
