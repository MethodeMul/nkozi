	<?php

	@session_start();

	if(!isset($_SESSION['myusername'])){

		header("Location: index.php");
		exit();

	}
	
	?>


