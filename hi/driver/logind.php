<?php
include("connd.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginn.css">
</head>
<body>
    <div class="container">
        <div class="card">
             <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form name="form" method="POST" action="ldc.php">
                        <input type="name" class="input-box" name="user" id="user" placeholder="You driver id" required>
                        <input type="password" class="input-box" name="pass" id="pass" placeholder="Password" required>
                        <button type="submit" class="submit-btn" name="submit">Submit</button>
                        <input type="checkbox"><span>Remember me</span>
                    </form>
                    <button type="button" class="btn" onclick="openRefister()">I'm new here</button>
                    <a href="">Forgot Password</a>
                </div>
                
             </div>
        </div>
    </div>

    
</body>
</html>