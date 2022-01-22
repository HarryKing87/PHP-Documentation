<html>
<body>
<p>From dividing <?=$_GET["firstNumber_Div"]?> with <?=$_GET["secondNumber_Div"]?> we get: </p>
<h1>Result: <?= round($_GET["firstNumber_Div"] / $_GET["secondNumber_Div"]) ?></h1>
<a href="index.php">Reset</a>
</body>
</html>