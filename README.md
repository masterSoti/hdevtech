# hdevtech
add a connection.php file to the repo..;
add the code below with some variations to that repo....;
    $servername = "127.0.0.1";
    $username = "some_user";
    $password = "some_password";
    $database = "so_database";
    
    $conn = mysql_connect($servername, $username, $password);
    $db_select = mysql_select_db($database);
    if($conn->connect_error){
        die("Connectionfailed" . $conn->connect_error);
    }
