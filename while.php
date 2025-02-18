<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Numbers in Matrix</title>
</head>
<body>
    <h1>
        Even Numbers in Matrix
    </h1>
    <?php
    $matrix = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 90]
    ];
    $i = 0;
    while ($i < count($matrix)) {
        $j = 0;
        while ($j < count($matrix[$i])) {

            if ($matrix[$i][$j] % 2 == 0) {
                echo $matrix[$i][$j] . "<br>";
            }
            $j++;
        }
        $i++;
    }
    ?>
</body>
</html>