<?php
    include "./databases/database.php";
?>

<!DOCTYPE html>
<html>
    <header>
        <title>HMS</title>
        <?php include"./header.php"; ?>
    </header>

    <body>
        <div class="mainContainer">
            <div class="firstDiv">
                <h1>Dashboard</h1>
                <div><a href="./registerPage.php">REGISTER</a></div>
                <div><a href="./loginPage.php">LOGIN</a></div>
                <div><a href="./homeworkPage.php">HOMEWORK</a></div>
                <div><a href="./calendarPage.php">CALENDAR</a></div>
                <div><a href="./buddyPage.php">BUDDY</a></div>
                <div><a href="./bMark_RefPage.php">BOOKMARKS & REFERENCES</a></div>
            </div>
        </div>
    </body>

    <footer>
        <?php include"./footer.php"; ?>
    </footer>
</html>