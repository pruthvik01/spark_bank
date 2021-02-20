<?php
require('connection.inc.php');
$per_page=5;
$start=0;
$current_page=1;
if(isset($_GET['id'])){
    $start=$_GET['id'];
    $current_page=$start;
    $start--;
    $start=$start*$per_page;
}
$res = mysqli_query($con, "select * from users  limit $start, $per_page ");
$i = 1;

$total_records=mysqli_num_rows(mysqli_query($con,"select * from users"));
$num=ceil($total_records/$per_page);
?>

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
        <div class="row ">
            <div class="col-md-12 text-center mt-2">
                <h1>Our Users</h1>
            </div>
            <div class="ml-auto">
                <div class="form-group ">
                    <input type="text" class="form-control " id="myInput" placeholder="Search User" onkeyup="searchFunction()">
                </div>
            </div>
            <div class="table-responsive mb-2">
                <table id="tbl" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Account No</th>
                        <th>Transaction</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['customer_id'] ?></td>
                                <td><?php echo  $row['name'] ?> </td>
                                <td><?php echo  $row['mobile'] ?></td>
                                <td><?php echo  $row['email'] ?></td>
                                <td><?php echo  $row['account_no'] ?></td>
                                <td><a href="passbook.php?id=<?php echo $row['id'] ?>">View </a></td>
                            </tr>

                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination justify-content-end">
                        <?php 
                        for($i=1;$i<=$num;$i++){
                        $class='';
                        if($current_page==$i){
                            $class='active';
                        }
                            ?>
                        <li class="page-item  <?php echo $class ?> ">
                            <a href="?id=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
                        </li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script>
        const searchFunction = () => {
            let filter = document.getElementById('myInput').value.toUpperCase();
            let myTable = document.getElementById('tbl');
            let tr = myTable.getElementsByTagName('tr');
            for (var i = 0; i < tr.length; i++) {
                let td = tr[i].getElementsByTagName('td')[2];
                if (td) {
                    let txtValue = td.textContent || td.innerHTML;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>