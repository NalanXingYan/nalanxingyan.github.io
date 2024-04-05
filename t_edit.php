<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM type WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Type Information</title>
    <link rel="stylesheet" href="assets/css/place.css">
</head>
<body>
    <div class="container">
        <div class="title">Insert Type Data</div>
		<form action="t_update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">               
			 <div class="user-details">
                    <div class="input-box">
                        <span class="details">Type</span>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Type Product" required>
                    </div>
                   
                </div>
                <div class="button">
                    <input type="submit" value="submit">
                </div>
				<div class="button">
				<input type="button" value="Cancel" onclick="window.location='brand.php'"/>
                </div>
            </form>
    </div>
</body>
</html>