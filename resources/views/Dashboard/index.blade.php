<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Responsive BsvCloud Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary: #3a3a70;
            --accent: #6c4ef3;
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
            --highlight: #ffc107;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: var(--bg);
            color: var(--text-light);
            display: flex;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #1A1F2E;
            padding: 30px 20px;
            overflow-y: auto;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }
        }

        .sidebar-logo {
            display: block;
            margin-bottom: 2rem;
            text-align: center;
        }

        .sidebar-logo img {
            margin-top: 1rem;
            max-width: 100%;
            height: auto;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            margin-bottom: 8px;
            color: var(--text-muted);
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-item i {
            width: 20px;
            text-align: center;
        }

        .nav-item:hover {
            background: var(--accent);
            color: #fff;
        }

        .sign-out {
            display: block;
            margin: 2rem auto 0;
            background: var(--accent);
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            color: #fff;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sign-out:hover {
            background: #5a31c6;
        }

        .sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: #333A4D;
            border-radius: 4px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #7A2AFF;
            border-radius: 4px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: #8B3CFF;
        }

        .close-btn {
            display: none;
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.5rem;
            color: var(--text-light);
            cursor: pointer;
        }

        .main {
            flex: 1;
            margin-left: 250px;
            padding: 30px;
            transition: margin-left 0.3s ease;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .topbar-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
        }

        .signout-btn {
            background: var(--accent);
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .signout-btn:hover {
            background: #5a31c6;
        }

        .cards,
        .order-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card,
        .order-card,
        .affiliate-card {
            background: linear-gradient(145deg, #2e3a59, #1e293b);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            position: relative;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover,
        .order-card:hover,
        .affiliate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .icon {
            position: absolute;
            top: -10px;
            right: -10px;
            background: var(--highlight);
            color: #000;
            border-radius: 50%;
            padding: 10px;
        }

        .orders {
            margin-top: 40px;
        }

        .affiliate {
            margin-top: 40px;
        }

        .affiliate-info {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 20px;
            align-items: center;
            margin-top: 20px;
        }

        .affiliate-link {
            background: var(--bg);
            padding: 10px;
            border-radius: 6px;
            word-break: break-all;
            font-size: 0.9rem;
        }

        .copy-btn {
            background: var(--accent);
            border: none;
            padding: 8px 14px;
            color: #fff;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .copy-btn:hover {
            background: #5a31c6;
        }

        .support {
            margin-top: 40px;
            background: #1e293b;
            padding: 20px;
            border-left: 4px solid var(--accent);
            border-radius: 10px;
        }

        .support h4 {
            margin-bottom: 10px;
        }

        .chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #9333ea;
            color: #fff;
            padding: 10px 16px;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 1000;
        }

        .chat-widget:hover {
            background: #772bb5;
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .close-btn {
                display: block;
            }

            .main {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <i id="close-btn" class="fas fa-times close-btn"></i>
        <div class="sidebar-logo">
            <img src="Assets/default-monochrome.svg" alt="BSVCloud Logo">
        </div>
        <a href="dashboard.html">
            <div class="nav-item"><i class="fas fa-tachometer-alt"></i> Dashboard</div>
        </a>
        <a href="deposit.html">
            <div class="nav-item"><i class="fas fa-wallet"></i> Deposit</div>
        </a>
        <a href="withdraw.html">
            <div class="nav-item"><i class="fas fa-money-check-alt"></i> Withdraw</div>
        </a>
        <a href="order.html">
            <div class="nav-item"><i class="fas fa-box"></i> My Orders</div>
        </a>
        <a href="my_bills.html">
            <div class="nav-item"><i class="fas fa-file-invoice"></i> My Bills</div>
        </a>
        <a href="dashboard_affiliates.html">
            <div class="nav-item"><i class="fas fa-users"></i> Affiliates</div>
        </a>
        <a href="settings.html">
            <div class="nav-item"><i class="fas fa-cog"></i> Settings</div>
        </a>
        <a href="two-factor-security.html">
            <div class="nav-item"><i class="fas fa-lock"></i> 2FA Security</div>
        </a>
        <button class="sign-out" onclick="location.href='{{ route('home') }}'">Sign Out</button>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="topbar">
            <i id="menu-toggle" class="fas fa-bars menu-toggle"></i>
            <div class="topbar-title">Dashboard</div>
            <button class="signout-btn" onclick="location.href='{{ route('home') }}'">Sign Out</button>
        </div>

        <div class="cards">
            <div class="card">
                <div class="icon"><i class="fas fa-wallet"></i></div>
                <h3>$15<br />Available Balance</h3>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-arrow-down"></i></div>
                <h3>$0.00<br />Total Deposit</h3>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-arrow-up"></i></div>
                <h3>$0.00<br />Total Withdraw</h3>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-chart-line"></i></div>
                <h3>+ $0.00<br />Total Profits</h3>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-user-cog"></i></div>
                <h3>+ $0.00<br />Total Commission</h3>
            </div>
        </div>

        <!-- ORDERS SECTION -->
        <div class="orders">
            <h3>My Orders</h3>
            <div class="order-cards">
                <div class="order-card">
                    <div class="icon"><i class="fas fa-cube"></i></div>
                    <h4>Total Orders<br />0</h4>
                </div>
                <div class="order-card">
                    <div class="icon"><i class="fas fa-check-circle"></i></div>
                    <h4>Active Orders<br />0</h4>
                </div>
                <div class="order-card">
                    <div class="icon"><i class="fas fa-times-circle"></i></div>
                    <h4>Expired Orders<br />0</h4>
                </div>
            </div>
        </div>

        <!-- AFFILIATE LINK -->
        <div class="affiliate">
            <h3>My Affiliate Link</h3>
            <div class="affiliate-info">
                <div class="affiliate-link" id="affiliateUrl">https://bsvcloud.com/sign-up?ref=520834</div>
                <button class="copy-btn" id="copyBtn">Copy</button>
            </div>
        </div>

        <!-- SUPPORT -->
        <div class="support">
            <h4>Do you have any Questions?</h4>
            <p>We strongly recommend you check the FAQ first. Contact our 24-hour online support for advice or technical
                assistance.</p>
            <button class="copy-btn" style="margin-top:10px;" onclick="location.href='support.html'">Get Support
                Now</button>
        </div>
    </div>

    <!-- CHAT WIDGET -->
    <div class="chat-widget">Chat with us, we’re online!</div>

    <!-- SCRIPT SECTION -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const menuToggle = document.getElementById('menu-toggle');
        const closeBtn = document.getElementById('close-btn');

        menuToggle.addEventListener('click', () => sidebar.classList.toggle('open'));
        closeBtn.addEventListener('click', () => sidebar.classList.remove('open'));

        document.getElementById('copyBtn').addEventListener('click', () => {
            const url = document.getElementById('affiliateUrl').innerText;
            navigator.clipboard.writeText(url).then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Copied!',
                    text: 'Affiliate link copied to clipboard',
                    timer: 1500,
                    showConfirmButton: false,
                    background: '#1e1e2f',
                    color: '#fff',
                    iconColor: '#00d084'
                });
            }).catch((err) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to copy the link.'
                });
            });
        });
    </script>
</body>

</html>