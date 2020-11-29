<?php
include('db.php');

if(isset($_POST['signupbtn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO log (name, email, password) VALUES ('$name', '$email', '$password')";

  if ($conn->query($sql) == TRUE) {
      echo '<script>alert("New record inserted successfully")</script>';

  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
?>

<html>
<head>
    <link href="Main_Circle.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="jquerymain_Circle.js"></script>
    
<title>Login</title>    
</head>
    <body>
        <div id="main">
            <table border="0" cellspacing="10">
                <tr>
                    <td>
                        <div id="title">SIGN IN</div>
                        <hr size="1px" width="100px" color="black"/>
                    </td>
                </tr>
                <tr>
                    <form action="signin.php" method="POST">
                    <td>
                        <input type="text" placeholder="USER ID" required="" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="PASSWORD" required="" name="password">
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <div id="frt">FORGOT PASSWORD</div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" value="SIGN IN" id="signInBtn"/>
                    </td>
                </tr>
                </form>
                <tr>
                    <td align="center">
                        <div id="signUpMsg">DON'T HAVE AN ACCOUNT?&nbsp;<a href="#" id="flipToSignUp">SIGN UP</a></div>
                    </td>
                </tr>
               
            </table>
        </div>
        
        
        <form action="user_login.php" method="POST">
        <div id="signUpForm">
            <table border="0" cellspacing="10">
                <tr>
                    <td>
                        <div id="title">SIGN UP</div>
                        <hr size="1px" width="100px" color="black"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder="FULL NAME" name="name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" placeholder="EMAIL ID" name="email" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="PASSWORD" name="password" required/>
                    </td>
                </tr>
                
                <tr>
                    <td align="center">
                        <input type="submit" value="SIGN UP" id="signUpBtn" name="signupbtn"/>
                    </td>
                </tr>
                <tr>
                    <td align="center"> 
                        <div id="signInMsg"> HAVE AN ACCOUNT?&nbsp;<a href="" id="flipToSignIn">SIGN In</a></div>
                    </td>
                </tr>
                
            </table>
        </div>
    </body>
</html>