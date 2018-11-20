</div>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
   <!-- <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>-->
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
   <!--<script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>-->
 

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    
    
    <script src="assets/lib/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="assets/lib/summernote/summernote-ext-beagle.js" type="text/javascript"></script>

   <script src="assets/lib/dropzone/dist/dropzone.js" type="text/javascript"></script>

	<script src="assets/js/custom-file-input.js"></script>

 <script src="assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js" type="text/javascript"></script>

<!-- datatables -->

    <script src="assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
<!-- datatables -->
    
    
    <script type="text/javascript">	
		
		$(document).ready(function(){
			$('#stcbtn').click(function(){
				
				$('.addstatusclass').removeClass('invoidforpost');
				$('.addstatusclass').addClass('stcidforpost');
				
			});
			
			
			
		});
		
		function scheduleA(event) {
    var qqtt = this.options[this.selectedIndex].value;
   alert(qqtt);
    $('.hiddenvalue').val(qqtt);
}
		
		
		function checkid(idd, orgid){		
			 
         var prodquantity  = document.getElementById(idd).value;
		 var product_price = document.getElementById('rate_'+orgid).value;	
			
			var totamount = prodquantity*product_price;
			
			$('#amount_'+orgid).val(totamount);
			
			
			
			var arr = document.getElementsByName('product_amount[]');
    			var tot=0;
    			for(var i=0;i<arr.length;i++){
        		if(parseInt(arr[i].value))
           		 tot += parseInt(arr[i].value);
    			}
			//alert(tot);
    			//document.getElementById('total').value = tot;
			
			
			$('#subtotal').text(tot);			
			$('#total').text(tot);
		}
		
		
		function checkidrt(idd, orgid){		
			 
         var prodrate  = document.getElementById(idd).value;
		 var product_qty = document.getElementById('qty_'+orgid).value;	
		 
		 
			
			var ptotamount = prodrate*product_qty;			
			$('#amount_'+orgid).val(ptotamount);
			
			
			
			
			var arr = document.getElementsByName('product_amount[]');
    			var tot=0;
    			for(var i=0;i<arr.length;i++){
        		if(parseInt(arr[i].value))
           		 tot += parseInt(arr[i].value);
    			}
			//alert(tot);
    			//document.getElementById('total').value = tot;
			
			
			$('#subtotal').text(tot);			
			$('#total').text(tot);
			
			
			
			
			
		}
		
		function checkprod(idd, orgid){		
			 
         var prodid = document.getElementById(idd).value;
        
			$.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/invoice/admin/getproductprice.php',
           data: { 
			   'prodid': prodid			  		
			},
           success: function(data)
           {
               
              //  console.log(data);
               // exit;
                prodresult = jQuery.parseJSON(data);
		        $('#rate_'+orgid).val(prodresult[0]);
				$('#desc_'+orgid).val(prodresult[1]);
			   
			   //console.log(data); // show response from the php script.
			   //alert('Success'); // show response from the php script.
			   //document.getElementById("rate_"+orgid).value = data;
           }
         });
          //document.getElementById("rate_"+orgid).value = chor;
		}
		
		
		function checkinv(idd, duetotal){
				console.log(duetotal);
			
			//var qquantity  = document.getElementById(idd).value;
			//alert(qquantity);
			
			var arr = document.getElementsByName('item_amount[]');
    			var tot=0;
			   
    			for(var i=0;i<arr.length;i++){
        		if(parseInt(arr[i].value))
           		 tot += parseInt(arr[i].value);
    			}
			
			$('.sumofallinvoices').text(tot); // sum of input boxes
			$('.amount_for_payment').text($('.sumofallinvoices').text());
			
			
				        $paying_amount  = $('.amount_for_payment').text();
						$totalamounttobepaid = $('.amount_received').text();
						 
						 $khulasa = $totalamounttobepaid - $paying_amount;
			
			
						 $('.amount_in_excess').html(result.sumofinvoices[1] - $('.amount_for_payment').text());
						
			
			
			 }
		
     $(document).ready(function(){
		 $("#finance_company").attr("disabled", "disabled");
		 //$('#based_on_invoice').hide();
		 $('.workorderform').hide();
         //$('#greendeal').hide();
		 
		 $varl = $('#invoice_no').val();
		 
		 if($varl!=''){
			$('.workorderform').show(); 
		 }
		 
		 $('#payment_mode').change(function(){
			if($(this).val()!='' && $(this).val()!='cash'){				
				$("#finance_company").removeAttr("disabled");				
			}else{
				 $("#finance_company").attr("disabled", "disabled");
			}
		 });



         $('#stc_platform').change(function(){

             $stcs = $(this).val();
             $inv = $('#invoice_no').val();

             if($inv!='' && $stcs=='green_deal'){
                 $('.workorderform').show();
                 $('#achievers').hide();
                 $('#emerging').hide();
                 $('#greendeal').show();
				 $('#deal_invoice').val($('#invoice_no').val())
                 $('#workorder_invoice').val($inv);
                 $('.workorderform').attr('id',$('#invoice_no').val());

             }else if($inv!='' && $stcs=='achievers_energy'){
                 $('.workorderform').show();
                 $('#greendeal').hide();
                 $('#emerging').hide();
                 $('#achievers').show();
				 $('#achievers_invoice').val($('#invoice_no').val())
                 $('#workorder_invoice').val($inv);
                 $('.workorderform').attr('id',$('#invoice_no').val());
             }
             else if($inv!='' && $stcs=='emerging_energy'){
                 $('.workorderform').show();
                 $('#greendeal').hide();
                 $('#achievers').hide();
                 $('#emerging').show();
				 $('#deal_invoice').val($('#invoice_no').val())
                 $('#workorder_invoice').val($inv);
                 $('#stc_invoice').val($('#invoice_no').val());
                 $('.workorderform').attr('id',$('#invoice_no').val());
             }
         });
		 
		 
		 /*
		 $('#invoice_no').change(function(){
			if($(this).val()!=''){
				 $('.workorderform').show();
				$('.workorderform').attr('id',$('#invoice_no').val())
				$('#workorder_invoice').val($('#invoice_no').val())
				$('#stc_invoice').val($('#invoice_no').val())
				$('#deal_invoice').val($('#invoice_no').val())
				
				
				
			}else{
				 $('.workorderform').hide();
			}
		 });
		 */
		
		 
		 
		 
		 $('#customer_id').change(function(){
		 
			  if($('#customer_id').val()){
    		    $('#form_mask').removeClass('form_mask');
				} else{
				$('#form_mask').addClass('form_mask');	
				}
			 
		 });
		 
		 $('#users_id').change(function(){
		 
			  if($('#users_id').val()){
    		    $('#form_mask').removeClass('form_mask');
				} else{
				$('#form_mask').addClass('form_mask');	
				}
			 
		 });
		 
		 
		 
		 
//======================= Add Invoice Data ====================================

$('.gst').on('click', function () {
    $(this).val(this.checked ? 1 : 0);
    console.log($(this).val());
});


$("#add_invoice").submit(function(e) {  				
 e.preventDefault();
	//e.preventDefault();	
	
	
   var product = [];
   var product_desc = [];
   var product_qty = [];
   var product_rate = [];
   var product_discount = [];
   var gst = [];
   var product_amount = [];
  // var eteraz = '';
	var m_data = new FormData();
   
	
   $('select[name="product_name[]"]').each(function(){
    	product.push($(this).val());    
   });
   
   $('input[name="desc[]"]').each(function(){
    	product_desc.push($(this).val());    
   });	
	
	$('input[name="product_qty[]"]').each(function(){
    	product_qty.push($(this).val());    
   });
	
	$('input[name="product_rate[]"]').each(function(){
    	product_rate.push($(this).val());    
   });
   
   
   $('select[name="gst[]"]').each(function () {
    gst.push($(this).val());
   });
   
   	
	$('input[name="product_discount[]"]').each(function(){
    	product_discount.push($(this).val());    
   });   
   
	
	$('input[name="product_amount[]"]').each(function(){
    	product_amount.push($(this).val());    
   });
	
	
	//$('input[name="attachment1"]').each(function(){
		//eteraz.push($(this).val().replace(/C:\\fakepath\\/i, ''));
	//});
	          

	//return false;
	
	          
            m_data.append( 'customer_id', $('#customer_idd').val());
            m_data.append( 'invoice_no', $('#invoice_no').val());
            m_data.append( 'order_no', $('#order_no').val());
			m_data.append( 'payment_mode', $('#payment_mode').val());
			m_data.append( 'finance_company', $('#finance_company').val());
            m_data.append( 'stc_platform', $('#stc_platform').val());
            m_data.append( 'invoice_date', $('#invoice_date').val());
            m_data.append( 'invoice_terms', $('#invoice_terms').val());
            m_data.append( 'due_date', $('#due_date').val());
	 		m_data.append( 'lead_person', $('#lead_person').val());
			m_data.append( 'sale_person', $('#sale_person').val());
			m_data.append( 'electrician', $('#electrician').val());
	 		m_data.append( 'product_name', product);
			m_data.append( 'product_desc', product_desc);
	 		m_data.append( 'product_qty', product_qty);
	 		m_data.append( 'product_rate', product_rate);
			m_data.append( 'gst', gst);
	 		m_data.append( 'product_discount', product_discount);
	 		m_data.append( 'product_amount', product_amount);
			m_data.append( 'customer_notes', $('#customer_notes').val());
			m_data.append( 'terms_conditions', $('#terms_conditions').val());
		    m_data.append( 'subtotal', $('#subtotal').text());
	 		m_data.append( 'total', $('#total').text());                
	       // m_data.append( 'file_attach', $('input[name=attachment1]')[0].files[0]);
	        

    $.ajax({           
           url: 'https://sungreen.com.au/invoice/admin/add_invoice.php',
           data: m_data,
		   processData: false,
           contentType: false,
		   type: "POST",
		   //dataType:'json',
           success: function(response){

                console.log(response);		   
			   
			   var json = $.parseJSON(response);
			 
			   if(json.status == 'success'){ //load json data from server and output message 
				    window.location.href = 'https://sungreen.com.au/invoice/admin/invoicelist.php?msg=success';
                    $('#msg').text('Invoice Created Successfully!');
                }else if(json.status == 'dataduplicate'){ //load json data from server and output message 
				    window.location.href = 'https://sungreen.com.au/invoice/admin/invoicelist.php?msg=error';
                    $('#msg').text('Invoice No. already exist!');
                }
				else{
                    output = '<div class="error">'+response.text+'</div>';
                }
              
              }
         });

   // e.preventDefault(); // avoid to execute the actual submit of the form.
});
		 
		 
		 
//======================= End Adding Invoice Data =============================		 


//======================= Add Panels ==========================================//

$(".add_panels").click(function(e) { 

				
 	cli_id = $(this).attr("id"); 
   var serials = [];
   
  // console.log(serials); 

	var s_data = new FormData();
	
	$('#frm_'+cli_id+' input[name="serials[]"]').each(function(){
    	serials.push($(this).val());    
   });	

     s_data.append( 'invoice_no', cli_id);           
	 s_data.append( 'serials', serials);	 		
	        

     $.ajax({           
           url: 'https://sungreen.com.au/invoice/admin/add_panels.php',
           data: s_data,
		   processData: false,
           contentType: false,
		   type: "POST",		  
           success: function(response){	
			  // console.log(response);
			 //  $('input[name="serials[]"]').val('');
			  var json = $.parseJSON(response);
			 
			   if(json.status == 'success'){ //load json data from server and output message 
				    window.location.href = 'https://designsintellect.com.au/invoice/invoicelist.php?msg=success';
                    $('#msg').text('Panels has been Serialized');
                }else{
                    output = '<div class="error">'+response.text+'</div>';
                }
              
              }
  
});

});
//===================== End Add Panels ==========================================//	

	 
		 
//======================= Edit Invoice Data ====================================


$("#edit_invoice").submit(function(e) {  				
 e.preventDefault();
	//e.preventDefault();	
	
	
   var product = [];
   var product_desc = [];
   var product_qty = [];
   var product_rate = [];
   var gst = [];
   var product_discount = [];
   var product_amount = [];
  // var eteraz = '';
	var m_data = new FormData();
   
	
   $('select[name="product_name[]"]').each(function(){
    	product.push($(this).val());    
   });	
   
   $('input[name="desc[]"]').each(function(){
    	product_desc.push($(this).val());    
   });
	
	$('input[name="product_qty[]"]').each(function(){
    	product_qty.push($(this).val());    
   });
	
	$('input[name="product_rate[]"]').each(function(){
    	product_rate.push($(this).val());    
   });
   
   
    $('select[name="gst[]"]').each(function () {
    gst.push($(this).val());
   });
	
	$('input[name="product_discount[]"]').each(function(){
    	product_discount.push($(this).val());    
   });
	
	$('input[name="product_amount[]"]').each(function(){
    	product_amount.push($(this).val());    
   });
	
	
	//$('input[name="attachment1"]').each(function(){
		//eteraz.push($(this).val().replace(/C:\\fakepath\\/i, ''));
	//});
	          

	//return false;
	
	          
            m_data.append( 'idd', $('#idd').val());
			m_data.append( 'orginvo', $('#orginvo').val());
			m_data.append( 'customer_id', $('#customer_idd').val());
            m_data.append( 'invoice_no', $('#invoice_no').val());
            //m_data.append( 'order_no', $('#order_no').val());
            m_data.append( 'invoice_date', $('#invoice_date').val());
            //m_data.append( 'invoice_terms', $('#invoice_terms').val());
            m_data.append( 'payment_mode', $('#payment_mode').val());
            m_data.append( 'finance_company', $('#finance_company').val());
            m_data.append( 'stc_platform', $('#stc_platform').val());
            m_data.append( 'application_number', $('#application_number').val());
            m_data.append( 'due_date', $('#due_date').val());
	 		m_data.append( 'lead_person', $('#lead_person').val());
			m_data.append( 'sale_person', $('#sale_person').val());
			m_data.append( 'electrician', $('#electrician').val());
	 		m_data.append( 'product_name', product);
			m_data.append( 'product_desc', product_desc);
	 		m_data.append( 'product_qty', product_qty);
	 		m_data.append( 'product_rate', product_rate);
			m_data.append( 'gst', gst);
	 		m_data.append( 'product_discount', product_discount);
	 		m_data.append( 'product_amount', product_amount);
			m_data.append( 'customer_notes', $('#customer_notes').val());
			m_data.append( 'terms_conditions', $('#terms_conditions').val());
		    m_data.append( 'subtotal', $('#subtotal').text());
	 		m_data.append( 'total', $('#total').text());                

	        m_data.append( 'file_attach', $('input[name=attachment1]')[0].files[0]);
	        

    $.ajax({           
           url: 'https://sungreen.com.au/dev/backoffice/admin/edit_invoice_data.php',
           data: m_data,
		   processData: false,
           contentType: false,
		   type: "POST",
		   //dataType:'json',
           success: function(response){	
			  console.log(response);
			  //return false;
			   var json = $.parseJSON(response);
			 
			   if(json.status == 'success'){ //load json data from server and output message 
				    window.location.href = 'https://sungreen.com.au/dev/backoffice/admin/invoicelist.php?msg=success';
                    $('#msg').text('Invoice has been updated Successfully!');
                }else{
                    output = '<div class="error">'+response.text+'</div>';
                }
               // $("#contact_form #contact_results").hide().html(output).slideDown();
              }
         });

   // e.preventDefault(); // avoid to execute the actual submit of the form.
});
		 
		 
		 
//======================= End Editing Invoice Data =============================			 
		 
		 
//======================= Add Customer Data ====================================
		 
		 


$("#addclient").submit(function(e) {   				

    $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/add_customer.php',
           data: { 
     				'formedit': 'add',
			        'first_name': $('#first_name').val(),
			        'last_name': $('#last_name').val(),
			        'company': $("#company").val(),
			   		'email': $("#email").val(),
			        'phone': $("#phone").val(),
			        'mobile': $("#mobile").val(),
			        'website': $("#website").val(),
			        'billing_address': $("#billing_address").val(),
			        'billing_city': $("#billing_city").val(),
			   		'billing_state': $("#billing_state").val(),
			   		'billing_zip': $("#billing_zip").val(),

			   		'billing_country': $("#billing_country").val(),
			   		'billing_fax': $("#billing_fax").val(),
			   		'shipping_address': $("#shipping_address").val(),
			        'shipping_city': $("#shipping_city").val(),
			   		'shipping_state': $("#shipping_state").val(),
			   		'shipping_zip': $("#shipping_zip").val(),
			   		'shipping_country': $("#shipping_country").val(),
			   		'shipping_fax': $("#shipping_fax").val(),
			        'remarks': $("#remarks").val()			   
			  		
			},
           success: function(data)
           {
		   
		    //console.log(data); // show response from the php script.
		    //return false;
			if(data == 1){
			alert('Client already exist');
			return false;
			}


			
			 alert('Success'); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
		 
		 
		 
//======================= End Adding Customer Data =============================		 
		 
			 
		 
		 
		 
		 
		 
////=========== Invoice_Payment		 
		 
		 
		 
		 
//======================= Add Invoice Payment Data ====================================
		 
		 


$("#invoice_payment").click(function(e) { 
	
	
	var item_amount = [];
	var item_amount_id = [];
	var totvalue = [];
	var totdues = [];




	$('input[name^="item_amount"]').each(function(){     



	//console.log($(this).val());

if($(this).val()!=''){

	    item_amount.push($(this).val());
        item_amount_id.push($(this).attr('id'));
        //totvalue.push($(this).val());
        //totdues.push($(this).val());
		totvalue.push($(this).next().val());
		totdues.push($(this).next().next().val());

}
          
	
		
   });



//console.log(item_amount +"-" + item_amount_id +"-" + behlool +"-" + mustafa);
//return false;
	
	//$('input[name="totval[]"]').each(function(){
    	//totvalue.push($(this).val());		
   //});
	
	//$('input[name="totvaldues[]"]').each(function(){
    	//totdues.push($(this).val());		
  // });
	
	
	$.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/update_invoice.php',
           data: { 
     				//'formedit': 'add',
			        'customer_id': $('#customer_id').val(),
			        'item_amount': item_amount,
			        'item_amount_id': item_amount_id,
			        'totvalue': totvalue,
			        'totdues': totdues,
			        'payment_date': $('#payment_date').val(),
			        'payment_mode': $('#payment_mode').val()
			   
			   
			},
           success: function(data)
           {
              console.log(data); // show response from the php script.
			  alert('Success'); // show response from the php script.
			  window.location.href = 'paymentlist.php';
           }
         });

	
    e.preventDefault(); // avoid to execute the actual submit of the form.
	
	
});
		 
		 
		 
//======================= End Invoice Payment Data =============================	
	
		 
	 var row_id = 0;
	 var out;
	 $(document).on('click', '.add', function(){
		  
  var html = '';
  html += '<tr>';
  html += '<td><select name="product_name[]" id="product_'+row_id+'" onchange="checkprod(this.id, '+row_id+')" class="abc form-control item_unit input-xs"><option value="">Select Unit</option><?php echo fill_unit_select_box($out); ?></select></td>';
 html += '<td><input type="text" id="desc_'+row_id+'" name="desc[]" class="form-control item_name input-xs" /></td>';
  html += '<td><input type="text" id="qty_'+row_id+'" onblur="checkid(this.id, '+row_id+')" name="product_qty[]" class="form-control item_name input-xs" /></td>';
  html += '<td><input type="text" id="rate_'+row_id+'" onblur="checkidrt(this.id, '+row_id+')" name="product_rate[]" class="form-control item_rate input-xs" /></td>';    
html += '<td><select name="gst[]" id="gst_'+row_id+'" class="form-control item_unit input-xs"><option value="none">Select Unit</option><option value="yes">Yes</option><option value="no">No</option></select></td>'; 
  html += '<td><input type="text" name="product_discount[]" class="form-control item_rate input-xs" /></td>';  
  html += '<td><input type="text" id="amount_'+row_id+'" name="product_amount[]" class="form-control item_amount input-xs" /></td>';   		 
  html += '<td><button type="button" name="remove" class="mdi mdi-minus remove"></button></td>';
  html += '</tr>';
	row_id++;
   
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 }); 
 
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });		 
	 


	 	 
 //=============================
		 
		 
	
	$('.datafetch').click(function(){		
		$cli_id = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getcustomerdata.php',    //the script to call to get data          
      data: {'clientid': $cli_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		    //console.log(data[1]);
       // $id = data[0];              //get id
      //  $vname = data[1];           //get name
		 result = jQuery.parseJSON(data);
		 console.log(result);
		 
		  
		  $('#client_name').text(result.customerinfo[1]+' '+result.customerinfo[2]);
		  $('#client_email').text(result.customerinfo[4]);
		  $('#client_billing_address').text(result.customerinfo[8]);
		  $('#client_billing_city').text(result.customerinfo[10]);
		  $('#client_billing_state').text(result.customerinfo[12]);
		  $('#client_billing_zip').text(result.customerinfo[14]);
		  $('#client_billing_country').text(result.customerinfo[16]);
		  $('#outstanding_receivables').text(result.customerinvoiceinfo[0]);
		  $('#first_name').val(result.customerinfo[1]);
		  $('#last_name').val(result.customerinfo[2]);
		  $('#email').val(result.customerinfo[4]);
		  $('#phone').val(result.customerinfo[5]);
		  $('#mobile').val(result.customerinfo[6]);
		  $('#clid').val(result.customerinfo[0]);
	
      } 
    });	
	});
	
	
	
	
//======================== End Customer Data fetch ==================================		 

//======================== Panel fetch ================

$('.panelfetch').click(function(){
		
		$invo_id = $(this).attr("id");
		$('#invoiceid_panel').val($invo_id);
		
		
		
		$.ajax({  
			type : 'POST',
			url: 'https://sungreen.com.au/dev/backoffice/admin/getpaneldata.php',    //the script to call to get data          
			data: {'invoiceid': $invo_id},  
			success: function(data)          
			{
				
				console.log(data);
				$('#invoiceid_panel').val(data);
	        // console.log(data);
			 //result = jQuery.parseJSON(data);
			 //$res = result.general[0].serials;
			 
			 
			// var ccnt = 1;
			// $.each($res, function (index, obj) { 
			 
			 
			  // var html = '';
 			 		//html += '<tr>';  
 					// html += '<td><input type="text" id="serials_'+ccnt+'" name="serials[]" class="form-control item_name input-xs" /></td>';    		 
  					//html += '<td><button type="button" name="remove" class="mdi mdi-minus remove2"></button></td>';
  					//html += '</tr>';
					//ccnt++;
   
  				//$('#serialized_table').append(html);			 			   
			   
                   
            //}); 	
			 
			 
			}
	  });



	  
});	
//========================= panel fetch ends ===========
	 
		 
	$('.invoicedatafetch').click(function(){	
		
		$('.itemBody').html('');
		$invo_id = $(this).attr("id");			
		
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getinvoicedata.php',    //the script to call to get data          
      data: {'invoiceid': $invo_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		 
		 //console.log(data);   
		 
		 
		  result = jQuery.parseJSON(data);
		  console.log(result);
		// console.log(result);
		// exit;
		  
		  $('.invoicedata_id').text(result.general[3]);
		  $('#editinvoc').attr("href", 'edit_invoice.php?invoid='+result.general[3]+'');
		  $('#printinvoice').attr('href','https://earthsave.com.au/invoice/invoice.php?invoiceid='+result.general[3]+'');
		  $('.invodit').attr('id', result.general[3]);
		  $('#invoiceidforpopup').attr('id', result.general[3]);
		  $('.invoidforpost').attr('id', result.general[3]);
		  $('.stcidforpost').attr('id', result.general[3]);
		  $('.workldidforpost').attr('id', result.general[3]);
		  
		  $('.customerdata').text(result.general[1]);
		  $('.ordernodata').text(result.general[4]);
		  $('.billing_address').text(result.general[24]);
		  $('.invoice_date').text(result.general[6]);
		  $('.customer_name').text(result.general[28] + ' '+ result.general[29]);
		  $('.customeraddress').text(result.general[36] + ' '+ result.general[38] + ' '+ result.general[40]);
		  $('.due_date').text(result.general[7]);
		  
		  $('.subtotal').text(result.general[12]);
		  $('.total').text(result.general[13]);
		  $('.balance_due').text(result.cutprice);
		  $('.paidtodate').text(result.general[15]);
		  
		  if(result.general[16]=='draft'){
		  	$('.ribbon-draft').removeClass('status_yellow');
		  	$('.ribbon-draft').addClass('status_gray');
		 	 $('.status_gray').text(result.general[16]);
		  }
		  if(result.general[16]=='Sent'){
		  	$('.ribbon-draft').removeClass('status_yellow');
			$('.ribbon-draft').removeClass('status_gray');
			$('.ribbon-draft').removeClass('status_green');
		  	$('.ribbon-draft').addClass('status_blue');
		 	 $('.status_blue').text(result.general[16]);
		  }
		  
		  if(result.general[16]=='Paid'){
		  	$('.ribbon-draft').removeClass('status_yellow');
			$('.ribbon-draft').removeClass('status_gray');
		    $('.ribbon-draft').removeClass('status_blue');
		  	$('.ribbon-draft').addClass('status_green');
		 	 $('.status_green').text(result.general[16]);
		  }
		  
		   if(result.general[16]=='Partially Paid'){
		  	$('.ribbon-draft').removeClass('status_yellow');
			$('.ribbon-draft').removeClass('status_gray');
		    $('.ribbon-draft').removeClass('status_blue');
		  	$('.ribbon-draft').addClass('status_green');
		 	 $('.status_green').text(result.general[16]);
		  }
		  
		  $('.gsttotal').text(result.gst);
		  //else
		 // {
		  //	$('.ribbon-draft').removeClass('status_gray');
		  //	$('.ribbon-draft').addClass('status_yellow');
		  //	$('.status_yellow').text(result.general[16]);  
		 // }
		  
		   $.each(result.products, function (index, obj) { 			   
			   
                         var html = '';
  							html += '<tr>';
  							html += '<td> ' + obj.id + '</td>';
  							html += '<td> ' + obj.product_id + '</td>';
							html += '<td> ' + obj.product_desc + '</td>';
  							html += '<td>' + obj.product_qty + '</td>';
  							html += '<td>' + obj.product_rate + '</td>';
							html += '<td>' + obj.gst + '</td>';							
  							html += '<td align=right>' + obj.total_amount + '</td></tr>';			   
			   
  				$('.itemBody').append(html);
            }); 		  
		  
		  
	
      } 
    });	
		
	});
		 
		 
//======================== End Customer Data fetch ==================================		 
	
	$('.paymentdatafetch').click(function(){	
		
		$('.paymentitemBody').html('');
		$invo_id = $(this).attr("id");			
		
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getpaymentdata.php',    //the script to call to get data          
      data: {'paymentid': $invo_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		 
		 console.log(data);   
		 
		 
		  result = jQuery.parseJSON(data);

		 // console.log(result);
		// console.log(result);
		// exit;
		  
		  $('.paymentdate').text(result.general[8]);
		  $('.paymentmode').text(result.general[4]);
		  $('.invoicedata_id').text(result.general[3]);
		  $('.invoicingamount').text(result.general[5]);
		  $totres = result.general[5] - result.general[6];
		  $('#tmp_billing_address').text(result.general[17]);
		   $('#customer_fullname').text(result.general[11]);
		  
		  $('.paymentpay').text(result.general[7]);
		  $('.ordernodata').text(result.general[4]);
		  $('.billing_address').text(result.general[24]);
		  $('.invoice_date').text(result.general[5]);
		  $('.customer_name').text(result.general[17]);
		  $('.due_date').text(result.general[7]);
		  
		  $('.subtotal').text(result.general[9]);
		  $('.total').text(result.general[10]);
		  $('.balance_due').text(result.general[10]);
		  
		  
		  
		   $.each(result.products, function (index, obj) { 
			   
			   
			   
			   
	   
                         var html = '';
  							html += '<tr>';
  							html += '<td  class=pcs-item-row> ' + obj.invoice_no + '</td>';
  							html += '<td  class=pcs-item-row> ' + obj.invoice_date + '</td>';
  							html += '<td  class=pcs-item-row>' + obj.total + '</td>';
  							html += '<td  class=pcs-item-row align=right>' + obj.payment + '</td></tr>';     		 
  										   
			   
  				$('.paymentitemBody').append(html);
            }); 		  
		  
		  
	
      } 
    });	
		
	});		 
		 
//==============================  End Invoice Data Fetch ==============================		 
		 
	
		 
		  $('#customer_id').change(function(){
			  $('.paymentitemBody').html('');
			  $invo_id = $(this).val();			  
			 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/getcustomerinvoicedata.php',    //the script to call to get data          
      			data: {'customerinvoicesid': $invo_id},  //you can insert url argumnets here to pass to api.php
      			success: function(data)          //on recieve of reply
     				 {
						// console.log(data);
						// exit;
		  			result = jQuery.parseJSON(data);
					console.log(result);	 
						 
					 $.each(result.invoices, function (index, obj) { 			   
			   
                         var html = '';
  							html += '<tr>';
  							html += '<td> ' + obj.invoice_date + '</td>';
  							html += '<td> ' + obj.invoice_no + '</td>';
  							html += '<td>' + obj.sub_total + '</td>';
  							html += '<td>' + obj.balance_due + '</td>';     		 
  							html += '<td align=right><input type="text" id='+obj.invoice_no+' onblur="checkinv(this.id, '+obj.balance_due+' )" name="item_amount[]" class="form-control item_amount input-xs" /><input type="hidden" name="totval[]" value='+ obj.sub_total +'><input type="hidden" name="totvaldues[]" value='+ obj.balance_due +'></td></tr>';			   
			   
  				$('.paymentitemBody').append(html);
				
				
						 
						 $('.amount_received').text(result.sumofinvoices[0]);	
						
						 
					
						 // $('.amount_in_excess').html($khulasa);
			// $('.amount_received').text(result.sumofinvoices[0]);
						 
						 
						 
						 
            }); 
					 
						// $('.sumofallinvoices').text(tott);
						 
	 				 }
			 });  		 
		 });
		 
		 	
		 
		 
		 
		 
		 
//=============================== End Payment Data Fetch ===================================		 
		 
		 
		 
		 
	 $('.cd-btn').on('click', function(event){
		event.preventDefault();
		$('.cd-panel').addClass('is-visible');
	});
	//clode the lateral panel
	$('.cd-panel').on('click', function(event){
		if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
			$('.cd-panel').removeClass('is-visible');
			event.preventDefault();
		}
	});
		 
		 
		 
		 $('#editor1').summernote({
            onImageUpload: function (files, editor, welEditable) {
               var formData = new FormData();
				console.log('behlool');
            formData.append("file", files[0]);

            $.ajax({
                url: "http://earthsave.com.au/images",
                data: formData,
                type: 'POST',
                cache: false,
                contentType: false,
                processData: false,
                success: function (imageUrl) {
                    if (!imageUrl) {
                        debugger;
                        // handle error
                        return;
                    }
                    editor.insertImage($editable, imageUrl);
                },
                error: function () {
                    // handle error
                }
            });            
            }
        });
		 
		 
		 
		 
		 
	 $("#idForm").submit(function(e) {  
		

    

		 var vv_data = new FormData();	 
			 
			vv_data.append( 'page_title', $('#page_title').val());
            vv_data.append( 'page_slug', $('#page_slug').val());



            vv_data.append( 'slider', $('.pageslider:checked').val());
			vv_data.append( 'featuredimge', $('.featuredimge:checked').val());
		    vv_data.append( 'headerpic', $('input[name=headerpic]')[0].files[0]);
		    vv_data.append( 'page_order', $('#page_order').val());
		    vv_data.append( 'parentpage', $('#parentpage').val());		 
		    vv_data.append( 'childpage', $('.childpage:checked').val());
		    vv_data.append( 'getdata', $('.note-editable').val());
		    vv_data.append( 'pageactive', $('.pageactive:checked').val());
		
		 
		 
		 $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/getdata.php',
		   data: vv_data,
		   processData: false,
		   contentType: false,           
           success: function(data)
           {
               console.log(data);
			   alert('Success'); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});


//=============================== SEND INVOICE STATUS BY ELECTRICIAN ====================
	
	  
	
	$('.cecinvoidforstatus').click(function(){
		
		
	 var coc_data = new FormData();	 
			 
			coc_data.append( 'invoiceid', $('.cecinvoidforstatus').attr("id"));   
		    coc_data.append( 'cocpic', $('input[name=cocpic]')[0].files[0]);
		  
		
	//$invoice_id = $(this).attr("id");		
	//$cocpic = $('input[name=cocpic]')[0].files[0];
	

		
		 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/getcecdata.php',    //the script to call to get data          
      			data: coc_data,
				processData: false,
		        contentType: false,  
      			success: function(data)          //on recieve of reply
     				 {
					 console.log(data);
					 alert('CES/COC has been added successfully.'); // show response from the php script.	
					 }
			 }); 
	});		 	 
	
//================================== END INVOICE STATUS BY ELECTRICIAN =========================







		 
		 
		 //======================== edit form =============================//
		 
		 
		 $("#editform").submit(function(e) {
			// alert('edit clicked');
			 
		var v_data = new FormData();	 
			 
			v_data.append( 'formedit', 'edit');
            v_data.append( 'page_id', $('#page_id').val());
            v_data.append( 'page_title', $('#page_title').val());
			v_data.append( 'page_slug', $('#page_slug').val()); 
            v_data.append( 'slider', $(".pageslider:checked").val());
            v_data.append( 'featuredimge', $(".featuredimge:checked").val());           
			v_data.append( 'headerpic', $('input[name=headerpic]')[0].files[0]);
			v_data.append( 'featured_exist', $('#featured_exist').val());
	 		v_data.append( 'page_order', $('#page_order').val()); 
			v_data.append( 'parentpage', $('#parentpage').val());
			v_data.append( 'childpage', $(".childpage:checked").val());
			v_data.append( 'getdata', $('.note-editable').html());
			v_data.append( 'pageactive', $(".pageactive:checked").val());
			 
			 

    	$.ajax({
        	url: 'https://sungreen.com.au/dev/backoffice/admin/getdata.php',
			/*data: { 
     				'formedit': 'edit',
			        'page_id': $('#page_id').val(),
			        'page_title': $('#page_title').val(),
			        'page_slug': $('#page_slug').val(),			   
			        'slider': $(".pageslider:checked").val(),
			   		'featuredimge': $(".featuredimge:checked").val(),
					'headerpic': $('input[name=headerpic]')[0].files[0],
			  		'page_order': $("#page_order").val(),
			   		'parentpage': $("#parentpage").val(),
			   		'childpage': $(".childpage:checked").val(),			   
			   		'getdata': $('.note-editable').html(),
			        'pageactive': $(".pageactive:checked").val()
			},*/
			data: v_data,
			processData: false,
			contentType: false,
			type: "POST",
			//dataType:'json',           
            success: function(data)
           {
               //console.log(data);
			   alert('Data has been edit successfully'); // show response from the php script.
			   //console.log(data);
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
		 
		 
//=====================================  Category Edit ==============================
		 
		  //======================== edit form =============================//
		 
		 
		 $("#editcatform").submit(function(e) { 
			 
			 

    $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/getdata.php',
           data: { 
     				'formedit': 'catedit',
			        'cat_id': $('#cat_id').val(),
			        'cat_title': $('#cat_title').val(),
			        'cat_slug': $('#cat_slug').val(),
			        'cat_order': $('#cat_order').val(),
			   		'cat_active': $(".catactive:checked").val()
			  		
			},
           success: function(data)
           {
               alert('success'); // show response from the php script.
			   //console.log(data);
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
		 
		 
//====================================== End Category Edit ============================	 

		 
//=============================== same as billing ==================
		 
		  $("#billing_info").click(function() { 
			  
			  $('#shipping_address').val($('#billing_address').val());
			  $('#shipping_city').val($('#billing_city').val());
			  $('#shipping_state').val($('#billing_state').val());
			   $('#shipping_zip').val($('#billing_zip').val());
			  $('#shipping_country').val($('#billing_country').val());
			  $('#shipping_fax').val($('#billing_fax').val());
			  
		  });
		 
//==================================end same as billing==============	
		 
		 
//======================= Add Product ====================================
		 
		 


$("#addproduct").submit(function(e) {   				

    $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/invoice/admin/add_product.php',
           data: { 
     				'formedit': 'add',
			        'product_name': $('#product_name').val(),
			        'product_rate': $('#product_rate').val(),
			        'in_stock': $("#in_stock").val(),
			   		'prod_desc': $("#product_desc").val(),
			        'active': 1	       
			        
			  		
			},
           success: function(data)
           {
              // console.log(data); // show response from the php script.
			   alert('Success'); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
		 
		 
		 
//======================= End Adding Product =============================		 
		 
		 
//=============================== SEND INVOICE EMAIL ONLY ====================
	
	
	
	$('.invoidforpost').click(function(){
	$invoce_id = $(this).attr("id");
	$recep = $('#senderemail').val();
	$company = $('#company').val();
	$subj = $('#subj').val();
	
		
		 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/emailinvoice.php',    //the script to call to get data          
      			data: {
					'customerinvoicesid': $invoce_id,
					'company': $company,					
					'recep': $recep,
					'subj': $subj
				},  
      			success: function(data)          //on recieve of reply
     				 {
						 console.log(data);
					 alert('Email has been Sent Successfully'); // show response from the php script.	
						 $('.cd-panel').removeClass('is-visible');
			event.preventDefault();
					 }
			 }); 
	});		 	 
		 
//================================== END EMAIL =========================



//=============================== Add green deal data ====================
	
	
	
	$('.addgreendeal').click(function(){
	$invoce_id = $('#deal_invoice').val();
	$poid = $('#poid').val();
	$refno = $('#reference_no').val();
	
		
		 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/addgreendeal.php',    //the script to call to get data          
      			data: {
					'greeninvoicesid': $invoce_id,					
					'poid': $poid,
					'refno': $refno
				},  
      			success: function(data)          //on recieve of reply
     				 {
					 console.log(data);
					 alert('Greendeal has been added Successfully'); // show response from the php script.	
						 //$('.cd-panel').removeClass('is-visible');
			event.preventDefault();
					 }
			 }); 
	});		 	 
		 
//================================== END add green deal =========================


//=============================== Add achieversdata ====================



         $('.addachievers').click(function(){
             $invoce_id = $('#achievers_invoice').val();
             $poid = $('#poidd').val();
             $refno = $('#reference_noo').val();
             
			
             $.ajax({
                 type : 'POST',
                 url: 'https://sungreen.com.au/dev/backoffice/admin/addachievers.php',    //the script to call to get data
                 data: {
                     'achieversinvoicesid': $invoce_id,
                     'poid': $poid,
                     'refno': $refno
                 },
                 success: function(data)          //on recieve of reply
                 {
                     console.log(data);
                     alert('Achievers has been added Successfully'); // show response from the php script.
                     //$('.cd-panel').removeClass('is-visible');
                     event.preventDefault();
                 }
             });
         });

//================================== END add achievers =========================



//=============================== SEND INVOICE STATUS BY ELECTRICIAN ====================
	
	  
	
	$('.invoidforstatus').click(function(){
	$invoice_id = $(this).attr("id");	
	//$invostatus = $('#invoice_status option:selected').val();
        $invostatus = $('.hiddenvalue').val();
	
       
		
		 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/editinvoicestatus.php',    //the script to call to get data          
      			data: {
					'invoid': $invoice_id,
					'invostatus': $invostatus
				},  
      			success: function(data)          //on recieve of reply
     				 {
					 console.log(data);
					 alert('Invoice Status has been updated successfully.'); // show response from the php script.	
					 }
			 }); 
	});		 	 
	
//================================== END INVOICE STATUS BY ELECTRICIAN =========================


//=============================== STC STATUS START ====================
	
	
	
	$('.stcmanualstatus').click(function(){
	$invoice_id = $(this).attr("id");	
	$invostatus = $('#stc_status option:selected').val();
	

		
		 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/editstcstatus.php',    //the script to call to get data          
      			data: {
					'invoid': $invoice_id,
					'invostatus': $invostatus
				},  
      			success: function(data)          //on recieve of reply
     				 {
					 console.log(data);
					 alert('Stc Status has been updated successfully.'); // show response from the php script.	
					 }
			 }); 
	});		 	 
	
//================================== STC STATUS END =========================
		 


//=============================== INVOICE STATUS START ====================
	
	  
	
	$('.invoicemanualstatus').click(function(){
	
		
	$invoice_id = $(this).attr("id");
    $invostatus = $("#invo_status option").filter(":selected").val();
	//$invostatus = $('#invo_status option:selected').val();
	var abc = document.getElementById('invo_status').value;
	
     
		
		 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/editinvoicestatusmain.php',    //the script to call to get data          
      			data: {
					'invoid': $invoice_id,
					'invostatus': $invostatus
				},  
      			success: function(data)          //on recieve of reply
     				 {
					 console.log(data);
					 alert('Invoice Status has been updated successfully.'); // show response from the php script.	
					 }
			 }); 
			event.preventDefault(); 
	});		 	 
	
//================================== INVOICE STATUS END =========================

		 
//=============================== SEND STC ONLY ====================
	
	
	$('.stcidforpost').click(function() {
		alert('stc click');
		console.log('stc');
	//$invoce_id = $(this).attr("id");
	$recep = $('#senderemail').val();
		
		 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/emailstc.php',    //the script to call to get data          
      			data: {
					'customerinvoicesid': $invoce_id,
					'purpose': 'onlystc',
					'recep': $recep
				},  
      			success: function(data)          //on recieve of reply
     				 {
					 alert('STC has been Sent Successfully'); // show response from the php script.	
					 }
			 }); 
	});		 	 
	 
//================================== END STC ONLY =========================
		 
	
		 
//============================= GET PRODUCT DATA ================
		 
		 
	
	$('.dataproductfetch').click(function(){		
		$pro_id = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getproductdata.php',    //the script to call to get data          
      data: {'productid': $pro_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		    //console.log(data[1]);
       // $id = data[0];              //get id
      //  $vname = data[1];           //get name
		 result = jQuery.parseJSON(data);
		  
		console.log(result);
		  
		  $('#product_id').val(result[0]);
		 $('#product_name').val(result[1]);
		 $('#product_rate').val(result[2]);
		 $('#descrip').val(result[4]);		
	
      } 
    });	
	});
//======================== End Product Data fetch ==================================
		 
//============================= GET USER DATA FETCH ================
		 
		 
	
	$('.userdatafetch').click(function(){		
		$user_id = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getuserdata.php',    //the script to call to get data          
      data: {'userid': $user_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		    //console.log(data[1]);
       // $id = data[0];              //get id
      //  $vname = data[1];           //get name
		 result = jQuery.parseJSON(data);
		  
		console.log(result);
		  
		
		 $('#userid').val(result[0]);
		 $('#name').val(result[1]);
		 $('#address').val(result[2]);
		 $('#email').val(result[3]);
		 $('#phone').val(result[4]);
		 $('#username').val(result[5]);
		 $('#password').val(result[6]);	
		 
		  if(result[7]==1){
		   $('#portalyes').prop('checked', true);
		  }else if(result[7]==0){
			 $('#portalyes').prop('checked', false); 
		  }
		  
		  if(result[9]==1){
		   $('#activeyes').prop('checked', true);
		  }else if(result[9]==0){
			 $('#activeyes').prop('checked', false); 
		  }
		  
		// $('#portalyes').val(result[7]);
		     //  if($('#portalyes').val()==1){
			  //  $('#portalyes').prop('checked', true);  
		      //  }
				//if($('#portalyes').val()==0){
			 	// $('#portalno').prop('checked', true); 
		  		//}
		// $('#activeyes').val(result[9]);
		      // if($('#activeyes').val()==1){
			  //  $('#activeyes').prop('checked', true);  
		      //  }
				//if($('#activeyes').val()==0){
			 	// $('#activeno').prop('checked', true); 
		  		//}			
	
      } 
    });	
	});
//======================== End USER Data fetch ==================================


//============================= DEL USER DATA FETCH ================
		 
		 
	
	$('.userdatadel').click(function(){		
		$user_id = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/deluserdata.php',    //the script to call to get data          
      data: {'userid': $user_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {		    
		  
		console.log(data);

		alert('User has been deleted successfully');
        window.location.href = 'https://sungreen.com.au/dev/backoffice/admin/electricianlist.php?role=electrician';		
		
	
      } 
    });	
	});
//======================== End USER Data Delete ==================================


//============================= DEL CLIENT DATA FETCH ================
		 
		 
	
	$('.clientdatadel').click(function(){		
		$user_id = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/delclientdata.php',    //the script to call to get data          
      data: {'userid': $user_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {		    
		  
		console.log(data);

		alert('Client has been removed successfully');
        window.location.href = 'https://sungreen.com.au/dev/backoffice/admin/clientlist.php';		
		
	
      } 
    });	
	});
//======================== End CLIENT Data Delete ==================================



//============================= DEL product DATA FETCH ================
		 
		 
	
	$('.productdatadel').click(function(){		
		$user_id = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/delproductdata.php',    //the script to call to get data          
      data: {'userid': $user_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {		    
		  
		console.log(data);

		alert('Product has been removed successfully');
        window.location.href = 'https://sungreen.com.au/dev/backoffice/admin/productlist.php';		
		
	
      } 
    });	
	});
//======================== End CLIENT Data Delete ==================================

//============================= DEL Payment DATA FETCH ================
		 
		 
	
	$('.delpaymentdata').click(function(){		
		$user_id = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/delpayment.php',    //the script to call to get data          
      data: {'userid': $user_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {		    
		  
		console.log(data);
		alert('Payment has been deleted successfully');
        window.location.href = 'https://sungreen.com.au/dev/backoffice/admin/paymentlist.php';		
		
	
      } 
    });	
	});
//======================== End Payment Data Delete ==================================		 
		 
		 
	$('#workorderbtn').click(function(){

		
		$.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/add_workorder.php',
           data: { 
     				
			        
			        'invoice_no': $('#workorder_invoice').val(),
			        'name': $('#name').val(),
			        'contact': $('#contact').val(),
			        'address': $("#address").val(),
			   		'install_type': $("#install_type").val(),
			        'system_panels': $("#system_panels").val(),
			        'system_inverter': $("#system_inverter").val(),
			        'system_size_kw': $("#system_size_kw").val(),
			        'panel_layout': $("#panel_layout").val(),
			        'inverter_location': $("#inverter_location").val(),
			   		'meterbox_upgrade': $("#meterbox_upgrade").val(),
			   		'in_stock': $("#in_stock").val(),
			   		'time_day_prefer': $("#time_day_prefer").val(),
			   		'housetype_sing_doub': $("#housetype_sing_doub").val(),
			   		'housetype_roof_material': $("#housetype_roof_material").val(),
			   		'lagging': $("#lagging").val(),
			  		'reference_no': $("#reference_no").val(),
			  		'other_notes': $("#other_notes").val(),
			   		'installer_details': $("#installer_details").val(),
			   		'prepared_by': $("#prepared_by").val(),
			   		'approved_by': $("#approved_by").val(),
					'pickup': $("#pickup").val()
			   		
			  		
			},
           success: function(data)
           {
               //console.log(data); // show response from the php script.
			   alert('Work Order has been added successfully!'); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
		
	});	 
		 
//================================ Work order insert end=========================//
		 
		 
//=============================== work order edit start ============================//
		 
		 $('#workordereditbtn').click(function(){
		
		$.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/edit_workorder.php',
           data: { 
     				
			        
			        'invoice_no': $('#workorder_invoice').val(),
			        'name': $('#name').val(),
			        'contact': $('#contact').val(),
			        'address': $("#address").val(),
			   		'install_type': $("#install_type").val(),
			        'system_panels': $("#system_panels").val(),
			        'system_inverter': $("#system_inverter").val(),
			        'system_size_kw': $("#system_size_kw").val(),
			        'panel_layout': $("#panel_layout").val(),
			        'inverter_location': $("#inverter_location").val(),
			   		'meterbox_upgrade': $("#meterbox_upgrade").val(),
			   		'in_stock': $("#in_stock").val(),
			   		'time_day_prefer': $("#time_day_prefer").val(),
			   		'housetype_sing_doub': $("#housetype_sing_doub").val(),
			   		'housetype_roof_material': $("#housetype_roof_material").val(),
			   		'lagging': $("#lagging").val(),
			  		'reference_no': $("#reference_no").val(),
			  		'other_notes': $("#other_notes").val(),
			   		'installer_details': $("#installer_details").val(),
			   		'prepared_by': $("#prepared_by").val(),
			   		'approved_by': $("#approved_by").val(),
					'pickup': $("#pickup").val()
			   		
			  		
			},
           success: function(data)
           {
               //console.log(data); // show response from the php script.
			   alert('Work Order has been Updated successfully!'); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
		
	});	 
		 
//================================ work order edit ends here ===========================//
		 
		 
		 
//============================= Get Work Order  =================
		 
		 
	
	$('.workorderfetch').click(function(){		
		$workid = $(this).attr("id");

        $('#workorder_invoice').val($workid);
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getworkorderdata.php',    //the script to call to get data          
      data: {'workid': $workid},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {

		result = jQuery.parseJSON(data);

		//console.log(result);
		  
		 $('#name').val(result[2]);
		// $('#workorder_invoice').val(result[1]);
		 $('#contact').val(result[3]);
		 $('#address').val(result[4]);
		 $('#install_type').val(result[5]);
		 $('#system_panels').val(result[6]);
		 $('#system_inverter').val(result[7]);
		 $('#system_size_kw').val(result[8]);
		 $('#panel_layout').val(result[9]);
		 $('#inverter_location').val(result[10]);
		 $('#meterbox_upgrade').val(result[11]);
		 $('#in_stock').val(result[12]);
		 $('#time_day_prefer').val(result[13]);
		 $('#housetype_sing_doub').val(result[14]);
		 $('#housetype_roof_material').val(result[15]);
		 $('#lagging').val(result[16]);
		 $('#reference_no').val(result[17]);		  
		 $('#other_notes').val(result[18]);
		 $('#installer_details').val(result[19]);
		 $('#prepared_by').val(result[20]);
		 $('#approved_by').val(result[21]);
		 $('#pickup').val(result[22]);
	
      } 
    });	
	});
//======================== End Work Order Data fetch ==================================		 

		 
//============================= Get STC DATA  ==========================================
		 
		 
	
	$('.stcfetch').click(function(){
	
	$invoicee = $(this).attr("id");	
    $('#stc_invoice').val($invoicee);	
		
		
		$('input:checkbox').prop('checked', false);
		$invoid = $(this).attr("id");
		
		
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getstcdata.php',    //the script to call to get data          
      data: {'stcid': $invoid},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		    
		result = jQuery.parseJSON(data);
		  
		//console.log(result);
		  
		 $('#first_name').val(result[2]);
		 $('#last_name').val(result[3]);
		 $('#postal_address').val(result[4]);	
		 $('#suburb').val(result[5]);
		 $('#state').val(result[6]);
		 $('#postcode').val(result[7]);
		 $('#phone').val(result[8]);
		 $('#mobile').val(result[9]);
		 $('#email').val(result[10]);
		 $('#first_name_detail').val(result[11]);
		 $('#last_name_detail').val(result[12]);
		 $('#install_address').val(result[13]);
		 $('#suburb_detail').val(result[14]);
		 $('#state_detail').val(result[15]);
		 $('#postcode_detail').val(result[16]);
		 $('#phone_detail').val(result[17]);
		 $('#mobile_detail').val(result[18]);
		 $('#one_year').val(result[19]);
		  if($('#one_year').val()==1){
			 $('#one_year').prop('checked', true);  
		  }
		  if($('#one_year').val()==0){
			 $('#one_year').val(1);  
		  }
		  $('#five_years').val(result[20]);
		  if($('#five_years').val()==1){
			 $('#five_years').prop('checked', true);  
		  }
		  if($('#five_years').val()==0){
			 $('#five_years').val(1);  
		  }
		  $('#fourteen_years').val(result[21]);
		  if($('#fourteen_years').val()==1){
			 $('#fourteen_years').prop('checked', true);  
		  }
		  if($('#fourteen_years').val()==0){
			 $('#fourteen_years').val(1);  
		  }
		  $('#single').val(result[22]);
		  if($('#single').val()==1){
			 $('#single').prop('checked', true);  
		  }
		  if($('#single').val()==0){
			 $('#single').val(1);  
		  }
		  $('#multi').val(result[23]);
		  if($('#multi').val()==1){
			 $('#multi').prop('checked', true);  
		  }
		  if($('#multi').val()==0){
			 $('#multi').val(1);  
		  }
		  
		  $('#replacement_panel').val(result[24]);
		  
		   $('#single_2').val(result[25]);
		  if($('#single_2').val()==1){
			 $('#single_2').prop('checked', true);  
		  }
		  if($('#single_2').val()==0){
			 $('#single_2').val(1);  
		  }
		  $('#multi_2').val(result[26]);
		  if($('#multi_2').val()==1){
			 $('#multi_2').prop('checked', true);  
		  }
		  if($('#multi_2').val()==0){
			 $('#multi_2').val(1);  
		  }
		  
		  $('#existing_panel').val(result[27]);
		  
		  
		  $('#single_3').val(result[28]);
		  if($('#single_3').val()==1){
			 $('#single_3').prop('checked', true);  
		  }
		  if($('#single_3').val()==0){
			 $('#single_3').val(1);  
		  }
		  $('#multi_3').val(result[29]);
		  if($('#multi_3').val()==1){
			 $('#multi_3').prop('checked', true);  
		  }
		  if($('#multi_3').val()==0){
			 $('#multi_3').val(1);  
		  }
		 $('#specific_location').val(result[30]); 
		 $('#additional_comment').val(result[31]); 
		 $('#ref').val(result[32]);
		 $('#pvd').val(result[33]);
		 $('#panel_brand').val(result[34]);
		 $('#panel_mode').val(result[35]);
		 $('#inverter_brand').val(result[36]);
		 $('#inverter_model').val(result[37]);
		 $('#inverter_series').val(result[38]);
		 $('#no_of_panels').val(result[39]);
		 $('#rpo').val(result[40]);
		  
		    $('#resd').val(result[41]);
		  		if($('#resd').val()==1){
			    $('#resd').prop('checked', true);  
		        }
				if($('#resd').val()==0){
			 	$('#resd').val(1);  
		  		}
				
			$('#school').val(result[42]);
		       if($('#school').val()==1){
			    $('#school').prop('checked', true);  
		        }
				if($('#school').val()==0){
			 	$('#school').val(1);  
		  		}
			$('#commer').val(result[43]);
		       if($('#commer').val()==1){
			    $('#commer').prop('checked', true);  
		        }

				if($('#commer').val()==0){
			 	$('#commer').val(1);  
		  		}
			$('#other').val(result[44]);
		       if($('#other').val()==1){
			    $('#other').prop('checked', true);  
		        }
				if($('#other').val()==0){
			 	$('#other').val(1);  
		  		}
		  $('#property_other').val(result[45]); 
		  
		  $('#single_storey').val(result[46]);
		       if($('#single_storey').val()==1){
			    $('#single_storey').prop('checked', true);  


		        }
				if($('#single_storey').val()==0){
			 	$('#single_storey').val(1);  
		  		}
			$('#multiple_storey').val(result[47]);
		       if($('#multiple_storey').val()==1){
			    $('#multiple_storey').prop('checked', true);  
		        }
				if($('#multiple_storey').val()==0){
			 	$('#multiple_storey').val(1);  
		  		}
			$('#certs').val(result[48]);
		       if($('#certs').val()==1){
			    $('#certs').prop('checked', true);  
		        }
				if($('#certs').val()==0){
			 	$('#certs').val(1);  
		  		}
		 
		    $('#stc_nos').val(result[49]);
			$('#installer_name').val(result[50]);
			$('#installer_phone').val(result[51]);
			$('#installer_address').val(result[52]);
			$('#installer_accred_no').val(result[53]);
			$('#electrician_name').val(result[54]);
			$('#electrician_phone').val(result[55]);
			$('#electrician_address').val(result[56]);
			$('#electrician_accred_no').val(result[57]);
			$('#designer_name').val(result[58]);
			$('#designer_phone').val(result[59]);
			$('#designer_address').val(result[60]);
			$('#designer_accred_no').val(result[61]);
			$('#installer_name_main').val(result[62]);
			$('#installed_place').val(result[63]);
			
			$('#grid_connected').val(result[64]);
			 if($('#grid_connected').val()==1){
			    $('#grid_connected').prop('checked', true);  
		       }
			if($('#grid_connected').val()==0){
			 	$('#grid_connected').val(1);  
		  		}
				
				
			$('#battery_storage').val(result[65]);
			 if($('#battery_storage').val()==1){
			    $('#battery_storage').prop('checked', true);  
		       }
			if($('#battery_storage').val()==0){
			 	$('#battery_storage').val(1);  
		  		}	
				
				
				
			
			
			$('#off_grid').val(result[66]);
			if($('#off_grid').val()==1){
			    $('#off_grid').prop('checked', true);  
		       }
			if($('#off_grid').val()==0){
			 	$('#off_grid').val(1);  
		  		}
			
			
			
			$('#sgu_installer_signature').val(result[67]);
			$('#cec_installer_no').val(result[68]);
			$('#print_installer_name').val(result[69]);
			$('#sgu_inst_sig_date').val(result[70]);			   
			$('#sgu_designer_signature').val(result[71]);
			$('#cec_designer_no').val(result[72]);
			$('#print_designer_name').val(result[73]);
			$('#sgu_desig_sig_date').val(result[74]);			   
			$('#stc_eligible').val(result[75]);
			$('#owner_signature').val(result[76]);
			$('#owner_signature_date').val(result[77]);			   
			$('#agent_signature').val(result[78]);
			$('#agent_signature_date').val(result[79]);		
	
      } 
    });	
		
		
	});
//======================== End STC GET Data ==================================			 


//============================= Get Green Deal Data fetch  =================
		 
		 
	
	$('.greendealfetch').click(function(){		
		$dealid = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getgreendata.php',    //the script to call to get data          
      data: {'dealid': $dealid},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		    
		result = jQuery.parseJSON(data);
		  
		console.log(result);
		  
		 $('#poid').val(result[2]);
		 $('#reference_no').val(result[3]);
		
	
      } 
    });	
	});
//======================== End Green Deal Data fetch ==================================	


//============================= Get Achievers Data fetch  =================
		 
		 
	
	$('.achieversfetch').click(function(){		
		$dealid = $(this).attr("id");			
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getachieversdata.php',    //the script to call to get data          
      data: {'dealid': $dealid},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		    
		result = jQuery.parseJSON(data);
		  
		console.log(result);
		  
		 $('#poidd').val(result[2]);
		 $('#reference_noo').val(result[3]);
		
	
      } 
    });	
	});
//======================== End Achievers Data fetch ==================================




	 
		 
//======================== Product Data Update ==================================		 
		 
		 
		 $("#product_update_form").click(function(e) { 
    
		 var up_data = new FormData();	 
			 
			up_data.append( 'product_id', $('#product_id').val());
			up_data.append( 'product_name', $('#product_name').val());
            up_data.append( 'product_rate', $('#product_rate').val());
            up_data.append( 'descrip', $('#descrip').val());

		 
		 $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/productedit.php',
		   data: up_data,
		   processData: false,
		   contentType: false,          
           success: function(data)
           {
               console.log(data);
			   alert('Product has been edit successfully!'); // show response from the php script.
			   window.location.href = 'productlist.php';
           }
         });

    //e.preventDefault(); // avoid to execute the actual submit of the form.
}); 
		 
// ================================ Product Data Update Ends here =======================================
		 
		 
//======================== User Data Update ==================================		 
		 
		 
		 $("#edituser").submit(function(e) { 
    
		 var up_data = new FormData();	 
			 
			up_data.append( 'userid', $('#userid').val());
			up_data.append( 'name', $('#name').val());
			up_data.append( 'address', $('#address').val());
            up_data.append( 'email', $('#email').val());
            up_data.append( 'phone', $('#phone').val());
			up_data.append( 'username', $('#username').val());
			up_data.append( 'password', $('#password').val());			
			up_data.append( 'portal', $('.portal:checked').val());
			up_data.append( 'role', $('#userrole').val());
			up_data.append( 'active', $('.active:checked').val());

		 
		 $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/useredit.php',
		   data: up_data,
		   processData: false,
		   contentType: false,          
           success: function(data)
           {
               console.log(data);
			   alert('User has been edit successfully!'); // show response from the php script.
			   $('.cd-panel').removeClass('is-visible');
			   //window.location.href = 'electricianlist.php';
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
}); 
		 
// ================================ User Data Update Ends here =======================================


//======================== Client Data Update ==================================		 
		 
		 
		 $(".editclient").click(function(e) { 
    
		 var up_data = new FormData();	 
			 
			up_data.append( 'clientid', $('#clid').val());
			up_data.append( 'first_name', $('#first_name').val());
			up_data.append( 'last_name', $('#last_name').val());
            up_data.append( 'email', $('#email').val());
            up_data.append( 'phone', $('#phone').val());
			up_data.append( 'mobile', $('#mobile').val());
			

		 
		 $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/clientdataedit.php',
		   data: up_data,
		   processData: false,
		   contentType: false,          
           success: function(data)
           {
               //console.log(data);
			   alert('Client data has been updated successfully!'); // show response from the php script.
			   $('.cd-panel').removeClass('is-visible');
			   //window.location.href = 'electricianlist.php';
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
}); 
		 
// ================================ Client Data Update Ends here =======================================	

		 
		 
// ================================ STC Data Entry Starts here =======================================	
	
	$('#samedt').click(function(){
		
		$('#first_name_detail').val($('#first_name').val());
		$('#last_name_detail').val($('#last_name').val());
		$('#suburb_detail').val($('#suburb').val());
		$('#state_detail').val($('#state').val());
		$('#postcode_detail').val($('#postcode').val());
		$('#phone_detail').val($('#phone').val());
		$('#mobile_detail').val($('#mobile').val());
		            
		
	});
		 
	
		
//=================== STC Entry ==================//
		 
		 
	$('#stcform').click(function(){
		
		$.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/add_stc.php',
           data: {      				
			        
			        'invoice_no': $('#stc_invoice').val(),     
			        'first_name': $('#first_name').val(),
			        'last_name': $('#last_name').val(),
			        'postal_address': $('#postal_address').val(),
			        'suburb': $('#suburb').val(),
			        'state': $('#state').val(),
			        'postcode': $('#postcode').val(),
			        'phone': $('#phone').val(),
			        'mobile': $('#mobile').val(),
			        'email': $('#email').val(),
			        'first_name_detail': $('#first_name_detail').val(),
			        'last_name_detail': $('#last_name_detail').val(),
			        'install_address': $('#install_address').val(),
			        'suburb_detail': $('#suburb_detail').val(),
			        'state_detail': $('#state_detail').val(),
			        'postcode_detail': $('#postcode_detail').val(),
			        'phone_detail': $('#phone_detail').val(),
			        'mobile_detail': $('#mobile_detail').val(),			   
			        'one_year': $('#one_year:checked').val(),
			        'five_years': $('#five_years:checked').val(),
			        'fourteen_years': $('#fourteen_years:checked').val(),
			        'single': $('#single:checked').val(),
			        'multi': $('#multi:checked').val(),
			        'replacement_panel': $('#replacement_panel').val(),
			        'single_2': $('#single_2:checked').val(),
			        'multi_2': $('#multi_2:checked').val(),
			        'existing_panel': $('#existing_panel').val(),  
			        'single_3': $('#single_3:checked').val(),
			        'multi_3': $('#multi_3:checked').val(),
			        'specific_location': $('#specific_location').val(),  
			   		'additional_comment': $('#additional_comment').val(),
			        'ref': $('#ref').val(),
			        'pvd': $('#pvd').val(),
			        'panel_brand': $('#panel_brand').val(),
			        'panel_mode': $('#panel_mode').val(),
			        'inverter_brand': $('#inverter_brand').val(),
			        'inverter_model': $('#inverter_model').val(),
			        'inverter_series': $('#inverter_series').val(),
			        'no_of_panels': $('#no_of_panels').val(),
			        'rpo': $('#rpo').val(),
			        'resd': $('#resd:checked').val(),
			        'school': $('#school:checked').val(),
			        'commer': $('#commer:checked').val(),
			        'other': $('#other:checked').val(),
			        'property_other': $('#property_other').val(),
			        'single_storey': $('#single_storey:checked').val(),
			        'multiple_storey': $('#multiple_storey:checked').val(),
			        'certs': $('#certs:checked').val(),
			        'stc_nos': $('#stc_nos').val(),
			        'installer_name': $('#installer_name').val(),
			        'installer_phone': $('#installer_phone').val(),
			        'installer_address': $('#installer_address').val(),
			        'installer_accred_no': $('#installer_accred_no').val(),
			        'electrician_name': $('#electrician_name').val(),
			        'electrician_phone': $('#electrician_phone').val(),

			        'electrician_address': $('#electrician_address').val(),
			        'electrician_accred_no': $('#electrician_accred_no').val(),
			        'designer_name': $('#designer_name').val(),
			        'designer_phone': $('#designer_phone').val(),
			        'designer_address': $('#designer_address').val(),
			        'designer_accred_no': $('#designer_accred_no').val(),
			        'installer_name_main': $('#installer_name_main').val(),
			        'installed_place': $('#installed_place').val(),
			        'grid_connected': $('#grid_connected').val(),
					'battery_storage': $('#battery_storage').val(),
			        'off_grid': $('#off_grid').val(),
			        'sgu_installer_signature': $('#sgu_installer_signature').val(),
			        'cec_installer_no': $('#cec_installer_no').val(),
			        'print_installer_name': $('#print_installer_name').val(),
			        'sgu_inst_sig_date': $('#sgu_inst_sig_date').val(),			   
			        'sgu_designer_signature': $('#sgu_designer_signature').val(),
			        'cec_designer_no': $('#cec_designer_no').val(),
			        'print_designer_name': $('#print_designer_name').val(),
			        'sgu_desig_sig_date': $('#sgu_desig_sig_date').val(),			   
			        'stc_eligible': $('#stc_eligible').val(),
			        'owner_signature': $('#owner_signature').val(),
			        'owner_signature_date': $('#owner_signature_date').val(),			   
			        'agent_signature': $('#agent_signature').val(),
			        'agent_signature_date': $('#agent_signature_date').val(),		        
			   
			  		
			},
           success: function(data)
           {
              //console.log(data); // show response from the php script.
			   alert('STC has been added successfully!'); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
		
	});	 
             
    
     
		  
		  
		  
		
	
	
		 
		 
//======================== STC Data Entry End ==================================
		 
		 
//=================== STC Update starts here ==================//
		 
		 
	$('#stcformedit').click(function(){
		
		$.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/edit_stc.php',
           data: {      				
			        
			        'editby': $('#stc_edit_by').val(),     
			        'invoice_no': $('#stc_invoice').val(),     
			        'first_name': $('#first_name').val(),
			        'last_name': $('#last_name').val(),
			        'postal_address': $('#postal_address').val(),
			        'suburb': $('#suburb').val(),
			        'state': $('#state').val(),
			        'postcode': $('#postcode').val(),
			        'phone': $('#phone').val(),
			        'mobile': $('#mobile').val(),
			        'email': $('#email').val(),
			        'first_name_detail': $('#first_name_detail').val(),
			        'last_name_detail': $('#last_name_detail').val(),
			        'install_address': $('#install_address').val(),
			        'suburb_detail': $('#suburb_detail').val(),
			        'state_detail': $('#state_detail').val(),
			        'postcode_detail': $('#postcode_detail').val(),
			        'phone_detail': $('#phone_detail').val(),
			        'mobile_detail': $('#mobile_detail').val(),			   
			        'one_year': $('#one_year:checked').val(),
			        'five_years': $('#five_years:checked').val(),
			        'fourteen_years': $('#fourteen_years:checked').val(),
			        'single': $('#single:checked').val(),
			        'multi': $('#multi:checked').val(),
			        'replacement_panel': $('#replacement_panel').val(),
			        'single_2': $('#single_2:checked').val(),
			        'multi_2': $('#multi_2:checked').val(),
			        'existing_panel': $('#existing_panel').val(),  

			        'single_3': $('#single_3:checked').val(),
			        'multi_3': $('#multi_3:checked').val(),
			        'specific_location': $('#specific_location').val(),  
			   		'additional_comment': $('#additional_comment').val(),
			        'ref': $('#ref').val(),
			        'pvd': $('#pvd').val(),
			        'panel_brand': $('#panel_brand').val(),
			        'panel_mode': $('#panel_mode').val(),
			        'inverter_brand': $('#inverter_brand').val(),
			        'inverter_model': $('#inverter_model').val(),
			        'inverter_series': $('#inverter_series').val(),
			        'no_of_panels': $('#no_of_panels').val(),
			        'rpo': $('#rpo').val(),
			        'resd': $('#resd:checked').val(),
			        'school': $('#school:checked').val(),
			        'commer': $('#commer:checked').val(),
			        'other': $('#other:checked').val(),
			        'property_other': $('#property_other').val(),
			        'single_storey': $('#single_storey:checked').val(),
			        'multiple_storey': $('#multiple_storey:checked').val(),
			        'certs': $('#certs:checked').val(),
			        'stc_nos': $('#stc_nos').val(),
			        'installer_name': $('#installer_name').val(),
			        'installer_phone': $('#installer_phone').val(),
			        'installer_address': $('#installer_address').val(),
			        'installer_accred_no': $('#installer_accred_no').val(),
			        'electrician_name': $('#electrician_name').val(),
			        'electrician_phone': $('#electrician_phone').val(),
			        'electrician_address': $('#electrician_address').val(),
			        'electrician_accred_no': $('#electrician_accred_no').val(),
			        'designer_name': $('#designer_name').val(),
			        'designer_phone': $('#designer_phone').val(),
			        'designer_address': $('#designer_address').val(),
			        'designer_accred_no': $('#designer_accred_no').val(),
			        'installer_name_main': $('#installer_name_main').val(),
			        'installed_place': $('#installed_place').val(),
			        'grid_connected': $('#grid_connected:checked').val(),
					'battery_storage': $('#battery_storage:checked').val(),
			        'off_grid': $('#off_grid:checked').val(),
			        'sgu_installer_signature': $('#sgu_installer_signature').val(),
			        'cec_installer_no': $('#cec_installer_no').val(),
			        'print_installer_name': $('#print_installer_name').val(),
			        'sgu_inst_sig_date': $('#sgu_inst_sig_date').val(),			   
			        'sgu_designer_signature': $('#sgu_designer_signature').val(),
			        'cec_designer_no': $('#cec_designer_no').val(),
			        'print_designer_name': $('#print_designer_name').val(),
			        'sgu_desig_sig_date': $('#sgu_desig_sig_date').val(),			   
			        'stc_eligible': $('#stc_eligible').val(),
			        'owner_signature': $('#owner_signature').val(),
			        'owner_signature_date': $('#owner_signature_date').val(),			   
			        'agent_signature': $('#agent_signature').val(),
			        'agent_signature_date': $('#agent_signature_date').val(),		        
			   
			  		
			},
           success: function(data)
           {
              //console.log(data); // show response from the php script.
			   alert('STC has been Updated successfully!'); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
		
	});	 
             
    
     
		  
		  
		  
		
	
	
		 
		 
//======================== STC Data Update End ==================================		 


//======================== ADD ELECTRICIANS ============================

//======================= Add Product ====================================
		 
		 


$(".adduser").submit(function(e) {   				
    var userrole = $(this).attr('id');
	
	
	
    $.ajax({
           type: "POST",
           url: 'https://sungreen.com.au/dev/backoffice/admin/add_user.php',
           data: { 
     				'role': userrole,
			        'name': $('#name').val(),
			        'address': $('#address').val(),

			        'email': $("#email").val(),
			   		'phone': $("#phone").val(),
					'username': $("#username").val(),
					'password': $("#password").val(),
					'portal': $('.portal:checked').val(),
					'active': $(".active:checked").val()     

			        
			  		
			},
           success: function(data)

           {
               console.log(data); // show response from the php script.
			   alert('User has been added!'); // show response from the php script.
			    window.location.href = 'https://sungreen.com.au/dev/backoffice/admin/electricianlist.php?role=electrician';
           }
         });
		

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
		 
		 
		 
//======================= End Adding Product =============================

//======================== END ELECTRICIANS ============================


$('#emailpopup').click(function(){
	
	$invo = $('.invoicedata_id').html();
	
		 $.ajax({  
		  type : 'POST',
		  url: 'https://sungreen.com.au/dev/backoffice/admin/getinvoiceusers.php',    //the script to call to get data          
		  data: {'invoiceno': $invo},  //you can insert url argumnets here to pass to api.php
		  success: function(data)          //on recieve of reply
			  {
				  
				  console.log(data);
				  $('.usersemail').html(data);
				  
			  }
		  

		  });
	
	});


//======================  Delete invoice ======================
$('.invoicetodel').click(function(){	
		
		
		$invo_id = $(this).attr("id");			
		
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/delinvoice.php',    //the script to call to get data          
      data: {'invoiceid': $invo_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		 
		 //console.log(data);   
		 
		 
		  
		  console.log(data);
		  alert('Invoice has been deleted successfully');
		  window.location.href = 'https://sungreen.com.au/dev/backoffice/admin/invoicelist.php';
		  
		  
		  
	
      } 
    });	
		
	});

//==================== Delete invoice end===================		 
		 




//==============================  USER REPORT DATA Data Fetch ==============================		 
		 
	
		 
		  $('#users_id').change(function(){
			  $('.reportBody').html('');
			  $invo_id = $(this).val();			  
			 $.ajax({  
	  			type : 'POST',
     			url: 'https://sungreen.com.au/dev/backoffice/admin/getuserinvoicedata.php',    //the script to call to get data          
      			data: {'userinvoicesid': $invo_id},  //you can insert url argumnets here to pass to api.php
      			success: function(data)          //on recieve of reply
     				 {
						// console.log(data);
						// exit;
		  			result = jQuery.parseJSON(data);
					console.log(result);	 
						 
					 $.each(result.sumofinvoices, function (index, obj) { 			   
			   
                         var html = '';
  							html += '<tr>';
  							html += '<td> ' + obj.invoice_no + '</td>';
  							html += '<td> ' + obj.invoice_date + '</td>';

  							html += '<td>' + obj.order_no + '</td>';
  							html += '<td>' + obj.customer_name + '</td>';     		 
  							html += '<td align=right>' + obj.address + '</td></tr>';			   
			   
  				$('.reportBody').append(html);
				
				
						 
						 $('.amount_received').text(result.sumofinvoices[0]);	
						
						 
					
						 // $('.amount_in_excess').html($khulasa);
			// $('.amount_received').text(result.sumofinvoices[0]);
						 
						 
						 
						 
            }); 
					 
						// $('.sumofallinvoices').text(tott);
						 
	 				 }
			 });  		 
		 });
		 
		 	
		 
		 
		 
		 
		 
//=============================== End USER REPORT Data Fetch ===================================









//==================== get customer data ==================
 		 
$('#customer_idd').change(function(){		
		$cli_id = $(this).val();
	
	
	  $.ajax({  
	  type : 'POST',
      url: 'https://sungreen.com.au/dev/backoffice/admin/getcustomerdata.php',    //the script to call to get data          
      data: {'clientid': $cli_id},  //you can insert url argumnets here to pass to api.php
      success: function(data)          //on recieve of reply
      {
		    
		 result = jQuery.parseJSON(data);
		  
		  $('#first_name').val(result[1]);
		  $('#last_name').val(result[2]);
		  $('#email').val(result[4]);
		  $('#phone').val(result[5]);		  
		  $('#mobile').val(result[6]);
		  $('#postal_address').val(result[8]);
		  
	
      } 
    });	
	});	
		 
		 
	
//=======================================  Add row 2 ========================================		 
		 
	var row_id = 1;
	var out;
    var ccnt;
	
	 $(document).on('click', '.add2', function(){		 
		 
		 $invoid = $(this).attr("id");
		 //$('#onlyinvoiceid').val($('#onlyinvoiceid').val()+1;
						 
		 var ccnt = +$("#onlyinvoiceid").val()+1;
         $("#onlyinvoiceid").val(ccnt);
		 
		 

		  
  var html = '';
  html += '<tr>';
  html += '<td><select name="product_name[]" id="product_'+ccnt+'" onchange="checkprod(this.id, '+ccnt+')" class="abc form-control item_unit input-xs"><option value="">Select Unit</option><?php echo fill_unit_select_box($out); ?></select></td>';
  html += '<td><input type="text" id="desc_'+ccnt+'" name="desc[]" class="form-control item_name input-xs" /></td>';
  html += '<td><input type="text" id="qty_'+ccnt+'" onblur="checkid(this.id, '+ccnt+')" name="product_qty[]" class="form-control item_name input-xs" /></td>';
  html += '<td><input type="text" id="rate_'+ccnt+'" onblur="checkidrt(this.id, '+ccnt+')" name="product_rate[]" class="form-control item_rate input-xs" /></td>';
		 html += '<td><select name="gst[]" id="gst_'+ccnt+'" class="form-control item_unit input-xs"><option value="none">Select Unit</option><option value="yes">Yes</option><option value="no">No</option></select></td>'; 
		 
  html += '<td><input type="text" name="product_discount[]" class="form-control item_rate input-xs" /></td>';  
  html += '<td><input type="text" id="amount_'+ccnt+'" name="product_amount[]" class="form-control item_amount input-xs" /></td>';   		 
  html += '<td><button type="button" name="remove" class="mdi mdi-minus remove"></button></td>';
  html += '</tr>';
	ccnt++;
   
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 }); 
 
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });		 
		 
		 
//================================== add row 2 ends here ==============================================//


//=======================================  Add row 3 ========================================		 
		 
	//var row_id = 1;
	//var out;
    var ccnt = 1;
	
	 $(document).on('click', '.add3', function(){	
	 	 
		 
		 $invoid = $(this).attr("id");
		 //$('#onlyinvoiceid').val($('#onlyinvoiceid').val()+1;
						 
		 var ccnt = +$("#invoiceid_panel").val()+1;
         $("#invoiceid_panel").val(ccnt);
		 
		 

		  
  var html = '';
  html += '<tr>';  
  html += '<td><input type="text" id="serials_'+ccnt+'" name="serials[]" class="form-control item_name input-xs" /></td>';    		 
  html += '<td><button type="button" name="remove" class="mdi mdi-minus remove2"></button></td>';
  html += '</tr>';
	ccnt++;
   
  $('.serialized_table').append(html);
 });
 
 $(document).on('click', '.remove2', function(){
  $(this).closest('tr').remove();
 }); 
 
  
  
  
	 
//================================== add row 3 ends here ==============================================


		 
		 
		  
      	//initialize the javascript
      	App.init();
		App.dataTables();
      	App.formElements();
		App.textEditors();
		 
	    $.fn.niftyModal('setDefaults',{
      	overlaySelector: '.modal-overlay',
      	closeSelector: '.modal-close',
      	classAddAfterOpen: 'modal-show',
      });
		 
		 

      
});
		
		

		
    </script>


<script>




	function senderemail(){
	 var e = document.getElementById("senderemail");
     var strUser = e.options[e.selectedIndex].value; 
	  if(strUser == 'finance_company'){
		$('.compemail').html('<input type="text" name="company" id="company" class="form-control input-xs">');  
	  }
  }
	
</script>

<script type="text/javascript">
	idleMax = 10;// Logout after 10 minutes of IDLE
	idleTime = 0;
	$(document).ready(function () {
    	var idleInterval = setInterval("timerIncrement()", 60000); 
   		 $(this).mousemove(function (e) {idleTime = 0;});
   		 $(this).keypress(function (e) {idleTime = 0;});
	})
	function timerIncrement() {
    	idleTime = idleTime + 1;
    		if (idleTime > idleMax) { 
       		 window.location="https://sungreen.com.au/dev/backoffice/admin/";
   	 }
	}
	</script>


  </body>
</html>