<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IONMINING PRO - Modern Plans</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        /* CSS Variables for Theme Colors and Effects */
        :root {
            --primary-bg: #0f001f;
            --card-bg: rgba(255, 255, 255, 0.1);
            --accent-color: #6a0dad;
            --accent-hover: #520b9e;
            --text-color: #fff;
            --blur-effect: 10px;
            --hover-scale: 1.05;
            --transition-speed: 0.4s;
        }

        /* Global Styles */
        body {
            margin: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            color: var(--text-color);
            background: linear-gradient(135deg, #1a001f, #0f001f);
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: rgba(15, 0, 31, 0.9);
            backdrop-filter: blur(var(--blur-effect));
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .logo img {
            height: 2rem;
        }

        nav {
            position: relative;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        nav ul li a {
            color: var(--text-color);
            text-decoration: none;
            padding: 10px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--accent-color);
        }

        /* External Auth Buttons */
        .buttons {
            display: flex;
            gap: 10px;
        }

        .buttons button {
            background: var(--accent-color);
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            color: var(--text-color);
            cursor: pointer;
            transition: background 0.3s;
        }

        .buttons button:hover {
            background: var(--accent-hover);
        }

        /* Hamburger Toggle (hidden above 930px) */
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--text-color);
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        /* Mobile Menu (as on Home page) */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(15, 0, 31, 0.9);
            padding: 20px 0;
            z-index: 1100;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .mobile-menu ul li {
            margin: 10px 0;
            font-size: 16px;
        }

        .mobile-menu ul li a {
            color: var(--text-color);
            text-decoration: none;
        }

        .mobile-menu .auth-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .mobile-menu .auth-container a {
            padding: 10px 20px;
            border-radius: 21px;
            background: var(--accent-color);
            color: var(--text-color);
            font-size: 16px;
        }

        .mobile-menu .auth-container a.invest-now {
            background: transparent;
            border: 2px solid var(--text-color);
        }

        .mobile-menu .auth-container a:hover {
            background: var(--accent-hover);
        }

        /* Media Query: Show hamburger and hide desktop nav/buttons below 930px */
        @media (max-width: 930px) {
            nav,
            .buttons {
                display: none;
            }
            .menu-toggle {
                display: block;
            }
        }

        /* Heading Style */
        h2 {
            text-align: center;
            font-size: 2rem;
            margin: 40px 0 20px;
            position: relative;
            z-index: 1;
        }

        /* Plan Cards Container (Grid Layout with max 3 columns) */
        .plan-container {
            display: grid;
            gap: 20px;
            padding: 40px;
            margin: 0 auto;
            max-width: 1200px;
            grid-template-columns: 1fr;
        }

        @media (min-width: 600px) and (max-width: 991px) {
            .plan-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 992px) {
            .plan-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Plan Card Styles */
        .plan-card {
            background: var(--card-bg);
            backdrop-filter: blur(var(--blur-effect));
            border-radius: 15px;
            padding: 15px;
            min-height: 320px;
            text-align: center;
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            overflow: hidden;
            border-radius: 15px 15px 0 0;
            margin-bottom: 10px;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .plan-card:hover {
            transform: scale(var(--hover-scale));
            box-shadow: 0 10px 40px rgba(106, 13, 173, 0.6);
        }

        .plan-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px solid var(--accent-color);
            border-radius: inherit;
            pointer-events: none;
            filter: drop-shadow(0 0 10px var(--accent-color));
            transition: filter 0.3s ease;
        }

        .plan-card:hover::before {
            filter: drop-shadow(0 0 20px var(--accent-color));
        }

        .plan-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .plan-card p {
            margin: 8px 0;
            font-size: 1rem;
        }

        .plan-card button {
            background: var(--accent-color);
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            color: var(--text-color);
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .plan-card button:hover {
            background: var(--accent-hover);
        }

        /* Initially hide extra cards (cards 7 and 8) */
        .plan-card.hidden-plan {
            display: none;
        }

        /* View All Button */
        .view-all-container {
            text-align: center;
            padding: 20px;
        }

        .view-all {
            background: var(--accent-color);
            border: none;
            padding: 16px 54px;
            border-radius: 25px;
            color: var(--text-color);
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .view-all:hover {
            background: var(--accent-hover);
        }

        /* Enhanced Mining Section */
        .mining-section {
            position: relative;
            background: var(--accent-color);
            border-radius: 20px;
            padding: 40px;
            width: 80%;
            max-width: 1200px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 40px auto;
        }

        .mining-section .content {
            z-index: 2;
            max-width: 50%;
            color: #fff;
        }

        .mining-section .content h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .mining-section .content p {
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        .mining-section .content .btn {
            background: #fff;
            color: #5a2ea6;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s, background 0.2s;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .mining-section .content .btn:hover {
            transform: scale(1.05);
            background: #f0f0f0;
        }

        .mining-section .image-container {
            position: relative;
            max-width: 40%;
            z-index: 2;
        }

        .mining-section .image-container img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .mining-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 1;
        }

        /* Responsive Adjustments for Mining Section */
        @media (max-width: 768px) {
            .mining-section {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .mining-section .content,
            .mining-section .image-container {
                max-width: 100%;
            }
            .mining-section .content {
                margin-bottom: 20px;
            }
            .mining-section::before {
                display: none;
            }
        }

        /* Affiliates Page Footer Styling */
        footer {
            background: radial-gradient(ellipse at center, #100022, #000000 80%);
            color: white;
            padding: 40px 20px;
            position: relative;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: auto;
        }

        .footer-section {
            flex: 1 1 250px;
            margin: 20px;
        }

        .footer-logo img {
            max-width: 120px;
            margin-bottom: 15px;
        }

        .footer-logo p {
            font-size: 0.95em;
            line-height: 1.6;
            color: #bbb;
        }

        .footer-links ul,
        .footer-resources ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li,
        .footer-resources ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a,
        .footer-resources ul li a {
            color: #bbb;
            font-size: 16px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links ul li a:hover,
        .footer-resources ul li a:hover {
            color: white;
        }

        .download-buttons {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 15px;
        }

        .download-buttons button {
            padding: 8px 10px;
            border: none;
            border-radius: 5px;
            background: #555;
            color: white;
            font-size: 0.85em;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .download-buttons button:hover {
            background: #777;
            transform: scale(1.03);
        }

        .footer-newsletter {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .footer-newsletter form {
            display: flex;
            max-width: 300px;
            margin-top: 10px;
        }

        .footer-newsletter input[type="email"] {
            flex: 1;
            padding: 8px 10px;
            border: none;
            border-radius: 5px 0 0 5px;
            outline: none;
            font-size: 0.85em;
        }

        .footer-newsletter button {
            padding: 8px 12px;
            border: none;
            background: #5a2ea6;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 0.85em;
        }

        .footer-newsletter button:hover {
            background: #7b5ede;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #333;
            margin-top: 20px;
            font-size: 14px;
            color: #ccc;
        }

        .back-to-top {
            position: absolute;
            right: 20px;
            bottom: 20px;
            background: #5a2ea6;
            color: white;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .back-to-top:hover {
            background: #7b5ede;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }
            .footer-section {
                margin: 15px 0;
            }
            .back-to-top {
                right: 50%;
                transform: translateX(50%);
            }
        }
    </style>
</head>

<body>
    <!-- Background Canvas (if needed) -->
    <canvas id="bg-canvas"></canvas>

    <!-- Header with Elegant Animation -->
    <header data-aos="fade-down" data-aos-delay="100">
        <div class="logo">
            <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo" />
        </div>
        <!-- Hamburger Toggle (visible below 930px) -->
       <div class="menu-toggle"><i class="fas fa-bars"></i></div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('plans') }}">Plans</a></li>
                <li><a href="{{ route('affiliates') }}">Affiliates</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('FAQ') }}">FAQ</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
        <!-- External Buttons (visible above 930px) -->
        <div class="buttons">
            <button><a href="{{ route('login') }}" class="sign-in" style="text-decoration: none; color:white;">Sign In</a></button>
            <button><a href="{{ route('register') }}" class="sign-up" style="text-decoration: none; color:white;">Sign Up</a></button>
        </div>
    </header>

    <!-- Mobile Menu with Fade-in -->
    <div class="mobile-menu" data-aos="fade-right" data-aos-delay="150">
        <div class="menu-close" style="text-align:right; cursor:pointer; font-size:1.5rem; padding:0 20px;">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('plans') }}">Plans</a></li>
            <li><a href="{{ route('affiliates') }}">Affiliates</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('FAQ') }}">FAQ</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li class="auth-container">
                <a href="{{ route('login') }}">Sign In</a>
                <a href="{{ route('register') }}">Sign Up</a>
            </li>
        </ul>
    </div>

    <!-- Main Content: Plan Cards with Staggered Elegant Animations -->
    <div class="content">
        <h2 data-aos="fade-up" data-aos-delay="100">Choose Your Plan</h2>
        <div class="plan-container">
            <!-- Plan Card 1 -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="150">
                <div class="card-image">
                    <img src="Assets/1st-miner-Photoroom.png" alt="Plan 1 Image" />
                </div>
                <h3>Plan 1</h3>
                <p>ID: #PLAN001</p>
                <p>Price: $1000</p>
                <p>Term: 30 days</p>
                <p>Daily Reward: 1.5%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
            <!-- Plan Card 2 -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-image">
                    <img src="Assets/2nd-miner-Photoroom.png" alt="Plan 2 Image" />
                </div>
                <h3>Plan 2</h3>
                <p>ID: #PLAN002</p>
                <p>Price: $2000</p>
                <p>Term: 45 days</p>
                <p>Daily Reward: 1.7%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
            <!-- Plan Card 3 -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="250">
                <div class="card-image">
                    <img src="Assets/3rd-miner-Photoroom.png" alt="Plan 3 Image" />
                </div>
                <h3>Plan 3</h3>
                <p>ID: #PLAN003</p>
                <p>Price: $3000</p>
                <p>Term: 60 days</p>
                <p>Daily Reward: 2.0%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
            <!-- Plan Card 4 -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-image">
                    <img src="Assets/4th-miner-Photoroom.png" alt="Plan 4 Image" />
                </div>
                <h3>Plan 4</h3>
                <p>ID: #PLAN004</p>
                <p>Price: $4000</p>
                <p>Term: 30 days</p>
                <p>Daily Reward: 1.8%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
            <!-- Plan Card 5 -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="350">
                <div class="card-image">
                    <img src="Assets/5th-miner-Photoroom.png" alt="Plan 5 Image" />
                </div>
                <h3>Plan 5</h3>
                <p>ID: #PLAN005</p>
                <p>Price: $5000</p>
                <p>Term: 50 days</p>
                <p>Daily Reward: 2.2%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
            <!-- Plan Card 6 -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-image">
                    <img src="Assets/6th-miner-Photoroom.png" alt="Plan 6 Image" />
                </div>
                <h3>Plan 6</h3>
                <p>ID: #PLAN006</p>
                <p>Price: $6000</p>
                <p>Term: 70 days</p>
                <p>Daily Reward: 2.3%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
            <!-- Extra Cards Hidden Initially -->
            <div class="plan-card hidden-plan" data-aos="fade-up" data-aos-delay="450">
                <div class="card-image">
                    <img src="Assets/7th-miner-Photoroom.png" alt="Plan 7 Image" />
                </div>
                <h3>Plan 7</h3>
                <p>ID: #PLAN007</p>
                <p>Price: $7000</p>
                <p>Term: 80 days</p>
                <p>Daily Reward: 2.5%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
            <div class="plan-card hidden-plan" data-aos="fade-up" data-aos-delay="500">
                <div class="card-image">
                    <img src="Assets/8th-miner-Photoroom.png" alt="Plan 8 Image" />
                </div>
                <h3>Plan 8</h3>
                <p>ID: #PLAN008</p>
                <p>Price: $8000</p>
                <p>Term: 90 days</p>
                <p>Daily Reward: 2.7%</p>
                <p>Capital Back: Yes</p>
                <button>Invest Now</button>
            </div>
        </div>
        <div class="view-all-container" data-aos="fade-up" data-aos-delay="550">
            <button class="view-all" id="toggleView">View All</button>
        </div>
    </div>

    <!-- Enhanced Mining Section with Slide and Fade -->
    <div class="mining-section" data-aos="fade-up" data-aos-delay="200">
        <div class="content" data-aos="fade-right" data-aos-delay="250">
            <h2>Start Your Mining Adventure with IONMINING PRO</h2>
            <p>
                Unlock the power of cloud mining with our state-of-the-art technology and dedicated support.
                Get started today and join the revolution!
            </p>
            <a href="{{ route('plans') }}" class="btn">Get Started</a>
        </div>
        <div class="image-container" data-aos="fade-left" data-aos-delay="250">
            <img src="Assets/background_bitcoin.png" alt="Mining Machine" />
        </div>
    </div>

    <!-- Custom Cursor Element (if used) -->
    <div class="custom-cursor"></div>

    <!-- Footer with Gentle Fade-up -->
    <footer data-aos="fade-up" data-aos-delay="100">
        <div class="footer-container">
            <div class="footer-section footer-logo">
                <img src="Assets/default-monochrome.svg" alt="Your Logo" />
                <p>
                    IONMINING PRO is a versatile company with a clear mission: to equip you with the essential tools and
                    services for success in the digital asset realm.
                </p>
            </div>
            <div class="footer-section footer-links">
                <h3>Services</h3>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('plans') }}">Plans</a></li>
                    <li><a href="{{ route('affiliates') }}">Affiliates</a></li>
                    <li><a href="{{ route('FAQ') }}">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section footer-resources">
                <h3>Resources</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Terms &amp; Conditions</a></li>
                    <li><a href="{{ route('home') }}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-section footer-download">
                <h3>Download the App</h3>
                <div class="download-buttons">
                    <button>Download for iPhone</button>
                    <button>Download for Android</button>
                </div>
                <div class="footer-newsletter">
                    <h3>Subscribe for Updates</h3>
                    <form action="#" method="post">
                        <input type="email" placeholder="Enter your email" required />
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
                <h3>Contact Details</h3>
                <p><i class="fas fa-envelope"></i> info@IONMINING.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 <img src="Assets/default-monochrome.svg" alt="Your Logo"
                style="vertical-align:middle; max-width: 80px;">. All Rights Reserved.
        </div>
        <div class="back-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
            <i class="fas fa-chevron-up"></i>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="plans.js"></script>
    <!-- Initialize AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Longer duration for graceful transitions
            easing: 'ease-in-out', // Smooth ease-in-out for refined movements
            once: true, // Animate only once as you scroll down
        });

        // Toggle mobile menu using similar behavior
        const menuToggle = document.querySelector('.menu-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        const menuClose = document.querySelector('.mobile-menu .menu-close');

        menuToggle?.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });
        menuClose?.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });

        // Toggle View All functionality for plan cards
        const toggleViewButton = document.getElementById('toggleView');
        toggleViewButton.addEventListener('click', () => {
            const hiddenCards = document.querySelectorAll('.plan-card.hidden-plan');
            hiddenCards.forEach(card => {
                // Toggle visibility
                card.style.display = card.style.display === 'none' || card.style.display === '' ? 'block' : 'none';
            });
            // Update button text
            toggleViewButton.innerText = toggleViewButton.innerText === 'View All' ? 'View Less' : 'View All';
        });
    </script>
</body>

</html>
