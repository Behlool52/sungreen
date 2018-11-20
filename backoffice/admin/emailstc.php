<?php include '../config/config.php';

$invorows = array();


$invo_no = $_POST['customerinvoicesid'];
$purp = $_POST['purpose'];
$recipant = $_POST['recep'];


if($purp=='onlystc'){



//$updateinvoicestatus = "UPDATE invoice SET email = 'yes', status = 'Sent' WHERE invoice_no = '".$invo_no."'";
//$invoemailque = mysql_query($updateinvoicestatus);

$invosql = "SELECT invoice.* , customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice_no = '".$invo_no."'";
$invoque = mysql_query($invosql);
$row = mysql_fetch_row($invoque);

	//$invoprorowsw[] = array("invoice_date"=>$row['invoice_date'],"invoice_no"=>$row['invoice_no'],"sub_total"=>$row['sub_total'],"balance_due"=>$row['balance_due']);

//$invorows['invoice'] = $row;


$to = $recipant;

$subject = 'Invoice - '.$row[3].' from Earthsave';



$headers = "From: " . $row[23] . "\r\n";
$headers .= "Reply-To: ".  $row[23] . "\r\n";
$headers .= "CC: susan@example.com\r\n";
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
    <div style="padding: 30px 0; color: #555;line-height: 1.7;">Dear abc, <br>
      <br>
      Thank you for your business. Your invoice can be viewed, printed and downloaded as PDF from the link below. You can also choose to pay it online. <br>
    </div>
    <div style="padding: 3%; background: #fefff1; border: 1px solid #e8deb5; color: #333;">
      <div style="padding: 0 3% 3%; border-bottom: 1px solid #e8deb5; text-align: center;">
        <h4 style="margin-bottom: 0;">INVOICE AMOUNT</h4>
        <h2 style="color: #D61916; margin-top: 10px;">'.$row[10].'</h2>
      </div>
      <div style="margin:auto; max-width:350px; padding: 3%;">
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Invoice No</span><span style="width: 40%; padding-left: 10%; display: inline-block;"><b>'.$row[3].'</b></span></p>
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Invoice Date</span><span style="width: 40%; padding-left: 10%;"><b>'.$row[5].'</b></span></p>
        <p><span style="width: 40%; padding-left: 10%; float:left; ">Due Date</span><span style="width: 40%; padding-left: 10%;"><b>'.$row[7].'</b></span></p>
      </div>
       <div style="text-align: center;margin: 25px 0;">
	   <a href="https://earthsave.com.au/dev/invoice/invoice.php?invoiceid='.$row[3].'" style="background:#4dcf59; padding:10px 20px; color:#fff; text-decoration:none;">STC</a></div>
    </div>
    <br>
    <div style="padding: 3% 0;line-height: 1.6;"> Regards,
      <div style="color: #8c8c8c; font-weight: 400">behlool</div>
      <div style="color: #b1b1b1">Designsintellect</div>
    </div>
  </div>
</div>
<br>
<br>';
$message .= '</body></html>';
mail($to, $subject, $message, $headers);

echo 'email sent';
	
}

?>