<!DOCTYPE html>    
<html>    
    <header>    
        <title>Login Page</title>

        <?php include "./header.php"; ?>
    </header>

    <body>    
        <h2>Login Page</h2><br>    
        <div class="login">    
        <form id="login" method="POST" action="./processors/loginProcessor.php">    
            <label><b>User Name     
            </b>    
            </label>    
            <input type="text" name="Uname" id="Uname" placeholder="Username">    
            <br><br>    
            <label><b>Password     
            </b>    
            </label>    
            <input type="Password" name="Pass" id="Pass" placeholder="Password">    
            <br><br>    
            <input type="submit" name="log" id="log" value="Log In Here">       
            <br><br>    
            <input type="checkbox" id="check">    
            <span>Remember me</span>    
            <br><br>    
            Forgot <a href="./processors/forgotPassProcessor.php">Password</a>
        </form>     
    </div>    
    </body>

    <footer>
        <?php include "./footer.php"; ?>
    </footer>
</html>