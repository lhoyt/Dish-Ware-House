<?Php
    DEFINE('DB_USER', 'lyndo3_lab02020');
    DEFINE('DB_PASSWORD', '1043151');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'lyndo3_lab02020');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
            or die("Could not connect to db" . mysqli_connect_error());
?>