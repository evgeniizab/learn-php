<?php

/*
Unit 5 Project
Bob just got a new job and needs help figuring out his budget!

He has a salary, annual expenses, monthly expenses, and weekly expenses. He wants to know how much of his salary he can plan to save over the course of a year.

The offer letter from his job has a salary listed before taxes of 48,150. We have stored this value in $grossSalary.

Where Bob lives, there is a progressive tax system. He pays 12% (keeps 88%) on the first 9,700, 22% (keeps 78%) on the next 29,775, and pays 24% (keeps 76%) on the remainder of his salary. This data is stored in $incomeSegments.

$incomeSegments is an array that contains an array for each income segment with the amount being taxed and the percent that he gets to keep.

Let’s begin calculating Bob’s annual salary after taxes.

Use $incomeSegments to calculate Bob’s $netIncome after this set of taxes.

You should be summing the products of each portion of the taxes. The first portion is 8,536 (9,700 * 0.88).

*/


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
echo $netIncome = ($incomeSegments[0][0]*$incomeSegments[0][1]) + ($incomeSegments[1][0]*$incomeSegments[1][1]) + ($incomeSegments[2][0]*$incomeSegments[2][1]);

$netIncome -= $socialSecurity;
$annualIncome = $netIncome;
echo "\nAnnual income before deducting annual expenses: $annualIncome\n";

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

echo "\nAnnual income after calculation: $annualIncome\n";

$monthlyIncome = $annualIncome / 12;

echo "\nMonthly income before deducting monthly expenses: $monthlyIncome\n";

$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\nMonthly income after calculation: $monthlyIncome \n";

$weeklyIncome = $monthlyIncome / 4.33;

echo "\nWeekly income before calculation: $weeklyIncome\n";
$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\nWeekly income after calculation: $weeklyIncome\n";

$leftoverMoney = $weeklyIncome * 52;

echo "\nRemaining income: $leftoverMoney";
