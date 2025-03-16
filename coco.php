

 <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap'); 
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <style>
  
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    :root {
      --primary-color: #6a4e23;
      --white-color: #ffffff;
      --black-color: #000000;
    }

    body {
      font-family: 'Poppins', sans-serif;
    }
    html {
  scroll-behavior: smooth; /* Enable smooth scrolling */
}
           :root {
      --primary-color: #6a4e23;
      --white-color: #ffffff;
      --black-color: #000000;
    }

    .section {
      min-height: 100vh;
      background: var(--primary-color);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;

    }

    .section .content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: var(--white-color);
      width: 100%;
      max-width: 1200px;
    }

    .section .content .details {
      flex: 1;
      padding-right: 40px;
    }

    .section .content .title {
      font-size: 48px;
      font-weight: 700;
      color: orange;
      font-family: 'Dancing Script', cursive;
    }

    .section .content .sub {
      font-size: 24px;
      font-weight: 500;
      margin-top: 10px;
    }

    .section .content .des {
      font-size: 16px;
      margin-top: 20px;
      line-height: 1.5;
    }

    .section .content .button {
      margin-top: 20px;
    }


    .section .content .order {
      background-color: #ffb100;
      padding: 12px 20px;
      color: var(--white-color);
      font-weight: 500;
      border-radius: 20px;
      margin-right: 15px;
      display: inline-block;
      text-align: center;
      width: auto;
    }

    .section .content .order:hover {
      background-color: #e0a000;
    }
    .section .image img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
:root {
  --border-radius-circle: 50%; 
  --secondary-color: #ffb100;  }

.about .content1 {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 30px;
  padding: 40px;
}

.about .img img {
  width: 100%;
  max-width: 450px;
  height: 400px;
  border-radius: var(--border-radius-circle);
  object-fit: cover;
}

.about .details1 {
  max-width: 500px;
  color: var(-color);
}

.about .sec-title {
  font-size: 36px;
  font-weight: 700;
  color: var(black); 
  margin-bottom: 20px;
}

.about .text.details1 {
  font-size: 18px;
  margin:50px 0 30px;
  text-align: center;
  line-height:30pxs;
  line-height: 1.6;
  color: var(black);
}
.about .sec-title:after {
  content: "";
  width:120px;
  height: 20px;
  background: var(--secondary-color);
  display: block;
  margin-top: 10px;
}

.menu-section {
  margin-top: 20px;
  background-color:black;


}

.menu-section .sec-title {
  font-size: 36px;
  font-weight: bold; 
  font-family: 'Poppins', sans-serif;
  color: var(--white-color);
  margin-bottom: 20px;
  position: relative;
  text-align: center;
}
.menu-section .menu-list {
  display: flex;
  justify-content: space-between; 
  padding: 0;
  margin: 0;
  flex-wrap: wrap; 
}

.menu-section .menu-list {
  display: flex;
  justify-content: center;  
  align-items: center;      
  padding: 0;
  margin: 0;
  flex-wrap: wrap; 
  width: 100%; 
}
.menu-section .sec-title:after {
  content: "";
  width: 20%;
  height: 4px;
  background: var(--secondary-color);
  display: block;
  margin: 10px auto 0;
}


.menu-section .menu-item {
  flex: 1 1 30%;
  margin: 10px;
  text-align: center;
  box-sizing: border-box; 
  display: flex;
  flex-direction: column;
  align-items: center;
  color:white;
}

.menu-image {
  width: 100%; 
  max-width: 300px; 
  height: auto; 
  object-fit: cover;
}

@media (max-width: 1200px) {
  .menu-section .menu-item {
    flex: 1 1 45%; 
  }
}

@media (max-width: 768px) {
  .menu-section .menu-item {
    flex: 1 1 100%; 
  }

  .menu-section .sec-title {
    font-size: 28px; 
  }

  .menu-section .name {
    font-size: 18px; 
  }

  .menu-section .text {
    font-size: 14px;   
  }
}
.Testimonials-section {
  padding: 50px 0 100px;
 
}

.Testimonials-section .user-image { 
  width: 180px;
  height: 180px;
  object-fit: cover;
  border-radius: 50%; 
}

.Testimonials-section .Testimonals {
  text-align: center;
  margin-bottom: 30px;
}

.Testimonials-section .sec-title {
  font-size: 36px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 40px
  font-family: 'Poppins', sans-serif;
}

.Testimonials-section .Testimonals .name {
  font-size: 22px;
  font-weight: bold;
  margin-top: 10px;
}

.Testimonials-section .Testimonals .feedback {
  font-size: 16px;
  font-style: italic;
  color: #555;
  margin-top: 10px;
}

.Testimonials-section .section-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 50px 0;
}

.Testimonials-section .sec-title:after {
  content: "";
  width: 20%;          
  height: 4px;        
  background: var(--secondary-color);  
  display: block;
  margin: 10px auto 0; 
}
.swiper-and-image-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  gap: 30px;
}

.swiper-container {
  flex: 1; 
}

.image-side {
  flex: 1;
  max-width: 400px; 
}

.side-image {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.swiper-slide {
  text-align: center;
}

.swiper-button-next,
.swiper-button-prev {
  color: #000; 
}

.swiper-pagination {
  color: #000; 
}


.sale-section {
padding: px 5px;
background-color: #f9f9f9;
border: 2px solid #ddd;
border-radius: 10px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
margin: 20px auto;
width: 70%;
max-width: 2000px;
height: 500px; 
color:indianred;
}

.section-title {
  text-align: center;
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.swiper-container {
  padding-bottom: 40px;
}

.swiper-slide {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 20px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.product-image {
  width: 100%;
  max-width: 200px;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
}

.product-info {
  margin-top: 15px;
}

.product-name {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.original-price {
  text-decoration: line-through;
  color: #999;
  font-size: 14px;
  margin-bottom: 10px;
}

.discount-price {
  color: #e60000;
  font-size: 16px;
  font-weight: bold;
}

.sale-badge {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: #ff0000;
  color: white;
  font-weight: bold;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 14px;
}

    
        #menuSidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.3s;
            padding-top: 60px;
        }

        #menuSidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 20px;
            color:white;
            display: block;
            transition: 0.3s;
        }

        #menuSidebar a:hover {
            color: #f1f1f1;
        }

        /* Close Button */
        #menuSidebar .close-btn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            color: white;
            z-index: 2; 
            cursor: pointer;
        }

        /* Header with Navbar */
        header {
            background-color: #333;
            position: static;
            width: 100%;
            top: 0;
            z-index: 5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding:20px;
        }

        .logo h2 {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            text-decoration: none;
        }

        .menu {
            display: inline-block;
            margin: 0 15px;
        }

        .menu a {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
            text-decoration: none;
        }

        .menu a:hover {
            color: #ffb100;
        }

      .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px; 
            margin-left:40%;
        }

    
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 25px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .login-form input,
        .login-form button {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .login-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 768px) {
            .menu {
                display: none;
            }
        }
        /* dark mode */        


body.dark-mode {
    background-color: black;
    color: white;
}

.toggle-button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    background-color: #007BFF;
    color: white;
    transition: background-color 0.3s;
}

.toggle-button:hover {
    background-color: #0056b3;
}

.icon {
    font-size: 20px;
}
       /* Hamburger Icon */
        .social-links {
            display: flex;
            align-items: center;
            margin-left: auto;
            position: relative;
            z-index: 10;
        }

        .social-link i {
            font-size: 30px;
            color: #fff;
        }
   
    </style>
</head>
<body>
 

<div id="menuSidebar">
    <a href="javascript:void(0)" class="close-btn" id="closeMenuBtn">
        <i class="fa-solid fa-xmark"></i> 
    </a>
       <a href="support.php">Support</a>
    <a href="contact.php">Contact Us</a>
    <a href="support.php">FAQ</a>
    <a href="#">Rresturant Survey</a>
    <a href="#">Gift Cards</a>
   <a href="#">Royal Perks</a>
    <a href="#">About Coffee </a>
    <a href="#">Legal</a>
    <div class="social-links">
        <div class="social-link-list">
          <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
        </div>
        <div class="social-link-list">
          <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="social-link-list">
          <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
        </div>
      </div>


    <a href="javascript:void(0)" id="loginLink">Login</a> 
</div>

<header>
   
    <div class="social-links">
        <a href="javascript:void(0)" class="social-link" id="menuBtn">
            <i class="fa-solid fa-bars"></i> 
        </a>
    </div>

 
<div class="logo"><h2 class="logo-text">☕ Coffee</h2></div>

   
    <ul class="navbar">
          <li class="menu"><a href="coco.php">HOME</a></li>
                <li class="menu"><a href="pro.php">PRODUCT</a></li>
                <li class="menu"><a href="mat.php">GALLERY</a></li>
                <li class="menu"><a href="service.php">SUPPORT</a></li>
                <li class="menu"><a href="contact.php">CONTACT</a></li>
                <button id="toggle-button" class="toggle-button">
            <span id="icon" class="icon">🌙</span>
        </button>
    </div>
        </div>
              
    </ul>
</header>

<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Login</h2>
        <form class="login-form">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

<br>
<br>
<br>
  <section class="sale-section">
    <h2 class="section-title">Hot Sale Products</h2>
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <!-- Product 1 -->
            <div class="swiper-slide">
                <div class="sale-badge">SALE</div>
                <img src="image/1.jpg" alt="Product 1" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Product 1</h3>
                    <p class="original-price">$199.99</p>
                    <p class="discount-price">$129.99</p>
                </div>
            </div>
        
            <div class="swiper-slide">
                <div class="sale-badge">SALE</div>
                <img src="image/13.jpg" alt="Product 2" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Product 2</h3>
                    <p class="original-price">$159.99</p>
                    <p class="discount-price">$99.99</p>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="swiper-slide">
                <div class="sale-badge">SALE</div>
                <img src="image/22.jpeg" alt="Product 3" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Product 3</h3>
                    <p class="original-price">$299.99</p>
                    <p class="discount-price">$199.99</p>
                </div>
            </div>
             <div class="swiper-slide">
                <div class="sale-badge">SALE</div>
                <img src="image/burger.png" alt="Product 3" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">Product 4</h3>
                    <p class="original-price">$299.99</p>
                    <p class="discount-price">$199.99</p>
                </div>
            </div>
             
        </div>
     
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
  <main>
    <section class="section">
      <div class="content">
        <div class="details">
          <h2 class="title">Best Coffee</h2>
          <h3 class="sub">Make your day great with our special coffee!</h3>
          <p class="des">
            Coffee culture varies around the world, from the Italian tradition of espresso drinking to the Swedish concept of fika, a social coffee break.
            In many countries, coffee is not just a drink but a ritual, often enjoyed with pastries.
          </p>
          <div class="button">
            <a href="#" class="order">Order Now</a>
            <a href="#" class="order">Contact</a>
          </div>
        </div>
        <div class="image">
          <img src="image/coffee.png" alt="Hero">
        </div>
      </div>
    </section>

<section class="about">
  <div class="content1">
    <div class="img">
      <img src="image/about.jpg" alt="About" class="img">
    </div>
    <div class="details1">
      <h2 class="sec-title">About Us</h2>
      <p class="text">At Coffee house in Berndorf, Germany, we pride ourselves on being a go-to destination for coffee lovers and conversation seekers alike. We're dedicated to providing an exceptional coffee experience in a cozy and inviting atmosphere where guests can relax, unwind, and enjoy their time in comfort.</p>
    </div>
  </div>
</section>
      

<section class="menu-section">
  <h2 class="sec-title">Our Menu</h2>
  <div class="sec-con">
    <ul class="menu-list">
      <li class="menu-item">
        <img src="image/hot.png" alt="hot" class="menu-image">
        <h2 class="name">Hot Beverages</h2>
        <p class="text">Wide range of steaming hot coffee to make you fresh and light Brew your favorite coffee, whether using a drip coffee maker, French press, espresso machine. .</p>
      </li>
      <li class="menu-item">
        <img src="image/cold.png" alt="cold" class="menu-image">
        <h2 class=" name">Cold Beverages</h2>
        <p class="text">Wide range of cold coffee to refresh your mood Blend ice, brewed coffee, milk, and sugar. For an extra creamy texture, add a scoop of vanilla or coffee-flavored ice cream.
.</p>
      </li>
      <li class="menu-item">
        <img src="image/refreshment.png" alt="refreshment" class="menu-image">
        <h2 class="name">Refreshment Beverages</h2>
        <p class="text">A variety of refreshing beverages freshly squeezed lemon juice, water, and sugar. Add a sprig of mint for a cool twist..</p>
      </li>
      <li class="menu-item">
        <img src="image/special.png" alt="special" class="menu-image">
        <h2 class="name">Specials</h2>
        <p class="text">Our special selection of drinks think beyond the usual lettuce and tomato. Consider toppings like pickled onions.</p>
      </li>
      <li class="menu-item">
        <img src="image/burger.png" alt="burger" class="menu-image">
        <h2 class="name">Burger & Fries</h2>
        <p class="text">Juicy burgers and crispy fries juicy burger topped with tender pulled pork, BBQ sauce, pickles, and coleslaw.</p>
      </li>
      <li class="menu-item">
        <img src="image/desserts.png" alt="desserts" class="menu-image">
        <h2 class="name">Desserts</h2>
        <p class="text">Sweet treats to end your meal  Crisp, buttery sugar cookies decorated with royal icing in snowflake patterns.</p>
      </li>
    </ul>
  </div>
</section>

<section class="Testimonials-section">
  <h2 class="sec-title">Testimonials</h2>
  <div class="section-content">
    <div class="swiper slider-container">

      <div class="swiper-wrapper">
        
        <div class="Testimonals swiper-slide">
          <img src="image/user-1.jpg" alt="Sarah Khan" class="user-image">
          <h2 class="name">Sarah Khan</h2>
          <i class="feedback">"Love to french roast. Perfectly balanced and rich. Will order again"</i>
        </div>
      
        <div class="Testimonals swiper-slide">
          <img src="image/user-2.jpg" alt="Anirude Rana" class="user-image">
          <h2 class="name">Anirude Rana</h2>
          <i class="feedback">"Love to french roast. Perfectly balanced and rich. Will order again"</i>
        </div>
       
        <div class="Testimonals swiper-slide">
          <img src="image/user-3.jpg" alt="Vikas Rajput" class="user-image">
          <h2 class="name">Vikas Rajput</h2>
          <i class="feedback">"Love to french roast. Perfectly balanced and rich. Will order again"</i>
        </div>
       
        <div class="Testimonals swiper-slide">
          <img src="image/user-4.jpg" alt="Sweta Shrama" class="user-image">
          <h2 class="name">Sweta Shrama</h2>
          <i class="feedback">"Love to french roast. Perfectly balanced and rich. Will order again"</i>
        </div>
       
        <div class="Testimonals swiper-slide">
          <img src="image/user-5.jpg" alt="Vansh Jain" class="user-image">
          <h2 class="name">Vansh Jain</h2>
          <i class="feedback">"Love to french roast. Perfectly balanced and rich. Will order again"</i>
        </div>
      </div>


      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

 

















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>


    

       const swiper = new Swiper('.swiper', {
  slidesPerView: 3,  
  spaceBetween: 30,  
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,               
  autoplay: {
    delay: 3000,            
  },
  breakpoints: {
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 2,
    },
  }
});

const menuBtn = document.getElementById("menuBtn");
const closeMenuBtn = document.getElementById("closeMenuBtn");
const menuSidebar = document.getElementById("menuSidebar");

menuBtn.addEventListener("click", () => {
  menuSidebar.style.width = "250px";  
});

closeMenuBtn.addEventListener("click", () => {
  menuSidebar.style.width = "0";  
});

// For the modal (login form)
const loginLink = document.getElementById("loginLink");
const loginModal = document.getElementById("loginModal");
const closeModal = document.querySelector(".modal .close");

loginLink.addEventListener("click", () => {
  loginModal.style.display = "block"; 
});

closeModal.addEventListener("click", () => {
  loginModal.style.display = "none";  
});

// Close the modal if clicked outside of the content
window.addEventListener("click", (e) => {
  if (e.target === loginModal) {
    loginModal.style.display = "none"; 
  }
});

const toggleButton = document.getElementById('toggle-button');
const icon = document.getElementById('icon');

toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    // Change icon based on the mode
    if (document.body.classList.contains('dark-mode')) {
        icon.textContent = '☀️'; // Sun icon for light mode
    } else {
        icon.textContent = '🌙'; // Moon icon for dark mode
    }
});
</script>



</body>
</html>