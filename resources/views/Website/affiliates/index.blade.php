<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Affiliate | Cryptocurrency Cloud Mining</title>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- AOS Animation Library -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    :root {
      --primary-bg: #0f001f;
      --card-bg: #1a0933;
      --accent-color: #6a0dad;
      --accent-hover: #520b9e;
      --text-color: #fff;
      --blur-effect: 10px;
      --hover-scale: 1.05;
      --transition-speed: 0.4s;
    }

    body {
      margin: 0;
      overflow-x: hidden;
      font-family: Arial, sans-serif;
      color: var(--text-color);
      background: linear-gradient(135deg, #1a001f, #0f001f);
    }

    header {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      padding: 15px 30px;
      background: rgba(15, 0, 31, 0.9);
      backdrop-filter: blur(10px);
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
      gap: 10px;
      margin: 0;
      padding: 0;
    }

    nav ul li a {
      color: var(--text-color);
      text-decoration: none;
      padding: 3px;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: var(--accent-color);
    }

    /* Desktop Sign In/Up Buttons */
    .buttons button {
      background: var(--accent-color);
      border: none;
      padding: 8px 15px;
      margin-left: 10px;
      border-radius: 20px;
      color: var(--text-color);
      cursor: pointer;
      transition: background 0.3s;
    }

    .buttons button:hover {
      background: var(--accent-hover);
    }

    .menu-toggle {
      display: none;
      font-size: 1.5rem;
      color: var(--text-color);
      cursor: pointer;
    }

    /* Hide mobile-only links by default */
    nav ul li.mobile-only {
      display: none;
    }

    @media (max-width: 1050px) {
      nav ul {
        display: none;
        flex-direction: column;
        /* Keep original positioning when not active */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background: rgba(15, 0, 31, 0.9);
        text-align: center;
      }

      /* When active, make the menu full screen */
      nav ul.active {
        display: flex;
        position: fixed;
        top: 60px;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(15, 0, 31, 0.95);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 20px;
        z-index: 2000;
      }

      .menu-toggle {
        display: block;
      }

      /* Hide the separate desktop buttons on mobile devices */
      .buttons {
        display: none;
      }

      /* Show mobile-only Sign In/Up links in the nav list on mobile devices */
      nav ul li.mobile-only {
        display: block;
      }

      /* Optional styling to make the mobile Sign In/Up appear as buttons */
      nav ul li.mobile-only a {
        display: block;
        background: var(--accent-color);
        margin: 5px auto;
        padding: 10px 15px;
        border-radius: 20px;
        width: 80%;
        text-decoration: none;
        color: var(--text-color);
      }

      nav ul li.mobile-only a:hover {
        background: var(--accent-hover);
      }

      /* Optional: Add a dedicated close button for the menu */
      .close-menu {
        display: block;
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 2100;
        background: transparent;
        border: none;
        font-size: 2rem;
        color: var(--text-color);
        cursor: pointer;
      }
    }

    .content {
      padding-top: 90px;
    }

    .banner {
      max-width: 1200px;
      margin: 20px auto;
      padding: 40px;
      text-align: center;
      background: linear-gradient(135deg, #3b1d5e, #200a3b);
      border-radius: 10px;
    }

    .banner h1 {
      font-size: 2rem;
      margin: 0;
    }

    .breadcrumb {
      margin-top: 10px;
      font-size: 0.9rem;
      color: rgba(255, 255, 255, 0.6);
    }

    .breadcrumb a {
      color: var(--accent-color);
      text-decoration: none;
    }

    .breadcrumb a:hover {
      text-decoration: underline;
    }

    .affiliate-section {
      display: flex;
      align-items: center;
      max-width: 1200px;
      width: 90%;
      background: var(--card-bg);
      border-radius: 12px;
      overflow: hidden;
      padding: 30px;
      margin: 40px auto;
    }

    .affiliate-image {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .affiliate-image img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .affiliate-content {
      flex: 1;
      text-align: left;
      padding: 20px;
    }

    .affiliate-content h3 {
      color: var(--accent-color);
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 5px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .affiliate-content h2 {
      font-size: 1.8rem;
      margin-bottom: 10px;
    }

    .affiliate-content p {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .steps p {
      margin: 5px 0;
    }

    .benefits {
      list-style: none;
      padding: 0;
    }

    .benefits li {
      display: flex;
      align-items: center;
      font-size: 1rem;
      margin-bottom: 8px;
    }

    .benefits li::before {
      content: "✔";
      color: var(--accent-color);
      font-weight: bold;
      margin-right: 10px;
    }

    .learn-more {
      margin-top: 20px;
    }

    .learn-more button {
      background: var(--accent-color);
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      color: var(--text-color);
      cursor: pointer;
      transition: background 0.3s;
    }

    .learn-more button:hover {
      background: var(--accent-hover);
    }

    .affiliate-steps {
      text-align: center;
      padding: 50px 20px;
      color: var(--text-color);
    }

    .section-title {
      color: var(--accent-color);
      font-size: 14px;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .section-heading {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .steps-container {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
    }

    .step {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px;
      border-radius: 10px;
      width: 250px;
      text-align: left;
      position: relative;
      transition: transform 0.3s ease;
    }

    .step:hover {
      transform: scale(1.05);
    }

    .step-number {
      color: var(--accent-color);
      font-size: 24px;
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
    }

    .step h4 {
      font-size: 18px;
      font-weight: bold;
    }

    .step p {
      font-size: 14px;
      opacity: 0.8;
    }

    .join-now {
      margin-top: 30px;
    }

    .join-now button {
      background: var(--accent-color);
      border: none;
      padding: 12px 24px;
      border-radius: 20px;
      color: var(--text-color);
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
    }

    .join-now button:hover {
      background: var(--accent-hover);
    }

    /* Enhanced Mining Section Styles */
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
      animation: fadeIn 1s ease-out;
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
      animation: slideIn 1s ease-out;
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

    @media (max-width: 768px) {
      .mining-section {
        flex-direction: column;
        text-align: center;
      }

      .mining-section .content,
      .mining-section .image-container {
        max-width: 100%;
      }

      .mining-section::before {
        display: none;
      }

      /* Responsive styling for the affiliate-section */
      .affiliate-section {
        flex-direction: column;
        text-align: center;
        padding: 20px;
      }

      .affiliate-image,
      .affiliate-content {
        flex: none;
        width: 100%;
      }

      .affiliate-image {
        margin-bottom: 20px;
      }

      .affiliate-content {
        padding: 10px;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(20px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Footer Styles */
    footer {
      background-color: #0d0f1a;
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
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-links ul li a:hover,
    .footer-resources ul li a:hover {
      color: white;
    }

    .download-buttons button {
      display: block;
      margin: 10px 0;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 5px;
      background: #555;
      color: white;
      font-size: 0.95em;
      cursor: pointer;
      transition: background 0.3s, transform 0.3s;
    }

    .download-buttons button:hover {
      background: #777;
      transform: scale(1.03);
    }

    .social-icons a {
      margin-right: 10px;
      font-size: 20px;
      color: #bbb;
      transition: color 0.3s, transform 0.3s;
    }

    .social-icons a:hover {
      color: white;
      transform: translateY(-3px);
    }

    .footer-newsletter form {
      display: flex;
      flex-wrap: wrap;
    }

    .footer-newsletter input[type="email"] {
      margin: 3px;
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 5px 0 0 5px;
      outline: none;
    }

    .footer-newsletter button {
      margin: 3px;
      padding: 10px 20px;
      border: none;
      background: #5a2ea6;
      color: white;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      transition: background 0.3s;
    }

    .footer-newsletter button:hover {
      background: #7b5ede;
    }

    .footer-bottom {
      text-align: center;
      border-top: 1px solid #333;
      padding-top: 20px;
      margin-top: 20px;
      font-size: 0.9em;
      color: #bbb;
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
  <header>
    <div class="logo">
      <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo">
    </div>
    <nav>
      <div class="menu-toggle"><i class="fas fa-bars"></i></div>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('plans') }}">Plans</a></li>
        <li><a href="{{ route('affiliates') }}">Affiliates</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('FAQ') }}">FAQ</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <!-- Mobile-only Sign In/Up items -->
        <li class="mobile-only"><a href="{{ route('login') }}">Sign In</a></li>
        <li class="mobile-only"><a href="{{ route('register') }}">Sign Up</a></li>
      </ul>
    </nav>
    <div class="buttons">
      <a href="{{ route('login') }}"><button class="sign-in">Sign In</button></a>
      <a href="{{ route('register') }}"><button class="sign-up">Sign Up</button></a>
    </div>
  </header>
  <main class="content">
    <section class="banner" data-aos="fade-down">
      <h1>IONMINING PRO Affiliate | Cryptocurrency Cloud Mining Platform</h1>
      <p class="breadcrumb">
        <a href="{{ route('home') }}">Home</a> ›
        <span>IONMINING PRO Affiliate | Cryptocurrency Cloud Mining Platform</span>
      </p>
    </section>
    <section class="affiliate-section" data-aos="fade-up">
      <div class="affiliate-image" data-aos="zoom-in-right">
        <img src="Assets/affliate-image.jpg" alt="Affiliate Program">
      </div>
      <div class="affiliate-content" data-aos="zoom-in-left">
        <h3>Affiliate Program</h3>
        <h2>Join Our Affiliate Program and Maximize Your Earnings</h2>
        <p>Join our partner program and earn up to 3% commission! Share your unique affiliate link with friends who are
          eager to make money, and they will appreciate it!</p>
        <h3>Here's how it works</h3>
        <div class="steps">
          <p><strong>Step 1:</strong> Sign up for an account to retrieve your affiliate link.</p>
          <p><strong>Step 2:</strong> Share your link via social media or personal websites.</p>
          <p><strong>Step 3:</strong> When someone signs up using your link, you will earn a 3% bonus on their first
            deposit.</p>
        </div>
        <ul class="benefits">
          <li>No deposit needed.</li>
          <li>High commissions.</li>
          <li>Instant payments.</li>
          <li>Unlimited learning potential</li>
        </ul>
        <div class="learn-more">
          <button type="button">Learn More</button>
        </div>
      </div>
    </section>
    <section class="affiliate-steps">
      <h3 class="section-title">AFFILIATE SYSTEM</h3>
      <h2 class="section-heading">How does it work?</h2>
      <div class="steps-container">
        <div class="step">
          <span class="step-number">1</span>
          <h4>Sign up and get an affiliate link.</h4>
          <p>Sign up and get an affiliate link.</p>
        </div>
        <div class="step" data-aos="fade-up" data-aos-delay="100">
          <span class="step-number">2</span>
          <h4>Invite your friends using the affiliate link.</h4>
          <p>Invite your friends using the affiliate link.</p>
        </div>
        <div class="step" data-aos="fade-up" data-aos-delay="200">
          <span class="step-number">3</span>
          <h4>Affiliates buy plans.</h4>
          <p>Affiliates make a deposit and purchase a plan.</p>
        </div>
        <div class="step" data-aos="fade-up" data-aos-delay="300">
          <span class="step-number">4</span>
          <h4>Get Your Reward.</h4>
          <p>Once the affiliate deposit is successful, you will receive the commission immediately.</p>
        </div>
      </div>
      <div class="join-now">
       <a href="{{ route('login') }}"><button>Join Now</button></a>
      </div>
    </section>
    <!-- Enhanced Mining Section -->
    <div class="mining-section" data-aos="fade-up">
      <div class="content" data-aos="fade-right">
        <h2>Start Your Mining Adventure with IONMINING PRO</h2>
        <p>Unlock the power of cloud mining with our state-of-the-art technology and dedicated support. Get started
          today and join the revolution!</p>
        <a href="{{ route('plans') }}" class="btn">Get Started</a>
      </div>
      <div class="image-container" data-aos="fade-left">
        <img src="Assets/background_bitcoin.png" alt="Mining Machine" />
      </div>
    </div>
    <!-- Custom Cursor Element -->
    <div class="custom-cursor"></div>
    <!-- Footer Section -->
    <footer>
      <div class="footer-container">
        <div class="footer-section footer-logo">
          <img src="Assets/default-monochrome.svg" alt="Your Logo" />
          <p>IONMINING PRO is a versatile company with a clear mission: to equip you with the essential tools and services
            for success in the digital asset realm.</p>
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
            <li><a href="{{ route('home') }}">Terms & Conditions</a></li>
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
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
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
    <!-- AOS LIBRARY -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </main>
  <script>

    AOS.init({
      duration: 1000, // animation duration in ms
      once: true,     // whether animation should happen only once
    });

    const menuToggle = document.querySelector('.menu-toggle');
    const navUl = document.querySelector('nav ul');

    menuToggle.addEventListener('click', () => {
      navUl.classList.toggle('active');
      // Swap the icon depending on the menu state
      if (navUl.classList.contains('active')) {
        menuToggle.innerHTML = '<i class="fas fa-times"></i>';
      } else {
        menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
      }
    });
  </script>
</body>

</html>
