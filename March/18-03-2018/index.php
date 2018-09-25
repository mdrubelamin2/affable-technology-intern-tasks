<?php
if (isset($_POST['submit'])) {
	$cell1 = $_POST['cell1'];

	$len = strlen($cell1);

switch ($len) {
	case '10':
	if (preg_match("/^[1][56789]{1}\d{8}$/", $cell1)) {
		echo "$cell1 is valid";
	} else{
		echo "$cell1 is invalid";
	}
	break;

	case '11':
		if (preg_match("/^[0][1][56789]{1}\d{8}$/", $cell1)) {
			echo "$cell1 is valid";
		} else{
			echo "$cell1 is invalid";
		}
		break;
	
	default:
		echo "mobile number is invalid.";
		break;
}

    // Database Connection
    $connection = mysqli_connect('localhost', 'root', '', 'phonebook');
    if(!$connection){
        die("Database not connected");
    }

    $name = $_POST['name'];
    $cell1 = $_POST['cell1'];
    $cell2 = $_POST['cell2'];
    $location = $_POST['location'];

    // CREATE Query
    $query = "INSERT INTO users(name, cell1, cell2, location) VALUES('$name', '$cell1', '$cell2', '$location')";

    // Query Verification
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed!" . mysqli_error());
    } else{
    	echo "<h3 class='text-success'>Record Created</h3>";
    }
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
        <h1 class="text-center">Add Contact</h1>
        <div class="col-xs-6 col-xs-offset-3">
            <form action="" method="post">
                <!-- Username -->
                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" name="name" class="form-control"></input>
                </div>
                <!-- Cell1 -->
                <div class="form-group">
                    <label for="cell1">Cell1</label>
                    <input type="tel" name="cell1" class="form-control"></input>
                </div>
                <!-- Cell2 -->
                <div class="form-group">
                    <label for="cell2">Cell1</label>
                    <input type="tel" name="cell2" class="form-control"></input>
                </div>
                <!-- Location -->
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control"></input>
                </div>
				<!-- Submit Button -->
                <input type="submit" name="submit" value="ADD CONTACT" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

</body>
</html>