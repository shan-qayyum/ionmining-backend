<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BsvCloud Sign Up</title>
    <!-- Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <!-- AOS animation CSS -->
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
            height: 100vh;
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
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
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

        .error {
            color: #ff6b6b;
            font-size: 0.85rem;
            margin-bottom: 8px;
        }

        /* UPDATED: flex alignment for terms checkbox + label */
        .terms {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            margin-bottom: 20px;
        }

        .terms input[type="checkbox"] {
            margin-right: 0.5rem;
            accent-color: #8a3ffc;
        }

        .terms a {
            color: #8a3ffc;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        .btn {
            background-color: #8a3ffc;
            border: none;
            padding: 14px;
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
    </style>
</head>

<body>
    <div class="container" data-aos="zoom-in" data-aos-duration="1000">
        <button class="close-btn" onclick="window.location='{{ url('/') }}'">&#10005;</button>
        <div class="logo">
            <img src="{{ asset('Assets/default-monochrome.svg') }}" alt="BsvCloud logo" />
        </div>
        <h2>Sign up</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name" value="{{ old('name') }}" required autofocus />
            @error('name') <div class="error">{{ $message }}</div> @enderror

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email Address" value="{{ old('email') }}" required />
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" required />
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Your Password" required />
            @error('password_confirmation') <div class="error">{{ $message }}</div> @enderror

            <div class="terms">
                <input type="checkbox" id="terms" name="terms" required />
                <label for="terms">I accept <a href="{{ url('/terms') }}">Terms and Conditions</a></label>
            </div>

            <button class="btn" type="submit">Sign up</button>
        </form>

        <div class="signup">
            Already have an account? <a href="{{ route('login') }}">Sign in</a>
        </div>
    </div>

    <!-- AOS script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
