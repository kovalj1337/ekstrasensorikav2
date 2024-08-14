<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="blur"></div>
    <div class="game flex-box">
        <div class="zagolovok">
            <h1>Гра "ЕКСТРАСЕНСОРІКА"</h1>
            <h3>Перевірь свої екстрасенсорні здібності в цій грі!</h3>
        </div>
        <div class="vvod">
        <?php

        session_start();
        $rand = $_SESSION["randomaizer"];
        $choice = $_POST["diapazon"];
        if ($rand >= $choice && $rand <= $choice + 9) {
            echo ("<p class='font'>Ви вгадали діапазон!</p>
            <p class='font'>Терер вгадайте число</p>");
        } else {
            echo ("<p class='font'>Ви не вгадали діапазон</p>
            <p class='font'>Но ви можете вгадати число з правильного діапазона</p>");
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
        <button type='submit' class='submit'>Вибрати</button>
        </form>");
        $numbplus = $numb + 9;
        echo("<p class='font margin-top'>Діапазон $numb - $numbplus</p>");
        $_SESSION["random"] = $rand;
        ?>
        </div>
    </div>
</body>

</html>