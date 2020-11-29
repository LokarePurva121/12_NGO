<?php
include_once 'donate1_details.php';
if(isset($_POST['btn1']))
{	 
	$fname = $_POST['fname'];
    $phone_no = $_POST['phone_no'];
    $email_id = $_POST['email_id'];
    $adrs = $_POST['adrs'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $pin_code = $_POST['pin_code'];
    $pan_card = $_POST['pan_card'];



	 $sql = "INSERT INTO donate_details(fname,phone_no,email_id,adrs,country,city,pin_code,pan_card)
    VALUES ('$fname', '$phone_no','$email_id','$adrs','$country',$city,$pin_code,$pan_card)";


	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>