<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BsvCloud Sign In</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: radial-gradient(circle at center, #2b1b3f, #0e1120);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .container {
            position: relative;
            background-color: #0b1120;
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            z-index: 10;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 1.2rem;
            color: #8a3ffc;
            cursor: pointer;
            font-weight: bold;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .logo span {
            font-size: 1.5rem;
            font-weight: 600;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 8px;
            border: none;
            border-radius: 25px;
            background-color: #12192c;
            color: white;
            outline: none;
            font-size: 0.95rem;
        }

        .input-error {
            color: #ff6b6b;
            font-size: 0.85rem;
            margin-bottom: 12px;
        }

        .status-message {
            color: #4ade80;
            font-size: 0.9rem;
            margin-bottom: 12px;
            text-align: center;
        }

        .forgot-password a:link,
        .forgot-password a:visited,
        .forgot-password a:hover,
        .forgot-password a:active {
            text-align: left;
            font-size: 0.85rem;
            margin-bottom: 20px;
            color: #aaa;
        }

        .btn {
            background-color: #8a3ffc;
            border: none;
            padding: 14px;
            margin-top: 0.8rem;
            width: 100%;
            border-radius: 25px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #7a32e8;
        }

        .signup {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .signup a {
            color: white;
            font-weight: 600;
            text-decoration: none;
        }

        .signup a:hover {
            text-decoration: underline;
        }

        /* NEW: flex alignment for remember me */
        .remember-container label {
            display: flex;
            align-items: center;
        }

        .remember-container input[type="checkbox"] {
            margin-top: 0.5rem;
            margin-right: 0.5rem;
            width: auto;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container" data-aos="zoom-in" data-aos-duration="1000">
        <button class="close-btn" onclick="window.location='{{ url('/home') }}'">&#10005;</button>
        <div class="logo">
            <img src="{{ asset('Assets/default-monochrome.svg') }}" alt="BsvCloud logo" />
        </div>

        <h2>Sign In</h2>

        @if (session('status'))
            <div class="status-message">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <label for="email">Email Address:</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email"
                required
                autofocus
            />
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror

            <!-- Password -->
            <label for="password">Password:</label>
            <input
                id="password"
                type="password"
                name="password"
                placeholder="Enter your password"
                required
                autocomplete="current-password"
            />
            @error('password')
                <div class="input-error">{{ $message }}</div>
            @enderror

            <!-- Remember Me -->
            <div class="mt-2 remember-container">
                <label for="remember">
                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    />
                    <span>Remember me</span>
                </label>
            </div>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                </div>
            @endif

            <button class="btn" type="submit">Sign In</button>
        </form>

        <div class="signup">
            Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
