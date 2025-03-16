<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6a4e23;
            --white-color: #ffffff;
            --highlight-color: #ffb100;
            --hover-opacity: 0.8;
        }

       body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    padding-top:20px; 
}


        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .product {
            background-color: #ffffff;
            border: 1px solid #ececec;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .product-img img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .product-info {
            padding: 15px;
        }

        .product-info h3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
        }

        .product-info p {
            color: #666;
            margin: 10px 0;
        }

        .price {
            color: #ff2a68;
            font-size: 1.2rem;
            font-weight: 700;
            margin-top: 10px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, opacity 0.3s;
        }

        .add-to-cart {
            background-color: var(--primary-color);
            color: var(--white-color);
        }

        .buy-now {
            background-color: var(--highlight-color);
            color: black;
        }

        .button:hover {
            opacity: var(--hover-opacity);
        }

    
        @media (max-width: 768px) {
            .container {
                justify-content: center;
            }

            .product {
                max-width: 100%;
            }
        }

        .highlight-container {
            margin-bottom: 40px;
            text-align: center;
            padding: 20px;
            margin-top:5%;
        }

        .highlight-text {
            font-family: 'Dancing Script', cursive;
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-color);
            background-color: #f8f8f8;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .coffee-highlight {
            background-color: #fff8e1;
            border: 2px solid #ffb100;
            padding: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .cookie-highlight {
            background-color: #f1f8e9;
            border: 2px solid #66bb6a;
            padding: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
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


.cart-icon {
    display: flex;
    align-items: center;
    font-size: 18px;
    gap: 5px;
    cursor: pointer;
    color: var(--white-color); /* Ensure the cart icon is white */
}

.menu {
    display: inline-block;
    margin: 0 15px;
    padding-inline:30px;
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

/* Ensuring the cart icon is on the right side */
.navbar .menu:last-child {
    margin-right: auto; /* Push other items to the left */
}

.navbar .cart-icon {
    margin-left: 15px; /* Add some space to the left of the cart icon */
}

/* Responsive Layout */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column; /* Stack navbar items on smaller screens */
        align-items: flex-start;
    }

    .cart-icon {
        position: absolute;
        top: 10px;
        right: 20px; /* Align it to the right side of the header */
    }

    .menu {
        margin: 10px 0;
    }
}

           :root {
      --primary-color: #6a4e23;
      --white-color: #ffffff;
      --black-color: #000000;
    }

.product-img img {
    width: 100%;
    height: 200px; 
    object-fit: cover;  
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.add-to-cart {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.buy-now {
    background-color: var(--highlight-color);
    color: black;
}

.button:hover {
    opacity: var(--hover-opacity);
}
    #cart-modal {
        display: none;
        position: fixed;
        top: 10px;
        right: 10px;
        width: 250px;
        max-height: 60vh;
        background-color: white;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
        padding: 15px;
        overflow-y: auto;
        border-radius: 8px;
        z-index: 10;
    }

    #cart-items {
        font-size: 14px;
        margin-bottom: 10px;
    }

    #total-price {
        font-size: 16px;
        font-weight: bold;
        color: #ff2a68;
    }

    #payment-method {
        width: 100%;
        padding: 8px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-top: 10px;
    }

    button {
        padding: 8px 15px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        margin-top: 10px;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .clear-cart {
        background-color: #ff2a68;
        color: white;
    }

    .clear-cart:hover {
        opacity: 0.8;
    }
    /*dark mode*/


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
               <div class="logo"><h2 class="logo-text">☕ Coffee</h2></div>
              <div class="cart-icon" onclick="toggleCart()">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count">0</span> items in cart
            </div>
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
              
    </header>
<br>
<br>
<br>
  
<div class="highlight-container">
    <div class="highlight-text">COFFEE ...!</div>
    <div class="container">
        <!-- Coffee Product 1 -->
        <div class="product" onclick="window.location.href='https://www.zamota.com';">
    <div class="product-img">
        <img src="image/2.jpg" alt="Coffee 1">
    </div>
    <div class="product-info">
        <h3>Premium Espresso</h3>
        <p>A rich and full-bodied espresso blend, perfect for your morning boost.</p>
        <p class="price">$5.99</p>
        <div class="buttons">
            <button class="button add-to-cart">Add to Cart</button>
            <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
        </div>
    </div>
</div>



        <!-- Coffee Product 2 -->
   <div class="product" onclick="window.location.href='https://www.zamota.com';">           
    <div class="product-img">
                <img src="image/3.jpg" alt="Coffee 2">
            </div>
            <div class="product-info">
                <h3>Coffee Beans Selection</h3>
                <p>Our finest coffee beans from across the globe, hand-picked for your enjoyment.</p>
                <p class="price">$8.99</p>

               <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>
    

        <!-- Coffee Product 3 -->
     <div class="product" onclick="window.location.href='https://www.zamota.com';">
            <div class="product-img">
                <img src="image/4.jpg" alt="Coffee 3">
            </div>
            <div class="product-info">
                <h3>Iced Coffee Blend</h3>
                <p>Chill out with our refreshing iced coffee blend, a perfect treat for any time of the day.</p>
                <p class="price">$4.99</p>

                <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>

    <!-- burger Section -->
    <div class="highlight-container">
    <div class="highlight-text">BURGER ...!</div>
    <div class="container">
        <!-- Burger Product 1 -->
      <div class="product" onclick="window.location.href='https://www.zamota.com';">
            <div class="product-img">
                <img src="image/14.jpg" alt="Burger 1">
            </div>
            <div class="product-info">
                <h3>Classic Burger</h3>
                <p>Juicy beef patty with fresh vegetables and a toasted bun.</p>
                <p class="price">$7.99</p>
     <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>

    

        <!-- Burger Product 2 -->
       <div class="product" onclick="window.location.href='https://www.zamota.com';">
            <div class="product-img">
                <img src="image/15.jpg" alt="Burger 2">
            </div>
            <div class="product-info">
                <h3>Cheese Burger</h3>
                <p>Classic burger with melted cheese for that extra flavor.</p>
                <p class="price">$8.49</p>

 <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>

        <!-- Burger Product 3 -->
     <div class="product" onclick="window.location.href='https://www.zamota.com';">            
        <div class="product-img">
                <img src="image/burger.png" alt="Burger 3">
            </div>
            <div class="product-info">
                <h3>Veggie Burger</h3>
                <p>A delicious plant-based patty with fresh veggies.</p>
                <p class="price">$6.49</p>


 <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--soft drink  -->    
    <<div class="highlight-container">
    <div class="highlight-text">SHAKES ...!</div>
    <div class="container">
        <!-- Shake Product 1 -->
        <div class="product" onclick="window.location.href='https://www.zamota.com';">           
         <div class="product-img">
                <img src="image/26.jpeg" alt="Ice Cream 1">
            </div>
            <div class="product-info">
                <h3>Chocolate</h3>
                <p>Cool down with our rich and creamy ice cream, crafted with the finest ingredients to create a sweet treat.</p>
                <p class="price">$7.99</p>

 <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>



        <!-- Shake Product 2 -->
        <div class="product" onclick="window.location.href='https://www.zamota.com';">         
            <div class="product-img">
                <img src="image/27.jpeg" alt="Ice Cream 2">
            </div>
            <div class="product-info">
                <h3>Chocolate</h3>
                <p>Rich and creamy ice cream with the finest ingredients to create a sweet, indulgent treat.</p>
                <p class="price">$8.49</p>
                 <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>


        <!-- Shake Product 3 -->
   <div class="product" onclick="window.location.href='https://www.zamota.com';">            
    <div class="product-img">
                <img src="image/28.jpeg" alt="Ice Cream 3">
            </div>
            <div class="product-info">
                <h3>Chocolate</h3>
                <p>Cool down with our rich and creamy ice cream, crafted with the finest ingredients to create a sweet, indulgent treat.</p>
                <p class="price">$6.49</p>

                 <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Soft Drink -->
<div class="highlight-container">
    <div class="highlight-text">SOFT DRINK ...!</div>
    <div class="container">
        <!-- Soft Drink Product 1 -->
     <div class="product" onclick="window.location.href='https://www.zamota.com';">
            <div class="product-img">
                <img src="image/29.jpeg" alt="Drink 1">
            </div>
            <div class="product-info">
                <h3>Flavor and Bubbles</h3>
                <p>Refresh your senses with our deliciously fizzy soft drinks.</p>
                <p class="price">$7.99</p>
 <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>
        

        <!-- Soft Drink Product 2 -->
    <div class="product" onclick="window.location.href='https://www.zamota.com';">
            <div class="product-img">
                <img src="image/30.jpeg" alt="Drink 2">
            </div>
            <div class="product-info">
                <h3>Soft Drink</h3>
                <p>Classic melted cheese for that extra flavor.</p>
                <p class="price">$8.49</p>
                  <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>
       

        <!-- Soft Drink Product 3 -->
      <div class="product" onclick="window.location.href='https://www.zamota.com';">           
       <div class="product-img">
                <img src="image/13.jpg" alt="Drink 3">
            </div>
            <div class="product-info">
                <h3>Refresh Your Senses</h3>
                <p>A delicious plant-based patty with a fresh drink.</p>
                <p class="price">$6.49</p>
                 <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Premium Espresso', 5.99)">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <div class="highlight-container">
        <div class="highlight-text">COOKIE ...!</div>
        <div class="container">
            <!-- Cookie Product 1 -->
           <div class="product" onclick="window.location.href='https://www.zamota.com';">                
            <div class="product-img">
                    <img src="image/22.jpeg" alt="Cookie 1">
                </div>
                <div class="product-info">
                    <h3>Sweetness and Crunch</h3>
                    <p>Indulge in the warm, gooey goodness of freshly baked cookies.</p>
                    <p class="price">$7.99</p>
                    <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Sweetness and Crunch', 7.99)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Cookie Product 2 -->
            <div class="product" onclick="window.location.href='https://www.zamota.com';">                
                <div class="product-img">
                    <img src="image/23.jpeg" alt="Cookie 2">
                </div>
                <div class="product-info">
                    <h3>Sweetness and Crunch</h3>
                    <p>Indulge in the warm, gooey goodness of freshly baked cookies.</p>
                    <p class="price">$8.49</p>
                    <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Sweetness and Crunch', 8.49)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Cookie Product 3 -->
           <div class="product" onclick="window.location.href='https://www.zamota.com';">
                <div class="product-img">
                    <img src="image/24.jpeg" alt="Cookie 3">
                </div>
                <div class="product-info">
                    <h3>Sweetness and Crunch</h3>
                    <p>Indulge in the warm, gooey goodness of freshly baked cookies.</p>
                    <p class="price">$6.49</p>
                    <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Sweetness and Crunch', 6.49)">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="highlight-container">
        <div class="highlight-text">SPECIAL ...!</div>
        <div class="container">
            <!-- Special Product 1 -->
           <div class="product" onclick="window.location.href='https://www.zamota.com';">
                <div class="product-img">
                    <img src="image/11.jpg" alt="Special 1">
                </div>
                <div class="product-info">
                    <h3>Fresh</h3>
                    <p>Juicy beef patty with fresh vegetables and a toasted bun.</p>
                    <p class="price">$7.99</p>
                    <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Fresh', 7.99)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Special Product 2 -->
          <div class="product" onclick="window.location.href='https://www.zamota.com';">
                <div class="product-img">
                    <img src="image/12.jpg" alt="Special 2">
                </div>
                <div class="product-info">
                    <h3>Chola Kulcha</h3>
                    <p>Classic burger with melted cheese for that extra flavor.</p>
                    <p class="price">$8.49</p>
                    <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Chola Kulcha', 8.49)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Special Product 3 -->
         <div class="product" onclick="window.location.href='https://www.zamota.com';">
                <div class="product-img">
                    <img src="image/18.jpg" alt="Special 3">
                </div>
                <div class="product-info">
                    <h3>Soft Drinks</h3>
                    <p>A delicious plant-based patty with fresh ingredients.</p>
                    <p class="price">$6.49</p>
                    <div class="buttons">
                        <button class="button add-to-cart">Add to Cart</button>
                        <button class="button buy-now" onclick="buyNow('Soft Drinks', 6.49)">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="cart-modal" style="display: none; position: fixed; top: 0; right: 0; width: 300px; height: 100vh; background-color: white; box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2); padding: 20px;">
    <h3>Your Cart</h3>
    <div id="cart-items"></div>
    <p><strong>Total: $<span id="total-price">0.00</span></strong></p>
    
    <!-- Payment method selection inside the cart modal -->
    <div>
        <label for="payment-method">Select Payment Method:</label>
        <select id="payment-method" name="payment-method">
            <option value="credit-card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bank-transfer">Bank Transfer</option>
            <option value="cash">cash</option>
        </select>
    </div>



    <!-- Proceed to Payment Button -->
    <button onclick="processPayment()">Proceed to Payment</button>

    <!-- Clear Cart Button -->
    <button class="clear-cart" onclick="clearCart()">Clear Cart</button>
</div>
<script>
   // Function to update cart display
function updateCartDisplay() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartCount = cart.length;
    document.getElementById('cart-count').textContent = cartCount;

    if (cartCount > 0) {
        document.getElementById('cart-modal').style.display = 'block';
        displayCartItems();
    } else {
        document.getElementById('cart-modal').style.display = 'none';
    }
}

// Function to add item to the cart
function addToCart(productName, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ productName, price });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${productName} has been added to your cart!`);
    updateCartDisplay();
}

// Function to clear the cart
function clearCart() {
    localStorage.removeItem('cart');
    alert('Your cart has been cleared!');
    updateCartDisplay();
}

// Function to display cart items in the modal
function displayCartItems() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItemsDiv = document.getElementById('cart-items');
    let totalPrice = 0;
    cartItemsDiv.innerHTML = ''; // Clear previous items

    if (cart.length === 0) {
        cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
    } else {
        cart.forEach(item => {
            cartItemsDiv.innerHTML += `<p>${item.productName} - $${item.price.toFixed(2)}</p>`;
            totalPrice += item.price; // Sum up the total price
        });
        document.getElementById('total-price').textContent = totalPrice.toFixed(2); // Display total price
    }
}

// Event listeners for "Add to Cart" buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart');
addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
        const productInfo = this.closest('.product-info');
        const productName = productInfo.querySelector('h3').textContent;
        const price = productInfo.querySelector('.price').textContent;
        const parsedPrice = parseFloat(price.replace('$', '').trim());
        addToCart(productName, parsedPrice);
    });
});

// Toggle cart modal visibility
function toggleCart() {
    let cartModal = document.getElementById('cart-modal');
    cartModal.style.display = (cartModal.style.display === 'block') ? 'none' : 'block';
}

// Show the cart on page load
window.addEventListener('load', updateCartDisplay);

// Process payment based on the selected payment method
function processPayment() {
    const paymentMethod = document.getElementById('payment-method').value;
    const totalPrice = document.getElementById('total-price').textContent;

    // Simulating payment processing
    alert(`Proceeding with ${paymentMethod} for total: $${totalPrice}`);
    // In a real scenario, here you would call the API of your payment provider (e.g., Stripe, PayPal)
}

// Simulate cart items for testing
const cartItems = [
    { name: "Product 1", price: 25.00 },
    { name: "Product 2", price: 15.50 }
];

// Function to update cart items dynamically (used for initial display)
function updateCartItems() {
    const cartItemsContainer = document.getElementById('cart-items');
    let total = 0;
    cartItemsContainer.innerHTML = '';

    cartItems.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.innerHTML = `${item.name} - $${item.price.toFixed(2)}`;
        cartItemsContainer.appendChild(itemDiv);
        total += item.price;
    });

    document.getElementById('total-price').textContent = total.toFixed(2);
}

// Clear the cart
function clearCartFromModal() {
    alert('Cart cleared!');
    cartItems.length = 0;  // Clear the cart array
    updateCartItems();  // Update the display
}

// Show the cart modal and update items
function showCart() {
    document.getElementById('cart-modal').style.display = 'block';
    updateCartItems(); // Dynamically display the cart items
}
let cart = [];

function addToCart(productName, price) {
    cart.push({ productName, price });
    updateCartCount();
    console.log(cart);
}

function updateCartCount() {
    document.getElementById("cart-count").textContent = cart.length;
}

function toggleCart() {
    const cartModal = document.getElementById('cart-modal');
    cartModal.style.display = cartModal.style.display === 'block' ? 'none' : 'block';
}

function buyNow(productName, price) {
    addToCart(productName, price);
    // Redirect to checkout page or handle direct checkout here
}

function clearCart() {
    cart = [];
    updateCartCount();
    document.getElementById('cart-items').innerHTML = '';
    document.getElementById('total-price').textContent = '$0.00';
}

// Example of calling showCart function (e.g., triggered by a "View Cart" button click)
showCart();

function addToCart(productId, productName, price) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_to_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    var params = "product_id=" + productId + "&product_name=" + encodeURIComponent(productName) + "&price=" + price;

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText); // This will show the success message from the PHP script
        }
    };
    xhr.send(params);
}
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