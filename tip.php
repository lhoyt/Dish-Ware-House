<?php
    include('includes/header2.html');
    require('connectToDatabase.php');
?>

<h1> Tip Calculator </h1>

<form action="calculateTip.php" method="post">
    <p> Cost of Food: <input type="text" name="cost" size="5"></p>
    <p> Tip Percentage: <input type="text" name="percent" size="5"></p>
    <p> <input type="submit" name="submit" value="Compute tip!"/></p>
</form>

<?php
    include ('includes/footer.html')
?>
