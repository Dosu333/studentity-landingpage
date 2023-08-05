<?php
$message = ""; 
if(isset($_POST['submit'])){
	$to = "dolapooniolasupo@gmail.com; adewaleogooluwani@gmail.com"; // Your email address
	$from = $_POST['university_email'];
	$message = "<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
    <tr style='background: #eee;'><td colspan='2'><strong>Studentity - Connect University Management</strong> </td></tr>
    <tr>
        <td><strong>Lecturer Name:</strong></td>
        <td>".$_POST['lecturer_name']."</td>
    </tr>
    <tr>
        <td><strong>Role:</strong></td>
        <td>".$_POST['role']."</td>
    </tr>
    <tr>
        <td><strong>School Name:</strong></td>
        <td>".$_POST['school_name']."</td>
    </tr>
    <tr>
        <td><strong>University Email:</strong></td>
        <td>".$_POST['university_email']."</td>
    </tr>
	</table>
	</body>
	</html>";
	
	$subject = "Studentity - Connect University Management";
	
	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$headers .= "From:" . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	if ($result) {
		// $message = "Your Message was sent Successfully!";
		echo '<script type="text/javascript">alert("Submitted! A member of our team will reach out to you shortly.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		// $message = "Sorry! Message was not sent, Try again Later.";
		echo '<script type="text/javascript">alert("Sorry! Submission Failed, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
	// header('Location: contact.php');
}
?>