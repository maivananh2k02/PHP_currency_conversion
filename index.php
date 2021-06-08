<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>currency conversion</h1>
    <input type="number" name="money" placeholder="amount"><br>
    To:
    <select name="to">
        <option value="23000">vnd</option>
        <option value="1">dollar</option>
    </select>From:
    <select name="from">
        <option value="1">dollar</option>
        <option value="23000">vnd</option>
    </select><br>
    <input type="submit" value="Oke">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $money=$_REQUEST["money"];
    $to=$_REQUEST["to"];
    $from=$_REQUEST["from"];
    echo ($money*$from)/$to;
}
?>
</body>
</html>
