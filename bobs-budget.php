<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

 $weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
 ];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$annualIncome = $netIncome - $socialSecurity;

echo "Annual income before deducting annual expenses:\n${annualIncome}\n";

$annualIncome -= $annualExpenses["vacations"] + $annualExpenses["carRepairs"];

echo "\nAnnual income after calculation:\n${annualIncome}\n";

$monthlyIncome = $annualIncome / 12;

echo "\nMonthly income before deducting monthly expenses:\n${monthlyIncome}\n";

$monthlyIncome -= $monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"];

echo "\nMonthly income after calculation:\n${monthlyIncome}\n";

$weeklyIncome = $monthlyIncome / 4.33;

echo "\nWeekly income before calculation:\n${weeklyIncome}\n";

$weeklyIncome -= $weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"];

echo "\nWeekly income after calculation:\n$weeklyIncome\n";

$leftoverMoney = $weeklyIncome * 52;
 
echo "\nRemaining income: $leftoverMoney";
