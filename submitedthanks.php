<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The Official Cancel Button</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php



    try {
        $dbh = new PDO("mysql:host=localhost;dbname=000781330", "root", "");
    } catch (Exception $e) {
        die("ERROR: Couldn't connect. {$e->getMessage()}");
    }
    $namesub = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $reasonsub = filter_input(INPUT_POST, "reason", FILTER_SANITIZE_STRING);


    $cmd = "INSERT into canceled(cancelname, reason) VALUES (?,?)";

    $stmt = $dbh->prepare($cmd);
    $params = [$namesub, $reasonsub];
    $success = $stmt->execute($params);



    ?>
    <div class="container">
        <h1>Your submission has been added!</h1>
        <a href="index.php"> HOME </a>
    </div>

</body>

</html>