<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Fruits</title>
</head>
<body>
    <h1>
        List of Fruits
    </h1>
    <ol>
        <?php
        $fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");
        $count = count($fruits);
        for ($i = 0; $i < $count; $i++) {
            echo "<li>" . $fruits[$i] . "</li>";
        }
        ?>
    </ol>
</body>
</html>