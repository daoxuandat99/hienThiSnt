<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Số nguyên tố</title>
</head>
<body>
<h2 style="color: aqua">Số nguyên tố</h2>
</body>
</html>
<?php
function check($input)
{
    if ($input < 2) {
        return false;
    }
    for ($index = 2; $index <= sqrt($input); $index++) {
        if ($input % $index == 0) {
            return false;
        }
    }
    return true;
}

function show($input)
{
    $index = 2;
    $count = 1;
    while ($count <= $input) {
        if (check($index)) {
            echo $index . " ";
            $count++;
        }
        $index++;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
    show($input);
}
