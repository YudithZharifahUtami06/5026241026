<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #ffd6e0, #d8f3dc);
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 80px 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            font-weight: 600;
            color: #444;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .card {
            background: #ffffff;
            border-radius: 25px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            color: #333;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            transition: 0.25s;
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .pink {
            background: #ffd6e0;
        }

        .green {
            background: #d8f3dc;
        }

        .title {
            font-weight: 600;
        }

        .desc {
            font-size: 13px;
            color: #777;
        }

        .arrow {
            font-size: 20px;
            color: #aaa;
        }

        @media (max-width: 700px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="container">

    <h1>Yudith Zharifah Utami 🌸</h1>

    <div class="grid">

        <a href="/pertemuan1" class="card">
            <div class="left">
                <div class="icon pink">🌸</div>
                <div>
                    <div class="title">Pertemuan 1</div>
                    <div class="desc">Intro HTML</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/pertemuan2" class="card">
            <div class="left">
                <div class="icon green">🌿</div>
                <div>
                    <div class="title">Pertemuan 2</div>
                    <div class="desc">Berita ITS</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/pertemuan3" class="card">
            <div class="left">
                <div class="icon pink">💻</div>
                <div>
                    <div class="title">Pertemuan 3</div>
                    <div class="desc">Responsive</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/tugaspertemuan3" class="card">
            <div class="left">
                <div class="icon green">✨</div>
                <div>
                    <div class="title">Tugas Pertemuan 3</div>
                    <div class="desc">Latihan</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/pertemuan4" class="card">
            <div class="left">
                <div class="icon pink">📄</div>
                <div>
                    <div class="title">Pertemuan 4</div>
                    <div class="desc">Testimony</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/pertemuan5" class="card">
            <div class="left">
                <div class="icon green">🌷</div>
                <div>
                    <div class="title">Pertemuan 5</div>
                    <div class="desc">Bootstrap</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/tugaspertemuan5" class="card">
            <div class="left">
                <div class="icon pink">💖</div>
                <div>
                    <div class="title">Tugas Pertemuan 5</div>
                    <div class="desc">Linktree</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/pertemuan7" class="card">
            <div class="left">
                <div class="icon green">🌿</div>
                <div>
                    <div class="title">Pertemuan 7</div>
                    <div class="desc">Routing & Controller</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

        <a href="/tugaspertemuan7" class="card">
            <div class="left">
                <div class="icon pink">⭐</div>
                <div>
                    <div class="title">Tugas Pertemuan 7</div>
                    <div class="desc">Menu Routing</div>
                </div>
            </div>
            <div class="arrow">→</div>
        </a>

    </div>

</div>

</body>

</html>
