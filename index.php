<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <main >
        <div class="blur"></div>
        <div class="game flex-box">
            <div class="zagolovok">
                <h1>Гра "ЕКСТРАСЕНСОРІКА"</h1>
                <h3>Перевірь свої екстрасенсорні здібності в цій грі!</h3>
            </div>
            <div class="vvod">
                <?php
                session_start();
                $_SESSION["randomaizer"] = $rand = rand(1, 100);
                echo ("<p class='font'>Число загадано<p>");
                echo ("<p class='font'>Вибирай діапазон від 1 до 100<p>");
                ?>
                <form action="pagetwo.php" method="post" class="forms">
                    <select name="diapazon" id="">
                        <?php
                        for ($i = 1; $i <= 100; $i += 10) {
                            $j = $i + 9;
                            echo "<option value='$i'>$i - $j</option>";
                        }
                        ?>
                    </select>
                    <button type="submit" class="submit">Вибрати</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>