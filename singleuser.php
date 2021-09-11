<?php 
include 'connection.php';

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
    <link rel="stylesheet" href="main.css">
    <script src="main.js" defer></script>

    <title>Document</title>


</head>
<body>
<div class="header">
        <div class="container">
            <div class="logo ">
                <h1>
                 Banking System
                </h1>
            </div>
            <div class="nav ">
                <li><a href="">Home</a></li>
                <li><a href="">Transfer Money</a></li>
                <li><a href="">contact</a></li>
            </div>
        </div>
    </div>



    <div class="section_user">
    <center>
    <h1>
         <span>
         hii
         </span>
         Account Details
       </h1>
       

       <button type="button" class="btn btn-info btn-all" data-toggle="modal" data-target="#myModal" id="send">Transfer Money</button>
    
     <div class="container transfer" id="transfer">
     <div class="jumbotron">
       <center><h2>Fill Transfer Details</h2></center>
       <input type="text" placeholder="Bank Name">
       <input type="text" placeholder ="Account Number">
       <input type="text" placeholder="Enter Amount in Rupees"><br>
       <div class="accept">
       <input type="checkBox"><p>I Want to Procced<p>

       </div><br>
       
       
       <button class="btn btn-primary" id="sendmoney">Transfer Money</button>

     </div>
     </div>
   


  




    </center>
    
     
    <div class="container">
    <table class= "table table-bordered table-user">
    <tr>
    <th>User Accout No</th>
    <th>Transition</th> <!-- Send to / received From-->
    <th>Account No</th>
    <th>Amount</th>
    <th>Current Amount</th>
    
    </tr>
    <?php while ($row = mysqli_fetch_array($select_query_result)){ ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['con']; ?></td>
    
    <td><?php echo $row['exper']; ?></td>
    
    <td><?php echo $row['loca']; ?></td>
    
    <td><?php echo $row['sub']; ?></td>
    
    
    </tr>
    <?php } ?>
    
    </table>
    </div>

    </div>

    


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
