<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="js/index.js"></script>
    <p id="ua">Hello</p>
    <!-- <?php
        $hogehoge = "hogehoge";
        echo "<h1>$hogehoge</h1>";
        var_dump($hogehoge);
    ?> -->
    <?php
        $test = "ほげほげ";
        $header = getallheaders();
        $agent = $header["User-Agent"] ;
        header( "HTTP/1.1 301 Moved Permanently" );
        if (preg_match("DoCoMo", $agent)) {
            header("Location: page/docomo/docomo.html");
            exit;
        } elseif (preg_match("KDDI", $agent)) {
            header("Location: page/au/au.html");
            exit;
        } elseif (preg_match("SoftBank", $agent)) {
            header("Location: page/softbank/softbank.html");
            exit;
        } else {
            header("Location: page/others/others.html");
            exit;
        }
    ?>
</body>
</html>


