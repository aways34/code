
<?php  include('./config/constants.php'); ?>
<?php
 if(!isset($_SESSION['username'])){
    header('location:index.php');
}
elseif($_SESSION['usertype']!='admin' ){
    header('location:index.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .box{
            width:33%;
            height:200px
            border:1px solid black;
            padding: 30px 20px;
            text-align:center;
            background:#2ecc71;
            font-size:20px;
            border-radius:10px;
            margin:10px;
            float:left;
            
           
        }
        
        .two{
            background:#3498db;
        }
        .three{
            background:#182C61;
        }
        .four{
            background:#e74c3c
        }
        .five{
            background:#8e44ad;
        }
     .six{
        background:#f368e0;
     }
     .seven{
        background:#ff9f43;
     }
     .eight{
        background:#341f97;
     }
     .nine{
        background:#c8d6e5;
     }
     i{
      font-size:40px;
      color:white;
     }
     .fa{
        font-size:40px;
        color:white;
     }
     h5{
        font-weight:bolder;
        color:white;
        font-size:20px;
        font-weight:bold;
        padding-top:5px;
        padding-bottom:10px;
     }
    </style>
    
</head>
<body>
    <?php include('./partials/sidebar.php'); ?>
    <div class="contants">
    <?php
        if(isset($_SESSION['user-registered'])){
            echo $_SESSION['user-registered'];
            unset($_SESSION['user-registered']);
        }
        
       ?>
       <center>
        <h1>Admin Dashboard </h1>
        <br> <br>
        <div class="box-1">
            <?php  
            $sql="SELECT *FROM user ";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
             
            $sql2="SELECT *FROM user WHERE usertype='doctor' ";
            $result2=mysqli_query($conn,$sql2);
            $count2=mysqli_num_rows($result2);

            $sql3="SELECT *FROM user WHERE usertype='admin' ";
            $result3=mysqli_query($conn,$sql3);
            $count3=mysqli_num_rows($result3);
            
            $sql4="SELECT *FROM user WHERE usertype='pharmacy' ";
            $result4=mysqli_query($conn,$sql4);
            $count4=mysqli_num_rows($result4);

            $sql5="SELECT *FROM number  ";
            $result5=mysqli_query($conn,$sql5);
            $count5=mysqli_num_rows($result5);

            $sql6="SELECT  cost FROM number  ";
            $result6=mysqli_query($conn,$sql6);
            $count6=mysqli_num_rows($result6);

            ?>
        <div class="box one">
            
            <i class='bx bx-user'></i>
            <h5>total users</h5>
            <?php echo "<div style='color:white;'> $count users.</div>";?> 

        </div>
        <div class="box two">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <br>
            <h5>total doctors</h5>
            
            <?php echo "<div style='color:white;'> $count2 doctors.</div>";?> 
        </div>

        <div class="box three">
        <i class='bx bx-user'></i>
            <h5>total admin</h5>
            <?php echo "<div style='color:white;'> $count3 admins.</div>";?> 

        </div>
        <div class="box four">
        <i class='bx bx-user'></i>
            <h5>total pharmaciest</h5>
            <?php echo "<div style='color:white;'> $count4 pharmaciest.</div>";?> 
        </div>
        <div class="box five">
        <i class='bx bx-user'></i>
            <h5>total doctor no</h5>
            <?php echo "<div style='color:white;'> $count5 Numbers.</div>";?> 
        </div>
        <div class="box six">
        <i class='bx bx-user'></i>
            <h5>total doctor no</h5>
            <?php echo $count5;?> patient
        </div>
        <div class="box seven">
            <p>total number is 4</p>
        </div>
        <div class="box eight">
            <p>total number is 4</p>
        </div>
        
        </div>
       

        
    </div>

    </center>

 
    
</body>
</html>