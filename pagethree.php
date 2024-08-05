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
    if(isset($_SESSION["checknumb"])){
        $checkNumb = $_SESSION["checknumb"];
    }else{
        $_SESSION["checknumb"] = $checkNumb = [];
    }
    if(isset($_POST["choice"])){
        $numbSelect = $_POST["choice"];
    }else{
        $numbSelect = 0;
    }
    if($rand == $choice){
        echo("Ви вибрали првильне число!");
    }else{
        if ($rand >= $choice && $rand <= $choice + 5) {
            $numb = ceil($rand / 10) * 10 - 4;
            echo("$numb dd d ");
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
            echo ("<option>$i</option>");
        }
        echo ("
        </select>
        <button type='submit'>Sabmit</button>
        </form>");
    }
    ?>
</body>
</html>