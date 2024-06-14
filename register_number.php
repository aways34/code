<?php  include('./config/constants.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .login{
            width: 500px;
            background:skyblue;
            border-radius:10px;
            text-align:center;
            padding-top:50px;
            padding-bottom:50px;
        }
        label{
            width: 100px;
            font-size:20px;
            text-align:right;
            padding-top:10px;
            padding-bottom:10px;
            display:inline-block;
            font-weight:bold;
        }
        .som{
            width: 60%;
            padding:3px;
            border-radius:5px;
            
        }
        .sub{
            padding:10px;
            
        }
        
    </style>
    
</head>
<body>
    <?php include('./partials/sidebar.php'); ?>
    <div class="contants">
        <h1>Number registeration </h1>
        <div style="font-size:20px;color:green;"> halkaan waxa lagu diiwaan galiyaa numberada la qabtay maalin kasta</div>

       <div class="login">
        <form action="" method="post">
            <div>
                <label for="">pationt name</label>
                <input type="text" name="name" class="som">
            </div>
            <div>
                <label for="">pationt No</label>
                <input type="number" name="serial_number" class="som">
            </div>
            <div>
                <label for="">Cost</label>
                <input type="number" name="cost" class="som">
            </div>
            <div>
                <label for="">Date</label>
                <input type="date" name="date">
            </div>
            <div>
                <label for="">doctor name</label>
                <select name="doctor_name" id="" >

                <?php
                $sql="SELECT *FROM user WHERE usertype='doctor'";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                if($count>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $username=$row['username'];
                        $password=$row['password'];
                        ?>
                        <option value="<?php echo $username ?>"><?php echo $username ?></option>
                       
                        <?php
                    }
                }

                ?>

              
                    
                </select>
                
            </div>
            <div><input type="submit" name="submit" value="register number" class="sub"></div>
        </form>
       </div>
       <?php
       if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $serial_number=$_POST['serial_number'];
        $cost=$_POST['cost'];
        $doctor_name=$_POST['doctor_name'];
        $date=$_POST['date'];
        $sql2="INSERT INTO number
        
        SET
        name='$name',
        cost='$cost',
        doctor_name='$doctor_name',
        serial_number='$serial_number',
        date='$date'
        ";
        $result=mysqli_query($conn,$sql2);
        if($result==true){
            echo "succesfully registered";
        }


       }

       ?>
    </div>

 
    
</body>
</html>