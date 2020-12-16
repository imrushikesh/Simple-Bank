<?php 
session_start();
$con=mysqli_connect('localhost','root','','bankcustomer');
$q="select * from customers ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Basic Banking System">
    <meta name="keywords" content="HTML, CSS,Bootstrap,JavaScript">
    <meta name="author" content="Rushikesh Patil">
    <link rel="stylesheet" href="style.css">
    <title>My Bank</title>
</head>
<body>
<div class="MainDiv">
    <div class="Cust">
        <table>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
          <th>Balance</th>
        <th>Action</th>
        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['Name']?></td>
                        <td><?php echo $rows['Email']?></td>
                        <td><?php echo $rows['Balance']?></td>
                        <td><a href="select.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="selectbtn ">Select Customer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>      
                        </tbody>
      
    </div>

</div>
<footer><?php
    include 'network.php';
    ?>
</footer>

</body>
</html>