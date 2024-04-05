<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Information</title>
    <link rel="stylesheet" href="assets/css/place.css">
</head>
<body>
    <div class="container">
        <div class="title">Insert User Data</div>
		<form action="u_update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">               
			 <div class="user-details">
                    <div class="input-box">
                        <span class="details">User Name</span>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter User Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="password" value="<?php echo $row['password']; ?>" placeholder="Enter password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="submit">
                </div>
				<div class="button">
				<input type="button" value="Cancel" onclick="window.location='user.php'"/>
                </div>
            </form>
    </div>
</body>
</html>