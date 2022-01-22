<html>
<body>
<p>From adding <?=$_GET["firstNumber_Add"]?> with <?=$_GET["secondNumber_Add"]?> we get: </p>
<h1>Result: <?= round($_GET["firstNumber_Add"] + $_GET["secondNumber_Add"]) ?></h1>
<a href="index.php">Reset</a>
</body>
</html>