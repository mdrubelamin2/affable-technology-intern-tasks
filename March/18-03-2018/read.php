<?php

	// Database Connection
    $connection = mysqli_connect('localhost', 'root', '', 'phonebook');
    if(!$connection){
        die("Database not connected");
    }

    // Query's
    $query = "SELECT * FROM users";

    // Query Verification
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed!" . mysqli_error());
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phonebook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">

			<!-- Reading data from Database -->
			<?php
				while($row = mysqli_fetch_assoc($result)){
			?>
			<pre>
				<?php print_r($row); ?>
			</pre>
			<?php
				}
			?>

        </div>
    </div>
</div>

</body>
</html>