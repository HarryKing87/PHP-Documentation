<?php
$newArray = array("Harry", "King");


function showArray($arrayArg) {
    print_r($arrayArg);
    echo "In another way it could be written like this\n";
    echo implode(", ", $arrayArg);
}

showArray($newArray);

$input = readline('Enter your name: ');

$array_example = [
        first_name => $input, 
        last_name => 'Doe',
        age => 36
];
/*
fist_name is the key
$input is the value
*/

function greeting($first_name) {
    echo "Welcome, " . $first_name . "!";
}

greeting($array_example["first_name"]);


// ----------------------------------------------------------------
// EXPENSE TRACKER ASSIGNMENT

  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = 8536 + (29775 * 0.78) + (8675 * 0.76);

//Annual Income
$annualIncome = $netIncome - $socialSecurity;
echo "Annual income before deducting annual expenses:\n$annualIncome\n";
$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];
echo  "The new annual Income: " . $annualIncome . "\n"; 
$monthlyIncome = $annualIncome / 12;

// Monthly Income
echo  "Bob is getting " . round($monthlyIncome) . "/month\n";
$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];
echo "Bob's new monthly income: " . round($monthlyIncome) . "\n";

// Weekly Income
$weeklyIncome = $monthlyIncome / 4.33;
echo "Bob's weekly income: " . round($weeklyIncome) . "\n";

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "Bob's new weekly income: " . round($weeklyIncome) . "\n";
echo "So, Bob is saving " . round($weeklyIncome * 52) . "/year\n";


