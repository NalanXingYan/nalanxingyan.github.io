<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Type Information</title>
    <link rel="stylesheet" href="assets/css/place.css">
</head>
<body>
    <div class="container">
        <div class="title">Insert Type Data</div>
		<form action="t_add.php" method="post" enctype="multipart/form-data">               
			 <div class="user-details">
                    <div class="input-box">
                        <span class="details">Type</span>
                        <input type="text" name="name" placeholder="Enter Type Product" required>
                    </div>
                    
                </div>
                <div class="button">
                    <input type="submit" value="submit">
                </div>
				<div class="button">
				<input type="button" value="Cancel" onclick="window.location='type.php'"/>
                </div>
            </form>
    </div>
</body>
</html>