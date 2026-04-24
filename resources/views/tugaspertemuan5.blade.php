<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vorme Pilates</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            font-size: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'DM Sans', sans-serif;
        }

        body {
            background: #6f3a48;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* CARD */
        .wrapper {
            width: 100%;
            max-width: 26rem;
            background: #8b4a5c;
            border-radius: 2rem;
            padding: 2rem 1.5rem;
            text-align: center;
        }

        /* LOGO WRAPPER (INI YANG PENTING) */
        .logo-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1.2rem;
        }

        /* LINGKARAN */

        .logo-circle {
            width: 6.5rem;
            height: 6.5rem;
            border-radius: 50%;
            background: #a35d6e;

            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* GAMBAR LOGO */
        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* TEXT */
        .title h1 {
            color: white;
            font-size: 1.4rem;
            font-weight: 600;
        }

        .title p {
            color: white;
            font-size: 0.9rem;
            opacity: 0.9;
            margin-top: 0.3rem;
        }

        /* BUTTON */
        .link {
            background: #eaeaea;
            padding: 1.1rem;
            border-radius: 2rem;
            margin-top: 1rem;
            text-decoration: none;
            color: black;
            display: block;
            position: relative;

            box-shadow: 0.35rem 0.4rem 0 black;
            transition: 0.15s;
        }

        .link:hover {
            transform: translateY(0.1rem);
            box-shadow: 0.2rem 0.2rem 0 black;
        }

        /* ICON KIRI */
        .link-icon {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            background: #8b4a5c;

            position: absolute;
            left: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
        }

        /* TEXT OFFSET */
        .link span {
            margin-left: 2.5rem;
        }

        /* DOT */
        .dots {
            position: absolute;
            right: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <!-- LOGO (FIXED CENTER) -->
        <div class="logo-wrapper">
            <div class="logo-circle">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
            </div>
        </div>

        <!-- TITLE -->
        <div class="title">
            <h1>Vorme Pilates</h1>
            <p>Form Your Body & Soul</p>
        </div>

        <!-- LINKS -->
        <a href="#" class="link">
            Website Vorme
            <div class="dots">⋮</div>
        </a>

        <a href="#" class="link">
            <div class="link-icon"></div>
            <span>ClassPass</span>
            <div class="dots">⋮</div>
        </a>

        <a href="#" class="link">
            <div class="link-icon"></div>
            <span>Strongbee</span>
            <div class="dots">⋮</div>
        </a>

        <a href="#" class="link">
            <div class="link-icon"></div>
            <span>Doogether</span>
            <div class="dots">⋮</div>
        </a>

        <a href="#" class="link">
            <div class="link-icon"></div>
            <span>WhatsApp Kelapa Gading</span>
            <div class="dots">⋮</div>
        </a>

    </div>

</body>

</html>
