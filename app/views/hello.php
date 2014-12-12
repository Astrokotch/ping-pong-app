<?php include_once "includes/nav.php"; ?>

	<div class="welcome">
        <img src="http://www.seekmomentum.com/wp-content/themes/momentum/images/logo.png" alt="Momentum Ping Pong App">
		<h1>Let's Build a Ping Pong App</h1>
	</div>

    <?php $results = DB::select('select * from players where id = ?', array(1)); ?>

    <?php foreach $results as $result {
    
    echo "$result=>id";
    
    } ?>

<?php include_once "includes/footer.php"; ?>