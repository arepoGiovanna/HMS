<?php
    // include "./databases/database.php";
?>

<!DOCTYPE html>
<html>
    <header>
        <title>Lista</title>

        <?php include "./header.php"; ?>

        <script src="./processors/jsProcessor.js"></script>
    </header>    

    <script>
        // testing();
        displayNavBar(false, "mainHeader");
    </script>

    <body>
        <div class="mainContainer">
            <div class="firstDiv">
                <div class="secondDiv">
                    <h1><p>W</p><p>e</p><p>l</p><p>c</p><p>o</p><p>m</p><p>e</p> <p>t</p><p>o</p> <p>L</p><p>i</p><p>s</p><p>t</p><p>a</p><p>!</p></h1> <!-- aka landing page -->
                    <div class="logoBgDiv">
                        <div class="logoContainer">
                            <a href="./loginPage.php"><div class="leftSide" id="loginBtn" title="Already registered? Click to login." onclick="clickedBtn('login')">Login</div></a>
                            <a href="./registerPage.php"><div class="rightSide" id="regBtn" title="New here? Click to register." onclick="clickedBtn('register')">Register</div></a>
                            <div id="mainLogo">
                                <a href="./index.php"><img id="theLogo" src="./resources/mainIcon.png" alt="website logo" width="150px" heigh="150px"></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div><a href="./registerPage.php">REGISTER</a></div>
                    <div><a href="./loginPage.php">LOGIN</a></div>
                    <div><a href="./homeworkPage.php">HOMEWORK</a></div>
                    <div><a href="./calendarPage.php">CALENDAR</a></div>
                    <div><a href="./buddyPage.php">BUDDY</a></div>
                    <div><a href="./bMark_RefPage.php">BOOKMARKS & REFERENCES</a></div> -->
                </div>
            </div>
        </div>

        <!-- for bootstrap uses -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>

    <footer>
        <?php include"./footer.php"; ?>
    </footer>
</html>