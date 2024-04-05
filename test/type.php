<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Manage System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="home.html">
                        <span class="icon">
                        <ion-icon name="logo-snapchat"></ion-icon>
                        </span>
                        <span class="title">ANNY</span>
                    </a>
                </li>

                <li>
                    <a href="home.php">
                        <span class="icon">
                        <ion-icon name="home-sharp"></ion-icon>
                                              </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="brand.php">
                        <span class="icon">
                        <ion-icon name="logo-firefox"></ion-icon>
                        </span>
                        <span class="title">Brands</span>
                    </a>
                </li>

                <li>
                    <a href="type.php">
                        <span class="icon">
                        <ion-icon name="grid-sharp"></ion-icon>
                        </span>
                        <span class="title">Type Product</span>
                    </a>
                </li>

                <li>
                    <a href="product.php">
                        <span class="icon">
                        <ion-icon name="file-tray-sharp"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>

                <li>
                    <a href="user.php">
                        <span class="icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                        </span>
                        <span class="title">User</span>
                    </a>
                </li>

                <li>
                    <a href="contact.php">
                        <span class="icon">
                        <ion-icon name="call-sharp"></ion-icon>
                        </span>
                        <span class="title">Contact Us</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                        <ion-icon name="exit-sharp"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                <a href="contact.php"><img src="assets/imgs/hyunjin.jpg" alt=""></a>                </div>
            </div>

        

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Type Data</h2>
                        <a href="t_insert.php" class="btn">Add New Type</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Type</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
					include ('conn.php');
					$query=mysqli_query($conn,"SELECT * from `type`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
							<td>
								<a class="youu" href="t_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							
							<a class="youn" href="t_delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						</tr>
						<?php
					}
				?>
                        </tbody>
                    </table>
                </div>

              
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>