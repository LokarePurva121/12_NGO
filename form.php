<?php

include('db.php');

if(isset($_POST['submit'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $event = $_POST['event'];
  $views = $_POST['subject'];             
  // $password = md5($_POST['password']);

  $sql = "INSERT INTO volunteer (firstname, lastname, email, age, Event, subject) VALUES ('$fname', '$lname', '$email','$age','$event','$views')";

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
        <link rel="stylesheet" href="form.css" >
    </head>
    <body >
        <div class="container">
  <form action="form.php" method="POST">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" required placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname"  required placeholder="Your last name..">
    <label for="Ename">Email</label>
    <input type="text" id="Ename" name="email"  required placeholder="Your email name..">
    <label for="Age">Age</label>
    <input type="text" id="Ename" name="age" required placeholder="Your Age ..">


    <label for="Event">Event </label>
    <select id="event" name="event">
      <option value="Teaching childrens">Teaching</option>
      <option value="Providing Food">Food Providing</option>
      <option value="Health checkup">Health Checkup</option>
      <option value="Child Protection">Child Protection</option>
      <option value="Collect funds">Collect Funds</option>
    </select>

    <label for="subject">Your Views</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" name="views"></textarea>
    <input type="submit" value="Submit" name="submit">

  </form>
</div>
    </body>
</html>