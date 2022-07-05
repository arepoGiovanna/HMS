<!DOCTYPE html>
<html>
    <header>
        <title>Bookmarks & References</title>
        <?php include "./header.php" ?>
    </header>

    <body>
        <form action="./processors/bMark_RefProcessor.php" method="POST">
            <div>
                <h1>Bookmarks</h1>
                <div>
                    <label for="srcName">Source name</label>
                    <input type="text" name="srcName" placeholder="Enter source/ book/ link/ etc...">
                </div>
                <div>
                    <label for="bMark">Bookmark</label>
                    <input type="number" name="bMark" min="1" placeholder="Enter bookmark">
                </div>

                <hr style="margin-top: 4%;" width="80%">

                <h1>References</h1>
                <div>
                    <label for="forSbjct">Related subject</label>
                    <input type="text" name="forSbjct" placeholder="Enter subject name">
                </div>
                <div>
                    <label for="refYear">Year</label>
                    <input type="number" name="refYear" placeholder="Enter year published">
                </div>
                <div>
                    <label for="authorName">Author</label>
                    <input type="text" name="authorName" placeholder="Enter author's name">
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