<?php  include('./config/constants.php'); ?>
<?php
 if(!isset($_SESSION['username'])){
    header('location:index.php');
}
elseif($_SESSION['usertype']!='doctor' ){
    header('location:index.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        label{
            width:100px;
            font-family:arial;
            font-weight:bold;
            text-align:right;
            padding-top:10px;
            padding-bottom:10px;
            display:inline-block;
            
        }
        .som{
            width:270px;
            padding:2px;
            border-radius:4px;
        }
        .sr{
            width:200px;
            padding:2px;
            border-radius:4px;
            margin-left:27%;
        }

        .forms{
            width: 500px;
            background:skyblue;
            border-radius:10px;
        }
        .btn{
            background:red;
            color:white;
            font-size:20px;
            padding:2px;
            border:none;
        }
        
    </style>
    
</head>
<body>
    <?php include('./partials/doctor_sidebar.php'); ?>

    <div class="contants">
        <center>
        <h1>outpatient registeration </h1>
        <br>
        <div class="forms">
            <form action="" method="get">
                <input type="text" name="search" class="sr" <?php if(isset($_GET['search'])){echo $_GET['search'];} ?>>
                <button type="button" class="btn">Search</button>
                <br><br>
                <?php
                if(isset($_GET['search'])){
                    $search=$_GET['search'];
                    $sql="SELECT *FROM number WHERE serial_number='$search'";
                    $result=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($result);
                    if($count>0){
                        $row=mysqli_fetch_assoc($result);
                        $name=$row['name'];
                        $doctor_name=$row['doctor_name'];
                        $serial_number=$row['serial_number'];
                        ?>
                        <div>
                            <label for="">name</label>
                            <input type="text" name="name" class="som" value="<?php echo $name; ?>">

                        </div>
                        <div>
                            <label for=""> doctor name</label>
                            <input type="text" name="doctor_name" class="som" value="<?php echo $doctor_name; ?>">
                        </div>
                        <div>
                            <label for="">serial number</label>
                            <input type="number" name="serial_number" class="som" value="<?php echo $serial_number; ?>">
                        </div>
                        <div>
                            <label for="">reason</label>
                            <textarea name="reason" id="" class="som" required></textarea>
                        </div>
                        <div>
                            <label for="">date</label>
                            <input type="date" name="date" class="som">
                        </div>
                        <div>
                            <input type="submit" name="submit" value="register outpatient" class="btn">
                        </div>
                        <?php
                    }
                    else{
                        ?>
                        <div style="color:green;font-size:17px;">this is not valid id</div>
                    <?php
                    }
                }

                ?>


            </form>
            <?php
            if(isset($_GET['submit'])){
                $name=$_GET['name'];
                $doctor_name=$_GET['doctor_name'];
                $serial_number=$_GET['serial_number'];
                $reason=$_GET['reason'];
                $date=$_GET['date'];
                $sql2="INSERT INTO op
                SET
                name='$name',
                doctor_name='$doctor_name',
                serial_number='$serial_number',
                reason='$reason',
                date='$date'
                ";
                $result2=mysqli_query($conn,$sql2);
                if($result2==true){
                    header('location:doctorHome.php');
                }
                

            }

            ?>
        </div>

        </center>
       
    </div>

 
    
</body>
</html>