<?php
function checkValidity($userInput, $matchingLetter) {
    if ($_SERVER["REQUEST_METHOD"] === "POST" && strtolower($userInput[0]) != $matchingLetter) {
        return "You must enter a word starting with the letter $matchingLetter!";
    }
    else {
        return "";
    }
}

?>

<div style="border:2px solid black; padding:5px; margin:0 auto; max-width:45%; display:flex; justify-content:center; flex-direction:column;">
<h1 style="text-align:center;">Word Displayer</h1>
<div style="margin:0 auto; display:flex; justify-content:center;">
<form method="POST" action="">
<label>Word with letter a</label>

<input type="text" name="a-word"> <!-- The name attribute is what's being compared to the $matchingLetter PHP variable-->
<p style="color:red;"><?= checkValidity($_POST["a-word"], "a") ?></p>

<label>Word with letter b</label>
<input type="text" name="b-word">
<p style="color:red;"><?= checkValidity($_POST["b-word"], "b") ?></p>

<label>Word with letter c</label>
<input type="text" name="c-word">
<p style="color:red;"><?= checkValidity($_POST["c-word"], "c") ?></p>

<input type="submit" value="Done" style="margin:0 auto;  width:auto; display:flex;">
</form>
</div>

<table>
    <tr>
    <th>First Input</th>
    <th>Second Input</th> 
    <th>Third Input</th>   
</tr>
<tr>
    <td style="text-align:center;"><?= $_POST["a-word"]?></td>
    <td style="text-align:center;"><?= $_POST["b-word"]?></td>
    <td style="text-align:center;"><?= $_POST["c-word"]?></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
</div>