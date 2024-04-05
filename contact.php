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
                    <a href="contact.html">
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
                    <img src="assets/imgs/hyunjin.jpg" alt="">
                </div>
            </div>
            <div class="recentCustomers">
              <div class="cardHeader">
                  <h2>Contact</h2>
              </div>

              <table>
                 
                  <tr>
                      <td width="60px">
                          <div class="imgBx">
                          <a href="contact.php"><img src="assets/imgs/hyunjin.jpg" alt=""></a>                        </div>
                      </td>
                      <td>
                          <h3>Anny Duangphachanh <br> 
                          <span></span><ion-icon name="logo-facebook"></ion-icon><span>facebook</span><br></span>
                          <span><ion-icon name="logo-wechat"></ion-icon><span>wechat</span><br></span>
                          <span><ion-icon name="logo-whatsapp"></ion-icon><span>whatsapp</span><br></span>
                        <span><ion-icon name="logo-tiktok"></ion-icon><span>tiktok</span><br></span>
                        <span><ion-icon name="logo-twitter"></ion-icon><span>twitter</span><br></span>
                        </h3>
                      </td>
                  </tr>

              </table>

              
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>