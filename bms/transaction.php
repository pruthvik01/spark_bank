<?php
require('connection.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bank Management system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center py-4">
                <h1>Transfer Money </h1>
            </div>
            <div class="col-md-6 ">
                <div class="form">
                    <form action="form.php" method="POST">
                        <div class="form-group">
                            <label for="Sender"><i class="fa fa-user fa-1x" aria-hidden="true" ></i> Sender Name</label>
                            <input type="text" class="form-control" id="sname" autocomplete="off" name="sname" onfocusout="myFunction()" required>
                        </div>
                        <div class="form-group">
                            <label for="Reciver"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Reciver Name</label>
                            <input type="text" class="form-control" autocomplete="off" id="rname" name="rname" onfocusout="resUpi()" required>
                        </div>

                        <div class="form-group"  >
                            <label for="Sender"><i class="fa fa-money" aria-hidden="true"></i>Current Balance</label>
                            <input type="text" class="form-control"  id="current_balance" readonly  required> 
                        </div>

                        <div class="form-group">
                            <label for="Amount"><i class="fa fa-inr" aria-hidden="true"></i>Amount:</label>
                            <input type="text" class="form-control" autocomplete="off" name="amount" required>
                        </div>

                        <div class="form-group">
                            <label for="Reciver"><i class="fa fa-id-card" aria-hidden="true"></i>Reciver UPI ID</label>
                            <select name="" id="" class="form-control">
                                <option id="recuid"   value=""></option>
                            </select>
                        </div>
     
                        <div class="form-group">
                            <label for="Reciver"><i class="fa fa-key" aria-hidden="true"></i>UPI PIN:</label>
                            <input type="password" class="form-control" autocomplete="off" name="upi" required>
                            <small class="form-text text-muted">Please Enter Your 6 digit UPI Pin no</small>
                        </div>
                        <button class="btn btn-primary btn-bg" type="submit" name="submit">Pay Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const myFunction = () =>{
            // alert('hi');
            let input=document.getElementById('sname').value;
            $.ajax({
                url:'balance.php',
                type:'POST',
                data:'name='+input,
                success:function(result){
                    if(result!='0'){
                        $('#current_balance').val(result);
                    }else{
                        $('#current_balance').val('Please Insert Valid User Name');
                    }
                   
                }
            });
        }
        const resUpi =() =>{
            let rinput=document.getElementById('rname').value;
            $.ajax({
                url:'upiid.php',
                type:'POST',
                data:'name='+rinput,
                success:function(result){
                    if(result!='0'){
                        $('#recuid').html(result);
                    }else{
                        $('#recuid').html('Please Insert Valid Reciver Name');
                    }
                   
                }
            });
        }
    </script>
</body>

</html>