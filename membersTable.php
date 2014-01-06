<?php
$q = "CREATE TABLE members(
   member_id INT NOT NULL AUTO_INCREMENT,
   first_name VARCHAR(100) NULL,
   last_name VARCHAR(100) NULL,
   email VARCHAR(100) NULL,  
   password VARCHAR(20) NOT NULL,
   creation_date TIMESTAMP, 
   PRIMARY KEY(member_id))";

//runs the query
           $r = @mysqli_query($dbc, $q);
        
            //results are being checked while the query is running
            if($r)
            {
              print "<br>" . "Create ok!!" . "<br>";
            }
        
            else
          {
               print "Error! create not ok!!";
                echo '<p>' . mysqli_error($dbc) . '<br> Query: ' . $q . '<br>';
            }
?>
