<?php include '../config/config.php';

$invoid = $_GET['invoiceid'];

$invosql = "SELECT invoice.*, customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice.invoice_no = '".$invoid."'";
$invoque = mysql_query($invosql);
$invorowsw = mysql_fetch_row($invoque);

$invoprosql = "SELECT * FROM order_tbl WHERE invoice_no = '".$invorowsw[3]."'";
$invoproque = mysql_query($invoprosql);


//=========== get sum of gst invoices============

$gstsql = "SELECT SUM(product_rate) as gsttotal FROM order_tbl WHERE invoice_no = '".$invoid."' AND gst = 'yes' GROUP BY invoice_no";
$gstque = mysql_query($gstsql);
$gstarray = mysql_fetch_array($gstque);


//=============end get sum of gst invoices=========


?>

<html>
	<head>
	<link rel="stylesheet" href="css/invoice.css">	
		<link rel="stylesheet" href="css/vendor.css">	
		
	<style>
			.side-bar {
  background-color: {{tab_bg_color}};
}
.side-bar .seperator {
  background-color: {{menu_font_color}};
}
.side-bar .client-info .email,
.side-bar .client-info,
.side-bar .nav-pills > li a {
  color: {{menu_font_color}};
}
.side-bar .nav-pills > li a svg.lpanel {
  fill: {{menu_font_color}};
}
.side-bar .nav-pills > li a:hover,
.side-bar .nav-pills > li a:focus {
  background-color: {{menu_hover_bg_color}};
  color: {{menu_hover_font_color}};
}

.side-bar .nav-pills > li  a:focus svg.lpanel,
.side-bar .nav-pills > li  a:hover svg.lpanel {
  fill: {{menu_hover_font_color}};
}


.side-bar .nav-pills > li a.active:hover,
.side-bar .nav-pills > li a.active:focus,
.side-bar .nav-pills > li a.active {
  background-color: {{menu_active_bg_color}};
  color: {{menu_active_font_color}};
}

.side-bar .nav-pills > li a.active svg.lpanel {
  fill: {{menu_active_font_color}};
}

.btn-primary .caret {
  border-top-color: {{primary_button_font_color}};
}
.btn-primary,

.btn-primary.disabled,
.btn-primary.disabled.active,
.btn-primary.disabled:active,
.btn-primary.disabled:focus,
.btn-primary.disabled:hover,
.btn-primary[disabled],
.btn-primary[disabled].active,
.btn-primary[disabled]:active,
.btn-primary[disabled]:focus,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary.active,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary:hover
.btn-primary[disabled],.btn-primary.disabled,

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
    color: {{primary_button_font_color}};
    background-color: {{primary_button_bg_color}};
    border-color: {{primary_button_bg_color}};
}

.projects-nav a.active {
  border-top-color: {{primary_button_bg_color}};
}
.top-container .org-container {
  color: {{primary_button_font_color}};
  background-color: {{primary_button_bg_color}};
}
</style>
	</head>
<body>
<div class="content-body transitview">
    <div class="top-container transitview  ">
      <div class="org-container">
          <div class="center-container row">
            <div class="pull-left col-md-9 col-xs-7">
              <div class="row">
				  
<!---->              <h4 title="Designsintellect" class="over-flow">
                <b>Earthsave</b>
              </h4>
            </div>
            </div>
<!---->          </div>
      </div>
    </div>

    <div class="zb-container">
       <div class="top-container secure">
  <div class="secure-band">
        <div class="center-container actions">
            <div class="hidden-xs">
							<h3 style="margin: 5px 0 0;"><strong>$<?php echo $totalinvoiceamount = $invorowsw[13]-$invorowsw[15];?>
		
								</strong></h3>
              <p class="text-overdue">Balance Due</p>
            </div>
            <div class="clearfix">
              <div class="seperator-col spaced pull-left hidden-xs">
                <div class="col"><div class="text-muted">Invoice #:</div> <div><?php echo $invorowsw[3];?></div></div>
                <div class="col"><div class="text-muted">Due Date:</div> <div><?php echo $invorowsw[8];?></div></div>
              </div>
              <div class="pull-right">
                    <button type="button" class="btn btn-default" data-ember-action="" data-ember-action-345="345">
                      <svg class="icon text-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M143.5.5h230v220h-230z"></path><path d="M419.5 174.5v87h-322v-87h-98v291h98v-87h322v87h92v-291z"></path><path d="M127.5 424.5h256v88h-256z"></path></svg>
                    </button>
                    <button onclick="window.print()" type="button" class="btn btn-default" data-ember-action="" data-ember-action-346="346">
                      <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M396.2 364l-49.7 51h-176l-52.3-51H-.5v148h512V364z"></path><path d="M396.2 235h-89.7V51h-101v184h-87.3L256 376.6z"></path></svg>
                    </button>
<!---->              </div>
            </div>
         </div>
  </div>
</div>
<div class="secure-details-container">
  <div class="row visible-xs"><hr class="row"></div>
  <div id="ember353" class="visible-xs ember-view"><h2><?php echo $invorowsw[3];?></h2>
<p class="font-sm text-uppercase">
  <span class="text-success">Paid</span>
</p>

  <div class="row">
    <p class="col-xs-5 text-muted"> Date</p>
    <p class="col-xs-5"><?php echo $invorowsw[5];?></p>
  </div>
  <div class="row">
    <p class="col-xs-5 text-muted">Due Date</p>
    <p class="col-xs-5"><?php echo $invorowsw[7];?></p>
  </div>

<hr class="md dotted">
  <div class="row font-large">
    <div class="col-xs-5 text-muted text-uppercase">Balance:</div>
    <div class="col-xs-5"><?php echo $invorowsw[11];?></div>
  </div>
<hr class="md dotted">

<div style="margin:30px 0px;" class="text-center">
  <button type="button" class="btn custom-red-btn" data-ember-action="" data-ember-action-354="354">
    View as PDF
  </button>
<!----></div>
<hr class="md">
  <div id="ember363" class="ember-view"><div id="ember376" class="collapsed ember-view">      <div class="cursor-pointer text-info">
      Show Item Details
      <span class="caret"></span>
    </div>

</div><div id="ember381" class="ember-view collapsing" style="height: 0px;">      <table style="margin-top: 20px;" class="table line-item-table">
      <thead>
        <tr class="header">
          <td>Item</td>
            <td class="text-right">Amount</td>
        </tr>
      </thead>
      <tbody>
          <tr id="ember391" class="item ember-view">  <td>
    <div>Solar Panel</div>
    <div class="text-muted more-det">
      <div>8 
        * $560.00 
      </div>
      <!---->
      <div>steel made</div>
    </div>
  </td>
  <td class="text-right">$4,480.00</td>
</tr>
      </tbody>
    </table>

</div>
</div>

<!----></div>

 <div class="pdf-container  center-container hidden-xs">
    <!--<div class="ribbon">
      <div class="ribbon-inner ribbon-paid">Paid</div>
    </div>-->
    <div>
	<style media="all" type="text/css">
     

 

  .pcs-template {  	
    font-size: 9pt;
    color: #333333;
      background:  #ffffff ;
  }

  .pcs-header-content {
    font-size: 9pt;
	color: #333333;
	background-color: #ffffff;
  }
  .pcs-template-body {
  	padding: 0 0.400000in 0 0.550000in;
  }
  .pcs-template-footer {
  	height: 0.700000in;
	font-size: 6pt;
	color: #aaaaaa;
	padding: 0 0.400000in 0 0.550000in;
	background-color: #ffffff;
  }
  .pcs-footer-content {
  word-wrap: break-word;
  color: #aaaaaa;
      border-top: 1px solid #adadad;
  }

  .pcs-label {
	  font-size:13px;
    color: #333333;
  }
  .pcs-entity-title {
    font-size: 28pt;
    color: #000000;
  }
  .pcs-orgname {
    font-size: 10pt;
    color: #333333;
  }
  .pcs-customer-name {
    font-size: 9pt;
    color: #333333;
  }
 .pcs-itemtable-header {    
    color: #ffffff;
    background-color: #3c3d3a;
  }
  .pcs-itemtable-breakword {
    word-wrap: break-word;
  }
  .pcs-taxtable-header {
    font-size: 9pt;
    color: #000;
    background-color: #f5f4f3;
  }
  .itemBody tr {
    page-break-inside: avoid;
    page-break-after:auto;
  }
  .pcs-item-row {   
    border-bottom: 1px solid #adadad;
    background-color: #ffffff;
    color: #000000;
  }
  .pcs-item-sku {
    margin-top: 2px;
  	font-size: 10px;
  	color: #444444;
  }
  .pcs-item-desc {
      color: #727272;
      font-size: 9pt;
   }
  .pcs-balance {
    background-color: #f5f4f3;
    font-size: 9pt;
    color: #000000;
  }
  
  .itemBody{
	font-size:13px;  
  }
  .pcs-totals {
    font-size: 10pt;
    color: #000000;
    background-color: #ffffff;
  }
  .pcs-notes {
    font-size: 8pt;
  }
  .pcs-terms {
    font-size: 8pt;
  }
  .pcs-header-first {
	background-color: #ffffff;
	font-size: 9pt;
	color: #333333;
      height: auto;
	}

 .pcs-status {
 	color: ;
	font-size: 15pt;
	border: 3px solid ;
	padding: 3px 8px;
 }

 @page :first {
 	@top-center {
		content: element(header);
	}
    /*margin-top: 0.700000in;*/
  }

  .pcs-template-header {
	padding: 0 0.400000in 0 0.550000in;
    height: 0.700000in;
  }

/* Additional styles for RTL compat */

/* Helper Classes */

.inline {
  display: inline-block;
}
.v-top {
  vertical-align: top;
}
.text-align-right {
  text-align: right;
}
.rtl .text-align-right {
  text-align: left;
}
.text-align-left {
  text-align: left;
}
.rtl .text-align-left {
  text-align: right;
}

/* Helper Classes End */

.item-details-inline {
  display: inline-block;
  margin: 0 10px;
  vertical-align: top;
  max-width: 70%;
}

.total-in-words-container {
  width: 100%;
  margin-top: 10px;
}
.total-in-words-label {
  vertical-align: top;
  padding: 0 10px;
}
.total-in-words-value {
  width: 170px;
}
.total-section-label {
  padding: 5px 10px 5px 0;
  vertical-align: middle;
}
.total-section-value {
  width: 120px;
  vertical-align: middle;
  padding: 10px 10px 10px 5px;
}
.rtl .total-section-value {
  padding: 10px 5px 10px 10px;
}

.tax-summary-description {
  color: #727272;
  font-size: 8pt;
}

/* Overrides/Patches for RTL compat */
  .rtl th {
    text-align: inherit; /* Specifically setting th as inherit for supporting RTL */
  }
/* Overrides/Patches End */

     .lineitem-header {
       padding: 5px 10px 5px 5px;
       word-wrap: break-word;
     }
     .rtl .lineitem-header {
       padding: 5px 5px 5px 10px;
     }
     .lineitem-column {
       padding: 10px 10px 5px 10px;
       word-wrap: break-word;
       vertical-align: top;
     }
     .lineitem-content-right {
       padding: 10px 10px 10px 5px;
     }
     .rtl .lineitem-content-right {
       padding: 10px 5px 10px 10px;
     }
     .total-number-section {
       width: 45%;
       padding: 10px 10px 3px 3px;
       font-size: 9pt;
       float: left;
     }
     .rtl .total-number-section {
       float: right;
     }
     .total-section {
       width: 50%;
       float: right;
     }
     .rtl .total-section {
       float: left;
     }
</style>



<div class="pcs-template ">
	  <div class="pcs-template-header pcs-header-content" id="header">
    

    

  </div>

	<div class="pcs-template-body">
		<table style="width:100%;table-layout: fixed;">
      <tbody>
        <tr>
          <td style="vertical-align: top; width:50%;">
              <div>
             </div>
                <span class="pcs-orgname"><img src="https://earthsave.com.au/admin/assets/img/logo.png"></span><br><br>
                <span class="pcs-label">
                  <span id="tmp_org_address">
					
					  11 Hudson Road, Albion Qld 4010<br>
Phone 07 32625253<br>
E: info@earthsave.com.au<br>W: www.earthsave.com.au<br><br>

ROYAL SOLAR PTY LTD<br>
ABN: 71 166 569 375<br><br>

TRADING HOURS: 9AM - 5PM WEEKDAYS
					
					</span>
                </span>
          </td>
          <td style="width:50%;" class="text-align-right v-top">
              
             <span class="pcs-entity-title">Tax Invoice</span><br>
             <!--<span id="tmp_entity_number" style="font-size: 10pt;" class="pcs-label"><b>Invoice# <?php echo $invorowsw[3];?></b></span>-->
			  <br>
			  <table style="font-size:13px; float:right;width: 60%;table-layout: fixed;word-wrap: break-word;" border="0" cellspacing="0" cellpadding="0" >
                 <tbody>
					  <tr>
                         <td style="padding:5px 10px 5px 0px;" class="text-align-right">
							 <span class="pcs-label"><strong>Invoice #:</strong></span>
                        </td>
                        <td class="text-align-right">
                            <span id="tmp_entity_date"><?php echo $invorowsw[3];?></span>
                        </td>
                    </tr>
                     <tr>
                         <td style="padding:5px 10px 5px 0px;" class="text-align-right">
							 <span class="pcs-label"><strong>Invoice Date:</strong></span>
                        </td>
                        <td class="text-align-right">
                            <span id="tmp_entity_date"><?php echo $invorowsw[6];?></span>
                        </td>
                    </tr>                   
                    <tr>
                         <td style="padding:5px 10px 5px 0px;font-size: 10pt;" class="text-align-right">
							 <span class="pcs-label"><strong>Your Ref:</strong></span>
                        </td>
                        <td class="text-align-right">
                            <span id="tmp_due_date"><?php echo $invorowsw[4];?></span>
                        </td>
                    </tr>
                   

                 </tbody>
              </table>
			  
			  
            
    </td>
        </tr>
      </tbody>
     </table>

     <table style="clear:both;width:80%;margin-top:30px;table-layout:fixed;" align="center">
         <tbody><tr>
         <td style="width:60%;word-wrap: break-word;">
<div>
                     
	<span class="pcs-label"><strong>Billing Address</strong></span><br><br>       
	<span class="pcs-label"><?php echo $invorowsw[36];?></span><br>
	<span class="pcs-label"><?php echo $invorowsw[38];?></span><br>
	<span class="pcs-label"><?php echo $invorowsw[40];?></span>
            </div> 
         </td>
         <td style="vertical-align:bottom;width: 40%;">
              <span class="pcs-label"><strong>Shipping Address</strong></span><br><br> 
			  <span class="pcs-label"><?php echo $invorowsw[37];?></span><br>
			  <span class="pcs-label"><?php echo $invorowsw[39];?></span><br>
	          <span class="pcs-label"><?php echo $invorowsw[41];?></span>
			 
			 <!--<table style="font-size:13px; float:right;width: 100%;table-layout: fixed;word-wrap: break-word;" border="0" cellspacing="0" cellpadding="0" >
                 <tbody>
                     <tr>
                         <td style="padding:5px 10px 5px 0px;" class="text-align-right">
                            <span class="pcs-label">Invoice Date :</span>
                        </td>
                        <td class="text-align-right">
                            <span id="tmp_entity_date"><?php echo $invorowsw[6];?></span>
                        </td>
                    </tr>                   
                    <tr>
                         <td style="padding:5px 10px 5px 0px;font-size: 10pt;" class="text-align-right">
                            <span class="pcs-label">Your Ref:</span>
                        </td>
                        <td class="text-align-right">
                            <span id="tmp_due_date"><?php echo $invorowsw[4];?></span>
                        </td>
                    </tr>
                   

                 </tbody>
              </table>-->
         </td>
         </tr>
     </tbody></table>

  <table style="width:100%;margin-top:20px;table-layout:fixed;" class="pcs-itemtable" border="0" cellspacing="0" cellpadding="0">
    <thead>
        <tr style="height:32px;">
              <td style="padding: 5px 0px 5px 5px;width: 5%;text-align: center;" id=""  class="pcs-itemtable-header pcs-itemtable-breakword">
      #
    </td>
    <td style="padding: 5px 10px 5px 20px;width: ;text-align: left;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Product
    </td>
			<td style="padding: 5px 10px 5px 10px;width: ;text-align: left;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Product Description
    </td>
    <td style="padding: 5px 10px 5px 5px;width: 11%;text-align: left;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Qty
    </td>
    <td style="padding: 5px 10px 5px 5px;width: 11%;text-align: left;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Rate
    </td>
			 <td style="padding: 5px 10px 5px 5px;width: 11%;text-align: left;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Gst
    </td>
    <td style="padding: 5px 10px 5px 5px;width: 15%;text-align: right;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Amount
    </td>

        </tr>
     </thead>
     <tbody class="itemBody">
		 
		 
		 
		 <?php
       
        $invoprosql = "SELECT * FROM order_tbl WHERE invoice_no = '".$invorowsw[3]."'";
		$invoproque = mysql_query($invoprosql);

        $j = 1;
		while($row = mysql_fetch_array($invoproque)){
			
			
		$prosql = "SELECT * FROM products WHERE id = '".$row['product_id']."'";
		$proque = mysql_query($prosql);
		$prorow = mysql_fetch_array($proque);
			
		?>
		 
		 
		 
		 
		 
		 
        <tr>
          <td class="pcs-item-row" align="center"><?php echo $j; ?></td>
          <td class="pcs-item-row" style="padding: 5px 10px 5px 20px;"><?php echo $prorow['product_name']; ?></td>
		  <td class="pcs-item-row" style="padding: 5px 10px 5px 10px;"><?php echo $row['product_desc']; ?></td>
          <td class="pcs-item-row"><?php echo $row['product_qty']; ?></td>
          <td class="pcs-item-row"><?php echo $row['product_rate']; ?></td>
			<td class="pcs-item-row">
				<?php if($row['gst']=='yes'){?>
				GST
				<?php }?>
			
			</td>
            <td class="pcs-item-row lineitem-column lineitem-content-right text-align-right"><?php echo $row['total_amount']; ?></td>
        </tr>
		 
		 <?php $j++; } ?>
		 
		 
		 
		 
		 
		 
		 
		 
    </tbody>
  </table>
   <div style="width: 100%;margin-top: 1px;">
    <div class="v-top total-number-section" style="width:50%";>
    <div>
		
		<table class="pcs-totals" cellspacing="0" border="0" width="100%">
        <tbody>
          <tr>
                <td class="total-section-label text-align-left pcs-item-row ">Delivery Via:</td>
                <td id="tmp_subtotal" class="total-section-value text-align-right pcs-item-row">&nbsp;</td>
          </tr>
			<tr>
                <td class="total-section-label text-align-left pcs-item-row">Delivery Date:</td>
                <td id="tmp_subtotal" class="total-section-value text-align-right pcs-item-row">&nbsp;</td>
          </tr>
			
			</tbody>
		</table>
		
		
		
		</div>

    </div>
    <div class="v-top total-section" style="width:50%";>
      <table class="pcs-totals" cellspacing="0" border="0" width="100%">
        <tbody>
          <tr>
                <td class="total-section-label text-align-right">Sub Total</td>
                <td id="tmp_subtotal" class="total-section-value text-align-right">$<?php echo $invorowsw[12];?></td>
          </tr>
			
			<tr>
                <td class="total-section-label text-align-right">Freight(inc-GST):</td>
                <td id="tmp_subtotal" class="total-section-value text-align-right">$0:00</td>
          </tr>
			
			<tr>
                <td class="total-section-label text-align-right">GST:</td>
                <td id="tmp_subtotal" class="total-section-value text-align-right">
				
				<?php 
					//echo $gst = $invorowsw[12]*9.09/100;
//echo '<br>';
					echo $gstarray['gsttotal']*9.09/100;
						
					?>
				
				</td>
          </tr>

          <tr>
            <td class="total-section-label text-align-right"><b>Total</b></td>
            <td id="tmp_total" class="total-section-value text-align-right"><b>$<?php echo $invorowsw[13];?></b></td>
			</tr>
			
			<tr>
                <td class="total-section-label text-align-right">Paid to Date:</td>
                <td id="tmp_subtotal" class="total-section-value text-align-right">$<?php echo $invorowsw[15];?></td>
          </tr>


         

          <tr style="height:40px;" class="pcs-balance">
            <td class="total-section-label text-align-right"><b>Balance Due</b></td>
            <td id="tmp_balance_due" class="total-section-value text-align-right"><b>$<?php echo $totalinvoiceamount = $invorowsw[13]-$invorowsw[15];?></b></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="clear: both;"></div>
  </div>

  

  

    <div style="clear:both;margin-top:50px;width:100%;">
     
      <p style="margin-top: 7px;
    white-space: pre-wrap;
    word-wrap: break-word;
    border-bottom: 1px dashed #000;
    padding-bottom: 10px;
    text-align: center;
    font-size: 1em;" class="pcs-notes">This invoice is a payment claim made under the Building &amp; Construction Act 2004</p>
		<span style="text-align:center"><h4 style="border-bottom:1px dashed #000; padding-bottom:10px;"><strong>How to Pay</strong></h4></span>
		
		<table cellpadding="0" width="100%">
		<tr>
			
			<td width="33%" class="pcs-totals" align="center" style="padding:20px; border-right:1px dashed #ccc;"  valign="top">
				<span style="display:inline-block;"><img src="https://earthsave.com.au/admin/assets/img/envelop.png"></span><br><br>
			<span>
				<strong>By Mail</strong><br><br>
				Detach this section and mail your cheque to...<br>
				Earthsave<br>11 Hudson Road<br>Albion QLD 4010
				</span>
			</td>
			<td width="33%" class="pcs-totals" align="center" style="padding:20px; border-right:1px dashed #ccc;"  valign="top">
				<span style="display:inline-block;"><img src="https://earthsave.com.au/admin/assets/img/direct_deposit.png"></span><br><br>
				<span>
					<strong>Direct Deposit</strong><br><br>
					Please use your surname as<br>
					Name: Earthsave<br>BSB: 114 879<br>Account: 412456274			
				</span>		
				
				
				</td>
			<td width="33%" class="pcs-totals" align="center" style="padding:20px;" valign="top">
				<span style="display:inline-block;"><img src="https://earthsave.com.au/admin/assets/img/creditcard_phone.png"></span><br><br>
				<span>
					<strong>Credit Card By Phone</strong><br><br>
					Please call 32625253 with your credit card<br>
				No surcharge will be applied to deposits paid.<br>A surcharge will apply to balances<br>settled by Credit Card
				</span>
			</td>
			</tr>
		
		
		</table>	
    </div>




  </div>
	
<!--
    <div class="pcs-template-footer">
    <div>
      
    </div>  
  </div>
-->
	
	

</div>
</div>
  </div>
</div>
<!---->
    </div>
</div>
	</body>
</html>