<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400..900&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="main">

        <nav>

            <div id="menu">
                <div id="menu-a">
                    <a href="index.php">Home</a>
                    <a href="/About/index.php">About</a>

                </div>
                <div id="logo">
                    <h1><img src="../issest/logo-fanta.png" alt=""></h1>
                </div>

                <div id="menu-a">
                    <a href="index.php">Product</a>
                    <a href="/contact/contact.php">Contact</a>

                </div>
                <div id="menu-icon">
                    <i class="ri-menu-4-line"></i>
                </div>

            </div>
        </nav>

        <div class="page1">
          <div class="mobile-nav">
          <div id="logo1">
                    <img src="../issest/logo-fanta.png" alt="">
                </div>
                 <div>
          <i id="menuBtn" class="ri-menu-4-fill"></i>

<!-- Sidebar -->
    <div class="page1-child fixed-top" id="mySidebar">
          <!-- <div id="mySidebar" class="sidebar"> -->
            <ul class="brand-categories">
              <img src="../issest/logo-fanta.png" alt="Logo">
              <li class="brand-item"><button  class="brand-btn active" onclick="showCategory('fanta')">Fanta Products</button></li>
              <li class="brand-item"><button class="brand-btn" onclick="showCategory('cocacola')">Coca Cola Products</button></li>
              <li class="brand-item"><button class="brand-btn"  onclick="showCategory('limca')">Limca Products</button></li>
              <li class="brand-item"><button class="brand-btn"  onclick="showCategory('maja')">Maja Products</button></li>
              <li class="brand-item"><button class="brand-btn"  onclick="showCategory('slice')">Slice Products</button></li>
              <li class="brand-item"><button  class="brand-btn" onclick="showCategory('lipton')">Lipton Products</button></li>
              <li class="brand-item"><button class="brand-btn"  onclick="showCategory('nestea')">Nestea Products</button></li>
              <li class="brand-item"><button class="brand-btn"  onclick="showCategory('sprite')">Sprite Products</button></li>
              <li class="brand-item"><button class="brand-btn"  onclick="showCategory('mountaindew')">Mountain Dew Products</button></li>
              <li class="brand-item"><button  class="brand-btn" onclick="showCategory('pepsi')">Pepsi Products</button></li>
            </ul>
</div>
</div>
          <!-- </div> -->
      </div>
            <!-- <i id="menuBtn" class="ri-menu-4-fill menu-icon"></i>

            <div id="mySidebar" class="sidebar">
              <span class="closebtn" id="closeBtn">&times;</span>
              
            </div>
            <div class="page1-child fixed-top">

                 <ul class="brand-categories">

                    <img src="../issest/logo-fanta.png" alt="" style="width: 60%;margin-top: 70%; background-color: rgba(255, 255, 0, 0.256); border-radius: 50%;border: 1px solid white;">

                <li class="brand-item">
                    <button class="brand-btn active" onclick="showCategory('fanta')">Fanta Products</button>
                </li>
                <li  class="brand-item">
                    <button class="brand-btn" onclick="showCategory('cocacola')">Coca Cola Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('limca')">Limca Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('maja')">Maja Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('slice')">Slice Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('lipton')">Lipton Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('nestea')">Nestea Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('sprite')">Sprite Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('mountaindew')">Mountain Dew Products</button>
                </li>
                <li class="brand-item">
                    <button class="brand-btn" onclick="showCategory('pepsi')">Pepsi Products</button>
                </li>
            </ul>-->
            </div>
           
             
            <div class="product-area">
  <!-- Fanta Products -->
  <div id="fanta" class="category-section active">
    <h2 class="category-title mt-5">Fanta Products</h2>
    <div class="products-grid">
      <?php
        include '../connection.php';
        $select = "SELECT * FROM `record_1`";
        $query = mysqli_query($con, $select);
        if ($query && mysqli_num_rows($query) > 0) {
          while ($mn = mysqli_fetch_assoc($query)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn['price']; ?></div>
          <a href="datashow.php?id=<?php echo $mn['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Fanta products found.</p>";
        }
      ?>
    </div>
  </div>

  <!-- Sprite Products -->
  <div id="sprite" class="category-section">
    <h2 class="category-title mt-5">Sprite Products</h2>
    <div class="products-grid">
      <?php
        // Don't include again if already included above
        // include '../connection.php'; 

        $select1 = "SELECT * FROM `record_2`";
        $query1 = mysqli_query($con, $select1);
        if ($query1 && mysqli_num_rows($query1) > 0) {
          while ($mn1 = mysqli_fetch_assoc($query1)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn1['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn1['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn1['price']; ?></div>
          <a href="datashow1.php?id=<?php echo $mn1['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
  </div>


            <!-- Pepsi Products -->
            <div id="pepsi" class="category-section">
    <h2 class="category-title mt-5">Pepsi Products</h2>
    <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_3`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow2.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No pepsi products found.</p>";
        }
      ?>
    </div>
  </div>


            <!-- Other Categories (placeholder for now) -->
            <div id="limca" class="category-section">
            <h2 class="category-title mt-5">limca Products</h2>
    <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_4`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow3.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
     </div>

            <div id="maja" class="category-section">
            <h2 class="category-title mt-5">Maja Products</h2>
    <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_5`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow4.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
     </div>

            <div id="slice" class="category-section">
                <h2 class="category-title mt-5">Slice Products</h2>
                <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_6`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow5.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
    </div>

            <div id="lipton" class="category-section">
                <h2 class="category-title mt-5">Lipton Products</h2>
                <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_7`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow6.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
    </div>

            <div id="nestea" class="category-section">
                <h2 class="category-title mt-5">Nestea Products</h2>
                <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_8`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow7.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
   </div>

            <div id="mountaindew" class="category-section">
                <h2 class="category-title mt-5">Mountain Dew Products</h2>
                <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_9`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow8.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
    </div>

            <div id="cocacola" class="category-section">
                <h2 class="category-title mt-5">Coca-cola Products</h2>
                <div class="products-grid">
      <?php
        $select2 = "SELECT * FROM `record_10`";
        $query2 = mysqli_query($con, $select2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
          while ($mn2 = mysqli_fetch_assoc($query2)) {
      ?>
      <div class="product-card">
        <div class="product-image">
          <img src="../upload/<?php echo $mn2['file']; ?>" alt="" class="img-fluid">
        </div>
        <div class="product-info">
          <h3 class="mt-2"><?php echo $mn2['name']; ?></h3>
          <div class="product-price">Price: ₹<?php echo $mn2['price']; ?></div>
          <a href="datashow9.php?id=<?php echo $mn2['id']; ?>">
            <button type="button" class="buy-btn">Buy Now</button>
          </a>
        </div>
      </div>
      <?php
          }
        } else {
          echo "<p>No Sprite products found.</p>";
        }
      ?>
    </div>
            </div>
        </div>
    </div>


    <!-- footer -->


    <footer class="footer">
  <div class="footer-container">
    <!-- Logo & About -->
    <div class="footer-section">
      <h2>Pani Patasha</h2>
      <p>Fresh & flavorful traditional drinks crafted with love. From classic Pani Patasha to fusion beverages — refresh your soul!</p>
    </div>

    <!-- Quick Links -->
    <div class="footer-section">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <!-- Popular Drinks -->
    <div class="footer-section">
      <h3>Popular Drinks</h3>
      <ul>
        <li><a href="#">Classic Pani Patasha</a></li>
        <li><a href="#">Masala Shikanji</a></li>
        <li><a href="#">Aam Panna</a></li>
        <li><a href="#">Fusion Mocktails</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="footer-section">
      <h3>Contact</h3>
      <p>123, Taste Street,<br>Food City, India</p>
      <p>Email: info@panipatasha.com</p>
      <p>Phone: +91 98765 43210</p>
      <div class="social-icons">
        <a href="#">FB</a>
        <a href="#">IG</a>
        <a href="#">TW</a>
        <a href="#">YT</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    © 2025 Pani Patasha. All rights reserved.
  </div>
</footer>




    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>

</html>