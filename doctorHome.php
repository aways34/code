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
            font-family:arial;
            font-weight:bold;
            text-align:right;
        }
        .som{
            width:270px;
            padding:2px;
            border-radius:4px;
        }
        .table_th{
            padding:30px;
            font-size:20px;
        }
        .table_td{
            padding:20px;
        }
    </style>
    
</head>
<body>
    <?php include('./partials/doctor_sidebar.php'); ?>
    <div class="contants">
        <h1>doctor reports </h1>
        <br><br>
        <form action="">
        <div>
        <label for="">patient number</label>
        <input type="text" name="p_number" class="som" value=" <?php if(isset($_GET['p_number'])){
             echo $_GET['p_number'];
        }  ?>"> 
        <input type="submit" name="search">
        <br><br>
                <table border="1px">
                    <tr>
                        <th class="table_th">patient number</th>
                        <th class="table_th">patient name</th>
                        <th class="table_th">doctor name</th>
                        <th class="table_th">description</th>
                    </tr>

        <?php
        if(isset($_GET['search'])){
        if(isset($_GET['p_number'])){
            $p_number=$_GET['p_number'];
            $sql="SELECT * FROM inpatient_registeration WHERE patient_number=$p_number";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            if($count>0){
                $row=mysqli_fetch_assoc($result);
                $id=$row['id'];
                $patient_number=$row['patient_number'];
                $patient_name=$row['patient_name'];
                $doctor_name=$row['doctor_name'];
                $description=$row['description'];
                ?>
               
                    <tr>
                        <td class="table_td" > <?php  if(isset($_GET['p_number'])){ echo $patient_number;} ?></td>
                        <td class="table_td"> <?php  if(isset($_GET['p_number'])){ echo $patient_name;} ?> </td>
                        <td class="table_td"> <?php  if(isset($_GET['p_number'])){ echo $doctor_name;} ?></td>
                        <td class="table_td"> <?php  if(isset($_GET['p_number'])){ echo $description;} ?></td>
                    </tr>

                </table>
                <?php
            } 
        }}
    

    ?>
        </div>
        <?php


?>
        </form>

        
       
    </div>

 
    
</body>
</html>