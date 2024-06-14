<?php  include('./config/constants.php'); ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        table{
            width: 50%;
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
    <center>
       
        <h1>doctor users </h1>
        <table border='1px'>

        <tr>
            <th class="table_th">username</th>
            <th class="table_th">password</th>
            <th class="table_th">usertype</th>
        </tr>
        <?php
        $sql="SELECT *FROM user WHERE usertype='doctor'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count>0){
            while($row=mysqli_fetch_assoc($res)){
                $id=$row['id'];
                $username=$row['username'];
                $password=$row['password'];
                $usertype=$row['usertype'];

                ?>
                 <tr>
            <td class="table_td"><?php  echo $username; ?></td>
            <td class="table_td"><?php  echo $password; ?></td>
            <td class="table_td"><?php  echo $usertype; ?></td>
        
        </tr>
                
                
                <?php
            }

        }
        else{
            ?>
            <div style="font-size:20px;color:green;">No doctor registered</div>
            <?php
        }

      ?>
       
        </table>
        <br> <br>
       <h1>Admin users</h1>
       <table border='1px'>
        
        <tr>
            <th class="table_th">username</th>
            <th class="table_th">password</th>
            <th class="table_th">usertype</th>
        </tr>
        <?php
        $sql1="SELECT * FROM user WHERE usertype='admin'";
        $result=mysqli_query($conn,$sql1);
        $count1=mysqli_num_rows($result);
        if($count1>0){
            while($row1=mysqli_fetch_assoc($result)){
                $id1=$row1['id'];
                $username1=$row1['username'];
                $password1=$row1['password'];
                $usertype1=$row1['usertype'];

                ?>
                 <tr>
            <td class="table_td"><?php echo $username1;  ?></td>
            <td class="table_td"><?php echo $password1;  ?></td>
            <td class="table_td"><?php echo $usertype1;  ?></td>
        
        </tr>

                <?php
            }
        }
        else{


            ?>
            <div style="font-size:20px;color:green;">No admins registered</div>
            <?php
        }

        ?>


    </table>
    <br> <br>

        <h1>pharmaciest users</h1>
       <table border='1px'>
        
        <tr>
            <th class="table_th">username</th>
            <th class="table_th">password</th>
            <th class="table_th">usertype</th>
        </tr>
        <?php
        $sql2="SELECT *FROM user WHERE usertype='pharmacy'";
        $result2=mysqli_query($conn,$sql2);
        $count2=mysqli_num_rows($result2);
        if($count2>0){
            while($row2=mysqli_fetch_assoc($result2)){

                $id2=$row2['id'];
                $username2=$row2['username'];
                $password2=$row2['password'];
                $usertype2=$row2['usertype'];
                ?>
                <tr>
            <td class="table_td"><?php echo $username2;  ?></td>
            <td class="table_td"><?php echo $password2;  ?></td>
            <td class="table_td"><?php echo $usertype2;  ?></td>
        
       </tr>


                <?php

        
            }

        }
        else{
            ?>
            <div style="font-size:20px;color:green;">NO pharmaciest registered</div>
            <?php

        }


    ?>
        
    </table>
        
       
      
        </center>
       
       
    </div>
  

 
    
</body>
</html>