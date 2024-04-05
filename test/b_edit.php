<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM brand WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Brand Information</title>
    <link rel="stylesheet" href="assets/css/place.css">
</head>
<body>
    <div class="container">
        <div class="title">Insert Brand Data</div>
		<form action="b_update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">               
			 <div class="user-details">
                    <div class="input-box">
                        <span class="details">Brand Name</span>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Brand Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Type</span>
                        <select type="text" name="type"  required>
						<option value="">Select Type Of Product</option>
				<?php
				include("conn.php");
				$brand=mysqli_query($conn,"SELECT*FROM type");
			while ($row=mysqli_fetch_array($brand)){
				?>
				<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
				<?php }?></select>
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