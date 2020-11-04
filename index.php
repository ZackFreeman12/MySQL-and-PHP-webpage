<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The Official Cancel Button</title>
    <meta name="description" content="The Official Cancel Button">
    <meta name="author" content="Zack Freeman">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>Click here to cancel someone.</h1>
        <a href="submited.php">CANCEL</a>
        <div class="cancelboard">
            <h1>CANCEL BOARD</h1>
            <div class="canceldata">
                <h2>Name</h2>
                <h2>Reason for being canceled</h2>
                <?php
                //Database connection
                
                try {
                    $dbh = new PDO("mysql:host=localhost;dbname=000781330", "root", "");
                } catch (Exception $e) {
                    die("ERROR: Couldn't connect. {$e->getMessage()}");
                }

                $cmd = "SELECT cancelname, reason FROM canceled";

                $stmt = $dbh->prepare($cmd);
                $success = $stmt->execute();

                if ($success) {
                    while ($row = $stmt->fetch()) {
                        echo "<p id='name'>$row[cancelname]</p>
                <p id='reason'>$row[reason]</p>";
                    }
                }
                ?>
            </div>


        </div>
    </div>
</body>

</html>