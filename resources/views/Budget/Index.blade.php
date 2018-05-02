<!doctype html>
<?php

use App\Budget;

$budgets = App\Budget::all();

foreach ($budgets as $budget) {
    echo $budget->amount;
}
?>
