<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM product WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Information</title>
    <link rel="stylesheet" href="assets/css/place.css">
</head>
<body>
    <div class="container">
        <div class="title">Insert Product Data</div>
		<form action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">               
			 <div class="user-details">
                    <div class="input-box">
                        <span class="details">Product Name</span>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Product Name" required>
                    </div>
					<div class="input-box">
                        <span class="details">Description</span>
                        <input type="text" name="description" value="<?php echo $row['description']; ?>" placeholder="Enter Product Description" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Price</span>
                        <input type="text" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter Product Price" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Quantity</span>
                        <input type="text" name="qty" value="<?php echo $row['qty']; ?>" placeholder="Enter Product Quantity" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Brand</span>
                        <select type="text" name="brand"   required>
						<option value="">Select brand Of Product</option>
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