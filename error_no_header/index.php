<?php 
// header("Surrogate-Control: \"ESI/1.0\""); 
?>
Since we're not sending the Surrogate-Control header, this won't be processed as ESI
<esi:include src="lightweight.php" />
<esi:include src="heavyweight.php" />
