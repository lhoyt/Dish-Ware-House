<?php
$page_title = "Tip Calc";
include ('includes/header2.html');
require('connectToDatabase.php');
echo "<h1> Tip Calculator </h1>";

if ((isset($_POST['cost'], $_POST['percent'])) &&
    is_numeric($_POST['cost']) && is_numeric($_POST['percent']))
{
    $tip = $_POST['cost'] * ($_POST['percent'] *.01);
    $totalCost = $_POST['cost'] + $tip;
    print "The tip amount is: " . $tip . "<br>";
    print "The total cost is: " . $totalCost . "<br>";
}
else
{
    print "Error! please re-enter data!!";
}

 include ('includes/footer.html');

?>
    