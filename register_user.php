<?php  include('./config/constants.php'); ?>

<?php
 if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $first_name=$_POST['firt_name'];
        $last_name=$_POST['last_name'];
        $edu_level=$_POST['edu_level'];
        $gender=$_POST['gender'];
        $password=$_POST['password'];
       $usertype=$_POST['usertype'];
      
      $sql="INSERT INTO user
      SET
      first_name='$first_name',
      last_name='$last_name',
      edu_level='$edu_level',
      gender='$gender',
      username='$username',
      password='$password',
      usertype='$usertype'
      ";
      $result=mysqli_query($conn,$sql);
      if($result==true){
        $_SESSION['user-registered']="user registered succesfully";
        header('location:admin.php');}}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .div-reg{
            
            width: 500px;
            background:skyblue;
            padding-top:70px;
            padding-bottom:70px;
            text-align:center;
            border-radius:15px;
            margin-top:10px;
        }
        label{
            width: 100px;
            font-size:20px;
            text-align:right;
            display:inline-block;
            padding-top:10px;
            padding-bottom:10px
        }
        .som{
            width: 60%;
            padding:5px;
            border-radius:6px;
            border:none;
        }
        .sub{
            padding:10px;
            background-color:red;
            border:none;
            border-radius:5px;
        }
    </style>
    
</head>
<body>
 <?php include('./partials/sidebar.php');?>
    <div class="contants">
        <center>
        <h1>User Registration </h1>
       <div class="div-reg">
        <form action="" method="post">
        <div>
            <label for="">first name</label>
            <input type="text" name="firt_name" class="som" required>
            </div>
            <div>
            <label for="">last name</label>
            <input type="text" name="last_name" class="som" required>
            </div>
         
            <div>
            <label for="">Educational level</label>
            <input type="text" name="edu_level" class="som"  required>
            </div>

            <div>
            <label for="">username</label>
            <input type="text" name="username" class="som" required>
            </div>
            <div>
            <label for="">password</label>
            <input type="password" name="password" class="som" required>
            </div>

            <div>
        <label for="">gender</label>
        <select name="gender" id="" required>
            <option value="">----------select gender------</option class="som" >
            <option value="male">male</option class="som">
            <option value="female">female</option class="som">
        </select>
    </div>
            <div>
                <label for="">usertype</label required>
               <select name="usertype" id="">
                <option value="doctor">
                    doctor
                </option>
                <option value="admin">
                    admin
                </option>
                <option value="pharmacy"> pharmacy</option>
               </select>
    </div>
    
            <div>
                <input type="submit" name="submit" value="register" class="sub">
            </div>
        </form>
       </div>


</center>
    </div>    
</body>
</html>