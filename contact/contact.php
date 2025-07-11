<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Pani Patasha</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #ff8a00, #e52e71);
      color: #fff;
    }

     #main{
    height: 100vh;
    width: 100%;
}
nav{
   position: fixed;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    z-index: 999;
    width: 100%;
    margin-top: -2%;
    background-color: #fff;
    background: transparent;
    backdrop-filter: blur(10px);
    
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
    color: #fff;
    padding: 20px;
    font-size: 20px;
    font-weight: 500;
    
}
#menu-icon{
    display: none;
}
#logo img{
    width: 80px;
    /* height: 20px; */
}

    header {
      text-align: center;
      padding: 2rem 1rem;
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
      margin-top: 5%;
    }

    .contact-container {
      max-width: 800px;
      margin: auto;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 1rem;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      border: none;
      outline: none;
      border: 1px solid #f0e902;
    }
    .contact-form input:hover,
    .contact-form textarea:hover{
        border:2px solid #e52e71;
        transition: cubic-bezier(0.165, 0.84, 0.44, 1) 0.4s;
    }

    .contact-form button {
      background-color: #fff;
      color: #e52e71;
      padding: 1rem;
      border: none;
      font-size: 1.1rem;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .contact-form button:hover {
      background-color: #e52e71;
      color: white;
    }

    .info {
      margin-top: 2rem;
      text-align: center;
    }

    .info p {
      margin: 0.5rem 0;
    }

    .social-icons {
      margin-top: 1rem;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .social-icons a {
      color: white;
      font-size: 1.5rem;
      text-decoration: none;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2rem;
      }
    }
    /* Footer styling */
.footer {
  margin-top: 5%;
  background-color: #064e3b; /* dark green shade */
  color: white;
  padding: 50px 20px 20px 20px;
  font-family: Arial, sans-serif;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: auto;
  gap: 20px;
  justify-content: space-between;
}

.footer-section {
  flex: 1 1 220px;
  min-width: 200px;
}

.footer-section h2 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #facc15; /* yellow shade for brand highlight */
}

.footer-section h3 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #facc15;
}

.footer-section p, .footer-section a {
  color: #d1d5db;
  font-size: 14px;
  text-decoration: none;
}

.footer-section a:hover {
  color: #facc15;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 8px;
}

.social-icons a {
  display: inline-block;
  margin-right: 10px;
  background-color: #facc15;
  color: #064e3b;
  padding: 6px 10px;
  border-radius: 4px;
  font-size: 14px;
  transition: background-color 0.3s;
}

.social-icons a:hover {
  background-color: #fff;
  color: #064e3b;
}

.footer-bottom {
  text-align: center;
  margin-top: 30px;
  border-top: 1px solid #256d47;
  padding-top: 15px;
  font-size: 13px;
  color: #d1d5db;
}

   
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

 <div id="main">

     <nav>

            <div id="menu">
                <div id="menu-a">
                    <a href="/index.html">Home</a>
                    <a href="/About/index.html">About</a>

                </div>
                <div id="logo">
                    <h1><img src="../issest/logo-fanta.png" alt=""></h1>
                </div>

                <div id="menu-a">
                    <a href="/product/index.html">Product</a>
                    <a href="/contact/contact.html">Contact</a>

                </div>
                <div id="menu-icon">
                    <i class="ri-menu-4-line"></i>
                </div>

            </div>
        </nav>

  <header>
    <h1>Contact Pani Patasha</h1>
    <p>Got a question? Want to place a drink order? Reach out to us!</p>
  </header>

  <div class="contact-container">
    <form class="contact-form" method="post" id="form">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email"  name="email" placeholder="Your Email" required />
      <textarea rows="5" name="message" placeholder="Your Message"></textarea>
      <button type="submit">Send Message</button>
    </form>

    <div class="info">
      <p><strong>Phone:</strong> +91 7564954095</p>
      <p><strong>Email:</strong>ligeraryan@gmail.com</p>
      <p><strong>Address:</strong> Shop No. 21, Drink Street, Patna, Bihar</p>
    </div>

    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-square"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter-square"></i></a>
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

<script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbx--GZ-63Mprn47P8SDsGSh2I69LiyvIXThhc5w3oXjGap7xRID5reCxzlx2y0U5j7e/exec';
        const form = document.getElementById('form');
        const button = form.querySelector("button");

        form.addEventListener('submit', e => {
            e.preventDefault();
            button.disabled = true;
            button.innerText = "send messaging...";

        let d =new FormData(form);
            fetch(scriptURL, {
                method: 'POST',
                body:d
            })
                .then(response => {
                    alert("Form submitted successfully! 🎉");
                    form.reset();
                    button.disabled = false;
                    button.innerText = "Sent";

                })
                .catch(error => {
                    console.error('Error!', error.message);
                    alert("Something went wrong. Please try again.👍👍");
                });
        });

</script>
</body>
</html>
