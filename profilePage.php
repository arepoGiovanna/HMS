<!DOCTYPE html>
<html>
    <header>
        <title>Profile Page</title>

        <?php include "./header.php" ?>
    </header>

    <body>
        <h1>This is profile page!</h1>

        <form action="doNothing">
            <div class="profileMainContainer">
                <div class="profilePictureContainer" style="margin: auto; width: 100px; height: 100px; border: 1px solid black; border-radius: 50%;"><p style="margin-top: 30%; ">Insert profile picture here</p></div>
                <!-- username, password, email, institution, course, specialization -->
                <div class="profileDataContainer">
                    <p>Name: Some Random Name</p>
                    <p>Username: Some Random Username</p>
                    <p>Email: Some Random email</p>
                    <p>Institution: Some Random Institution</p>
                    <p>Course: Some Random Course</p>
                    <p>Specialization: Some Random Specialization</p>
                </div>
            </div>
        </form>
    </body>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
</html>