<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Support Center</title>
    <style>
        /* Root colors */
        :root {
            --primary-color: #6a4e23;
            --white-color: #ffffff;
            --black-color: #000000;
        }

        /* General body styles */
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: white;
            color: black;
            transition: background-color 0.3s, color 0.3s;
            margin: 0;
            padding: 0;
        }

        body.dark-mode {
            background-color: #121212;
            color: white;
        }

        /* Header styles */
     /* Header styles */
header {
    background-color: var(--primary-color);
    position: fixed;
    width:100%; /* Ensure the navbar spans the full width */
    top: 0;
    left: 0;
    z-index: 10; /* Make sure it's above other elements */
    padding: 10px 0;
}

.navbar {
    display: flex;
    justify-content: space-between; /* Space between logo and menu */
    align-items: center;
    padding: 15px;
    width: 100%; /* Full width */
    box-sizing: border-box; /* Ensure padding doesn't cause overflow */
    margin: 0 auto; /* Center the navbar's content */
}

.logo h2 {
    color: var(--white-color);
    font-size: 24px;
    font-weight: 600;
    text-decoration: none;
}

.menu-list {
    display: flex;
    margin: 0;
    padding: 0;
    list-style: none;
}

.menu {
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

        /* Toggle button styles */
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

        /* Main section styles */
        main {
            margin-top: 80px; /* To avoid navbar overlap */
            padding: 20px;
        }

        h1, h2 {
            color: var(--primary-color);
        }

        /* Accordion styles */
        button.accordion {
            background-color: #ddd;
            color: #444;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            font-size: 16px;
        }

        button.accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: #f1f1f1;
            margin-top: 5px;
        }

        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: auto;
        }

        form input, form textarea, form button {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        form button {
            background-color: #6c4f3d;
            color: white;
            cursor: pointer;
        }

        /* Footer styles */
        footer {
            background-color: #6c4f3d;
            color: white;
            text-align: center;
            padding: 10px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
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

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
                align-items: center;
            }

            .navbar .menu {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">
                <h2 class="logo-text">☕ Coffee</h2>
            </a></div>
            <ul class="menu-list">
                <li class="menu"><a href="coco.php">Home</a></li>
                <li class="menu"><a href="pro.php">Products</a></li>
                <li class="menu"><a href="mat.php">Gallery</a></li>
                <li class="menu"><a href="service.php">SUPPORT</a></li>
                <li class="menu"><a href="contact.php">Contact</a></li>
            </ul>
            <!-- Dark mode toggle button -->
            <button id="toggle-button" class="toggle-button">
                <span id="icon" class="icon">🌙</span>
            </button>
        </nav>
    </header>
<br>
    <main>
        <section class="intro">
            <h1>Coffee Support Center</h1>
            <p>We're here to help! Find answers to your questions or reach out for assistance.</p>
        </section>

        <!-- FAQ Section -->
        <section id="faq">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <button class="accordion">How do I brew the perfect cup of coffee?</button>
                <div class="panel">
                    <p>To brew the perfect cup, ensure you're using freshly ground beans and the right water temperature (around 200°F). Adjust your grind size based on your brewing method.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="accordion">What types of coffee do you offer?</button>
                <div class="panel">
                    <p>We offer a variety of single-origin beans, blends, and seasonal offerings. Explore our coffee selection <a href="#">here</a>.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="accordion">How do I track my order?</button>
                <div class="panel">
                    <p>You can track your order by logging into your account and clicking "Track Order" or by using the tracking number we sent via email.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="accordion">Do you offer subscriptions?</button>
                <div class="panel">
                    <p>Yes! We offer coffee subscriptions where you can get your favorite coffee delivered regularly. <a href="#">Learn more about subscriptions here</a>.</p>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2>Review Us</h2>

            <form action="submit_form.php" method="POST">
                <label for="name">Name (Optional):</label>
                <input type="text" id="name" name="name" placeholder="Your Name">

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required placeholder="Your Email Address">

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required placeholder="Your message here"></textarea>

                <button type="submit">Submit</button>
            </form>

            <div>
                <h3>Phone Support:</h3>
                <p>Call us at: +1 800-COFFEE</p>

                <h3>Email Support:</h3>
                <p>Email us at: support@yourcoffeeshop.com</p>
            </div>
        </section>

        <button id="scrollTopBtn" onclick="scrollToTop()">↑ Back to Top</button>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Your Coffee Shop | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>

    <script>
        // Accordion functionality for FAQs
        document.querySelectorAll('.accordion').forEach((button) => {
            button.addEventListener('click', () => {
                let panel = button.nextElementSibling;
                panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
            });
        });

        // Scroll to top functionality
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Dark mode toggle functionality
        const toggleButton = document.getElementById('toggle-button');
        const icon = document.getElementById('icon');

        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');

            // Change the icon based on the mode
            if (document.body.classList.contains('dark-mode')) {
                icon.textContent = '☀️'; // Sun icon for light mode
            } else {
                icon.textContent = '🌙'; // Moon icon for dark mode
            }
        });
    </script>

</body>
</html>
