<?php  include('./config/constants.php'); ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        table{
            width:80%;
        }
        .table_th{
            padding:30px;
            font-size:20px;
           
        }
        .table_td{
            padding:30px;
            background:skyblue;
        }
        
    </style>
</head>
<body>
    <?php include('./partials/sidebar.php'); ?>
    <div class="contants">
        <h1>veiw pationt list</h1>
        <br><br>
        <table border="1px">
            <tr>
                <th class="table_th">pationt name</th>
                <th class="table_th">pationt No</th>
                <th class="table_th">Cost</th>
                <th class="table_th">Date registered</th>
                <th class="table_th">Directing doctor</th>
            </tr>
            <?php
            $sql="SELECT *FROM number";
            $res=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=mysqli_fetch_assoc($res)){
                    $id=$row['id'];
                    $pationt_name=$row['name'];
                    $pationt_no=$row['serial_number'];
                    $cost=$row['cost'];
                    $date=$row['date'];
                    $doctor=$row['doctor_name'];
                    ?>
                    <tr>
                <td class="table_td"><?php echo $pationt_name;?></td>
                <td class="table_td"><?php echo $pationt_no;?></td>
                <td class="table_td">$<?php echo $cost;?></td>
                <td class="table_td"><?php echo $date;?></td>
                <td class="table_td"><?php echo $doctor;?></td>
            </tr>

                    <?php




                }
            }


?>
            

        </table>

        
    </div>

 
    
</body>
</html>