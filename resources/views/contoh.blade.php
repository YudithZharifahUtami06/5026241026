<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Button Groups</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }

        .judul {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .section-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            margin-bottom: 15px;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1 class="judul">Menu Restoran - Button Groups</h1>
        <p class="text-center">Oleh: Yudith Zharifah Utami</p>

        <!--- Button Group -->
        <p>
            <center><img src="https://id-test-11.slatic.net/p/5ef1f0434c9336efb7f40c0e8c325168.png" width="600px">
            </center>
        </p>
        <div class="row mt-4">
            <div class="col section-box">

                <h3>Minuman</h3>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Teh</button>
                    <button type="button" class="btn btn-primary">Kopi</button>
                    <button type="button" class="btn btn-primary">Jus</button>
                </div>

            </div>
        </div>


        <!--- Large Button Group -->
        <div class="row mt-4">
            <div class="col section-box">

                <h3>Paket Makanan</h3>

                <div class="btn-group btn-group-lg">
                    <button type="button" class="btn btn-success">Nasi Goreng</button>
                    <button type="button" class="btn btn-success">Mie Ramen</button>
                    <button type="button" class="btn btn-success">Ayam Geprek</button>
                </div>

            </div>
        </div>


        <!--- Vertical Button Group -->
        <div class="row mt-4">
            <div class="col section-box">

                <h3>Camilan</h3>

                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-warning text-white">Siomay</button>
                    <button type="button" class="btn btn-warning text-white">Udang Keju</button>
                    <button type="button" class="btn btn-warning text-white ">Udang Rambutan</button>
                </div>

            </div>
        </div>


        <!--- Nesting Button Groups & Dropdown -->
        <div class="row mt-4">
            <div class="col section-box">

                <h3>Menu Dessert</h3>

                <div class="btn-group">

                    <button type="button" class="btn btn-info">Es Krim</button>
                    <button type="button" class="btn btn-info">Pisang Bakar</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            Roti
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Roti Maryam</a>
                            <a class="dropdown-item" href="#">Roti Bakar</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <!--- Split Button Dropdown -->
        <div class="row mt-4">
            <div class="col section-box">

                <h3>Pilih Minuman</h3>

                <div class="btn-group">

                    <button type="button" class="btn btn-danger">Minuman Dingin</button>

                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Capucino</a>
                        <a class="dropdown-item" href="#">Es Jeruk</a>
                    </div>

                </div>

            </div>
        </div>


        <!--- Vertical Button Group with Dropdown -->
        <div class="row mt-4">
            <div class="col section-box">

                <h3>Menu Restoran</h3>

                <div class="btn-group-vertical">

                    <button type="button" class="btn btn-secondary">Makanan</button>
                    <button type="button" class="btn btn-secondary">Minuman</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            Dessert
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Roti Maryam</a>
                            <a class="dropdown-item" href="#">Pisang Coklat</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        <!--- Button Groups Side by Side -->
        <div class="row mt-4">
            <div class="col section-box">

                <h3>Menu Paket</h3>

                <div class="btn-group">
                    <button type="button" class="btn btn-dark">Paket Hemat</button>
                    <button type="button" class="btn btn-dark">Paket Keluarga</button>
                    <button type="button" class="btn btn-dark">Paket Spesial</button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Paket Ayam</button>
                    <button type="button" class="btn btn-primary">Paket Seafood</button>
                    <button type="button" class="btn btn-primary">Paket Vegetarian</button>
                </div>

            </div>
        </div>

    </div>

</body>

</html>
