<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cloud Storage Plans</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #d6f0ff;
            font-family: 'Open Sans', sans-serif;
        }

        .judul {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .section-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
        }

        .plan-box {
            border: 1px solid #dddddd;
            padding: 35px;
            text-align: center;
            background: white;
        }

        .plan-title {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .price {
            color: #888;
            font-size: 18px;
            margin: 15px 0;
        }

        .btn-plan {
            background: #cccccc;
            color: white;
            border: none;
        }

        .btn-upgrade {
            background: #ff5a5f;
            color: white;
            border: none;
        }

        .feature-title {
            color: black;
            font-weight: 500;
        }

        .feature-desc {
            color: grey;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1 class="judul">Cloud Storage Subscription Plans</h1>
        <p class="text-center">Oleh: Yudith Zharifah Utami</p>
        <p>
            <center><img src="https://www.lhageek.com/wp-content/uploads/2019/10/Cloud-Storage-Adalah-min.jpg"
                    width="600px">
            </center>
        </p>

        <div class="row mt-4">
            <div class="col section-box">

                <h3 class="text-center font-weight-bold">SELECT YOUR STORAGE PLAN</h3>

                <p class="text-center text-muted mb-5">
                    Choose a cloud storage package that fits your personal or business needs
                </p>

                <div class="row text-center">

                    <!-- STARTER -->

                    <div class="col-md-4">

                        <div class="plan-box">

                            <h5 class="plan-title">STARTER</h5>

                            <div class="price">$9 / Month</div>

                            <button class="btn btn-plan mb-3">YOUR PLAN</button>

                            <p><span class="feature-title">10GB</span> <span class="feature-desc">Cloud Storage</span>
                            </p>

                            <p><span class="feature-title">1</span> <span class="feature-desc">User Account</span></p>

                            <p><span class="feature-title">Basic</span> <span class="feature-desc">File Sharing</span>
                            </p>

                            <p><span class="feature-title">Mobile</span> <span class="feature-desc">App Access</span>
                            </p>

                            <p><span class="feature-title">Email</span> <span class="feature-desc">Customer
                                    Support</span></p>

                        </div>

                    </div>

                    <!-- PROFESSIONAL -->

                    <div class="col-md-4">

                        <div class="plan-box">

                            <h5 class="plan-title">PROFESSIONAL</h5>

                            <div class="price">$16 / Month</div>

                            <button class="btn btn-upgrade mb-3">UPGRADE</button>

                            <p><span class="feature-title">100GB</span> <span class="feature-desc">Cloud Storage</span>
                            </p>

                            <p><span class="feature-title">5</span> <span class="feature-desc">User Accounts</span></p>

                            <p><span class="feature-title">Advanced</span> <span class="feature-desc">File
                                    Sharing</span>
                            </p>

                            <p><span class="feature-title">Automatic</span> <span class="feature-desc">File
                                    Backup</span>
                            </p>

                            <p><span class="feature-title">24/7</span> <span class="feature-desc">Customer
                                    Support</span>
                            </p>

                        </div>

                    </div>

                    <!-- BUSINESS -->

                    <div class="col-md-4">

                        <div class="plan-box">

                            <h5 class="plan-title">BUSINESS</h5>

                            <div class="price">$24 / Month</div>

                            <button class="btn btn-upgrade mb-3">UPGRADE</button>

                            <p><span class="feature-title">Unlimited</span> <span class="feature-desc">Cloud
                                    Storage</span></p>

                            <p><span class="feature-title">Unlimited</span> <span class="feature-desc">User
                                    Accounts</span></p>

                            <p><span class="feature-title">Team</span> <span class="feature-desc">Collaboration
                                    Tools</span></p>

                            <p><span class="feature-title">Daily</span> <span class="feature-desc">Data Backup</span>
                            </p>

                            <p><span class="feature-title">Priority</span> <span class="feature-desc">Technical
                                    Support</span></p>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>
