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
            width: 100px;
            display:inline-block;
            font-size:20px;
            font-weight:bold;
            padding-top:10px;
            padding-bottom:10px;
            text-align:right;
            text-align: justify;
            
        }
        .som{
            width: 60%;
            padding:3px;
            border-radius:5px;
            border:none;
            
        }
        .forms{
            width: 500px;
           
            background:skyblue;
            padding-top:50px;
            padding-bottom:50px;
            border-radius:10px;
        }
        .btn{
            padding:8px;
            background:#2ecc71;
            border:none;
            border-radius:5px;
            color:white;
            font-size:16px;
            cursor:pointer;
        }
        
    </style>
    
</head>
<body>
    <?php include('./partials/doctor_sidebar.php'); ?>
    <div class="contants">
        <center>
        <h1>inpation Registeration</h1>
        <br>
        <div class="forms">
            <form action="" method="GET">
               
            <div>
                <label for="">p_number</label>
                <select name="p_number" id="">
                    <?php
                    $sql1="SELECT *FROM number";
                    $result1=mysqli_query($conn,$sql1);
                    $count1=mysqli_num_rows($result1);
                    if($count1>0){
                        while($row1=mysqli_fetch_assoc($result1)){
                            $id=$row1['id'];
                            $serial_number=$row1['serial_number'];
                            echo $serial_number;
                            
                            ?>
                            <option value="<?php echo $serial_number; ?>"> <?php echo $serial_number;  ?></option>
                            <?php
                        }
                    }
                    
                    ?>
                    
                    
                </select>
                <input type="submit" >
            </div>
                

                
    

          <?php 
          if(isset($_GET['p_number'])){
            $p_number=$_GET['p_number'];
            $sql="SELECT *FROM number WHERE serial_number='$p_number'";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            if($count>0){
                $row=mysqli_fetch_assoc($result);
                $id=$row['id'];
                $serial_number=$row['serial_number'];
                $name=$row['name'];
                $doctor_name=$row['doctor_name'];
                echo $doctor_name;
            }

          }
          
          ?>

           
                
                <div>
                    <label for=""> patient-name</label>
                    <input type="text" name="name" class="som" value="<?php if(isset($_GET['p_number'])) {echo $name; } ?>  ">
                </div>
                <div>
                    <label for="">doctor_name</label>
                    <input type="text" name="doctor_name" class="som" value="<?php if(isset($_GET['p_number'])){ echo $doctor_name;}?>">
            </div>
            <div>
                <label for="">Reason of admited</label>
                 <textarea name="reason" id="" class="som"></textarea   >
            </div>
            <div>
                <label for="">patient_number</label>
                 <input type="number"  name="serial_number"class="som" value="<?php if(isset($_GET['p_number'])){ echo $serial_number;}?>">
            </div>
            <div>
                <input type="submit" name="submit" value="la jiifiyay" class="btn">
            </div>
                
            </form>
            <?php
        if(isset($_GET['submit'])){
            $p_number=$_GET['serial_number'];          
            $patient_name=$_GET['name'];
            $doctor_name=$_GET['doctor_name'];
            $reason=$_GET['reason'];

          
            $sql3="INSERT INTO inpatient_registeration
            SET
            patient_name='$patient_name',
            doctor_name='$doctor_name',
            patient_number='$p_number',
            description='$reason'
            ";
            $resul3=mysqli_query($conn,$sql3);
            if($resul3==true){
                echo"<div style='font-size:16px;color:green;'> diiwaan galinta waa lagu guulaystay</div>";
            }
            


        }



       ?>
        </div>


       
        </center>
      


        
       
    </div>

 
    
</body>
</html>