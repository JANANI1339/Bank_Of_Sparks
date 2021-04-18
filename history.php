<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style2.css">
</head>
<body>
    <header id = "viewdetails">
        <h3>Customer Details</h3>
    </header>
    <section>
        <table>
            <tr>
                <th>Transaction_id</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Transaction_time</th>
            </tr>
            <?php
    $con = new mysqli("localhost","root","Skcet@0511","sparks_bank");
    if($con->connect_error)
    {
        die("connection failed");
    }
    $sql = "select* from transaction";
    $result = $con->query($sql);
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "<tr width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>";
            $id = $row["Transaction_id"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$id</td>";
            $name1 = $row["Sender"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$name1</td>";
            $name2 = $row["Receiver"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$name2</td>";
            $bal = $row["Amount"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$bal</td>";
            $time = $row["Transaction_time"];
            echo "<td width= 50% padding = 10px text-align = center font-family = Roboto Mono font-size = 15px>$time</td>";
            echo "</tr>";
            
        }
    }
   
?>
            
        </table>
    </section>
</body>
</html>