<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About | IONMINING PRO</title>
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    /* Base Styles */
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
      backdrop-filter: blur(var(--blur-effect));
      position: fixed;
      width: 100%;
      top: 0;
      left: -4rem;
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
    /* Responsive Nav & Improved Hamburger Menu UI */
    @media (max-width: 1000px) {
      nav ul {
        display: none;
        flex-direction: column;
        position: fixed;              /* Changed from absolute */
        top: 60px;                    /* Navbar height */
        left: 0;
        width: 100%;
        height: calc(100vh - 60px);     /* Full height minus navbar */
        background: rgba(15, 0, 31, 0.95); /* Full-screen effect */
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-out;
        z-index: 999;
      }
      nav ul.active {
        display: flex;
        animation: slideDown 0.3s ease-out;
      }
      @keyframes slideDown {
        from {
          opacity: 0;
          transform: translateY(-10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      nav ul li {
        margin: 10px 0;
      }
      nav ul li a {
        font-size: 1.1rem;
        padding: 10px 15px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        transition: background-color 0.3s;
      }
      nav ul li a:hover {
        background-color: rgba(255,255,255,0.1);
      }
      .menu-toggle {
        display: block;
      }
      .buttons {
        display: none;
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
    /* About Section */
    .about-section {
      max-width: 1200px;
      margin: 40px auto;
      padding: 40px;
      background: var(--card-bg);
      border-radius: 12px;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      align-items: center;
    }
    .about-image, .about-content {
      flex: 1 1 300px;
    }
    .about-image {
      text-align: center;
    }
    .about-image img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .about-content {
      padding: 20px;
      text-align: left;
    }
    .about-content h2 {
      color: var(--accent-color);
      margin-bottom: 15px;
      font-size: 2rem;
    }
    .about-content p {
      line-height: 1.6;
      margin-bottom: 15px;
      font-size: 1rem;
    }
    /* Values/Team Section */
    .values-section {
      max-width: 1200px;
      margin: 40px auto;
      padding: 40px 20px;
      text-align: center;
    }
    .values-section h2 {
      color: var(--accent-color);
      margin-bottom: 20px;
      font-size: 2rem;
    }
    .values-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .value-card {
      background: rgba(255,255,255,0.1);
      width: 250px;
      padding: 20px;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }
    .value-card:hover {
      transform: scale(var(--hover-scale));
    }
    .value-card h4 {
      margin-bottom: 10px;
      font-size: 1.2rem;
    }
    .value-card p {
      font-size: 0.95rem;
      line-height: 1.5;
    }
    /* Mining Section (Extra Call-to-Action) */
    .mining-section {
      position: relative;
      background: var(--accent-color);
      border-radius: 20px;
      padding: 40px;
      width: 80%;
      max-width: 1200px;
      margin: 40px auto;
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      animation: fadeIn 1s ease-out;
    }
    .mining-section .content {
      flex: 1 1 300px;
      max-width: 500px;
      color: #fff;
      padding: 20px;
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
      box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    }
    .mining-section .content .btn:hover {
      transform: scale(1.05);
      background: #f0f0f0;
    }
    .mining-section .image-container {
      flex: 1 1 300px;
      max-width: 400px;
      padding: 20px;
    }
    .mining-section .image-container img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
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
    /* Footer Styles */
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
    /* Footer Responsive */
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
  <!-- Header & Navbar -->
  <header data-aos="fade-down" data-aos-delay="100">
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
      </ul>
    </nav>
    <div class="buttons">
      <a href="{{ route('login') }}"><button class="sign-in">Sign In</button></a>
      <a href="{{ route('register') }}"><button class="sign-up">Sign Up</button></a>
    </div>
  </header>
  
  <main class="content">
    <!-- Banner Section -->
    <section class="banner" data-aos="fade-up" data-aos-delay="150">
      <h1>About IONMINING PRO</h1>
      <p class="breadcrumb">
        <a href="{{ route('home') }}">Home</a> › 
        <span>About IONMINING PRO</span>
      </p>
    </section>

    <!-- About Section: Our Story & Mission -->
    <section class="about-section" data-aos="fade-right" data-aos-delay="200">
      <div class="about-image" data-aos="zoom-in" data-aos-delay="250">
        <img src="Assets/bitcoin2.png" alt="About IONMINING PRO">
      </div>
      <div class="about-content" data-aos="fade-left" data-aos-delay="300">
        <h2>Our Story</h2>
        <p>Founded on the principles of innovation and trust, IONMINING PRO has rapidly emerged as a leading cryptocurrency cloud mining platform. Our journey began with a vision to democratize digital asset mining with transparency and efficiency.</p>
        <p>We blend advanced technology with a passionate team to create a platform that empowers users to explore the exciting world of cloud mining. With a focus on secure operations, exceptional support, and an ever-evolving ecosystem, we are paving the way for a brighter, decentralized future.</p>
      </div>
    </section>

    <!-- Values/Team Section -->
    <section class="values-section" data-aos="fade-up" data-aos-delay="200">
      <h2>What We Stand For</h2>
      <div class="values-container">
        <div class="value-card" data-aos="zoom-in" data-aos-delay="250">
          <h4>Innovation</h4>
          <p>We constantly adapt and innovate, ensuring our technology stays ahead in the cryptocurrency mining industry.</p>
        </div>
        <div class="value-card" data-aos="zoom-in" data-aos-delay="300">
          <h4>Integrity</h4>
          <p>Transparency and trust are at our core, empowering our community with secure and reliable operations.</p>
        </div>
        <div class="value-card" data-aos="zoom-in" data-aos-delay="350">
          <h4>Community</h4>
          <p>Our users are our partners. We value their feedback and actively work to build lasting relationships.</p>
        </div>
      </div>
    </section>

    <!-- Call-to-Action / Innovation Section -->
    <section class="about-section" data-aos="fade-up" data-aos-delay="200">
      <div class="about-content" data-aos="fade-right" data-aos-delay="250">
        <h2>Join Our Journey</h2>
        <p>With cutting-edge technology and a dedicated support team, IONMINING PRO is ready to guide you through the transformative world of digital asset mining. Become part of our story and help shape the future of cloud mining.</p>
        <button style="background: var(--accent-color); border: none; padding: 10px 20px; border-radius: 5px; color: var(--text-color); cursor: pointer; transition: background 0.3s;">Learn More</button>
      </div>
      <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
        <img src="Assets/1st_bitcoin-Photoroom.png" alt="Innovation at IONMINING PRO">
      </div>
    </section>

    <!-- Mining Section (Extra Call-to-Action) -->
    <div class="mining-section" data-aos="fade-up" data-aos-delay="200">
      <div class="content" data-aos="fade-right" data-aos-delay="250">
        <h2>Power Your Future with IONMINING PRO</h2>
        <p>Embrace the new era of cryptocurrency mining with our state-of-the-art cloud infrastructure. Experience reliability, security, and high returns with our innovative solutions.</p>
        <a href="{{ route('plans') }}" class="btn">Get Started</a>
      </div>
      <div class="image-container" data-aos="fade-left" data-aos-delay="250">
        <img src="Assets/background_bitcoin.png" alt="Mining Machine">
      </div>
    </div>
  </main>

  <!-- Footer Section -->
  <footer data-aos="fade-up" data-aos-delay="100">
    <div class="footer-container">
      <div class="footer-section footer-logo">
        <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo">
        <p>IONMINING PRO is dedicated to empowering individuals with innovative cloud mining solutions in the ever-evolving digital asset landscape.</p>
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
      &copy; 2025 <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo" style="vertical-align:middle; max-width: 80px;">. All Rights Reserved.
    </div>
    <div class="back-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
      <i class="fas fa-chevron-up"></i>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    // Initialize AOS with elegant settings
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true
    });
  
    // Toggle Hamburger Menu for Mobile with icon swap
    document.querySelector('.menu-toggle')?.addEventListener('click', () => {
      const navUL = document.querySelector('nav ul');
      navUL.classList.toggle('active');
      const icon = document.querySelector('.menu-toggle i');
      if (navUL.classList.contains('active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });
  </script>
</body>
</html>
