<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product Information</title>
    <link rel="stylesheet" href="assets/css/place.css">
</head>
<body>
    <div class="container">
        <div class="title">Insert Product Data</div>
		<form action="add.php" method="post" enctype="multipart/form-data">               
			 <div class="user-details">
                    <div class="input-box">
                        <span class="details">Product Name</span>
                        <input type="text" name="name" placeholder="Enter Product Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Description</span>
                        <input type="text" name="description" placeholder="Enter Product Description" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Price</span>
                        <input type="text" name="price" placeholder="Enter Product Price" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Quantity</span>
                        <input type="text" name="qty" placeholder="Enter Product Quantity" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Brand</span>
                        <select type="text" name="brand"  required>
						<option value="">Select Brand Of Product</option>
				<?php
				include("conn.php");
				$brand=mysqli_query($conn,"SELECT*FROM brand");
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
				<input type="button" value="Cancel" onclick="window.location='product.php'"/>
                </div>
            </form>
    </div>
</body>
</html>