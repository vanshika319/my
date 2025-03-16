<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form with Sidebar</title>
    <style>
        /* Add the basic styles you already have */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #ff6b6b, #f1c40f, #3498db);
            background-size: 300% 300%;
            animation: gradient 15s ease infinite;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Dark Mode */
        body.dark-mode {
            background-color: #333;
            color: white;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px; /* Initially hidden */
            background-color: #111;
            overflow-x: hidden;
            transition: 0.3s;
            padding-top: 60px;
            transition: background-color 0.3s;
        }

        .sidebar.dark-mode {
            background-color: #222;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 36px;
            color: white;
        }

        /* Button to open Sidebar */
        .open-btn {
            font-size: 30px;
            color: white;
            background-color: #1e3d58;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            position: fixed;
            top: 20px;
            left: 20px;
        }

        .open-btn:hover {
            background-color: #4e779b;
        }

        /* Contact Form Styles */
        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            margin: 0;
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .contact-form.dark-mode {
            background-color: #444;
            color: white;
        }

        .contact-form p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #555;
        }

        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .submit-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .submit-btn:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .social-links {
            margin-top: 20px;
        }

        .social-btn {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #1da1f2;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .social-btn:hover {
            background-color: #007bb5;
        }

        .thank-you-message {
            text-align: center;
        }

        /* Keyframes for background gradient */
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a>
        <br>
        <br>
        <a href="support.php">Support</a>
        <a href="contact.php">Contact Us</a>
        <a href="faq.php">FAQ</a>
        <a href="#">Restaurant Survey</a>
        <a href="#">Gift Cards</a>
        <a href="#">Royal Perks</a>
        <a href="#">About Coffee</a>
        <a href="#">Legal</a>
        <a href="#" onclick="toggleDarkMode()">🌙</a>
    </div>

    <!-- Button to open Sidebar -->
    <button class="open-btn" onclick="openNav()">&#9776; Menu</button>

    <header>
        <h1>Let’s Chat! We’d Love to Hear From You.</h1>
    </header>

    <section class="contact-form">
        <p>Fill out the form below or send us a message on social media. We’ll respond faster than a cheetah!</p>

        <form action="#" method="post" class="form-container" id="contactForm">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Write your message here..." rows="5" required></textarea>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>

        <div class="social-links">
            <p>Want to reach out on social media instead?</p>
            <a href="https://twitter.com" target="_blank" class="social-btn">Twitter</a>
            <a href="https://facebook.com" target="_blank" class="social-btn">Facebook</a>
            <a href="https://instagram.com" target="_blank" class="social-btn">Instagram</a>
        </div>
    </section>

    <div class="thank-you-message" id="thankYouMessage" style="display: none;">
        <p>Thank you for your message! We will get back to you soon.</p>
    </div>

    <script>
        // Open the sidebar
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.body.style.marginLeft = "250px"; // Move the content to the right
        }

        // Close the sidebar
        function closeNav() {
            document.getElementById("mySidebar").style.left = "-250px";
            document.body.style.marginLeft = "0"; // Reset the content position
        }

        // Toggle Dark Mode
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            document.querySelector('.sidebar').classList.toggle('dark-mode');
            document.querySelector('.contact-form').classList.toggle('dark-mode');
        }

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault(); 
            document.getElementById('contactForm').style.display = 'none'; 
            document.getElementById('thankYouMessage').style.display = 'block'; 
        });
    </script>

</body>
</html>
