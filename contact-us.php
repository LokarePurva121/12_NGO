<?php
include('db.php');

if(isset($_POST['submitBtn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];            
  // $password = md5($_POST['password']);

  $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
      echo '<script>alert("New record inserted successfully")</script>';

  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact us</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="Contact-us.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form" action="contact-us.php" method="POST" >
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="message" placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue" id="submitBtn" name="submitBtn">Submit</button>
                            <div class="ease"></div>
                        </div>
                        
                    </form>
                    <hr>
                    <p><i>Address : WE CARE FOR YOU,Mumbai,Maharashtra</i></p>
                    <p>E-Mail : wecare4u.mum@care4umail.org</p>
                    <p>
                        <contact>Tel : 022-23067259/57894</contact>
                    </p>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> 
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
    </body>
</html>