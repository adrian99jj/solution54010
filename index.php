<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #cbd5e1;
        }

        .mainRow {
            background-color: #f9fafc;
            background-image: url("resources/bg-pattern.png");
        }

        .mainContainer {
            max-width: 1280px;

        }

        .firstColum {
            background-color: #d8ebfc;
        }

        .mainSecondHolder {
            background-color: white;
        }

        .ForPaddingTop {
            padding-top: 150px;
        }
    </style>
</head>
<body>
<div class="container mainContainer my-5">
    <!-- Title Section -->
    <div class="row mainRow text-center py-5">
        <div class="col-12">
            <h2>Pricing & Plans</h2>
            <p>Discover the plan that unlocks the transformative power <br> of digital art and join our vibrant community today.</p>
        </div>
    </div>

    <!-- Pricing Table -->
    <div class="row mainSecondHolder text-center">
        <!-- Feature Labels Column -->
        <div class="col-md-3 p-4 firstColum text-start ">
            <ul class="list-unstyled">
                <li class="py-2 border-bottom">Website number</li>
                <li class="py-2 border-bottom">Server storage</li>
                <li class="py-2 border-bottom">Database</li>
                <li class="py-2 border-bottom">Unmetered Bandwidth</li>
                <li class="py-2 border-bottom">SSD Disk</li>
                <li class="py-2 border-bottom">VCPUS Fontworld</li>
                <li class="py-2 border-bottom">WordPress install</li>
                <li class="py-2 border-bottom">Server speed</li>
            </ul>
        </div>

        <!-- Plan 1 -->
        <div class="col-md-3 p-4">
            <div class="border rounded p-3 h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="text-primary">Team</h5>
                    <h2 class="fw-bold">$59</h2>
                    <p>Per month</p>
                    <ul class="list-unstyled text-start">
                        <li class="py-2 border-bottom">10</li>
                        <li class="py-2 border-bottom">500 GB</li>
                        <li class="py-2 border-bottom">15</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">-</li>
                        <li class="py-2 border-bottom">-</li>
                        <li class="py-2 border-bottom">-</li>
                        <li class="py-2 border-bottom">-</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-link">Get Started →</a>
            </div>
        </div>

        <!-- Plan 2 - Highlighted -->
        <div class="col-md-3 p-4">
            <div class="bg-dark text-white rounded p-3 h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="text-warning">Popular</h5>
                    <h2 class="fw-bold">$99</h2>
                    <p>Per month</p>
                    <ul class="list-unstyled text-start">
                        <li class="py-2 border-bottom">50</li>
                        <li class="py-2 border-bottom">1 TB</li>
                        <li class="py-2 border-bottom">Unlimited</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-warning text-dark">Get Started →</a>
            </div>
        </div>

        <!-- Plan 3 -->
        <div class="col-md-3 p-4">
            <div class="border rounded p-3 h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="text-primary">Enterprise</h5>
                    <h2 class="fw-bold">$299</h2>
                    <p>Per month</p>
                    <ul class="list-unstyled text-start">
                        <li class="py-2 border-bottom">Unlimited</li>
                        <li class="py-2 border-bottom">Unlimited</li>
                        <li class="py-2 border-bottom">Unlimited</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                        <li class="py-2 border-bottom">✔</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-link">Get Started →</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
