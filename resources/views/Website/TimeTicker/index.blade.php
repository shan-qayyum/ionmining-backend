<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <title>Coming Soon</title>
  <style>
    /* Reset & Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html {
      font-size: 16px;
    }
    body, html {
      height: 100%;
      font-family: "Courier New", Courier, monospace;
    }
    
    /* Navbar Base Styles */
    .navbar {
      width: 100%;
      background: linear-gradient(to right, #14142b, #0d0d19);
      padding: 15px 30px;
      position: relative;
      z-index: 100;
    }
    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .logo img {
      width: 150px;
    }
    
    /* Desktop Navigation */
    .nav-links {
      display: flex;
      gap: 20px;
      align-items: center;
    }
    .nav-links a {
      text-decoration: none;
      color: white;
      font-size: 1rem;
      transition: color 0.3s ease-in-out;
    }
    .nav-links a:hover,
    .nav-links a.active {
      color: #a855f7;
    }
    
    /* Authentication Buttons (Desktop) */
    .auth-buttons {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .auth-buttons a {
      text-decoration: none;
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      transition: background-color 0.3s ease-in-out;
      font-size: 0.9rem;
    }
    .auth-buttons .sign-in {
      border: 2px solid #a855f7;
    }
    .auth-buttons .sign-in:hover {
      background: #a855f7;
    }
    .auth-buttons .sign-up {
      background: #a855f7;
    }
    .auth-buttons .sign-up:hover {
      background: #7c3aed;
    }
    
    /* Mobile Navigation Toggle */
    .menu-toggle {
      display: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: #fff;
    }
    
    /* Mobile Navigation Menu */
    .mobile-menu {
      display: none;
      position: absolute;
      top: 60px;
      right: 30px;
      background-color: #1e1e2f;
      border-radius: 8px;
      padding: 20px;
      width: 80%;
      max-width: 300px;
      z-index: 1001;
    }
    .mobile-menu.active {
      display: block;
    }
    .mobile-menu ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .mobile-menu ul li a {
      text-decoration: none;
      color: white;
      font-size: 1rem;
      transition: color 0.3s ease-in-out;
      padding: 8px 0;
    }
    .mobile-menu ul li a:hover,
    .mobile-menu ul li a.active {
      color: #a855f7;
    }
    /* Mobile Authentication Buttons Container (in one row) */
    .auth-container {
      display: flex;
      gap: 10px;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
    }
    .auth-container a {
      flex: 1;
      text-align: center;
      padding: 10px 0;
      border-radius: 20px;
      font-size: 0.95rem;
      transition: background-color 0.3s ease-in-out;
    }
    .auth-container a.sign-in {
      border: 2px solid #a855f7;
      color: #a855f7;
    }
    .auth-container a.sign-in:hover {
      background: #a855f7;
      color: #fff;
    }
    .auth-container a.sign-up {
      background: #a855f7;
      color: #fff;
      border: 2px solid #a855f7;
    }
    .auth-container a.sign-up:hover {
      background: #7c3aed;
      border-color: #7c3aed;
    }
    
    /* Coming Soon Section */
    .bgimg {
      background-image: url('https://media.istockphoto.com/id/1423098321/vector/dark-purple-edge-glow-modern-gradient-abstract-blend-background.jpg?s=612x612&w=0&k=20&c=FpuUIzzyi8ryd3lXnArlafHYM_Bip5otkOJAa7T4hg4=');
      height: calc(100% - 75px);
      background-position: center;
      background-size: cover;
      position: relative;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
    }
    .topleft {
      position: absolute;
      top: 2rem;
      left: 3rem;
      font-size: 1rem;
    }
    .middle {
      max-width: 800px;
      width: 100%;
      padding: 20px;
    }
    .middle h1 {
      margin-bottom: 20px;
      font-size: 3rem;
      text-transform: uppercase;
      letter-spacing: 0.25rem;
      color: #fff;
      text-shadow: 0 0 10px #b57edc, 0 0 20px #b57edc, 0 0 30px #e6e6fa, 0 0 40px #e6e6fa, 0 0 50px #b57edc, 0 0 75px #b57edc;
      animation: neonPulse 1.5s infinite alternate;
    }
    @keyframes neonPulse {
      from {
        text-shadow: 0 0 5px #b57edc, 0 0 10px #b57edc, 0 0 15px #e6e6fa, 0 0 20px #e6e6fa, 0 0 25px #b57edc, 0 0 35px #b57edc;
      }
      to {
        text-shadow: 0 0 15px #b57edc, 0 0 25px #b57edc, 0 0 35px #e6e6fa, 0 0 45px #e6e6fa, 0 0 55px #b57edc, 0 0 75px #b57edc;
      }
    }
    .middle hr {
      margin: 0 auto 20px;
      width: 40%;
      border: 1px solid rgba(255, 255, 255, 0.7);
    }
    .middle #demo {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .home-button {
      margin-top: 40px;
      padding: 10px 20px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      background-color: #8a2be2;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .home-button:hover {
      background-color: #6a0dad;
    }
    
    /* Responsive Media Queries */
    @media (max-width: 1000px) {
      .nav-links,
      .auth-buttons {
        display: none;
      }
      .menu-toggle {
        display: block;
      }
      .auth-buttons a {
        padding: 6px 12px;
        font-size: 0.85rem;
      }
    }
    @media (max-width: 768px) {
      .logo img {
        width: 130px;
      }
      .menu-toggle {
        display: block;
      }
      .mobile-menu {
        right: 20px;
        top: 60px;
      }
      .middle h1 {
        font-size: 2.5rem;
        letter-spacing: 0.2rem;
      }
      .middle #demo {
        font-size: 1.25rem;
      }
      .topleft {
        top: 1rem;
        left: 1rem;
        font-size: 0.9rem;
      }
    }
    @media (max-width: 480px) {
      .logo img {
        width: 110px;
      }
      .middle h1 {
        font-size: 2rem;
        letter-spacing: 0.15rem;
      }
      .middle #demo {
        font-size: 1rem;
      }
      .home-button {
        font-size: 0.9rem;
        padding: 8px 16px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
        <img src="Assets/default-monochrome.svg" alt="Logo">
      </div>
      <div class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('plans') }}">Plans</a>
        <a href="{{ route('affiliates') }}">Affiliates</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('FAQ') }}">FAQ</a>
        <a href="{{ route('contact') }}">Contact</a>
      </div>
      <div class="auth-buttons">
        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
        <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
      </div>
      <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </div>
    <div class="mobile-menu">
      <div class="menu-close" style="text-align: right; cursor: pointer; font-size: 1.5rem;">
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
          <a href="{{ route('login') }}" class="sign-in">Sign In</a>
          <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Coming Soon Section -->
  <div class="bgimg">
    <div class="middle">
      <h1>Coming Soon</h1>
      <hr />
      <p id="demo"></p>
      <button class="home-button" onclick="window.location.href='{{ route('home') }}'">Go to Home</button>
    </div>
  </div>

  <script>
    // Mobile Menu Functionality
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuClose = document.querySelector('.menu-close');
    menuToggle.addEventListener('click', () => mobileMenu.classList.add('active'));
    menuClose .addEventListener('click', () => mobileMenu.classList.remove('active'));

    // Countdown Timer: target exactly 2 months from now
    const now = new Date();
    const targetDate = new Date(now);
    targetDate.setMonth(targetDate.getMonth() + 2);
    const countDownTime = targetDate.getTime();

    const demoElement = document.getElementById("demo");
    if (demoElement) {
      const updateCountdown = () => {
        const nowMs = new Date().getTime();
        const distance = countDownTime - nowMs;

        const days    = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        demoElement.innerHTML = 
          `${days}d ${hours}h ${minutes}m ${seconds}s`;

        if (distance < 0) {
          clearInterval(interval);
          demoElement.innerHTML = "EXPIRED";
        }
      };

      // update immediately, then every second
      updateCountdown();
      const interval = setInterval(updateCountdown, 1000);
    }
  </script>
</body>
</html>