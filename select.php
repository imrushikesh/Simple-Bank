<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $Balance = $_POST['Balance'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($Balance)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }


  
    
    else if($Balance > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    


   
    else if($Balance == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $Nbalance = $sql1['Balance'] - $Balance;
                $sql = "UPDATE customers set Balance=$Nbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $Nbalance = $sql2['Balance'] + $Balance;
                $sql = "UPDATE customers set Balance=$Nbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $Sender = $sql1['Name'];
                $Receiver = $sql2['Name'];
                $sql = "INSERT INTO transaction(`Sender`, `Receiver`, `Balance`) VALUES ('$Sender','$Receiver','$Balance')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transaction.php';
                           </script>";
                    
                }

                $Nbalance= 0;
                $Balance =0;
        }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Basic Banking System">
    <meta name="keywords" content="HTML, CSS,Bootstrap,JavaScript">
    <meta name="author" content="Rushikesh Patil">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>My Bank</title>
</head>
<body>
<div class="MainDiv">
    <div class="Cust">
        <p class="Transtext">Transaction</p>
            <?php
                include 'config.php';
                $id=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$id";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['Name'] ?></td>
                    <td><?php echo $rows['Email'] ?></td>
                    <td><?php echo $rows['Balance'] ?></td>
                </tr>
            </table>
        </div>

    <div class="slabel">
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $id=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$id";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['Name'] ;?> (Balance: 
                    <?php echo $rows['Balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>

            <label>Amount:</label>
            <input type="number" class="form-control" name="Balance" required>   
                <div class="tbtn">
            <button class="selectbtn selectbtn2" name="submit" type="submit">Transfer</button>
            </div>

            <div>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    </div>
</div>

</body>
</html>