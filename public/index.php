<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
require '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$objet = new Hello();

echo $objet->talk();
echo "<br/>";
echo SayHello::world();

?>
</body>
</html>