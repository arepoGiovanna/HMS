<!DOCTYPE html>
<html>
    <header>
        <title>Profile</title>

        <?php include "./header.php" ?>
    </header>

    <body>
        <h1>Profile</h1>

        <form action="./processors/profileProcessor.php" method="POST">
            <div class="profileMainContainer">
                <div class="profilePictureContainer" style="margin: auto; width: 100px; height: 100px; border: 1px solid black; border-radius: 50%;"><p style="margin-top: 30%; "><a href="./processors/profileProcessor.php">Insert profile picture here</a></p></div>
                <div class="profileDataContainer">
                    <p>Name: Some Random Name</p>
                    <p>Username: Some Random Username</p>
                    <p>Email: Some Random email</p>
                    <p>Institution: Some Random Institution</p>
                    <p>Course: Some Random Course</p>
                    <p>Specialization: Some Random Specialization</p>
                </div>
                <br>
                <div>
                    <button type="submit">Done</button>
                </div>
            </div>
        </form>
    </body>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
</html>