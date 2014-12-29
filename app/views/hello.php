<?php include_once "includes/nav.php"; ?>

	<div class="welcome">
        <img src="http://www.seekmomentum.com/wp-content/themes/momentum/images/logo.png" alt="Momentum Ping Pong App">
		<h1>Let's Build a Ping Pong App</h1>
		<h1>Let's Build a Ping Pong App</h1>
	</div>

<?php if(DB::connection()->getDatabaseName())
{
   echo "connected sucessfully to database ".DB::connection()->getDatabaseName();
}
?>

<?php include_once "includes/footer.php"; ?>