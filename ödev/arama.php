<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtional//EN" "http://www.w3.org/TR/xhtmli/DTD/xhtmli.transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"xnl:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset-UTF8"/>
    <title>Telefon Rehberi</title>
</head>

<?php

$numara = $_POST["telno"];

echo <<<HTML
<body>
    <span>Kişi Aranıyor</span>
</body>
HTML;
header ("Location: tel:+9" . $numara);
header("refresh:3; Location: listele.php");
?>
</html>