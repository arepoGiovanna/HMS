<!DOCTYPE html>
<html>
    <header>
        <?php include "./header.php" ?>
    </header>

    <body>
        <form method="POST" action="./processors/registerProcessor.php">
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" id="name" required>

                <label for="studID"><b>Student ID</b></label>
                <input type="text" placeholder="Enter Student ID" name="studid" id="studid" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                <hr>

                <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="./loginPage.php">Sign in</a>.</p>
            </div>
        </form>
    </body>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
</html>