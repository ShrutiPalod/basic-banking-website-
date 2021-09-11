<?php 

include 'connection.php';

  $select_query ="SELECT * FROM userinfo";
  
  $select_query_result = mysqli_query($con, $select_query);


  ?>

  <?php

       if(isset($_POST['submit'])){
          $from = $_POST['sender'];
          $to = $_POST['receiver'];
          $amount = $_POST['amount'];
          $date = $_POST['date'];

          $sql = "SELECT * from userinfo where accountno= $from";
          $query = mysqli_query($con,$sql);
          $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

          $sql = "SELECT * from userinfo where accountno=$to";
          $query = mysqli_query($con,$sql);
          $sql2 = mysqli_fetch_array($query);

             if($amount > $sql1['cuamt']) 
             {
                 echo '<script type="text/javascript">';
                 echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
                 echo '</script>';
             }
             else if($amount == "") 
             {
                 echo '<script type="text/javascript">';
                 echo ' alert("Fill Amount")';  // showing an alert box.
                 echo '</script>';
             }
             else if($amount == 0) 
             {
                 echo '<script type="text/javascript">';
                 echo ' alert("Fill Amount")';  // showing an alert box.
                 echo '</script>';
             }

              else {
        
                  // deducting amount from sender's account
                  $newbalance = $sql1['cuamt'] - $amount;
                  $sql = "UPDATE userinfo set cuamt=$newbalance where accountno=$from";
                  mysqli_query($con,$sql);
     

        // adding amount to reciever's account
                  $newbalance = $sql2['cuamt'] + $amount;
                  $sql= "UPDATE userinfo set cuamt = $newbalance where accountno=$to";
                  mysqli_query($con,$sql);
        
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO `trans` (`sender`, `receiver`, `amount`, `date`) VALUES ('$sender', '$receiver', '$amount', '$date')";
        $query=mysqli_query($con,$sql);

        if($query){
            echo "<script> alert('Transaction Successful');
                            window.location='trans.php';
                  </script>";
           
       }
       $newbalance =0;
       $amount = 0;




        

       
 
       
      
}


}



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
    <title>Banking System/User Detail</title>
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

    <div class="main_heading">
        <center>
            <h1 style="margin-top: 20px;">
                User Account List
            </h1>
            <p>Choose a user From a given list</p>
            <p>Select user and click on Select button / click on user name</p>
        </center>
        <center>
        <div class="container">

        <table class= "table table-bordered">
              <tr>
              <th>Account Number</th>
              <th>Name</th>
              <th>age</th>
              <th>Bank</th>
              <th>Current Amount</th>
              <!--<th><button class="btn1">Send Amount</button></a></th>-->
              </tr>
                       <?php while ($row = mysqli_fetch_array($select_query_result)){ ?>
                       <tr>
                       <td><?php echo $row['accountno']; ?></td>
                       <td><?php echo $row['name']; ?></td>
    
                       <td><?php echo $row['age']; ?></td>
    
                       <td><?php echo $row['bank']; ?></td>
    
                       <td><?php echo $row['cuamt']; ?></td>
                       <!--<td><a href="singleuser.php"><button class="btn1">Click</button></a></td>-->
    
    
             </tr>
             <?php } ?>
    
             </table>
        </div>
        
            </div>

        </center>

        
    </div>

    <center>
    <button type="button" class="btn2 btn-info btn-all" data-toggle="modal" data-target="#myModal" id="send">Transfer Money</button>
    <div class="container transfer" id="transfer">
     <div class="jumbotron">
       <center><h2>Fill Transfer Details</h2></center>
       <form name="contact-form" action="" method="post">
       <input type="text" name="sender" placeholder ="Sender Account Number">
       <input type="text" name="receiver" placeholder ="Receiver Account Number">
       <input type="text" name="amount" placeholder="Enter Amount in Rupees">
       <input type="date" name="date" placeholder="date"><br>
       <div class="accept">
       <input type="checkBox"><p>I Want to Procced<p>

       </div><br>
       
       
       <button class="btn2 btn-primary" name="submit" type="submit">Transfer Money</button>

     </div>
     </form>

     
     </center>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
