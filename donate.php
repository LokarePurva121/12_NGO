<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donate</title>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
<h1 class="heading" >WE RUN ONLY ON DONATION</h1>
  <input type="text" class="amount" placeholder="Enter Amount" name="amount" required><br>
    <label>Payment Type : </label>
    <input type="radio" name="payment_method" id="card"  value="card">
    <label for="card">Card</label>
    <input type="radio" name="payment_method" id="netbank"  value="netbank">
    <label for="card">Net Banking</label><br>
   <input type="submit" name="btn" class="btn" value="Donate Now"><br><br>
    <img src="fund.PNG" alt="Fund">
</div> 
     
</div>


</body>
</form>
<style>

.donation{
    text-align: center;
    margin-right: 5%;
    margin-left: 5%;
    margin-top: 1%;
    font-family:verdana
}
.right{
    margin-top: 08%;
    float: right;
    line-height: 300%;
}
.amount:required{
    border-style: solid ridge;
    border: 3px solid rgb(179, 7, 7) ;
    box-sizing: border-box;
    height: 70%;
    width: 70%;
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
    width: 650px;
    height: 420px;
    border: 5px solid rgb(179, 7, 7);
}

</style>

<?php
$amount = filter_input(INPUT_POST, 'amount');
$payment_method= filter_input(INPUT_POST, 'payment_method');

if (!empty($amount)){
    if(!empty($payment_method)){
        $host="localhost";
        $user="root";
        $pass="";
        $db="ngo";

        //Create conection
        $conn = new mysqli($host,$user,$pass,$db);

        if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else{
            $sql="INSERT INTO donate (amount,payment_method) values ('$amount','$payment_method')";

            if($conn->query($sql)){
                if(isset($_POST["btn"]))
                {
                    header('Location:donate1.php');
                }
            }
            else{
                echo "Error : ".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    }
    else{
       // echo "Payment method should not be empty";//
        die();
    }
}
else{
   // echo "Amount should not be empty";//
    die();
}

?>








</html>