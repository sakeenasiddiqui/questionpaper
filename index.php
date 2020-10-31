<?php include 'header.php'?>

	<div id="main">
		<?php
			if(isset($_SESSION['loginuser'])){
				echo '<h3>Available tests:';
				echo '<h4><a href="examview.php">Javascript Test</a></h4>';
				echo '<h4><a href="examview1.php">Datastructure Test</a></h4>';
				echo '<h4><a href="examview2.php">Operating System Test</a></h4>';
			}
			else{
				echo "<h4>Please Login to view list of all the tests.</h4>";
			}
		 ?>

	</div>

<?php include 'footer.php' ?>
