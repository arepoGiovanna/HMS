<?php
    // include "./databases/database.php";
?>

<!DOCTYPE html>
<html>
    <header>
        <title>Lista</title>
        <?php
            include "./header.php";
        ?>
    </header>

    <script>
        var showNavBar = false;
        var navBarObj;

        if(showNavBar == false) {
            navBarObj = document.getElementById("mainHeader");
            navBarObj.style.display = "none";
        }
    </script>

    <body>
        <div class="mainContainer">
            <div class="firstDiv">
                <div class="secondDiv">
                    <h1><p>W</p><p>e</p><p>l</p><p>c</p><p>o</p><p>m</p><p>e</p> <p>t</p><p>o</p> <p>L</p><p>i</p><p>s</p><p>t</p><p>a</p><p>!</p></h1> <!-- aka landing page -->
                    <div class="logoBgDiv">
                        <div class="logoContainer">
                            <a href="./loginPage.php"><div class="leftSide" title="Already registered? Click to login.">Login</div></a>
                            <a href="./registerPage.php"><div class="rightSide" title="New here? Click to register.">Register</div></a>
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
    </body>

    <footer>
        <?php include"./footer.php"; ?>
    </footer>
</html>