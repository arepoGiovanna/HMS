<!DOCTYPE html>
<html>
    <header>
        <title>Homework</title>

        <?php include "./header.php"; ?>
    </header>

    <body>
        <h1>Homework</h1>
        <div>
            <form action="./processors/homeworkProcessor.php" method="POST">
                <div>
                    <label for="addSbjctName">Subject Name</label>
                    <input type="text" name="addSbjctName" placeholder="Enter subject name">
                </div>
                <div>
                    <label for="addGroup">Group</label>
                    <input type="text" name="addGroup" placeholder="Enter group name">
                </div>
                <div>
                    <label for="addDeadline">Deadline</label>
                    <input type="date" name="addDeadline" placeholder="Enter deadline">
                </div>
                <div>
                    <button type="submit">Done</button>
                </div>
            </form>
            
        </div>
    </body>

    <footer>
        <?php include "./footer.php"; ?>
    </footer>
</html>