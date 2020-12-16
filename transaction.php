<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transfer History</title>
</head>

<body>

<div class="Maindiv">

	<div class="Transations">
        <h2>Transactions</h2>
        <form action="index.php">
    <input type="submit" class="selectbtn selectbtn3" value="Home" />
</form> <br>
        <form action="customer.php">
    <input type="submit" class="selectbtn selectbtn3" value="Customer" />
</form> 
</div>
       <div class="trtable">
    <table>
        <thead>
            <tr>
                
                <th>Sender</th>
                <th>Receiver</th>
                <th>Balance</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td><?php echo $rows['Sender']; ?></td>
            <td><?php echo $rows['Receiver']; ?></td>
            <td><?php echo $rows['Balance']; ?> </td>
            <td><?php echo $rows['Date']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>
    </div>
</div>

        </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>