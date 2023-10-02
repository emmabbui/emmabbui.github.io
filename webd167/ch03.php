<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ch 03 Assignment - Emma Bui</title>
</head>

<body>
<?php

// PART 1 - Picture address url
$imgTag = '<img src="dogbirfday.jpeg"';
// Title
if (!empty($title)) {
    $imgTag .= ' title="Birthday Dog"' . htmlspecialchars($title) . '"';
}
// Height
if (!empty($height)) {
    $imgTag .= ' height="400"' . htmlspecialchars($height) . '"';
}
// Width
if (!empty($width)) {
    $imgTag .= ' width="500"' . htmlspecialchars($width) . '"';
}
// End of picture tag
$imgTag .= ' />'; 

echo $imgTag;
?>


<br>


<?php

// PART 2 - How much of a tip can we afford?
// Variable name $cash -> $cash_on_hand
$cash_on_hand = 31;
$dinner = 25;
$tax = 10;
$tip = 10;


function restaurant_check($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    return $meal + $tax_amount + $tip_amount;
}
$tip = 0;
while (($cost = restaurant_check($dinner, $tax, $tip)) < $cash_on_hand) {
// Echo statement
    echo 'I can afford a tip of ' . $tip . '% ($' .number_format ($cost, 2). ")\n"; 
}
// Tip loop
    $tip++; 
?>

</body>
</html>