<?php
if (isset($_POST['submit'])) {
	
	$adhar=$_FILES['adhar']['name'] ;
	$photo = $_FILES['photo']['name'];
	$rent = $_FILES['rent']['name'];
	$blue = $_FILES['blue']['name'];
	$product = $_FILES['product']['name'];
	$missions = $_FILES['missions']['name'];


	$target = "upload/".basename($adhar);
	$target2 ="upload/".basename($photo);
	$target3 ="upload/".basename($rent);
	$target4 ="upload/".basename($blue);
	$target5 ="upload/".basename($product);
	$target6 ="upload/".basename($missions);




	
				if (move_uploaded_file($_FILES['adhar']['tmp_name'], $target)) {
  		  	}
  		  	if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
  		  	}
  		  	if (move_uploaded_file($_FILES['rent']['tmp_name'], $target3)) {
  		  	}
  		  	if (move_uploaded_file($_FILES['blue']['tmp_name'], $target4)) {
  		  	}
  		  	if (move_uploaded_file($_FILES['product']['tmp_name'], $target5)) {
  		  	}
  		  	if (move_uploaded_file($_FILES['missions']['tmp_name'], $target6)) {
  		  	}


	}



// $name= $_POST["name"];
// $email= $_POST["email"];
// $mobile= $_POST["mobile"];
$licence=$_POST["licence"];
$turnover=$_POST["turnover"];
$nature=$_POST["nature"];
// $business=$_POST["business"];
// $address=$_POST["address"];
// $city=$_POST["city"];
// $state=$_POST["state"];
// $pin=$_POST["pin"];
// $landmark=$_POST["landmark"];

// $adhar=$_POST["adhar"];

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "akshuarer@gmail.com";
$mail->Password   = "9611135672"; 
$mail->IsHTML(true);
$mail->AddAttachment($target);
$mail->AddAttachment($target1);
$mail->AddAttachment($target2);
$mail->AddAttachment($target3);
$mail->AddAttachment($target4);
$mail->AddAttachment($target5);
$mail->AddAttachment($target6);
$mail->AddAddress("akshuarer@gmail.com", "Food licence india");
$mail->SetFrom("akshuarer@gmail.com", "Food licence india");
$mail->AddReplyTo("akshuarer@gmail.com", "Food licence india");
// $mail->AddCC("mpatat24@gmail.com", "cc-recipient-name");
$mail->Subject = "Contact Info for food licence";

$content = "
This is contact informations <br>

Licence= ".$licence."<br>
Turnover=".$turnover."<br>
Nature Of business= ".$nature."<br>

";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  //var_dump($mail);
} else {
 
	 if($_POST["licence"]=="basic")
 {
     header("Location: https://rzp.io/l/G33baSyxKf/");
}



 
	 if($_POST["licence"]=="state")
 {
     header("Location: https://rzp.io/l/YAZUGda/");
}




 
	 if($_POST["licence"]=="central")
 {
     header("Location: https://rzp.io/l/fWdPRerA/");
}


 
	 if($_POST["licence"]=="GST Registration")
 {
     header("Location: https://rzp.io/l/QEbgQbk/");
}



 
	 if($_POST["licence"]=="GST Filling")
 {
     header("Location: https://rzp.io/l/ASHuWDuZ/");
}


	 if($_POST["licence"]=="GST Modification")
 {
     header("Location: https://rzp.io/l/trXlA73Hn0/");
}

}
?>