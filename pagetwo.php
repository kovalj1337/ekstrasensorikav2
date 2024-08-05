<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $rand = $_SESSION["randomaizer"];
    $choice = $_POST["diapazon"];
    var_dump($rand);
    var_dump($choice);
    if ($rand >= $choice && $rand <= $choice + 9) {
        echo ("Ви вгадали діапазон!");
    } else {
        echo ("Ви не вгадали діапазон");
    }
    $numb = ceil($rand / 10) * 10 - 9;
    echo ("<form action='pagethree.php' method='post'>
            <select name='choice'>
        ");
    for ($i = $numb; $i < $numb + 10; $i++) {
        echo ("<option>$i</option>");
    }
    ;
    echo ("
        </select>
        <button type='submit'>Sabmit</button>
        </form>");
    $_SESSION["random"] = $rand;
    ?>
</body>

</html>