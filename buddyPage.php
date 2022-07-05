<!DOCTYPE html>
<html>
    <header>
        <title>Buddy</title>
        <?php include "./header.php"; ?>
    </header>

    <body>
        <h1>Buddy</h1>
        <div>
            <table style="margin:auto; width:80%;" border>
                <tbody>
                    <?php
                        for($i=0; $i<5; $i++) {
                            echo "
                            <tr>
                                <td>Some randon profile picture</td>
                                <td>Some random name</td>
                                <td>
                                    <button type='button'>Add buddy</button>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>

    <footer>
        <?php include "./footer.php"; ?>
    </footer>
</html>