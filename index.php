<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400..900&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="issest/sttyle.css">
</head>

<body>
    <div id="main">

        <!-- <nav>

            <div id="menu">
                <div id="menu-a">
                    <a href="index.php">Home</a>
                    <a href="/About/index.php">About</a>

                </div>
                <div id="logo">
                    <h1><img src="issest/logo-fanta.png" alt=""></h1>
                </div>

                <div id="menu-a">
                    <a href="/product/index.php">Product</a>
                    <a href="/contact/contact.php">Contact</a>

                </div>
                <div id="menu-icon">
                    <i class="ri-menu-4-line"></i>
                </div>

            </div>
        </nav> -->


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

         <!-- <div class="slide-container">
         <div class="page1">
            <h1 id="fanta-name">FANTA</h1>
            <img id="orange-cut" src="issest/orange-cut.png" alt="">
            <img id="fanta1" src="issest/Orange-pe.png" alt="">
            <img id="orange-group" src="issest/orange-group.png" alt="">
            <img id="leaf" src="issest/leaf.png" alt="">
            <img id="leaf2" src="issest/leaf2.png" alt="">
            <img id="leaf3" src="issest/coconut-leaf.png" alt="">
            <img id="leaf4" src="issest/leaf2.png" alt="">
            <img id="leaf5" src="issest/leaf2.png" alt="">



     </div>
        <div class="page1">
            <h1 id="fanta-name">FANTA</h1>
             <img id="orange-cut" src="issest/orange-cut.png" alt="">
            <img id="fanta1" src="issest/Orange-pe.png" alt="">
            <img id="orange-group" src="issest/orange-group.png" alt="">
            <img id="leaf" src="issest/leaf.png" alt="">
            <img id="leaf2" src="issest/leaf2.png" alt="">
            <img id="leaf3" src="issest/coconut-leaf.png" alt="">
            <img id="leaf4" src="issest/leaf2.png" alt="">
            <img id="leaf5" src="issest/leaf2.png" alt="">



         </div> -->
        <div class="page1">
            <h1 id="role" id="fanta-name">FANTA</h1>
            <img id="orange-cut" src="issest/orange-cut.png" alt="">
            <model-viewer id="fanta" src="issest/fanta_can.glb" autoplay camera-controls auto-rotate></model-viewer>   
            <img id="orange-group" src="issest/orange-group.png" alt="">
            <img id="leaf" src="issest/leaf.png" alt="">
            <img id="leaf2" src="issest/leaf2.png" alt="">
            <img id="leaf3" src="issest/coconut-leaf.png" alt="">
            <img id="leaf4" src="issest/leaf2.png" alt="">
            <img id="leaf5" src="issest/leaf2.png" alt="">



        </div>

         <!-- </div> -->


        <div class="page2">
            <div id="left col-6">

                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#e95c04c3"
                        d="M51.3,-60.2C61.9,-52.2,62.7,-31.7,61.2,-14.6C59.7,2.5,55.8,16.3,48.6,27.5C41.4,38.7,30.9,47.4,18.4,53C5.9,58.6,-8.6,61.1,-26.4,60.1C-44.2,59.1,-65.3,54.5,-69.7,42.4C-74.2,30.3,-61.9,10.8,-56.2,-7.9C-50.5,-26.6,-51.3,-44.4,-43.1,-52.7C-34.8,-61.1,-17.4,-60,1.5,-61.7C20.3,-63.5,40.7,-68.1,51.3,-60.2Z"
                        transform="translate(100 100)" />
                </svg>

            </div>
            <div id="right col-6">

                <h1>Flavour Updated</h1>
                <p>At Pani Patasha, we believe that every drop of water can carry a story, every flavor can awaken a memory, and every sip can bring a smile. Our journey started with a simple idea: to bring authentic, refreshing, and exciting drinks to people who crave something beyond the ordinary.<br>
                    Join us on this flavorful journey, and let’s create moments worth savoring together.

                  Stay hydrated. Stay happy. Stay Patasha!
                </p>

            </div>
        </div>



        <div class="page3">
          <div class="row">
            <div class="card col-4">
                <img id="orange2" src="issest/orange-cut.png" alt="">

                <img id="coca-cola" src="issest/coca-cola.png" alt="">

                <h1>Sprite</h1>
             <a href="product/index.html"></a><button>Buy Now</button></a>
                
            </div>
            <div class="card col-4">
                <h1>Sprite</h1>
             <a href="product/index.html"></a><button>Buy Now</button></a>
              
            </div>
            <div class="card col-4">
                <img id="orange3" src="issest/orange-cut.png" alt="">
                <img id="sprite" src="issest/sprite.png" alt="">
                <h1>Sprite</h1>
             <a href="product/index.html"></a><button>Buy Now</button></a>
            </div>
            </div>
        

        </div>





    <!-- <div class="page4" style="height: 100vh; width: 100%; position: relative; left: 0%; background-color: #5e4949; display: flex; justify-content: center; align-items: center;">

        <div class="page4-child">

            <img id="poznan" src="issest/poznan-pol.webp" alt=""style="width: 50%; object-fit: cover;">

        </div>

    </div> -->


    <div class=page5>

    <div>
        
    </div>

    </div>

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

    </div>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>

</html>