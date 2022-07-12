<?php
?>

<!DOCTYPE html>    
<html>    
    <header>    
        <title>Lista</title>

        <?php include "./header.php"; ?>

        <script type="text/javascript" src="./processors/jsProcessor.js"></script>
    </header>
    
    <script>
        // testing();
        displayNavBar(false, "mainHeader");

        window.onload = getClickedBtn();

        window.onload = function() {
            // console.log("worked!");
            let loginArea = document.getElementById("loginAreaId");
            let regArea = document.getElementById("regAreaId");

            // change color for login
            loginArea.style.backgroundColor = "rgb(191, 191, 191)";
            loginArea.style.opacity = "0.4";

            // change color for unchosen area
            regArea.style.backgroundColor = "rgb(249, 225, 126)";
            regArea.style.opacity = "1";
        };

        // console.log("localBtn: " + getClickedBtn()); // just to test

        $('.carousel slide').carousel({
            interval: false,
        });
    </script>

    <body>
        <div class="mainContainer">
            <div class="firstDiv">
                <div class="areaContainer">
                    <div class="loginArea" data-bs-target="#loginRegCarousel" data-bs-slide="prev" id="loginAreaId" title="Click here to login." onclick="areaBtnClicked(this.id)">Login</div>
                    <div class="registerArea" data-bs-target="#loginRegCarousel" data-bs-slide="next" id="regAreaId" title="Click here to register." onclick="areaBtnClicked(this.id)">Register</div>
                </div>
                <div class="mainContentDiv">
                    <div class="loginRegContainer">
                        <div id="loginRegCarousel" class="carousel slide" data-bs-ride="false" data-bs-wrap="false">
                            <div class="carousel-inner">
                                <div class="carousel-item" id="carouselItem1">
                                    <?php include "./loginFormDiv.php"; ?>
                                </div>
                                
                                <div class="carousel-item active" id="carouselItem2">
                                    <?php include "./registerFormDiv.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- for bootstrap uses -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>

    <script>
        // codes for detecting which button was clicked from index,
        // then reflect the slide to user
        // let elementOne = document.getElementById("carouselItem1").className;
        // let elementTwo = document.getElementById("carouselItem2").className;

        // // alert("before1: " + elementOne);
        // // alert("before2: " + elementTwo);

        // if(getClickedBtn() == "login") {
        //     elementOne = "carousel-item active";
        //     elementTwo = "carousel-item";
        //     console.log("enter 1");
        // }
        // else if(getClickedBtn() == "register") {
        //     elementOne = "carousel-item";
        //     elementTwo = "carousel-item active";
        //     console.log("enter 2");
        // }
        // else {
        //     console.log("Error on getting clicked button!");
        // }

        // alert("after1: " + elementOne);
        // alert("after2: " + elementTwo);

        // refresh div content
        // $( "#formId" ).load(window.location.href + " #formId" );
    </script>

    <footer>
        <?php include "./footer.php"; ?>
    </footer>
</html>