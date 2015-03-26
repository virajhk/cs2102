<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Discount Airlines</title>
	<?php include( $path . "partials/meta.php" ); ?>
	<?php include( $path . "partials/styles.php" ); ?>
	<?php include( $path . "partials/scripts.php" ); ?>
</head>
<body>
	<?php include( $path . "partials/navbar.php" ); ?>
	<div class="container">
		<div class="well text-center">
			<h1>Success!</h1>
			<p>Your payment was processed and we have made your flight reservation on your behalf. </p>
			<p>Now all you need to do is to show up at the airport at the correct time with your papers. Safe flight!</p>
			<a href="/users/bookings.php" class="btn btn-default">See All My Bookings</a>
		</div>
	</div>
</body>
</html>