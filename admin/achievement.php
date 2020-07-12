<?php
include("session.php");
?>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/node_modules/shards-ui/dist/css/shards.min.css" />
    <!-- <script
    src="https://kit.fontawesome.com/97f3c2998d.js"
    crossorigin="anonymous"
  ></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/css/common.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="background-color: transparent;">
        <div class="container">
            <a class="navbar-brand" href="#">Library Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Shelf <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container landing-section">
        <div class="row h-50">
            <div class="col-12 align-self-end">
                <div class="mb-4 text-center">
                    <h1 class="display-2">ACHIEVEMENT</h1>
                    <h4>BOARD</h4>
                </div>
            </div>
        </div>
        <div id="achievementData">
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./assets/node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/node_modules/shards-ui/dist/js/shards.min.js"></script>
    <script src="./assets/js/common.js"></script>
    <script src="achievement/getPoints.js"></script>
</body>

</html>