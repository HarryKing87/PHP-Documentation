<h1>Shoe Shop</h1>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>
<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands):
?>
<p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
endforeach;

/* Prints Shoe Shop

Our footwear:

We sell 4 brands of sandals

We sell 7 brands of sneakers

We sell 3 brands of boots
*/

?>