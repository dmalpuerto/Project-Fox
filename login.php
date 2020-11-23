<?php ?>
<html>
<head>
    <title> Registration Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <form action="" class="form">
    <img src="assets/img/avatar.png" class="avatar">
        <h1>Registration</h1>
        
        <div class="input-group">
           <label for="email">E-mail Address </label>
            <input type="text" placeholder="E-mail Address" name="email" id="email" required>
            </div>
        <div class="input-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="psw" id="psw" required>
            </div>
            <div class="input-group">
                  <label for="psw-repeat">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required>
            </div>
         
            <input type="submit" name="submit" value="REGISTER">
            
        
        </form>
        
        
        </div>
    
    </body>
</html>