<?php
include('miscFuncs.php');
require('connectToDatabase.php');
                        
if ($_SERVER ['REQUEST_METHOD'] == 'POST')
{
    if ((isset($_POST['email'], $_POST['password'])))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $q = "SELECT member_id FROM members where email = '$email' 
        AND  password = '$password'";

        $r = @mysqli_query($dbc, $q);
        if (mysqli_num_rows($r) > 0)
        {
           $row = mysqli_fetch_row($r);
           redirect_user('buyingForm.php?member_id=' . $row[0]);
           exit();
        }

        else
        {
            echo "incorrect username or password";
        }
     }
}      
?>