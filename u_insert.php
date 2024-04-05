<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User Information</title>
    <link rel="stylesheet" href="assets/css/place.css">
</head>
<body>
    <div class="container">
        <div class="title">Insert User Data</div>
		<form action="u_add.php" method="post" enctype="multipart/form-data">               
			 <div class="user-details">
                    <div class="input-box">
                        <span class="details">User Name</span>
                        <input type="text" name="name" placeholder="Enter User Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="password" placeholder="Enter Password" required>
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