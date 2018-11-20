<?php include '../config/config.php';

$invorows = array();


$invo_no = $_POST['customerinvoicesid'];
$purp = $_POST['subj'];
$comp = $_POST['company'];
$recipant = $_POST['recep'];

if($purp=='invoice_only'){

$invoicd = "SELECT * FROM invoice WHERE invoice_no = '".$invo_no."'";
$invochckq = mysql_query($invoicd);
$inrow = mysql_fetch_array($invochckq);

	if($inrow['status']!='Partially Paid'){

$updateinvoicestatus = "UPDATE invoice SET email = 'yes', status = 'Sent' WHERE invoice_no = '".$invo_no."'";
$invoemailque = mysql_query($updateinvoicestatus);

	}else{	

$updateinvoicestatus = "UPDATE invoice SET email = 'yes', status = 'Partially Paid' WHERE invoice_no = '".$invo_no."'";
$invoemailque = mysql_query($updateinvoicestatus);

	}
		
		
$invosql = "SELECT invoice.* , customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice_no = '".$invo_no."'";
$invoque = mysql_query($invosql);
$row = mysql_fetch_row($invoque);


$to = $recipant;
$subject = 'Invoice - '.$row[3].' from Earthsave';


//$headers = "From: " . $row[23] . "\r\n";
$headers = "From: sales@earthsave.com.au\r\n";
//$headers .= "Reply-To: ".  $row[23] . "\r\n";
//$headers .= "CC: info@earthsave.com.au\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<div style="background: #fbfbfb;">
  <div>
    <div style="padding: 2% 3%;max-width: 150px;max-height:50px;"></div>
  </div>
  <div style="padding:3%;text-align:center;background: #4190f2;">
    <div style="color:#fff;font-size:20px;font-weight:500;">Invoice #'.$row[3].'</div>
  </div>
  <div style="max-width:560px;margin:auto;padding: 0 3%;">
    <div style="padding: 30px 0; color: #555;line-height: 1.7;">Dear '.$row[28].', <br>
      <br>
      Thank you for your business. Your invoice can be viewed, printed and downloaded as PDF from the link below. You can also choose to pay it online. <br>
    </div>
    <div style="padding: 3%; background: #fefff1; border: 1px solid #e8deb5; color: #333;">
      <div style="padding: 0 3% 3%; border-bottom: 1px solid #e8deb5; text-align: center;">
        <h4 style="margin-bottom: 0;">INVOICE AMOUNT</h4>
        <h2 style="color: #D61916; margin-top: 10px;">'.$row[14].'</h2>
      </div>
      <div style="margin:auto; max-width:350px; padding: 3%;">
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Invoice No</span><span style="width: 40%; padding-left: 10%; display: inline-block;"><b>'.$row[3].'</b></span></p>
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Invoice Date</span><span style="width: 40%; padding-left: 10%;"><b>'.$row[6].'</b></span></p>
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Due Date</span><span style="width: 40%; padding-left: 10%;"><b>'.$row[14].'</b></span></p>
      </div>
       <div style="text-align: center;margin: 25px 0;">
	   <a href="https://earthsave.com.au/invoice/invoice.php?invoiceid='.$row[3].'" style="background:#4dcf59; padding:10px 20px; color:#fff; text-decoration:none;">VIEW INVOICE</a></div>
    </div>
    <br>
    <div style="padding: 3% 0;line-height: 1.6;"> Regards,
      <div style="color: #8c8c8c; font-weight: 400">Admin Earthsave Solar</div>
      
    </div>
  </div>
</div>
<br>
<br>';
$message .= '</body></html>';
mail($to, $subject, $message, $headers);

echo 'email sent';
	
}

//=============================== if invoice only and company then shoot company invoice =================


if($purp=='invoice_only' && $comp!=''){

$invoicd = "SELECT * FROM invoice WHERE invoice_no = '".$invo_no."'";
$invochckq = mysql_query($invoicd);
$inrow = mysql_fetch_array($invochckq);

	if($inrow['status']!='Partially Paid'){

$updateinvoicestatus = "UPDATE invoice SET email = 'yes', status = 'Sent to Finance Company' WHERE invoice_no = '".$invo_no."'";
$invoemailque = mysql_query($updateinvoicestatus);

	}
		
		
$invosql = "SELECT invoice.* , customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice_no = '".$invo_no."'";
$invoque = mysql_query($invosql);
$row = mysql_fetch_row($invoque);


$to = $comp;
$subject = 'Invoice - '.$row[3].' from Earthsave';


//$headers = "From: " . $row[23] . "\r\n";
$headers = "From: sales@earthsave.com.au\r\n";
//$headers .= "Reply-To: ".  $row[23] . "\r\n";
//$headers .= "CC: info@earthsave.com.au\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<div style="background: #fbfbfb;">
  <div>
    <div style="padding: 2% 3%;max-width: 150px;max-height:50px;"></div>
  </div>
  <div style="padding:3%;text-align:center;background: #4190f2;">
    <div style="color:#fff;font-size:20px;font-weight:500;">Invoice #'.$row[3].'</div>
  </div>
  <div style="max-width:560px;margin:auto;padding: 0 3%;">
    <div style="padding: 30px 0; color: #555;line-height: 1.7;">Dear '.$row[28].', <br>
      <br>
      Thank you for your business. Your invoice can be viewed, printed and downloaded as PDF from the link below. You can also choose to pay it online. <br>
    </div>
    <div style="padding: 3%; background: #fefff1; border: 1px solid #e8deb5; color: #333;">
      <div style="padding: 0 3% 3%; border-bottom: 1px solid #e8deb5; text-align: center;">
        <h4 style="margin-bottom: 0;">INVOICE AMOUNT</h4>
        <h2 style="color: #D61916; margin-top: 10px;">'.$row[14].'</h2>
      </div>
      <div style="margin:auto; max-width:350px; padding: 3%;">
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Invoice No</span><span style="width: 40%; padding-left: 10%; display: inline-block;"><b>'.$row[3].'</b></span></p>
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Invoice Date</span><span style="width: 40%; padding-left: 10%;"><b>'.$row[6].'</b></span></p>
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Due Date</span><span style="width: 40%; padding-left: 10%;"><b>'.$row[14].'</b></span></p>
      </div>
       <div style="text-align: center;margin: 25px 0;">
	   <a href="https://earthsave.com.au/invoice/company_invoice.php?invoiceid='.$row[3].'" style="background:#4dcf59; padding:10px 20px; color:#fff; text-decoration:none;">VIEW INVOICE</a></div>
    </div>
    <br>
    <div style="padding: 3% 0;line-height: 1.6;"> Regards,
      <div style="color: #8c8c8c; font-weight: 400">Admin Earthsave Solar</div>
      
    </div>
  </div>
</div>
<br>
<br>';
$message .= '</body></html>';
mail($to, $subject, $message, $headers);

echo 'email sent';
	
}





//============================== End invoice only and company ===========================================



if($purp=='stc_only'){
	
	
$getuser = "SELECT * FROM electricians WHERE email = '".$recipant."'";
$getquery = mysql_query($getuser);
$fechrow = mysql_fetch_array($getquery);	
$checkuser = mysql_num_rows($getquery);
	
	if($checkuser==0)
	{
	echo 'User not available';
	
	}else{



$updateinvoicestatus = "UPDATE invoice SET stc_status = 'Sent to Electrician' WHERE invoice_no = '".$invo_no."'";
$invoemailque = mysql_query($updateinvoicestatus);

$invosql = "SELECT invoice.* , customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice_no = '".$invo_no."'";
$invoque = mysql_query($invosql);
$row = mysql_fetch_row($invoque);




$to = $recipant;

$subject = "STC for Invoice# ".$invo_no."";


$headers = "From: sales@earthsave.com.au\r\n";
$headers .= "Reply-To: ".  $row[23] . "\r\n";
//$headers .= "CC: info@earthsave.com.au\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<div style="background: #fbfbfb;">
  <div>
    <div style="padding: 2% 3%;max-width: 150px;max-height:50px;"></div>
  </div>
  
  <div style="max-width:560px;margin:auto;padding: 0 3%;">
    <div style="padding: 30px 0; color: #555;line-height: 1.7;">Dear '.$fechrow['name'].', <br>
      <br>
      Your STC for Invoice # '.$invo_no.'  can be viewed by accessing your web portal.<br>
    </div>
	
	<div style="text-align: center;margin: 25px 0;">
	   <a href="https://earthsave.com.au/invoice/invoice.php?invoiceid='.$invo_no.'" style="background:#4dcf59; padding:10px 20px; color:#fff; text-decoration:none;">Access Portal</a></div>
	
	
   
	
   
     <div style="padding: 3% 0;line-height: 1.6;"> Regards,
      <div style="color: #8c8c8c; font-weight: 400">Admin Earthsave Solar</div>
    </div>
  </div>
</div>
<br>
<br>';
$message .= '</body></html>';
mail($to, $subject, $message, $headers);

echo 'stc email sent';
	}
	
}


//================ stc to company =======================

if($purp=='stc_only' && $recipant == 'Forms@emergingenergy.com.au'){
	
	
//$getuser = "SELECT * FROM electricians WHERE email = '".$recipant."'";
//$getquery = mysql_query($getuser);
//$fechrow = mysql_fetch_array($getquery);	
//$checkuser = mysql_num_rows($getquery);
	
	//if($checkuser==0)
	//{
	//echo 'User not available';
	
	//}

//else{



$updateinvoicestatus = "UPDATE invoice SET stc_status = 'STC submitted' WHERE invoice_no = '".$invo_no."'";
$invoemailque = mysql_query($updateinvoicestatus);

$invosql = "SELECT invoice.* , customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice_no = '".$invo_no."'";
$invoque = mysql_query($invosql);
$row = mysql_fetch_row($invoque);




//$to = $recipant;
$to = 'behlool@gmail.com';

$subject = "STC Verification";


$headers = "From: sales@earthsave.com.au\r\n";
$headers .= "Reply-To: sales@earthsave.com.au\r\n";
//$headers .= "CC: info@earthsave.com.au\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<div style="background: #fbfbfb;">
  <div>
    <div style="padding: 2% 3%;max-width: 150px;max-height:50px;"></div>
  </div>
  
  <div style="max-width:560px;margin:auto;padding: 0 3%;">
    <div style="padding: 30px 0; color: #555;line-height: 1.7;">Dear '.$fechrow['name'].', <br>
      <br>
      Your STC for Invoice # '.$invo_no.'  can be viewed by accessing your web portal.<br>
    </div>
	
	<div style="text-align: center;margin: 25px 0;">
	   <a href="https://earthsave.com.au/stc/stc.php?stcid='.$invo_no.'" style="background:#4dcf59; padding:10px 20px; color:#fff; text-decoration:none;">Access Portal</a></div>
	
	
   
	
   
     <div style="padding: 3% 0;line-height: 1.6;"> Regards,
      <div style="color: #8c8c8c; font-weight: 400">Admin Earthsave Solar</div>
    </div>
  </div>
</div>
<br>
<br>';
$message .= '</body></html>';
mail($to, $subject, $message, $headers);

echo 'stc email sent';
//	}
	
}

//=============== stc to company end ====================


if($purp=='workorder_only'){
	
	
$getuser = "SELECT * FROM electricians WHERE email = '".$recipant."'";
$getquery = mysql_query($getuser);
$fechrow = mysql_fetch_array($getquery);	



$updateinvoicestatus = "UPDATE invoice SET work_order_status = 'Sent to Electrician' WHERE invoice_no = '".$invo_no."'";
$invoemailque = mysql_query($updateinvoicestatus);

$invosql = "SELECT invoice.* , customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice_no = '".$invo_no."'";
$invoque = mysql_query($invosql);
$row = mysql_fetch_row($invoque);
	

if($row[25]=='green_deal'){	
	
$strinvosql = "SELECT * FROM greendeal WHERE invoice_no = '".$invo_no."'";
$stcinvoque = mysql_query($strinvosql);
$stccnrow = mysql_fetch_row($stcinvoque);

}else if($row[25]=='achievers_energy'){	
	
$strinvosql = "SELECT * FROM achievers WHERE invoice_no = '".$invo_no."'";
$stcinvoque = mysql_query($strinvosql);
$stccnrow = mysql_fetch_row($stcinvoque);
	
}


$to = $recipant;

$subject = 'Invoice - '.$row[3].' from Earthsave';


$headers = "From: sales@earthsave.com.au\r\n";
$headers .= "Reply-To: ".  $row[23] . "\r\n";
//$headers .= "CC: info@earthsave.com.au\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= 'Hello '.$fechrow['name'].'<br><br>
You have been assigned a work order for the <strong>invoice no. '.$row[3].'</strong><br><br>
Please access your EarthSave portal to view your work-order <a href="https://sungreen.com.au/dev/backoffice/admin/">PORTAL LINK</a><br>
Please note: Stock pickup locations and any other instructions can be viewed within the work-order<br><br>
The STC platform for the above invoice no. is Greendeal. To manage the STC please log-in to your '.$row[24].' portal and find the STC with following details;<br><br>
<strong>ID:</strong>   '.$stccnrow[2].' <br>
<strong>REFERENCE NO:</strong> '.$stccnrow[3].'<br><br>
If you have any questions, feel free to contact admin via the online chat or simply call the admin department and we’ll make it our priority to look you after.<br><br>

Regards<br>
Admin<br>
Earthsave<br><br>

You’re receiving this email because you have been registered as an electrician at EarthSave Solar. The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof.
';
$message .= '</body></html>';
mail($to, $subject, $message, $headers);

echo 'email sent';
	
}

?>