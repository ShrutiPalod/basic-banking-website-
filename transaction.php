<?php 

include 'connection.php';

  $select_query ="SELECT * FROM trans";
  
  $select_query_result = mysqli_query($con, $select_query);


  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="header">
        <div class="container room">
            <div class="logo ">
                <h1>
                 Banking System
                </h1>
            </div>
            <div class="nav ">
                <li><a href="index.php">Home</a></li>
                <li><a href="userinfo.php">Transfer Money</a></li>
                <li><a href="trans.php">History</a></li>
            </div>
        </div>
    </div>
    
<center>
            <h1 style="margin-top: 20px;">
               History List
            </h1>
           
        </center>
        <center>
        <div class="container">

        <table class= "table table-bordered">
              <tr>
              <th>Sender</th>
              <th>Receiver</th>
              <th>Amount</th>
              <th>Date</th>
              <!--<th><button class="btn1">Send Amount</button></a></th>-->
              </tr>
                       <?php while ($row = mysqli_fetch_array($select_query_result)){ ?>
                       <tr>
                       <td><?php echo $row['sender']; ?></td>
                       <td><?php echo $row['receiver']; ?></td>
    
                       <td><?php echo $row['amount']; ?></td>
    
    
                       <td><?php echo $row['date']; ?></td>
                       <!--<td><a href="singleuser.php"><button class="btn1">Click</button></a></td>-->
    
    
             </tr>
             <?php } ?>
    
             </table>
        </div>
        
            </div>

        </center>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

