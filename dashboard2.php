<?php
    // include "./databases/database.php";
?>

<!DOCTYPE html>
<html>
    <header>
        <title>Lista</title>
        <?php include"./header.php"; ?>

        <style>
            .hide {
                display: none;
            }

            .box {
                border: 2px solid gray;
                width: 100px;
                height: 100px;
                margin: auto;
                margin-top: 30px;
            }

            .square {
                width: 80px;
                height: 80px;
                background-color: blueviolet;
                margin: auto;
            }

            /* this cluase has to be below box, else wont effect */
            .drag-over {
                border: 2px dashed red;
            }
        </style>
    </header>

    <body>
        <div class="mainContainer">
            <div class="firstDiv">
                <div class="secondDiv">
                    <h1>Dashboard</h1>
                    <div class="box" id="targetBox">
                        <!-- <img class="bookImg" src="./resources/mainIcon.png" alt="book" draggable="true" width="100px" height="80px"></img> -->
                        <div class="square" id="theItem" draggable="true"></div>
                    </div>
                    <div class="box" id="targetBox"></div>
                    <div class="box" id="targetBox"></div>
                    <div class="box" id="targetBox"></div>
                </div>
            </div>
        </div>

        <script src="./processors/dragNDrop.js"></script>
    </body>

    <footer>
        <?php include"./footer.php"; ?>
    </footer>
</html>