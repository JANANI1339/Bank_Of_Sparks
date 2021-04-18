<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style2.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Crete+Round:ital@1&display=swap');
</style>
</head>
<body>
    <header id = "viewdetails">
        <h3>Customer Details</h3>
    </header>
    <section>
        <table>
            <tr>
                <th>Customer_id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Balance</th>
            </tr>
    <?php
    $con = new mysqli("localhost","root","Skcet@0511","sparks_bank");
    if($con->connect_error)
    {
        die("connection failed");
    }
    $sql = "select* from customer_details";
    $result = $con->query($sql);
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "<tr width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>";
            $id = $row["Customer_id"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$id</td>";
            $name = $row["Customer_name"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$name</td>";
            $age = $row["Age"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$age</td>";
            $bal = $row["Balance"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$bal</td>";
            echo "</tr>";
        }
    }

?>
            
        </table>
    </section>
    <p> <a href = "transaction.html" id= "transaction" class = "buttons">Make Transaction</a></p>
</body>
</html>