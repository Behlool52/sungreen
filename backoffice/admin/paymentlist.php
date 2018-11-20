<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?>      
      
      
<div class="be-content">	
	
	
        <div class="main-content container-fluid">


          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Payment Received
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="payment_new.php">Add New Payment</a></li>
                     
                      
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover">
                      <thead>
                      <tr>

                        
                        <th style="width:10%;">Payment ID</th>
						<th style="width:20%;">Customer Name</th>
						<th style="width:10%;">Date</th>
                        <th style="width:15%;">Invoice No</th>
                        <th style="width:10%;">Mode</th>
                        <th style="width:10%;">Balanced Amount</th>
                        <th style="width:15%;"></th>
                      </tr>
                      </thead>
                      <tbody>
                      
					<?php while($pagerow = mysql_fetch_array($paymentque)){ 
						  
						 $queryy = "SELECT * FROM customer_info WHERE id = '".$pagerow['customer_id']."'";
						 $statementy = mysql_query($queryy);
 						 $resulty = mysql_fetch_array($statementy);  
						  
						  ?>	  
					  <tr>
                        <td class="cell-detail"> <span><?php echo $pagerow['id']; ?></span></td>
						   <td class="cell-detail"> <span><?php echo $resulty['first_name']; ?></span></td>
						  <td class="user-avatar cell-detail user-info">
							
							<?php echo $pagerow['created_date']; ?>
							
						  </td>
                        
                        <td class="cell-detail"><span><?php echo $pagerow['invoice_no']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['payment_mode']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['unused_amount']; ?></span></td>
                        <td class="actions">
                         <!-- <a href="clientedit.php?pageid=<?php echo $pagerow['id']; ?>" class="icon"><i class="mdi mdi-edit"></i></a>-->
							
							<a href="#0" class="icon cd-btn paymentdatafetch" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-edit"></i></a>
							
                           <a href="#" class="icon delpaymentdata" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-close-circle-o text-danger"></i></a>
							
                        </td>
                      </tr>
					<?php } ?>  
						  
                    

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
			  
			  
			  
			  
			<div class="cd-panel from-right">
				
				
				
			
				
		
				

		<div class="cd-panel-container">
			
			
			
			
			
			
			
			<div id="slider_header">	
					
				<div style="float:left; margin-left:20px; position:relative;" class="col-sm-5"><h3 class="invoicedata_id"></h3></div>
				<div style="float:right" class="col-sm-2">
					<div id="pull-right">
						<a href="" class="mdi mdi-edit"></a>
						<a href="" class="mdi mdi-print"></a>
						
						
					</div>
					
					<a href="#0" class="cd-panel-close">X</a>
				</div>			
				
			</div>
			
			<div style="clear:both"></div>
			
			
			
			<div class="scroll-y noscroll-x fill body scrollbox" style="height:100%; overflow:auto;">


<div class="transactions-details-band">
<!---->      <div class="grey-bg">
  <div class="comments-history">
<!---->    <ul class="list-unstyled">
          <li id="ember6841" class="ember-view"><div class="clearfix">
  <div class="date-section pull-left">
    <div class="font-xxs text-draft font-light">
        15 Dec 2017 08:19 PM
    </div>
  </div>
  <div class="comment-section pull-left">
    <p class="media">
      <div class="pull-left">
        <div class="txn-comment-icon circle-box">
         
        </div>
      </div>
      <div class="media-body">
        <div class="comment">
          <span class="description">Invoice created for <span class="invoicingamount"></span></span>
<!---->         
<!---->        </div>
      </div>
    </p>
  </div>
</div>
</li>
    </ul>
<!---->      <a data-ember-action="" data-ember-action-6842="6842">+ Add Comment</a>
  </div>
</div>

</div>

<!----><!---->

<!---->
<div class="details-page">
<!----><!----><!---->	<div style="margin-bottom:50px;" class="details-container clearfix ">
<!---->		<div id="ember1564" class="ember-view"><style media="all" type="text/css">
 

  @font-face {
    
   /* src: local(Open Sans), url(https://fonts.gstatic.com/s/opensans/v14/K88pR3goAWT7BTt32Z01m4X0hVgzZQUfRDuZrPvH3D8.woff2);*/
  }

  .pcs-template {
  	
    font-size: 11pt;
    color: #333333;
      background:  #ffffff ;
  }

  .pcs-header-content {
    font-size: 8pt;
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
      border-top: 1px solid #ece7e7;
  }

  .pcs-label {
    color: #777777;
  }
  .pcs-entity-title {
    font-size: 13pt;
    color: #333333;
  }
  .pcs-orgname {
    font-size: 15pt;
    color: #333333;
  }
  .pcs-customer-name {
    font-size: 12pt;
    color: #333333;
  }
 .pcs-itemtable-header {
    font-size: 11pt;
    color: #333333;
    background-color: #eff0f1;
  }
  .pcs-itemtable-breakword {
    word-wrap: break-word;
  }
  .pcs-taxtable-header {
    font-size: 11pt;
    color: #000;
    background-color: #f5f4f3;
  }
  .itemBody tr {
    page-break-inside: avoid;
    page-break-after:auto;
  }
  .pcs-item-row {
    font-size: 10pt;
    border-bottom: 1px solid #ece7e7;
    background-color: #ffffff;
    color: #333333;
	padding:10px;
  }
  .pcs-item-sku {
    margin-top: 2px;
  	font-size: 10px;
  	color: #444444;
  }
  .pcs-item-desc {
      color: #8e8e8e;
      font-size: 11pt;
   }
  .pcs-balance {
    background-color: #ffffff;
    font-size: 9pt;
    color: #333333;
  }
  .pcs-totals {
    font-size: 16pt;
    color: #ffffff;
    background-color: #78ae54;
  }
  .pcs-notes {
    font-size: 9pt;
  }
  .pcs-terms {
    font-size: 9pt;
  }
  .pcs-header-first {
	background-color: #ffffff;
	font-size: 8pt;
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
    margin-top: 0.700000in;
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

    .pcs-total {
      font-size: 16pt;
      color: #ffffff;
    }
    .pcs-payment-details-header {
      color: #333333;
      font-size: 15pt;
    }
    td .inner-container{
      border-left: 1px solid #ededed;
      padding-left: 20px;
    }
    .add-info td{
      width:24%;
      padding:20px 0;
      border-bottom:1px solid #ededed
    }
    .add-info td:last-child{
      width:auto;
    }
    .inner-container .pcs-label{
      font-weight:bold;
      font-size: 13px;
    }
    .add-info td:first-child .inner-container{
      border-left: none;
    }

</style>



<div style="font-size:11pt;" class="pcs-template">

    <div class="pcs-template-header pcs-header-content" id="header">
    

    

  </div>


  <div style="padding:0 35px;">

    <div style="padding-bottom:35px;border-bottom:1px solid #eee;width:100%;">
      <table>
        <tbody>
          <tr>
            <td style="vertical-align:top;padding-left:30px">
                <p><span class="pcs-orgname"><b>Earthsave</b><br></span></p>
                <span style="white-space: pre-wrap;color:#999;" id="tmp_org_address">Australia</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="padding:35px 0 50px;text-align:center">
      <span style="border-bottom:1px solid #eee;" class="pcs-entity-title">PAYMENT RECEIPT</span>
    </div>

    <div style="width: 70%;float: left;">

      <div style="width: 100%;padding: 11px 0;">
        <div style="width:35%;float:left;" class="pcs-label">Payment Date</div>
        <div style="width:65%;border-bottom:1px solid #eee;float:right;"><b class="paymentdate"></b></div>
        <div style="clear:both;"></div>
        </div>

        <div style="width: 100%;padding: 10px 0;">
        <div style="width:35%;float:left;" class="pcs-label">Reference Number</div>
        <div style="width:65%;border-bottom:1px solid #eee;float:right;min-height:22px"><b></b></div>
        <div style="clear:both;"></div>
      </div>

        <div style="width: 100%;padding: 11px 0;">
          <div style="width:35%;float:left;" class="pcs-label">Payment Mode</div>
          <div style="width:65%;border-bottom:1px solid #eee;float:right;"><b class="paymentmode"></b></div>
          <div style="clear:both;"></div>
        </div>





    </div>

    <div style="text-align:center;color:#ffffff;float:right;background:#78ae54;width: 25%; padding: 34px 5px;">
      <span>Balanced Amount</span><br>
      <span class="pcs-total paymentpay">   
      </span>
      </div><div style="clear:both;">
    </div>


    <div style="margin-top:50px">
      <table style="width:100%">
        <tbody>
          <tr>
            <td>
               <div>
				   <p class="pcs-label" id="tmp_billing_address_label" style="font-weight:600">Bill To</p>
                 <span style="display:block;" class="pcs-customer-name" id="zb-pdf-customer-detail">
					 <a href="#/contacts/1064347000000061041" id="customer_fullname"></a></span>
                 <span style="white-space: pre-wrap;" id="tmp_billing_address"></span>
              </div>
            </td>
            <td style="text-align: right;vertical-align:top">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
   
   <div style="page-break-inside: avoid;">
    <div class="add-info">
      <table style="width:100%">
        <tbody>
          <tr>
          </tr>
        </tbody>
      </table>
   </div>
  </div>

  <div style="margin-top:50px;page-break-inside: avoid;">
  <h4 class="pcs-payment-details-header" style="margin-bottom:18px;">Payment for</h4>

  <table style="width:100%;table-layout:fixed;" class="pcs-itemtable" border="0" cellspacing="0" cellpadding="0">
    <thead>
        <tr style="height:40px;">

            <td style="padding:5px 10px 5px 10px;word-wrap: break-word;" class="pcs-itemtable-header">
             Invoice Number
            </td>

            <td style="padding:5px 10px 5px 5px;word-wrap: break-word;" class="pcs-itemtable-header">
              Payment Date
            </td>

            <td style="padding:5px 10px 5px 5px;word-wrap: break-word;" class="pcs-itemtable-header">
              Amount Paid
            </td>


            <td align="right" style="padding:5px 10px 5px 5px;word-wrap: break-word;" class="pcs-itemtable-header">
               Payment Mode
            </td>

        </tr>
     </thead>
     <tbody class="paymentitemBody">
       
    </tbody>
    </table>
    </div>

    </div>
      <div class="pcs-template-footer">
    <div>
      
    </div>  
  </div>

  </div>

</div>
	</div>
	<div class="row">
		<div class="col-md-6">
<!---->  	</div>
		<div class="col-md-6 text-right">
    	Template : 'Elite Template'
    	<a data-ember-action="" data-ember-action-1565="1565">Change</a>
  	</div>
	</div>
<!----><!---->
<!---->
    <div>
      <h4>Payment History</h4>
      <table class="table">
        <tbody>
          <tr class="text-muted">
            <td style="width:25%">Date</td>
            <td style="width:75%">Description</td>
          </tr>
          <tr>
            <td>22 Dec 2017 10:20 AM</td>
            <td>
              Payment of amount $480.00 received and applied for INV-000006 <span class="text-muted">by behlool</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
<!---->
</div>
<!---->
<!---->
<!---->
<!---->
<!----><!----></div>
			
			
			
			
			
			
			
			
			
			
			
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel --> 
			  
			  
			  
			  
			  
          </div>


        </div>
      </div>
      
      
<?php include 'includes/footer.php'; ?>