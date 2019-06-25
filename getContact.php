<?php   

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="Travospirit";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    } 

    // echo "Connected to Database successfully" . "\n"; 

        // echo "entered";

    
    // if(isset($_POST['submit'])){

        // echo $_POST["name"];

        $input = $_GET["name"]; //get input text
        $currentPlace = strtoupper($_GET["name"]);

        $sql=" SELECT * FROM `Contact` WHERE Place like '$currentPlace' ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $message="Contact Number: " . $row["Contact"];
            }
        } else {
            $message="No Contact Found";
        }

        echo "$message" ;

    // }

    $conn->close(); 

?> 