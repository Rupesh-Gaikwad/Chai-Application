<?php

    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    $customer_mobile_no = $_POST['mobile'];
    $customer_city = $_POST['city'];

    // Database connection

    $conn = new mysqli('localhost', 'root', '', 'Chai');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into Customers(Name, Email, Mobile_No, City, Registration_Date) values(?, ?, ?, ?, now())");
        $stmt->bind_param("ssss", $customer_name, $customer_email, $customer_mobile_no, $customer_city);
        $stmt->execute();
        echo "You have been registered successfully!";
        $stmt->close();
        $conn->close();
        header("Location: success.html");
    }

?>