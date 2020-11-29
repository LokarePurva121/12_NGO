<?php
include('db.php');

if(isset($_POST['signUpBtn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "INSERT INTO ip (name, email, password) VALUES ('$name', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
      echo '<script>alert("New record inserted successfully")</script>';

  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>

<!DOCTYPE html>
<head>
    <link href="Main_Circle.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="jquerymain_Circle.js"></script>
    
<title>Login</title>    
</head>
    <body>

    <form action="login_form.php" method="POST">
        <div id="main">
            <table border="0" cellspacing="10">
                <tr>
                    <td>
                        <div id="title">SIGN IN</div>
                        <hr size="1px" width="100px" color="black"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" placeholder="Email" name="email" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="PASSWORD" name="password" required/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <div id="frt">FORGOT PASSWORD</div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" value="SIGN IN" id="signInBtn" name="loginbtn"/>
                    </td>
                </tr>
                <tr>
                    <td align="center"> 
                        <div id="signUpMsg">DON'T HAVE AN ACCOUNT?&nbsp;<a href="#" id="flipToSignUp">SIGN UP</a></div>
                    </td>
                </tr>
                
            </table>
        </div>
    </form>
        
        
        <form action="Circle_login.php" method="POST">
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
                        <input type="text" placeholder="FULL NAME" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" placeholder="EMAIL ID" name="email"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="PASSWORD" name="password"/>
                    </td>
                </tr>
                
                <tr>
                    <td align="center">
                        <input type="submit" value="SIGN UP" id="signUpBtn" name="signUpBtn"/>
                    </td>
                </tr>
                <tr>
                    <td align="center"> 
                        <div id="signInMsg"> HAVE AN ACCOUNT?&nbsp;<a href="#" id="flipToSignIn">SIGN In</a></div>
                    </td>
                </tr>
                
            </table>
        </div>
        </form>
    </body>
</html>