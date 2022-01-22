<h1>GET METHOD</h1>
<form method="GET" >
<input type="text" name="country" placeholder="Country">
<br>
<input type="text" name="language" placeholder="Language">
<br>
<input type="submit" value="Submit">
</form>

<p>The country name is: <?= $_GET["country"]?></p>
<p>The language name is: <?= $_GET["language"]?></p>

<h1>POST METHOD</h1>
<form method="POST">
<input type="text" name="food" placeholder="Food">
<br>
<input type="text" name="color" placeholder="Color">
<br>
<input type="submit" value="Submit">
</form>
<p>Your favorite food is: <?=$_POST["food"]?></p>
<p>Your favorite color is <?=$_POST["color"]?></p>