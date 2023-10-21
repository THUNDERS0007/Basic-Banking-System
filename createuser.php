<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <style>
      body {
        background-color: #171C2F;
        color:  #E9BCB9;
    }

    .center-box {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 50%;
        border-radius: 20px;
        background-color: #171C2F;
        color: #E9BCB9;
    }

    .card-header {
        background-color: #171C2F;
        color:  #E9BCB9;
    }

    .app-form-control {
        background-color: #171C2F;
        color:  #E9BCB9;
    }

    .app-form-button {
        background-color: #171C2F;
        color:  #E9BCB9;
    }
        .center-box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 50%;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('New User created');
        window.location='transfermoney.php';
        </script>";
    }
}
?>
<?php
include 'navbar.php';
?>
<div class="container center-box">
    <div class="card">
        <div class="card-header">User Login</div>
        <div class="card-body">
            <form class="app-form" method="post">
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                </div>
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                </div>
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                </div>
                <div class="app-form-group button" style="margin-top: 20px;">
                    <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                    <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                </div>
            </form>
        </div>
    </div>
</div>    
</body>
</html>
