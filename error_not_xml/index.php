<?php header("Surrogate-Control: \"ESI/1.0\""); ?>
aasdf: Since the first byte of this page is not '<', this won't be processed as ESI
<esi:include src="lightweight.php" />
<esi:include src="heavyweight.php" />
