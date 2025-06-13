<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | IONMINING PRO</title>
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <!-- Font Awesome for icons (if needed for the menu toggle icon) -->
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
      justify-content: space-around;
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
    /* Responsive Nav & Full-screen Mobile Menu */
    @media (max-width: 1036px) {
      nav ul {
        display: none;
        flex-direction: column;
        position: fixed;               /* Changed from absolute */
        top: 60px;                     /* Navbar height */
        left: 0;
        width: 100%;
        height: calc(100vh - 60px);      /* Full height except navbar */
        background: rgba(15, 0, 31, 0.95); /* Darker background for full-page effect */
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        transition: all 0.3s ease-out;
        z-index: 999;                  /* Ensures overlay above other elements */
      }
      nav ul.active {
        left: -4rem;
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
      /* Hide sign in/sign up buttons on smaller screens */
      .buttons {
        display: none;
      }
    }
    .content {
      padding-top: 90px;
    }
    /* Banner Section */
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
      color: rgba(255,255,255,0.6);
    }
    .breadcrumb a {
      color: var(--accent-color);
      text-decoration: none;
    }
    .breadcrumb a:hover {
      text-decoration: underline;
    }
    /* Contact Section */
    .contact-section {
      max-width: 1200px;
      margin: 40px auto;
      padding: 40px 20px;
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
      background: var(--card-bg);
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    }
    .contact-info, .contact-form {
      flex: 1 1 300px;
    }
    .contact-info h2, .contact-form h2 {
      color: var(--accent-color);
      margin-bottom: 15px;
      font-size: 2rem;
    }
    .contact-info p {
      line-height: 1.6;
      font-size: 1rem;
      margin-bottom: 15px;
    }
    .contact-info ul {
      list-style: none;
      padding: 0;
    }
    .contact-info ul li {
      margin: 10px 0;
      font-size: 1rem;
    }
    .contact-info ul li i {
      color: var(--accent-color);
      margin-right: 10px;
    }
    /* Form Styles */
    .contact-form form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .contact-form label {
      font-size: 0.9rem;
      margin-bottom: 5px;
      display: block;
    }
    .contact-form input, 
    .contact-form textarea {
      width: 97%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #2a133f;
      color: var(--text-color);
      font-size: 1rem;
    }
    .contact-form textarea {
      resize: vertical;
      min-height: 150px;
    }
    .contact-form button {
      align-self: flex-start;
      background: var(--accent-color);
      border: none;
      padding: 12px 25px;
      border-radius: 20px;
      color: var(--text-color);
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }
    .contact-form button:hover {
      background: var(--accent-hover);
    }
    /* Footer Styles (Same as other pages) */
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
        <li><a href="home.html">Home</a></li>
        <li><a href="plans.html">Plans</a></li>
        <li><a href="affliates.html">Affiliates</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="ContactUs.html">Contact</a></li>
      </ul>
    </nav>
    <div class="buttons">
      <a href="signin.html"><button class="sign-in">Sign In</button></a>
      <a href="signup.html"><button class="sign-up">Sign Up</button></a>
    </div>
  </header>
  
  <main class="content">
    <!-- Banner Section -->
    <section class="banner" data-aos="fade-up" data-aos-delay="150">
      <h1>Contact IONMINING PRO</h1>
      <p class="breadcrumb">
        <a href="home.html">Home</a> › 
        <span>Contact</span>
      </p>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" data-aos="fade-up" data-aos-delay="200">
      <!-- Contact Information -->
      <div class="contact-info" data-aos="fade-right" data-aos-delay="250">
        <h2>Get in Touch</h2>
        <p>We’re here to help with any questions or inquiries about our cloud mining solutions. Reach out, and our dedicated support team will get back to you promptly.</p>
        <ul>
          <li><i class="fas fa-map-marker-alt"></i> 1234 Crypto Street, Block 7, Digital City</li>
          <li><i class="fas fa-phone-alt"></i> +1 234 567 890</li>
          <li><i class="fas fa-envelope"></i> support@IONMINING.com</li>
        </ul>
      </div>
      <!-- Contact Form -->
      <div class="contact-form" data-aos="fade-left" data-aos-delay="250">
        <h2>Send Us a Message</h2>
        <form id="contactForm">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your Email" required>
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Subject" required>
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Your Message" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
    </section>
  </main>

  <!-- Footer Section -->
  <footer data-aos="fade-up" data-aos-delay="100">
    <div class="footer-container">
      <div class="footer-section footer-logo">
          <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo">
          <p>IONMINING PRO empowers your digital journey with innovative cloud mining solutions and unmatched support.</p>
      </div>
      <div class="footer-section footer-links">
          <h3>Services</h3>
          <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="plans.html">Plans</a></li>
              <li><a href="affliates.html">Affiliates</a></li>
              <li><a href="faq.html">FAQ</a></li>
          </ul>
      </div>
      <div class="footer-section footer-resources">
          <h3>Resources</h3>
          <ul>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
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
                  <input type="email" placeholder="Enter your email" required>
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
      duration: 1500,
      easing: 'ease-in-out',
      once: true
    });
  
    // Toggle Hamburger Menu for Mobile
    document.querySelector('.menu-toggle')?.addEventListener('click', () => {
      document.querySelector('nav ul')?.classList.toggle('active');
    });

    // Contact form submission (demo)
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Thank you for contacting IONMINING PRO! We will get back to you shortly.');
      this.reset();
    });
  </script>
</body>
</html>
