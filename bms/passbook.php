<?php
require('connection.inc.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=mysqli_query($con,"select * from transaction where user_id='$id'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Spark Bank</title>
    <link rel="icon" href="favicon.ico">
    <!-- <script src="https://kit.fontawesome.com/38d46c5bcf.js" crossorigin="anonymous"></script> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">     
    <link rel="stylesheet" href="style passbook.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
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

   
    <div class="container text-center">
      <h3><b>Transaction Details</b></h3>
      <br>

      <div class="table-responsive mb-5">
        <table class='table table-bordered text-center'>

          <thead class="thead-dark">
            <tr>
              <th scope="col" colspan="3">RECEIVER</th>

              <th scope="col" rowspan="2">TRANSACTION AMOUNT</th>

            </tr>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">ACCOUNT NUMBER</th>

            </tr>
          </thead>
          <tbody>
          <?php while ($row=mysqli_fetch_assoc($sql)){?>
                <tr>
                    <td><?php echo $row['customer_id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['account_no']?></td>
                    <td><?php echo $row['ammount']?></td>
                </tr>
        <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>