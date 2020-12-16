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
    <div class="ViewButton">
             <div class="Button">
                 <a href="customer.php"><span>View All Customers</span></a>
            </div>
    </div>
    <div><?php
    include 'network.php';
    ?></div>

</div>
</body>
</html>