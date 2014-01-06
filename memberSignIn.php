<?php
include('includes/header.html');
print"<h1>Sign In</h1>";
require('connectToDatabase.php');

if($_SERVER ['REQUEST_METHOD'] == 'POST')
{
    if((isset($_POST['email'], $_POST['password'])))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $q = "SELECT email FROM members WHERE email = '$email' AND password = '$password'";
        $r = @mysqli_query($dbc, $q);

        if($r)
        {
            //echo "num row" . mysqli_num_rows($r);
            if(mysqli_num_rows($r) == 1)
            {
                print "You have Logged On Correctly!!!!";
            }

            else
            {
                echo "You have either an Incorrect Email or Password!";
            }
        }
     }
}
?>

<form action="processIt.php" method="post">

    <p>Email <input type="text" name="email" size="50"  value="<?=$_POST['email'] ?>" />
    <p>Password <input type="password" name="password" size="10" maxsize="20"value="<?=$_POST['password'] ?>" /></p>
    <p> <input type="submit" name="submit" value="Sign In" /></p>

</form>

<?php
        include('includes/footer.html');
?>