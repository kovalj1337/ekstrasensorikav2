<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="blur"></div>
    <div class="game flex-box">
    <div class="zagolovok">
            <h1>Гра "ЕКСТРАСЕНСОРІКА"</h1>
            <h3>Перевірь свої екстрасенсорні здібності в цій грі!</h3>
        </div>
    <?php
    session_start();
    function cikl($numb)
    {
        echo ("
        <div class='vvod'>
        <form action='pagethree.php' method='post'>
            <select name='choice'>"
        );
        $countI = $numb + 4;
        for ($numb; $numb <= $countI; $numb++) {
            if (!in_array($numb, $_SESSION["checknumb"])) {
                echo ("<option value='$numb'>$numb</option>");
            } else {
                echo ("<option value='$numb' disabled>$numb неактивно</option>");
            }
        }
        // $numb = 0;
        echo ("
        </select>
        <button type='submit' class='submit'>Вибрати</button>
        </form>
        </div>"
        );
    }
    ;
    // session_destroy();
    $rand = $_SESSION["random"];
    $choice = $_POST["choice"];
    // var_dump($rand);
    if (isset($_SESSION["checknumb"])) {
        $checkNumb = $_SESSION["checknumb"];
    } else {
        $_SESSION["checknumb"] = $checkNumb = [];
    }
    $checkNumb = [];
    if (isset($_POST["choice"])) {
        $numbSelect = $_POST["choice"];
    } else {
        $numbSelect = 0;
    }
    array_push($_SESSION["checknumb"], $numbSelect);
    if (!in_array($numbSelect, $checkNumb)) {
        $checkNumb[] = $numbSelect;
    }
    if ($rand == $choice) {
        echo ("<p class='font'>Вітаю!</p><p class='font'>Ви вгадали правильне число!</p>");
    } else {
        $start = floor($rand / 10) * 10 + 5;
        echo ($start);
        if ($rand <= $start) {
            $numb = floor($rand / 10) * 10 + 1;
            if(isset($numbSelect)){
                if($numbSelect < $rand){
                    echo("<p class='font'>Загадане число <b>більше</b> твого</p>");
                }else{
                    echo("<p class='font'>Загадане число <b>меньше</b> твого</p>");
                }
            }
            cikl($numb);
        } else if ($rand > $start) {
            $numb = ceil($rand / 10) * 10 - 4;
            if(isset($numbSelect)){
                if($numbSelect < $rand){
                    echo("<p class='font'>Загадане число <b>більше</b> твого</p>");
                }else{
                    echo("<p class='font'>Загадане число <b>меньше</b> твого</p>");
                }
            cikl($numb);
        }
        // var_dump($numb);
        // if ($rand >= $choice && $rand <= $choice) {
        // } else {
        // }
        // $numb = floor($rand / 10) * 10 + 1;
        // echo("$numb");
    
    }
}
    ?>
    </div>
</body>

</html>