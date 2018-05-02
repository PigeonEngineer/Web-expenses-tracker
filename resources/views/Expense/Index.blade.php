<!doctype html>
<?php

use App\Expense;

$expenses = App\Expense::all();

foreach ($expenses as $expense) {
    echo $expense->amount . "\xA";
    echo $expense->comments . "\xA";
    echo $expense->creationTimeStamp . "\xA";
    echo "\xA";
}
?>
