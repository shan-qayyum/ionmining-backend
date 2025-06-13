<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FAQ | IONMINING PRO</title>
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
      left: -4%;
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
    @media (max-width: 850px) {
      nav ul {
        display: none;
        flex-direction: column;
        position: fixed;               /* Changed from absolute */
        top: 60px;                     /* Navbar height */
        left: -19px;
        width: 100%;
        height: calc(100vh - 60px);      /* Full height minus navbar */
        background: rgba(15, 0, 31, 0.95); /* Full-screen effect */
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-out;
        z-index: 999;                  /* Ensures overlay above other elements */
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
      /* Hide the original buttons on mobile */
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
    /* FAQ Section Styles */
    .faq-section {
      max-width: 1200px;
      margin: 40px auto;
      padding: 40px 20px;
    }
    .faq-section h2 {
      text-align: center;
      font-size: 2rem;
      color: var(--accent-color);
      margin-bottom: 30px;
    }
    .faq-container {
      background: var(--card-bg);
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }
    details {
      background: rgba(255,255,255,0.05);
      margin: 10px 0;
      padding: 15px 20px;
      border-radius: 8px;
      transition: transform var(--transition-speed);
      cursor: pointer;
    }
    details[open] {
      transform: scale(var(--hover-scale));
    }
    summary {
      font-size: 1.1rem;
      font-weight: bold;
      outline: none;
    }
    details p {
      font-size: 0.95rem;
      line-height: 1.5;
      margin-top: 10px;
    }
    /* Footer Styles (Same as previous pages) */
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
        <li><a href="home.html">Home</a></li>
        <li><a href="plans.html">Plans</a></li>
        <li><a href="affliates.html">Affiliates</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="FAQ.html">FAQ</a></li>
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
      <h1>Frequently Asked Questions</h1>
      <p class="breadcrumb">
        <a href="home.html">Home</a> › 
        <span>FAQ</span>
      </p>
    </section>

    <!-- FAQ Accordion Section -->
    <section class="faq-section" data-aos="fade-up" data-aos-delay="200">
      <h2>How Can We Help You?</h2>
      <div class="faq-container">
        <details data-aos="fade-right" data-aos-delay="250">
          <summary>What is IONMINING PRO?</summary>
          <p>IONMINING PRO is a state-of-the-art cryptocurrency cloud mining platform designed to make digital asset mining accessible, secure, and profitable for everyone.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="300">
          <summary>How do I create an account?</summary>
          <p>Simply click the “Sign Up” button in the navigation bar and complete the registration form. Once registered, you can immediately access our mining plans and affiliate program.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="350">
          <summary>What are the fees associated with cloud mining?</summary>
          <p>Our fee structure is transparent. There is no deposit fee, and you only pay a minimal maintenance fee which is automatically deducted from your earnings.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="400">
          <summary>How does the affiliate program work?</summary>
          <p>After registering, you can share your unique affiliate link. When someone signs up using your link, you receive a commission on their initial deposit, with no extra effort required.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="450">
          <summary>Is my investment secure?</summary>
          <p>Absolutely. We use cutting-edge security measures and advanced encryption protocols to safeguard your investments and personal data.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="500">
          <summary>Is IONMINING PRO legal?</summary>
          <p>Yes, IONMINING PRO operates under strict legal frameworks and adheres to all regional regulations governing cloud mining and digital financial services. We prioritize transparency and compliance to ensure users have peace of mind while investing.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="550">
          <summary>How can I earn passive income with cloud mining?</summary>
          <p>You can earn passive income by choosing a suitable mining plan that fits your investment budget. Once activated, your plan begins generating daily mining profits automatically without the need for technical maintenance or intervention.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="600">
          <summary>Is it possible to earn money without investing?</summary>
          <p>Yes! Our affiliate program allows users to earn commissions by referring others. You can generate income by sharing your unique referral link, even without purchasing a mining plan yourself.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="650">
          <summary>Which payment system can I use to pay?</summary>
          <p>We support a variety of trusted payment gateways, including popular cryptocurrencies like Bitcoin, Ethereum, and stablecoins. Specific payment methods may vary depending on your region.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="700">
          <summary>When will my daily mining profits be settled?</summary>
          <p>Daily mining profits are settled automatically every 24 hours based on your active plan and hash rate. Earnings are credited directly to your wallet balance within your dashboard.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="750">
          <summary>What's the minimum deposit and withdrawal?</summary>
          <p>The minimum deposit requirement is kept low to make cloud mining accessible to everyone. The minimum withdrawal amount is also minimal and will be clearly displayed in your account dashboard.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="800">
          <summary>How do I withdraw my profits?</summary>
          <p>To withdraw your profits, simply navigate to the ‘Withdraw’ section within your user dashboard, enter your wallet address, the desired amount, and confirm the transaction. Withdrawals are processed securely and promptly.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="850">
          <summary>What is the withdrawal fee?</summary>
          <p>We charge a small, transparent withdrawal fee to cover network transaction costs. The exact fee amount is displayed before confirming any withdrawal, ensuring there are no surprises.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="900">
          <summary>Can I download the app?</summary>
          <p>Yes, the IONMINING PRO app is available for both iOS and Android. You can download it from the official Apple App Store or Google Play Store for easy account access and mining management on the go.</p>
        </details>
        <details data-aos="fade-right" data-aos-delay="950">
          <summary>How can I contact IONMINING PRO's customer support for additional queries?</summary>
          <p>If you need assistance beyond the FAQs, our customer support team is available 24/7 via email, live chat, or through the contact form on the “Contact Us” page. We are committed to resolving your concerns swiftly and professionally.</p>
        </details>        
      </div>
    </section>
  </main>
  
  <!-- Footer Section -->
  <footer data-aos="fade-up" data-aos-delay="100">
    <div class="footer-container">
      <div class="footer-section footer-logo">
          <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo">
          <p>IONMINING PRO is committed to empowering individuals with innovative cloud mining solutions and a transparent environment for digital asset growth.</p>
      </div>
      <div class="footer-section footer-links">
          <h3>Services</h3>
          <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="plans.html">Plans</a></li>
              <li><a href="affliates.html">Affiliates</a></li>
              <li><a href="FAQ.html">FAQ</a></li>
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
  
    // Toggle Hamburger Menu for Mobile
    document.querySelector('.menu-toggle')?.addEventListener('click', () => {
      document.querySelector('nav ul')?.classList.toggle('active');
    });
  </script>
</body>
</html>
