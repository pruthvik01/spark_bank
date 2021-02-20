<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bank Management system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand text-warning font-weight-bold">Sparks Foundation Bank</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="mynavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="users.php" class="nav-link text-white">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="transaction.php" class="nav-link text-white">Transact Now</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container  headerset">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h1 class="color">Welcome To Sparks Foundation Bank</h1>
                    <h3>A world of enabled and connected little minds, building future</h3>
                    <button class="btn btn-warning btn-lg ml-auto"><a href="transaction.php" class="deco">Transact Now</a></button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-container">
                    <img src="./images/money-transfer-via-digital-wallet-illustration_82574-8891.jpg" alt="alternative" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

</body>

</html>