<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
    function cikl($numb)
    {
        echo ("
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
        <button type='submit'>Sabmit</button>
        </form>"
        );
    }
    ;
    // session_destroy();
    $rand = $_SESSION["random"];
    $choice = $_POST["choice"];
    var_dump($rand);
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
        echo ("Ви вибрали првильне число!");
    } else {
        $start = floor($rand / 10) * 10 + 5;
        echo ($start);
        if ($rand <= $start) {
            $numb = floor($rand / 10) * 10 + 1;
            if(isset($numbSelect)){
                if($numbSelect < $rand){
                    echo("Загадане число більше твого");
                }else{
                    echo("Загадане число меньше твого");
                }
            }
            cikl($numb);
        } else if ($rand > $start) {
            $numb = ceil($rand / 10) * 10 - 4;
            if(isset($numbSelect)){
                if($numbSelect < $rand){
                    echo("Загадане число більше твого");
                }else{
                    echo("Загадане число меньше твого");
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
</body>

</html>