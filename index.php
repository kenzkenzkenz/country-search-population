<?php 
    $country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_STRING);

    include_once "config/Database.php"; 

    if ($country) {
        $query = 'SELECT * FROM country WHERE Name LIKE :country ORDER BY Population DESC';

        $statement = $db->prepare($query);
        $statement->bindValue(':country', "%" . $country . "%");
        $statement->execute();
        //$statement->debugDumpParams();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Tutorial</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Get a Country's Population</h1>
    </header>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
            <h2 id="enter-a-country">Enter a Country:</h2>
            <input type="text" id="country" name="country" aria-labelledby="enter-a-country" required>
            <button>Submit</button>
        </form>
    </section>
    <section>
    <?php if (!empty($results)) { ?>
        <h2><?php echo count($results) ?> Results</h2>
        <?php foreach ($results as $result) {
            echo "<p>{$result['Name']} - Pop: {$result['Population']} - Code: {$result['Code']}</p>";
        } ?>
    <?php } else {
        echo "<p>No Results.</p>";
    } ?>
    </section>
</body>
</html>