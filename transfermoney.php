<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style type="text/css">
      button {
        transition: 1.5s;
      }
      button:hover {
        background-color: #616C6F;
        color: white;
      }
      body {
        background-color: #171C2F;
        color: #54192D; 
      }
      .table {
        background-color: #1C1A32;
        color: #E9BCB9; 
      }
      .table th {
        background-color: #54192D; 
      }
      .table th, .table td {
        border-color: #E9BCB9;
      }
      .btn {
        background-color: #54192D;
        color: #E9BCB9; 
        transition: 1.5s;
      }
      .btn:hover {
        background-color: #DAA08D; 
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
    <h2 class="text-center pt-4">Transfer Money</h2>
    <br>
    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($rows = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="py-2"><?php echo $rows['id'] ?></td>
                            <td class="py-2"><?php echo $rows['name']?></td>
                            <td class="py-2"><?php echo $rows['email']?></td>
                            <td class="py-2"><?php echo $rows['balance']?></td>
                            <td><a href="selecteduserdetail.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn">Transact</button></a></td> 
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
