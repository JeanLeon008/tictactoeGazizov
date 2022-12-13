<?php

?>


<section class="container-game">
<?php
	require_once 'header-sidebar.php';
	if(isset($_POST['startNewGame'])){
		header('Location: playing-game.php');
	}else{
		require_once 'start-new-game.php';
	}
	//require_once 'playing-game.php';
	// require_once 'final-game.php';
?>
</section>















