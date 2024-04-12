<?php 
    if(!isset($_COOKIE['visited']))
    {
        setcookie("visited", "yes");
        $str = "cookie o nazwie visited nie jest ustawione.";
    }
    else
    {
        $str = "Cookie o nazwie visited jest ustawione. ";
        $str = "jego wartość to: {$_COOKIE['visited']}.";
    }
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset ="UTF-8">
    <title> COOKIE </title>

</head>
<body>
    <div>
        <?php
        echo $str;
        ?>
    </div>
</body>
</html>
