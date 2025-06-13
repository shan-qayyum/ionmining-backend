<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IONMINING PRO - Cloud Mining</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- External CSS -->
  <link rel="stylesheet" href={{ asset('style.css') }} />
</head>

<body>
  <!-- HEADER -->
  <header data-aos="fade-down">
    <div class="logo">
      <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo" />
    </div>
    <!-- Standard Navigation (visible above 930px) -->
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
    <div class="buttons">
      <a href="{{ route('login') }}"><button class="sign-in">Sign In</button></a>
      <a href="{{ route('register') }}"><button class="sign-up">Sign Up</button></a>
    </div>
    <!-- Hamburger Toggle (visible below 930px) -->
    <div class="menu-toggle"><i class="fas fa-bars"></i></div>
  </header>

  <!-- MOBILE MENU (Hamburger) -->
  <div class="mobile-menu" data-aos="fade-right">
    <div class="menu-close" style="text-align:right; cursor:pointer; font-size:1.5rem;">
      <i class="fas fa-times"></i>
    </div>
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('plans') }}">Plans</a></li>
      <li><a href="{{ route('affiliates') }}">Affiliates</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('FAQ') }}">FAQ</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
      <!-- Authentication buttons in one row -->
      <li class="auth-container">
        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
        <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
      </li>
    </ul>
  </div>

  <!-- HERO SECTION -->
  <section class="hero" data-aos="fade-up">
    <div class="text-content" data-aos="fade-right">
      <h1>
        Mine <span class="purple">Bitcoin</span>
        <span class="red blink">Anywhere</span>, <br>
        Anytime – <span class="white">Effortlessly</span>
      </h1>
      <p>
        We are the World’s Leading Cloud Mining Platform – Powered by Cutting-Edge Technology and Premium Service.
        No Equipment Needed. Earn Bitcoin Effortlessly from Home.
      </p>
      <div class="buttons">
        <a href="{{ route('login') }}"><button class="sign-up">Sign Up</button></a>
        <a href="{{ route('register') }}"><button class="invest-now">Invest Now</button></a>
      </div>
    </div>
    <div class="slider-container" data-aos="zoom-in">
      <div class="image-content">
        <!-- Bootstrap Carousel for Hero Slider -->
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Assets/1st_bitcoin-Photoroom.png" class="d-block w-100" alt="Bitcoin Hand 1">
            </div>
            <div class="carousel-item">
              <img src="Assets/2nd_bitcoin.jpg" class="d-block w-100" alt="Bitcoin Hand 2">
            </div>
          </div>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
              aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </section>

  <!-- FEATURES SECTION -->
  <section class="features" data-aos="fade-up">
    <h2>OUR FEATURES</h2>
    <h1>Why Choose IONMINING PRO?</h1>
    <div class="feature-grid">
      <div class="feature-card" data-aos="flip-left">
        <div class="feature-icon"><i class="fa-solid fa-microchip"></i></div>
        <h3>Newest Hardware</h3>
        <p>We use the newest ASIC miner and GPU rigs. We have extensive experience in cloud mining operations and competitive mining technologies.</p>
      </div>
      <div class="feature-card" data-aos="flip-right">
        <div class="feature-icon"><i class="fa-solid fa-headset"></i></div>
        <h3>100% Money Security</h3>
        <p>The majority of funds are securely stored in offline, cold wallets. Robust security measures ensure your money is safe.</p>
      </div>
      <div class="feature-card" data-aos="flip-up">
        <div class="feature-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
        <h3>Automated Earning</h3>
        <p>Our system automatically starts running after you place an order, and payouts are processed every 24 hours.</p>
      </div>
      <div class="feature-card" data-aos="flip-down">
        <div class="feature-icon"><i class="fa-solid fa-user-tie"></i></div>
        <h3>Expert Team</h3>
        <p>Our team consists of professionals from the blockchain industry and IT engineers, ensuring expert service.</p>
      </div>
      <div class="feature-card" data-aos="zoom-in-up">
        <div class="feature-icon"><i class="fa-solid fa-cogs"></i></div>
        <h3>Easy Mining</h3>
        <p>No hardware is needed as we provide hash power and take care of the mining process on your behalf.</p>
      </div>
      <div class="feature-card" data-aos="zoom-in-down">
        <div class="feature-icon"><i class="fa-solid fa-leaf"></i></div>
        <h3>Eco-friendly Mining</h3>
        <p>Our miners and cooling systems are powered by environmentally-friendly mono crystalline solar panels.</p>
      </div>
    </div>
  </section>

  <!-- PLANS SECTION -->
  <section class="plans" data-aos="fade-up">
    <h2 class="plans-title">Choose Your Plan</h2>
    <div class="plan-container">
      <!-- Plan Card 1 -->
      <div class="plan-card" data-aos="fade-up" data-aos-delay="150">
        <div class="card-image">
          <img src="Assets/1st-miner-Photoroom.png" style="width: 100%;" alt="Plan 1 Image" />
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
          <img src="Assets/2nd-miner-Photoroom.png" style="width: 100%;" alt="Plan 2 Image" />
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
          <img src="Assets/3rd-miner-Photoroom.png" style="width: 100%;" alt="Plan 3 Image" />
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
          <img src="Assets/4th-miner-Photoroom.png" style="width: 100%;" alt="Plan 4 Image" />
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
          <img src="Assets/5th-miner-Photoroom.png" style="width: 100%;" alt="Plan 5 Image" />
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
          <img src="Assets/6th-miner-Photoroom.png" style="width: 100%;" alt="Plan 6 Image" />
        </div>
        <h3>Plan 6</h3>
        <p>ID: #PLAN006</p>
        <p>Price: $6000</p>
        <p>Term: 70 days</p>
        <p>Daily Reward: 2.3%</p>
        <p>Capital Back: Yes</p>
        <button>Invest Now</button>
      </div>
      <!-- Extra cards (hidden by default) -->
      <div class="plan-card hidden-plan" data-aos="fade-up" data-aos-delay="450">
        <div class="card-image">
          <img src="Assets/7th-miner-Photoroom.png" style="width: 100%;" alt="Plan 7 Image" />
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
          <img src="Assets/8th-miner-Photoroom.png" style="width: 100%;" alt="Plan 8 Image" />
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
  </section>

  <!-- ABOUT SECTION -->
  <section class="about" data-aos="fade-up">
    <div class="about-text" data-aos="fade-right">
      <h2>About IONMINING PRO</h2>
      <p>
        IONMINING PRO is at the forefront of cloud mining innovation. We leverage cutting-edge technology to deliver a
        seamless and secure mining experience.
        Our platform is designed for both beginners and experts, ensuring you can start earning Bitcoin effortlessly.
      </p>
      <p>
        With a commitment to transparency, security, and environmental sustainability, IONMINING PRO is dedicated to
        helping you mine Bitcoin from anywhere in the world.
      </p>
    </div>
    <div class="about-image" data-aos="fade-left">
      <img src="Assets/3rd_bitcoin.jpg" alt="About IONMINING PRO">
    </div>
  </section>

  <!-- WHY CHOOSE US SECTION -->
  <section class="why-choose" data-aos="fade-up">
    <h3>WHY CHOOSE US</h3>
    <h2>Reasons to choose our platform</h2>
    <div class="choose-grid">
      <div class="choose-card" data-aos="zoom-in">
        <div class="choose-icon"><i class="fa-solid fa-microchip"></i></div>
        <p>
          <strong>Advanced Technology and Facilities:</strong> IONMINING PRO has a world-class cloud computing platform and advanced equipment deployment technology to ensure mining efficiency and stability. Our data centers and partner computing centers are equipped with top-quality equipment.
        </p>
      </div>
      <div class="choose-card" data-aos="zoom-in" data-aos-delay="100">
        <div class="choose-icon"><i class="fa-solid fa-headset"></i></div>
        <p>
          <strong>Comprehensive Technical Support:</strong> Our team provides comprehensive technical support and equipment maintenance services, ensuring your mining operations remain safe and reliable.
        </p>
      </div>
      <div class="choose-card" data-aos="zoom-in" data-aos-delay="200">
        <div class="choose-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
        <p>
          <strong>Competitive Pricing and Transparent Fees:</strong> Our plans are competitively priced with a transparent fee structure, offering you cost-effective mining benefits.
        </p>
      </div>
    </div>
  </section>

  <!-- AFFILIATE PROGRAM SECTION -->
  <section class="affiliate-section" data-aos="fade-up">
    <div class="affiliate-text" data-aos="fade-right">
      <h3>Affiliate Program</h3>
      <h2>Our affiliate program offers a variety of benefits.</h2>
      <ul>
        <li>You can become an affiliate without making a deposit.</li>
        <li>If a user you referred invests, you'll receive 3% of their first deposit as a bonus.</li>
        <li>We provide instant payouts of affiliate rewards in cryptocurrency.</li>
        <li>Your earning potential is boundless with no limits on referrals.</li>
      </ul>
      <a href="{{ route('affiliates') }}" class="affiliate-btn">Know More</a>
    </div>
    <div class="affiliate-image" data-aos="fade-left">
      <img src="Assets/affliate-image.jpg" alt="Affiliate Program">
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="faq" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p class="intro">
      Find answers to the most common questions here. If you need further assistance, feel free to contact us.
    </p>
    <div class="faq-item" data-aos="fade-right">
      <details>
        <summary>What is IONMINING PRO?</summary>
        <p>IONMINING PRO is a prominent cryptocurrency investment platform established in 2017 and based in the United Kingdom. Trusted by a global community of over 500,000 users, our cloud mining website offer one of the most affordable and efficient ways to earn Bitcoin. As a licensed mining service, we provide shared access to powerful computational resources, eliminating the need for users to invest in costly mining hardware or GPUs. Our platform is designed to be straightforward and user-friendly, ensuring that anyone can participate in crypto mining. With a strong history of delivering consistent daily returns and maintaining full transparency, IONMINING PRO is known for its dedication to security, trustworthiness, and reliability in the cryptocurrency mining space.</p>
      </details>
    </div>
    <div class="faq-item" data-aos="fade-left">
      <details>
        <summary>How does cloud mining work?</summary>
        <p>Cloud mining is a method of cryptocurrency mining that allows individuals to participate without owning or maintaining physical mining hardware. Instead, users rent computing power from a cloud mining provider, which operates large-scale mining farms equipped with specialized equipment. By purchasing a mining contract—typically specifying the amount of hashrate, duration, and associated fees—users can receive a share of the mined cryptocurrency based on the power they’ve rented. This process eliminates the need to deal with complex setup, hardware maintenance, or high electricity costs. While cloud mining offers a convenient and accessible entry point into crypto mining, it also comes with potential risks, such as reduced profitability, limited control, and the possibility of unreliable or fraudulent providers.</p>
      </details>
    </div>
    <div class="faq-item" data-aos="fade-right">
      <details>
        <summary>Is my investment safe?</summary>
        <p>At IONMINING PRO, the safety of your investment is our top priority. All user funds are securely stored in offline, cold wallets, which are not connected to the internet and therefore protected from online threats and hacking attempts. Our platform is built with advanced security protocols, including encryption, multi-layer authentication, and continuous monitoring, to ensure the highest level of protection for your assets. By combining robust cold storage practices with cutting-edge security measures, we provide our users with a secure and trustworthy environment for cryptocurrency mining and investment.</p>
      </details>
    </div>
    <div class="faq-item" data-aos="fade-left">
      <details>
        <summary>How can I join the affiliate program?</summary>
        <p>Sign up on our platform to start referring users and earning bonuses through our affiliate program.</p>
      </details>
    </div>
    <div class="faq-item" data-aos="fade-right">
      <details>
        <summary>What are the fees for cloud mining?</summary>
        <p>Our fee structure is transparent with no hidden charges. Fees vary by plan and cover maintenance and operational costs.</p>
      </details>
    </div>
    <div class="faq-item" data-aos="fade-left">
      <details>
        <summary>How often are payouts processed?</summary>
        <p>Payouts are processed automatically every 24 hours, ensuring regular and reliable earnings.</p>
      </details>
    </div>
    <div class="faq-item" data-aos="fade-right">
      <details>
        <summary>Do I need technical knowledge to start mining?</summary>
        <p>No. Our platform is user-friendly, so anyone can start mining Bitcoin effortlessly without technical expertise.</p>
      </details>
    </div>
    <div class="faq-item" data-aos="fade-left">
      <details>
        <summary>What cryptocurrencies can I earn?</summary>
        <p>Currently, we focus on Bitcoin mining, but we are exploring additional cryptocurrencies for future expansion.</p>
      </details>
    </div>
    <div class="faq-contact" data-aos="zoom-in">
      <a href="{{ route('contact') }}" class="contact-btn">Contact Us</a>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section class="testimonials" data-aos="fade-up">
    <h2>Testimonials</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card" data-aos="flip-up">
        <p>"IONMINING PRO made it incredibly easy to start mining Bitcoin without any technical hassle. Their service is top-notch!"</p>
        <div class="author">John Doe</div>
        <div class="role">Crypto Investor</div>
      </div>
      <div class="testimonial-card" data-aos="flip-up" data-aos-delay="100">
        <p>"The platform's security and transparency gave me the confidence to invest. I highly recommend IONMINING PRO to anyone looking into cloud mining."</p>
        <div class="author">Jane Smith</div>
        <div class="role">Blockchain Enthusiast</div>
      </div>
      <div class="testimonial-card" data-aos="flip-up" data-aos-delay="200">
        <p>"Their affiliate program is fantastic! I earned a bonus on my first referral and the support team is super responsive."</p>
        <div class="author">Alice Johnson</div>
        <div class="role">Affiliate Marketer</div>
      </div>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <footer data-aos="fade-up">
    <div class="footer-container">
      <div class="footer-section footer-logo">
        <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo" />
        <p>IONMINING is a versatile company with a clear mission: to equip you with the essential tools and services for success in the digital asset realm.</p>
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
          <li><a href="#">Terms & Conditions</a></li>
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
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 <img src="Assets/default-monochrome.svg" alt="IONMINING PRO Logo" style="vertical-align:middle; max-width: 80px;">. All Rights Reserved.</p>
    </div>
    <div class="back-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
      <i class="fas fa-chevron-up"></i>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- Initialize AOS -->
  <script>
    AOS.init({
      duration: 1100,           // Longer duration for graceful transitions
      easing: 'ease-in-out',    // Smooth easing effect
      once: true // Animate only once while scrolling down
    });
  </script>
  <!-- Hamburger Menu Functionality -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.querySelector('.menu-toggle');
      const mobileMenu = document.querySelector('.mobile-menu');
      const menuClose = document.querySelector('.menu-close');

      if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function () {
          mobileMenu.classList.add('active');
        });
      }
      if (menuClose && mobileMenu) {
        menuClose.addEventListener('click', function () {
          mobileMenu.classList.remove('active');
        });
      }
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
