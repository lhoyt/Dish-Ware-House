<?php
    include ( 'includes/header2.html' );
    require( 'connectToDatabase.php' );
?>

    <h1> Shopping/ Buying Cart</h1>

    <form method="post">
        <p>Dish Price: <input type="int" name="price" size="5" value="price" <?Php echo $_POST[ 'price' ]; ?>></p>
        <p>Quantity: <input type="int" name="quantity" size="5" value="quantity" <?Php echo $_POST[ 'quantity' ]; ?>></p>

        <p>Payment Plan Type:</p>
        <p><input type="radio" name="paymentType" value="Cash" <?Php if( $_POST[ 'paymentType' ] == "Cash" ) echo 'checked = "checked"'?>>Cash</p>
        <p><input type="radio" name="paymentType" value="Credit" <?Php if( $_POST[ 'paymentType' ] == "Credit" ) echo 'checked = "checked"'?>>Credit</p>
        <p><input type="radio" name="paymentType" value="Debit" <?Php if( $_POST[ 'paymentType' ] == "Debit" ) echo 'checked = "checked"'?>>Debit</p>
        <p><input type="radio" name="paymentType" value="Check" <?Php if( $_POST[ 'paymentType' ] == "Check" ) echo 'checked = "checked"'?>>Check</p>

        <p> <input type="submit" name="submit" value="Compute total!"/></p>
    </form>

<?php
    if ( $_SERVER{ 'REQUEST_METHOD' } == POST ) {
        if (( isset( $_POST[ 'price' ], $_POST[ 'quantity' ])) &&
        is_numeric( $_POST[ 'price' ] ) && is_numeric( $_POST[ 'quantity' ])) {
            $plan = $_POST[ 'paymentType' ];
            $amountOfDishes = $_POST[ 'price' ] * ( $_POST[ 'quantity' ]);
            $totalCost = $amountOfDishes * 1.50;
            print "The amount is: " . $amountOfDishes . "<br>";
            print "The total cost (plus tax) is: " . $totalCost . "<br>";
            print "Your Payment Plan Type is: " . $plan;
        } else {
            print "Error! please re-enter data!!";
        }
    }

    include ( 'includes/footer.html' );
?>
