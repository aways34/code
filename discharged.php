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
        .forms{
            width: 500px;
            background:skyblue;
            border-radius:8px;
        }
        label{
            width: 100px;
            font-size:15px;
            font-family:arial;
            padding-top:10px;
            padding-bottom:10px;
            display:inline-block;
            text-align:right;
        }
        .som{
            width: 70%;
            border:none;
            border-radius:6px;
            padding:5px;
            margin:3px;
        }
        .sr{
            width: 30%;
      
            border:none;
            border-radius:3px;
            padding:5px;
           
            
        }
        .sub{
            padding:5px;
            font-size:14px;
            background:red;
            border-radius:5px;
            color:white;
            border:none;
        }
    </style>
    
    
</head>
<body>
    <?php include('./partials/doctor_sidebar.php'); ?>
    <div class="contants">
        <center>
        <h1>outpatient registeration </h1>
        <div class="forms">
        <form action="" method="get">
            <div>
                <label for=""> patient number</label>
                <input type="search" name="inp_number" class="sr" value="<?php if(isset($_GET['inp_number'])){ echo $_GET['inp_number']; }?>">
                <input type="submit" name="search" class="sub">
            </div>
            <br> <br>
            <?php
            if(isset($_GET['inp_number'])){
                $inp_number=$_GET['inp_number'];
                $sql="SELECT *FROM inpatient_registeration WHERE Patient_number='$inp_number'";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                if($count>0){
                    $row=mysqli_fetch_assoc($res);
                    $patient_name=$row['patient_name'];
                    $doctor_name=$row['doctor_name'];
                    $patient_number=$row['patient_number'];

                    
        ?>
        <div>
                <label for="">patient name</label>
                <input type="text" name="patient_name" class="som" value="<?php echo $patient_name?>">
        </div>
        <div>
            <label for="">doctor name</label>
            <input type="text" name="doctor_name" class="som" value="<?php echo $doctor_name;  ?>">
        </div>
        <div>
            <label for="">Discharging reason</label>
            <input type="text" name="reason" class="som">
        </div>
        <div>
            <label for="">patient number</label>
            <input type="text" name="p_number" class="som" value="<?php echo $patient_number  ?>">
        </div>
        <div><input type="submit" name="submit" value="Discharged" class="sub"></div>

        <?php



                }
                else{

                    ?>
                    <div style="font-size:18px;color:black;"> this number is not exist patient</div> 
                    <?php

                }
            } 


        ?>
            
        </form>
        
        <?php
        if(isset($_GET['submit'])){
        $name=$_GET['patient_name'];
        $doctor_name=$_GET['doctor_name'];
        $reason=$_GET['reason'];
        $p_number=$_GET['p_number'];
        $sql1="INSERT INTO discharged
        SET
        name='$name',
        doctor_name='$doctor_name',
        d_reason='$reason',
        patient_number='$p_number'
        ";
        $result=mysqli_query($conn,$sql1);
        if($result==true){
            $sql3="DELETE FROM  inpatient_registeration WHERE patient_number='$p_number'";
            $result3=mysqli_query($conn,$sql3);
            if($result3==true){
                echo"succesfully discharged";
            }
        }
        }

    

    


    ?>
        </div>
        </center>
       

    </div>

 
    
</body>
</html>