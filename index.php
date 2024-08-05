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
    $_SESSION["randomaizer"] = $rand = rand(1,100);
    echo("Число загадано");
    ?>
    <form action="pagetwo.php" method="post">
        <select name="diapazon" id="">
        <?php 
            for($i = 1; $i <= 100; $i += 10){
                $j = $i + 9;
                echo"<option value='$i'>$i - $j</option>";
            }
        ?>
        </select>
        <button type="submit">Сабміт</button>
    </form>
</body>
</html>