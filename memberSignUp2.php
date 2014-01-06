<?php 
include('includes/header.html');
require('connectToDatabase.php');
print "<h1>Become a Member</h1>";

if($_SERVER ['REQUEST_METHOD'] ==  'POST')
{     
        //initialize an error array
        $errors = array();
        
        //checks the first name
        if(empty($_POST['first_name']))
        {
            $errors[] = 'You forgot to enter your first name.';  
        }
        
        else
        {
            $f = trim($_POST['first_name']);
        }
        
        //checks the last name
        if(empty($_POST['last_name']))
        {
            $errors[] = 'You forgot to enter your last name.';  
        }
        
        else
        {
            $l = trim($_POST['last_name']);
        }
        
        //checks the email address
        if(empty($_POST['email']))
        {
            $errors[] = 'You forgot to enter your email address.';  
        }
        
        else
        {
            $e = trim($_POST['email']);
        }
        
        //checks for a password and matches against the confirmed confirmed password
        if(!empty($_POST['password1']))
        {
            if($_POST['password1'] != $_POST['password2'])
            {
                $errors[] = 'Your password does not match your confirmed password.';  
            }
            
            else
            {
                $p = trim($_POST['password1']);
            }
        }
        
        else
        {
            $errors[] = 'You forgot to enter your password.';
        }
        
        if(empty($errors))
        {
            //connects to database
            require('connectToDatabase.php');
            
            //creates the query
            $q = "INSERT INTO members (first_name, last_name, email, password, creation_date) 
            VALUES ('$f', '$l', '$e', '$p', NOW() )";
            
            //runs the query
            $r = @mysqli_query($dbc, $q);
            
            //if it runs okay
            if($r)
            {
                print "<h2>Thank You!!</h2>";
                print "You are now registered!!";
            }
            
            //if it didn't run okay
            else
            {
                print "<h2>System Error</h2>";
                print "You could not be registered due to a system error.";
                
                echo '<p>' . mysqli_error($dbc) . '<br> Query: ' . $q . '<br>';
            }
        }
        
        else
        {
                print "<h2>Error</h2>";
                print "The following errors occuried: ";
                
                echo '<p>' . mysqli_error($dbc) . '<br> Query: ' . $q . '<br>';
        }
}
?>

<form action="memberSignUp2.php" method="post">
    <p> First Name: <input type="text" name="first_name" size="10" 
                           value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" /> </p>
    
    <p> Last Name: <input type="text" name="last_name" size="20" 
                          value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>"/> </p>
    
    <p> Email:  <input type="text" name="email" size="50" 
                       value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" /> </p>
    
    <p> Password:  <input type="password" name="password1" size="10" maxsize="20" 
                          value="<?php if(isset($_POST['password1'])) echo $_POST['password1']; ?>" /> </p>
    
    <p> Confirm Password:  <input type="password" name="password2" size="10" maxsize="20" 
                                  value="<?php if(isset($_POST['password2'])) echo $_POST['password2']; ?>" /> </p>
                
    <input type = "submit" name = "submit" value = "Register">
</form>

<?php
        include('includes/footer.html');
?>