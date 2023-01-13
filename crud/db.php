
    
    
    <!--'hostname' => "145.239.3.48",-->
    <!--'username' => "techmsaf_test",-->
    <!--'password' => "admin@TechMsafi6883ke",-->
    <?php
    $servername = "145.239.3.48";
    $username = "techmsaf_fredstore";
    $password = "admin@TechMsafi6883ke";
    $db = "techmsaf_demo";
    
    
    
    
    
    
    
    
    
    



    
    
    // $servername = "ip address";
    // $username = "sasakazi";
    // $password = "1234";
    // $db = "sasakazidb";
    
    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    