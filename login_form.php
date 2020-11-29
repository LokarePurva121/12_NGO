<?php
include('db.php');

session_start();

if(isset($_SESSION['userId'])) {
    header('location: http://localhost/NGO/form.php'); 
}

if(isset($_POST['loginbtn'])) {        

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if(empty($email) || empty($password)) {
        if($username == "") {
            $errors[] = "Email is required";
        } 

        if($password == "") {
            $errors[] = "Password is required";
        }
    } else {
        $sql = "SELECT * FROM ip WHERE email = '$email'";
        $result = $conn->query($sql);

        if($result->num_rows == 1) {
            $password = $password;
            // exists
            $mainSql = "SELECT * FROM ip WHERE email = '$email' AND password = '$password'";
            $mainResult = $conn->query($mainSql);

            if($mainResult->num_rows == 1) {
                $value = $mainResult->fetch_assoc();
                $user_id = $value['user_id'];

                // set session
                $_SESSION['userId'] = $user_id;

                header('location: http://localhost/NGO/form.php'); 
            } else{
                
                echo '<script>alert("Email/password does not match")</script>';
            } // /else
        } else {        
            echo '<script>alert("Email does not exist")</script>';      
        } 
    } 
    
} 

?>