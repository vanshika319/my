<style>
 @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
</style>
<style>
   header {
      background-color: var(--primary-color);
      position: fixed;
      width: 100%;
      z-index: 5;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding:15px;
      text-decoration: none;
    }
      
   .logo h2 {
  color: var(--white-color);
  font-size: 24px;
  font-weight: 600;
  text-decoration: none;
  border: none;                
  outline: none;             
}

    .menu {
      display: inline-block;
      margin: 0 15px;
    }

    .menu a {
      color: var(--white-color);
      font-size: 18px;
      font-weight: 500;
      text-transform: uppercase;
      text-decoration: none;
    }

    .menu a:hover {
      color: #ffb100;
    }

           :root {
      --primary-color: #6a4e23;
      --white-color: #ffffff;
      --black-color: #000000;
    }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        ul {
            list-style: none;
        }
     
        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ececec;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .box {
            flex: 1 1 300px;
            margin: 10px;
            background-color: #ffffff;
            border: 1px solid #ececec;
            border-radius: 5px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .img img {
            width: 100%;
            height: auto;
            object-fit: cover;
            object-position: center;
            display: block;
        }
        .text {
            padding: 30px;
            display: flex;
            flex-direction: column;
        }
        .text.text-title {
            font-size: 1.3rem;
            font-weight: 500;
            color: #272727;
        }
        .text.text-title:hover {
            color: red;
            transition: 3s ease;
        }
        .text p {
            color: #9b9b9b;
            font-size: 0.9rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 20px 0;
        }
.highlight-text {
    background-size: cover;
    background-position: center;
    color:red;
    padding: 2em;
    border-radius: 4px;
    font-size: 3rem;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold; 
    font-style: italic; 
    text-decoration: underline; 
}
. img {
    width: 100%;
    height: 200px; 
    object-fit: cover;  
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
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
        
    </style>
</head>
<body>
    <header>
    <nav class="navbar">
      <a href="#" class="logo">
        <h2 class="logo-text">☕ Coffee</h2>
      </a>
      <ul>
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
              
      </ul>
    </nav>
  </header>
  <br>
  <br>
   <div class="highlight-text">GALLERY ...!</div>
        <div class="container">
            <div class="box">
                <div class="img">
                    <img src="image/2.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                    <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/3.jpg" alt="Blog Image 2" height="50%">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                   <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/4.jpg" alt="Blog Image 3">
                </div>
                <div class="text">
                    <a href="#">What has happened to all design ideas?</a>
                    <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
        
            <div class="container">
            <div class="box">
                <div class="img">
                    <img src="image/5.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
                    <a href="#">What has happened to all  ideas?</a>
                   <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/6.jpg" alt="Blog Image 2">
                </div>
                <div class="text">
                    <a href="#">What has happened to all  ideas?</a>
                   <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/7.jpg" alt="Blog Image 3">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                   <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="http://localhost/tesst/mat.html#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/8.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
                    <a href="#">What has happened to all  ideas?</a>
                     <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="http://localhost/tesst/mat.html#">READ MORE</a>
                </p></div>
            </div>
           <div class="container">
            <div class="box">
                <div class="img">
                    <img src="image/9.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                   <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="http://localhost/tesst/mat.html#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/10.jpg" alt="Blog Image 2">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                    <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/11.jpg" alt="Blog Image 3">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                     <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
            <div class="container">
            <div class="box">
                <div class="img">
                    <img src="image/12.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                    <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/13.jpg" alt="Blog Image 2">
                </div>
                <div class="text">
                    <a href="http://localhost/tesst/mat.html#">What has happened to all  ideas?</a>
                   <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="http://localhost/tesst/mat.html#">READ MORE</a>
                </p></div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="image/14.jpg" alt="Blog Image 3">
                </div>
                <div class="text">
                    <a href="#">What has happened to all  ideas?</a>
                    <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
          <div class="box">
                <div class="img">
                    <img src="image/15.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
                    <a href="#">What has happened to all ideas?</a>
                    <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
                    <a href="#">READ MORE</a>
                </p></div>
            </div>
         <div class="box">
             <div class="img">
                    <img src="image/16.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
             <a href="#">What has happened to all ideas?</a>
        <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
        <a href="#">READ MORE</a>      
 </p></div>
</div>
         <div class="box">
             <div class="img">
                    <img src="image/17.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
             <a href="#">What has happened to all ideas?</a>
        <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
        <a href="#">READ MORE</a>      
 </p></div>
</div>
         <div class="box">
             <div class="img">
                    <img src="image/1.jpg" alt="Blog Image 1">
                </div>
                <div class="text">
             <a href="#">What has happened to all ideas?</a>
        <p> The main ingredient is green tea leaves. These leaves come from the Camellia sinensis plant and are minimally processed compared to black tea, retaining more of their natural antioxidants and polyphenols.</p><p>
        <a href="l#">READ MORE</a>      
 </p></div>
</div>


</div>
</div>
</div>
</div>
</div>
<script>
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