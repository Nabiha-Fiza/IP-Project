<?php
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $phn = $_POST['phn'];
    $sname = $_POST['sname'];
    $cname = $_POST['cname'];
    $location = $_POST['location'];
    //$conn = new mysqli('localhost','root'," ",'wedding_planner');
    $conn = mysqli_connect("localhost","root","","wedding_planner") or die("Couldn't connect");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into service(regno, email, phn, sname, cname, location)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss",$regno, $email, $phn, $sname, $cname, $location);
        $stmt->execute();
        echo "data is added successfully";
        $stmt->close();
        $conn->close();
    }
?>