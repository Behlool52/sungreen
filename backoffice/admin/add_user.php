<?php include '../config/config.php';

$userrole   = $_POST['role'];    //===  Check for Edit

$name     = $_POST['name'];
$address  = $_POST['address'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$portal   = $_POST['portal'];
$active   = $_POST['active'];


if($userrole != ''){

$userinsertsql = "INSERT INTO electricians(name, address, email, phone, username, password, portal, role, active)
VALUES('".$name."','".$address."','".$email."','".$phone."','".$username."','".$password."','".$portal."','".$userrole."','".$active."')";
$userinsertquery = mysql_query($userinsertsql);

if($userrole=='electrician'){



$to = $email;
$subject = "Welcome to EarthSave Community";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table width='640'>
<tr>
<td>

  Hello $name,<br /><br />
  <strong>Welcome to the EarthSave community</strong><br /><br />
  We are delighted to introduce our Earthsave  portal where you can view your work-orders, update STC and communicate with admin in a hassle-free environment.<br />
  The portal is specifically designed to meet  our daily needs and to allow electricians to have a complete access to all documentations required for their installation. <br /><br />
  To access your portal simply log-in to <a href='https://earthsave.com.au/admin/'>PORTAL LINK</a><br />
  Your credentials are as follows,<br /><br />
  <strong>Username:</strong> $username<br />
  <strong>Password:</strong> $password<br /><br />
  (It is advised to keep your credentials  safe at all times. Should you need to change your password, contact the admin department without any delays)<br /><br />
  INSTRUCTIONS:</p> 
<ul>
  <li>Once you  have been assigned a work order, you will be notified via an email.</li>
  <li>To view  your work-order, log-in your portal and click the form icon under the heading *<strong>WO</strong>*</li>
  <li>If the STC are being submitted via (Emerging energy), you will be provided with an electronic STC form already completed for you under the right most *options icon* button. Simply click <strong>Update STC</strong> and the STC should pop up. You can make any amendments, take all required signatures electronically and click on update button. Once updated, admin will automatically receive the processed STC.</li>
</ul>
<p><img width='601' height='205' src='https://earthsave.com.au/admin/assets/img/tutorial.jpg' style='display:block'/></p>
<ul>
  <li>You will  be required to enter the panel serial number, attach CES/COC certificate within your portal under the same option icon button as represented in the visual assistance above.</li>
  <li>If the STC  are being submitted via (green deal) or any other platform, you will still need to view your work-order from the portal and access the STC, attach panel serial number and CES/COC certificate within green deal portal in the usual manner. </li>
  <li>When you have started installing, you will need to change the work order status by going  to options, clicking work order status, select <strong>work in progress</strong> and update the status.</li>
  <li>When the installation is completed, you will need to change the work order status by  going to options, clicking work order status, select <strong>work done</strong> and update the status.</li>
</ul>
<p>Should you have any questions, feel free to  contact admin via the online chat or simply call the admin department and we&rsquo;ll  make it our priority to look you after.<br />
  You&rsquo;re receiving this email because you  have been registered as an electrician at EarthSave Solar. The  contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. <br />


Thank you,<br><br>
<span><img src='https://earthsave.com.au/admin/assets/img/logo.png'></span><br>
<span>Tel: 1300 00 5253</span><br>
<span>Web: <a href='https://www.earthsave.com.au'>www.earthsave.com.au</a></span>
</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: admin@earthsave.com.au' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);




}
	
	
if($userrole=='saleperson'){



$to = $email;
$subject = "Welcome to EarthSave Community";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table width='640'>
<tr>
<td>
  Hello $name,<br /><br />
  <strong>Welcome to the EarthSave community</strong><br /><br />
 We are delighted to introduce our Earthsave portal where you can view your sales and communicate with admin in a hassle-free environment.<br /><br />
  The portal is specifically designed to meet our daily needs and to allow Salespeople to have a complete access to all their sales and be able to view the status for invoice payment and electrician comments for Solar install progress. <br /><br />
  To access your portal simply log-in to <a href='https://earthsave.com.au/admin/'>PORTAL LINK</a><br />
  Your credentials are as follows,<br /><br />
  <strong>Username:</strong> $username<br />
  <strong>Password:</strong> $password<br /><br />
  (It is advised to keep your credentials  safe at all times. Should you need to change your password, contact the admin department without any delays)<br />
<p>For better user reference we will keep updating our portal coping up with the latest technology possible. When such upgrades are made you will be notified via email with detailed instructions.<p> 
<p>If you have any questions, feel free to contact admin via the online chat or simply call the admin department and we’ll make it our priority to look you after.</p>
<p>You're receiving this email because you have been registered as a salesperson at EarthSave Solar. The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof.
</p>




Thank you,<br><br>
<span><img src='https://earthsave.com.au/admin/assets/img/logo.png'></span><br>
<span>Tel: 1300 00 5253</span><br>
<span>Web: <a href='https://www.earthsave.com.au'>www.earthsave.com.au</a></span>
</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: admin@earthsave.com.au' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);




}
	
	
if($userrole=='leadperson'){



$to = $email;
$subject = "Welcome to EarthSave Community";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table width='640'>
<tr>
<td>
  Hello $name,<br /><br />
  <strong>Welcome to the EarthSave community</strong><br /><br />
We are delighted to introduce our Earthsave portal where you can view your sales and communicate with admin in a hassle-free environment.<br /><br />
 The portal is specifically designed to meet our daily needs and to allow agents to have a complete access to all their sales and be able to view the status for invoice payment and electrician comments for Solar install progress.<br /><br />
  To access your portal simply log-in to <a href='https://earthsave.com.au/admin/'>PORTAL LINK</a><br />
  Your credentials are as follows,<br /><br />
  <strong>Username:</strong> $username<br />
  <strong>Password:</strong> $password<br /><br />
 

Thank you,<br><br>
<span><img src='https://earthsave.com.au/admin/assets/img/logo.png'></span><br>
<span>Tel: 1300 00 5253</span><br>
<span>Web: <a href='https://www.earthsave.com.au'>www.earthsave.com.au</a></span>
</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: admin@earthsave.com.au' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);




}
	
	
	
	
}


?>