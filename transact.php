<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style2.css" >
   
</head>
<body>
<?php

$sender = $_POST["sender"];
$receiver = $_POST["receiver"];
$amt = $_POST["amount"];
$con = new mysqli("localhost","root","Skcet@0511","sparks_bank");
if($con->connect_error)
{
    die("connection failed");
}

$sql = "insert into Transaction (Sender,Receiver,Amount) values($sender, $receiver, $amt)";
 $con->query($sql);

$sql1 = "update Customer_details set Balance = Balance - $amt where Sender = $sender";
$con->query($sql1);
$sql2 = "update Customer_details set Balance = Balance + $amt where Sender = $receiver";
$con->query($sql2);

?>
<div class="successmessage">
<p id = "successmessage">Transaction successful!</p>
</div>
<p id="transpage">
<a href = "view.php" id= "view" class = "buttons">view customers</a>
    
     <a href = "history.php" id = "history" class="buttons">Transaction history</a> 
</p>
</body>
</html>

