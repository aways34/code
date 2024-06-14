<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(images/download.jfif);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
       

        .login{
            margin:160px auto;
            width: 500px;
            background:#3498db;
            border:1px solid black;
            text-align: center;
            padding-bottom: 70px;
            padding-top: 70px;
            border-radius: 10px;
            
        }
        label{
            width: 100px;
            font-size:20px;
            text-align:right;
            display:inline-block;
            color: white;
            font-weight: bold;
        }
    .som{
        width: 50%;
        border-radius:10px;
        margin:5px;
        padding: 3px;
        border: none;
        
    }
    .sub{
        padding: 8px;
        border-radius: 5px;
        border: none;
    }

    </style>
</head>
<body>

    <div class="login">
    <h1 style="">HMS</h1>
      
        <form action="login_check.php" method="post">
            
            <div>
            <label for="">username</label>
            <input type="text" name="username" class="som" placeholder="username">
            </div>
            <div>
                <label for="">password</label>
                <input type="password" name="password" class="som" placeholder="password">
            </div>
            <div>
                <input type="submit" name="submit" value="login" class="sub">
            </div>

        </form>

    </div>
    
</body>
</html>