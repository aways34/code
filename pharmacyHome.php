
<?php  include('./config/constants.php'); ?>
<?php
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

else if($_SESSION['usertype']!='pharmacy'){
    header('location:index.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php include('./partials/pharmacy_sidebar.php'); ?>
    <div class="contants">
        <h1>pharmacy home </h1>

      
       
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi recusandae odit aliquam, asperiores quia maxime quisquam, et doloribus quam at, odio quasi saepe nobis reprehenderit qui debitis eum harum provident?</p>
    </div>

 
    
</body>
</html>