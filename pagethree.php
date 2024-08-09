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
    $rand = $_SESSION["random"];
    $choice = $_POST["choice"];
    var_dump($rand);
    if(isset($_SESSION["checknumb"])){
        $checkNumb = $_SESSION["checknumb"];
    }else{
        $_SESSION["checknumb"] = $checkNumb = [];
    }
    $checkNumb = [];
    if(isset($_POST["choice"])){
        $numbSelect = $_POST["choice"];
    }else{
        $numbSelect = 0;
    }
    array_push($_SESSION["checknumb"], $numbSelect);
    if(!in_array($numbSelect, $checkNumb)){
        $checkNumb[] = $numbSelect;
    }
    if($rand == $choice){
        echo("Ви вибрали првильне число!");
    }else{
        if ($rand >= $choice && $rand <= $choice + 5) {
            $numb = ceil($rand / 10) * 10 - 4;
            echo("$choice dd d ");
        } else {
            $numb = floor($rand / 10) * 10 + 1;
            echo($numb);
        }
        // $numb = floor($rand / 10) * 10 + 1;
        var_dump($numb);
        echo ("<form action='pagethree.php' method='post'>
            <select name='choice'>
        ");
        for ($i = $numb; $i < $numb + 5; $i++) {
            if(!in_array($i, $_SESSION["checknumb"])){
                echo("<option value='$i'>$i</option>");
            }else{
                echo("<option value='$i' disabled>$i неактивно</option>");
            }
        }
        echo ("
        </select>
        <button type='submit'>Sabmit</button>
        </form>");
    }
    ?>
</body>
</html>