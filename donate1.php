
<?php
include('db.php');

if(isset($_POST['submitBtn'])){
  $fname = $_POST['fname'];
  $phone_no=$_POST['phone_no'];
  $email_id = $_POST['email_id'];
  $adrs=$_POST['adrs'];
  $country = $_POST['country'];            
  $city = $_POST['city'];
  $pin_code=$_POST['pin_code'];
  $pan_card=$_POST['pan_card'];

  $sql = "INSERT INTO donate_details (fname,phone_no,email_id,adrs,country,city,pin_code,pan_card) VALUES ('$fname','$phone_no','$email_id','$adrs','$country','$city','$pin_code','$pan_card')";

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
    <title>Donate</title>
</head>
<body>
   <div class="donation">
    <div class="left">
        <h1 class="heading"> Save Child</h1>
          <div class="help">         
              <img src="help.jpg" alt="Please Help" class="photo">
         </div>
         <h2>Please come forward and contribute.<br> Your contribution will transform lives.</h2>
         <ul>
             <li>
                 Save the Children has changed the lives of more than 1.1 crore (10.1 million) <br>children in India,
                  since 2008.
             </li>
             <li>
                 We get deprived children access to quality education and often life – saving<br> healthcare, 
                 and protection from harm and abuse.
             </li>
             <li>
                 Currently, we have 65 projects running in 18 states of India.
             </li>
             <li>
                 In 2019, we reached a total of 12.64 lakh children.
             </li>
         </ul>
 <p>All donations are tax-exempted under section 80G of the Income Tax Act, 1961.</p>
 
      </div>  
     <div class="right">
    <h1>Kindly fill Your details</h1>
    
    <input type="text" id="name" class="input" name="fname" placeholder="Name*" required><br>
    <input type="number" id="number" class="input" name="phone_no" placeholder="Phone Number*" required><br>
    <input type="email" id="email" class="input" name="email_id" placeholder="Email id*" required><br>
    <input type="text" id="address" class="input" name="adrs" placeholder="Address*" required><br>
    <select name="country" class="input" required>
        <option value="india" name="country">India</option>
        <option value="us" name="country">Forign</option>
    </select><br>
    <input type="text" id="city" class="input" name="city" placeholder="City*" required><br>
    <input type="number" id="code" class="input" name="pin_code" placeholder="Pincode*" required><br>
    <input type="number" id="pannumber" class="input"  name ="pan_card" placeholder="Pan Number*" required><br>

    <input type="submit" name="submitBtn" class="btn" value="Pay Now"><br><br>

    <img src="spent.PNG" alt="Spent">
 
     </div> 
     
</div>
</body>
<style>

.donation{
    text-align: center;
    margin-right: 4%;
    margin-left: 4%;
    margin-top: 1%;
    font-family:verdana
}
.right{
    margin-top: 3%;
    float: right;
    line-height: 300%;
}
.input{
    border-style: solid ridge;
    border: 3px solid rgb(179, 7, 7) ;
    box-sizing: border-box;
    height: 70%;
    width: 100%;
    padding: 08px 15px;
}
.btn{
    height: 70%;
    width: 60%;
    background-color: rgb(179, 7, 7)  ;
    color: white;
    padding: 08px 15px;
}

.heading{
    color: rgb(179, 7, 7) ;
}

.left{
    float: left;
    text-align-last: left;
}
.left .heading{
    text-align: left;
}
.photo {
    width: 700px;
    height: 420px;
    border: 5px solid rgb(179, 7, 7);
}
</style>
</html>