<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400..900&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poetsen One", Static
}
html,body{
    height: 100%;
    width: 100%;
    color: #fff;
}
body::-webkit-scrollbar{
    display: none;

}
nav{
   position: fixed;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    z-index: 999;
    background: transparent;
    background-color: #fff;
    backdrop-filter: blur(10px);
    width: 100%;
    
}
#menu{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 50px;
    width: 100%;
     /* position: fixed; */
}
#menu-a a{
    text-decoration: none;
    color: #a44545;
    margin: 0 20px;
    font-size: 20px;
    font-weight: 500;
    
}
#menu-icon{
    display: none;
}
#logo img{
    width: 60px;
    /* height: 20px; */
}
.page1{
  height: auto;
    width: 100vw;
    background:linear-gradient( 160deg,rgb(249, 158, 2), red);
}
.card{
  height: 70vh;
  width: 70vh;
  background: transparent;
  border: 2px solid white;
  background-color: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(200px);
  margin-top: 20vh;
  border-radius: 20px;
  
}
.card img{
  margin-top: 5vh;
  position: relative;
  animation: move 1s ease-out infinite alternate;
  transition: transform 0.3s ease;
}
@keyframes move {
    from {
        top: 0px;
    }

    to {
        top: 40.px;
    }
}
.card img:hover {
    transform: scale(1.5);
    cursor: zoom-in;
  }


.card1{
  height: 70vh;
  width: 90vh;
  background: transparent;
  border: 2px solid white;
  background-color: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(200px);
  margin-top: 20vh;
  border-radius: 20px;
  
}
.data-row{
  margin-top: 25vh !important;
}
.data-row h3{
  font-size: 4rem !important;
}
.data-row strong{
  font-size: 2rem !important;
}
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 2fr));
    gap: 25px;
}

.product-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 10px;
    text-align: center;
    border: 2px solid rgba(255, 215, 0, 0.3);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.product-card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255, 215, 0, 0.1), transparent);
    transform: rotate(45deg);
    transition: all 0.6s ease;
    opacity: 0;
}

.product-card:hover::before {
    opacity: 1;
    animation: shimmer 0.6s ease-in-out;
}

@keyframes shimmer {
    0% {
        transform: translateX(-100%) rotate(45deg);
    }

    100% {
        transform: translateX(100%) rotate(45deg);
    }
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    border-color: #ffd700;
}

.product-image {
    width: 60%;
    margin: 0 auto 20px;
    position: relative;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {

    0%,
    100% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(-10px);
    }
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.product-info h3 {
    font-size: 16px;
    margin-bottom: 15px;
    line-height: 1.4;
    color: white;
}

.product-price {
    font-size: 20px;
    font-weight: 700;
    color: #ffd700;
    margin-bottom: 15px;
}

.buy-btn {
    background: linear-gradient(135deg, #ff6b35, #ff4757);
    border: none;
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.buy-btn:hover {
    background: linear-gradient(135deg, #ff4757, #ff3742);
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(255, 71, 87, 0.4);
}

.category-section {
    display: none;
}

.category-section.active {
    display: block;
}

/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        position: relative;
        height: auto;
        border-radius: 0;
    }

    .product-area {
        margin-left: 0;
        width: 100%;
    }

    .container {
        flex-direction: column;
    }

    .products-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
}
    </style>
</head>
<body>
  <div class="page1">
   <nav class="shadow">

            <div id="menu">
                <div id="menu-a">
                    <a href="/index.php">Home</a>
                    <a href="/About/index.php">About</a>

                </div>
                <div id="logo">
                    <h1><img src="../issest/logo-fanta.png" alt=""></h1>
                </div>

                <div id="menu-a">
                    <a href="/index.php">Product</a>
                    <a href="/contact/contact.php">Contact</a>

                </div>
                <div id="menu-icon">
                    <i class="ri-menu-4-line"></i>
                </div>

            </div>
        </nav>
 
<div class="container mt-5">
    <div class="row">
        <?php
        include "../connection.php";
        $ids = $_GET['id'];
        $select = "SELECT * FROM `record_1` WHERE `id`='$ids'";
        $query = mysqli_query($con,$select);
        $row = mysqli_num_rows($query);
        while($mn=mysqli_fetch_assoc($query)){
        ?>
        <div class="col-6">
            <div class="card">
              <img id="pic1" style="height:400px;" src="../upload/<?php echo $mn['file'];?>" alt="" class="img-fluid rounded">
              </div>
              <div>
              <img id="pic2" style="height:400px;" src="../upload/<?php echo $mn['file1'];?>" alt="" class="img-fluid rounded">
              </div>
              <div>
              <img id="pic3" style="height:400px;" src="../upload/<?php echo $mn['file2'];?>" alt="" class="img-fluid rounded">
              </div>
              <div>
              <img id="pic3" style="height:400px;" src="../upload/<?php echo $mn['file3'];?>" alt="" class="img-fluid rounded">
              </div>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="p-3">
                        <!-- <img id="pic4" src="../upload/<?php echo $mn['file'];?>" alt="" class="img-fluid"> -->
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3">
                        <img id="pic5" src="../upload/<?php echo $mn['file1'];?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3">
                        <img id="pic6" src="../upload/<?php echo $mn['file2'];?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3">
                        <img id="pic6" src="../upload/<?php echo $mn['file3'];?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 offset-1 mt-5 data-row">
            <h3><?php echo $mn['name'];?></h3>
            <br>
            <hr>
        
            <strong>color: <span class="p-2 text-warning mx-3"><?php echo $mn['name1'];?></span></strong>
            <br>
            <strong>Price :<?php echo $mn['price'];?></strong>
            <br>
            <br>
            <!-- <form action="add_to_cart.php" method="post"> -->
              <input type="hidden" name="id" value="<?php echo $mn['id'];?>">
              <button class="btn btn-lg btn btn-primary">Add to Cart</button>
            <!-- </form> -->
            <button class="btn btn-lg btn btn-warning mx-3" id="open">Buy Now</button>

        </div>
        <?php
        }
        ?>
    </div>
</div>
<hr>
<div class="product-area">
  <!-- Fanta Products -->
  <div id="fanta" class="category-section active">
    <div class="products-grid">
      <?php
        include '../connection.php';
        $select = "SELECT * FROM `record_6`";
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
          <a href="datashow5.php?id=<?php echo $mn['id']; ?>">
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


</div>
</body>
</html>