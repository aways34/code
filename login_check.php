
<?php include('./config/constants.php');?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        error_reporting(0);
        $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        if($row['usertype']=='doctor'){
            $_SESSION['username']=$username;
            $_SESSION['usertype']='doctor';
            header('location:doctorHome.php');

        }
       elseif($row['usertype']=='admin'){
        $_SESSION['username']=$username;
        $_SESSION['usertype']='admin';
        header('location:admin.php');
        
    }
    elseif ($row['usertype']=='pharmacy') {
        $_SESSION['username']=$username;
        $_SESSION['usertype']='pharmacy';
        header('location:pharmacyHome.php');
        
    }
        else{
            echo"ummatched username or password";
        }
    }


}


?>