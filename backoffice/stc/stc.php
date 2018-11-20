<?php 
include '../config/config.php';
require_once 'autoload.inc.php';

$invoid = $_GET['stcid'];

$invosql = "SELECT * FROM stc WHERE invoice_no = '".$invoid."'";
$invoque = mysql_query($invosql);
$invorowsw = mysql_fetch_array($invoque);

use Dompdf\Dompdf;

$document = new Dompdf();

$html = '
<style>
body {
    font-family: Roboto, Arial, sans-serif;
    font-size: 12px;    
    color: #404040;
}

label{
padding:0px 0px 0px 0px;	
margin-top:5px;
}

.inputnobdr {
    border-left: 0px;
    border-top: 0px;
    border-right: 0px;
}

.inputbox{
display:block;
border-radius:3px;
border:1px solid #bdc0c7;
height: 15px;
    font-size: 12px;
    padding: 6px 9px;
	width:100%;
}


.row {
    margin-left: -15px;
    margin-right: -15px;
}
.btn-group-vertical > .btn-group:after, .btn-group-vertical > .btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
    content: " ";
    display: table;
}
.colored-header .modal-content .modal-body {
    padding: 35px 20px 20px;
    background-color: #fff;
    color: #404040;
}

.modal-body {
    padding: 10px 20px 20px;
}

.modal-body {
    position: relative;
}

div {
    display: block;
}

label {
    display: inline-block;
    max-width: 100%;
}
.hdstyler {
    padding: 5px;
    background: #393;
    color: #fff;
}

.input-xs {
    height: 15px;
    font-size: 12px;
    padding: 6px 9px;	
}

.form-control {
    border-width: 1px;
    border-top-color: #bdc0c7;
    box-shadow: none;
    transition: none;
}

.bdrcol div {
    border-top: 1px solid #ccc;    
    border-bottom: 1px solid #ccc;
    padding: 10px;
    min-height: 260px;
}

.form-control {
    width: 100%;    
    background-color: #fff;
    background-image: none;
    border: 1px solid #d5d8de;
    border-radius: 2px;
}

.smtab {
    background: #efefef!important;
    padding: 10px;
    border-right: 2px solid #fff;
}

.bdrd{
border-top:1px solid #ccc;
border-left:1px solid #ccc;
}

.bdrd td{
border-bottom:1px solid #ccc;
border-right:1px solid #ccc;
}

.bdrd ul li{
list-style:none;
margin-left:-35px;
}

.bdrd h4{
padding:0px;
margin:0px;
}



    .col-md-12 {
        width: 100%
    }

    .col-md-11 {
        width: 91.66666667%
    }

    .col-md-10 {
        width: 83.33333333%;
    }

    .col-md-9 {
        width: 75%
    }

    .col-md-8 {
        width: 66.66666667%
    }

    .col-md-7 {
        width: 58.33333333%;
    }

    .col-md-6 {
        width: 50%
    }

    .col-md-5 {
        width: 41.66666667%
    }

    .col-md-4 {
        width: 33.33333333%
    }

    .col-md-3 {
        width: 25%
    }

    .col-md-2 {
        width: 16.66666667%
    }

    .col-md-1 {
        width: 8.33333333%
    }

    .col-md-pull-12 {
        right: 100%
    }

    .col-md-pull-11 {
        right: 91.66666667%
    }

    .col-md-pull-10 {
        right: 70.33333333%
    }

    .col-md-pull-9 {
        right: 75%
    }

    .col-md-pull-8 {
        right: 66.66666667%
    }

    .col-md-pull-7 {
        right: 58.33333333%
    }

    .col-md-pull-6 {
        right: 50%
    }

    .col-md-pull-5 {
        right: 41.66666667%
    }

    .col-md-pull-4 {
        right: 33.33333333%
    }

    .col-md-pull-3 {
        right: 25%
    }

    .col-md-pull-2 {
        right: 30%
    }

    


    .col-md-offset-12 {
        margin-left: 100%
    }

    .col-md-offset-11 {
        margin-left: 91.66666667%
    }

    .col-md-offset-10 {
        margin-left: 83.33333333%
    }

    .col-md-offset-9 {
        margin-left: 75%
    }

    .col-md-offset-8 {
        margin-left: 66.66666667%
    }

    .col-md-offset-7 {
        margin-left: 58.33333333%
    }

    .col-md-offset-6 {
        margin-left: 50%
    }

    .col-md-offset-5 {
        margin-left: 41.66666667%
    }

    .col-md-offset-4 {
        margin-left: 33.33333333%
    }

    .col-md-offset-3 {
        margin-left: 25%
    }

    .col-md-offset-2 {
        margin-left: 16.66666667%
    }

    .col-md-offset-1 {
        margin-left: 8.33333333%
    }

    .col-md-offset-0 {
        margin-left: 0
    }
	.graybox{
	background:#efefef;
	border-rigth:2px solid #fff;
	padding:3px;	
	}





</style>
<table border="0" width="100%">
                  <tr>
                  <td width="75%" valign="top"><table width="100%" border="0">
                    <tr>
                      <td colspan="2"><table width="100%" border="0">
                        <tr>
                          <td><img src="assets/img/emerging_logo.png" alt="" /></td>
                          <td><h3>STC Assignment Form - PV Solar</h3>                           
                            <div>Emerging Energy Solutions Group Pty Ltd. Suit 407/517 Flinders Lnae Melbourne VIC 3000 </div></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td width="33%" valign="top">
                      <strong>Installation Date</strong>
                        <div class="hdstyler">Owner Details</div>
                        <div>
                          <label>First Name</label>
                          <input type="text" id="first_name" value='.$invorowsw['first_name'].' class="inputbox">                          
                        </div>
                        <div>
                          <label>Last Name</label>
                          <input type="text" id="last_name" value='.$invorowsw['last_name'].' class="inputbox" />
                        </div>
                        <div>
                          <label>Postal Address</label>
                          <input type="text" id="postal_address" value='.$invorowsw['postal_address'].' class="inputbox" />
                        </div>
                        <div>
                          <label>Suburb</label>
                          <input type="text" id="suburb" value='.$invorowsw['suburb'].' class="inputbox" />
                        </div>
                        <div>
                          <div>
                            <label>State</label>
                            <input type="text" id="state" value='.$invorowsw['state'].' class="inputbox" />
                          </div>
                          <div>
                            <label>Postcode</label>
                            <input type="text" id="postcode" value='.$invorowsw['postcode'].' class="inputbox"/>
                          </div>
                        </div>
                        <div>
                          <div>
                            <label>Home</label>
                            <input type="text" id="phone" value='.$invorowsw['phone'].' class="inputbox" />
                          </div>
                          <div>
                            <label>Mobile</label>
                            <input type="text" id="mobile" value='.$invorowsw['mobile'].' class="inputbox" />
                          </div>
                        </div>
                        <div>
                          <label>Email</label>
                          <input type="text" id="email" value='.$invorowsw['email'].' class="inputbox" />
                        </div>
                     
                      </td>
                      <td width="33%" valign="top">                      
                      <span style="float:left;"><strong>STC Deeming Period:</strong></span>                        
                      <span style="float:right;">
					  ';
                       if($invorowsw['one_year']==1){
						  $html .= '1 Yr';
					   }else if($invorowsw['five_years']==1){
						  $html .= '5 Yrs';
					   }else if($invorowsw['fourteen_years']==1){
						  $html .= '13 Yrs';
					   } 
					  
					 $html .= '</span>
                       
                        <div style="clear:both;"></div>
                        
                        <div class="hdstyler">Installation Details</div>                        
                        <div>
                          <label>First Name</label>
                          <input type="text" id="first_name_detail" value='.$invorowsw['first_name_detail'].' class="inputbox" />
                        </div>
                        <div>
                          <label>Last Name</label>
                          <input type="text" id="last_name_detail" value='.$invorowsw['last_name_detail'].' class="inputbox" />
                        </div>
                        <div>
                          <label>Install Address</label>
                          <input type="text" id="install_address" class="inputbox" value='.$invorowsw['install_address'].'>
                        </div>
                        <div>
                          <label>Suberb</label>
                          <input type="text" id="suburb_detail" class="inputbox" value='.$invorowsw['suburb_detail'].' />
                        </div>
                        <div>
                          <div>
                            <label>State</label>
                            <input type="text" id="state_detail" value='.$invorowsw['state_detail'].' class="inputbox" />
                          </div>
                          <div>
                            <label>Postcode</label>
                            <input type="text" id="postcode_detail" value='.$invorowsw['postcode_detail'].' class="inputbox" />
                          </div>
                        </div>
                        <div>
                          <div>
                            <label>Home</label>
                            <input type="text" id="phone_detail" value='.$invorowsw['phone_detail'].' class="inputbox" />
                          </div>
                          <div>
                            <label>Mobile</label>
                            <input type="text" id="mobile_detail" value='.$invorowsw['mobile_detail'].' class="inputbox" />
                          </div>
                        </div>
                     </td>
                    </tr>
                    <tr>
                      <td colspan="2" height="5"></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                      <table width="100%" border="0" cellspacing="0" cellpadding="5">
                        <tr>
                          <td width="33%" valign="top">
                         
                          
                            
                            
                           
                            
                            <table border="0" cellpadding="5" cellspacing="0" class="graybox">
                            <tr>
                            <td><span>Are you replacing panels to a system as a result of damage or faults</span></td>
                            </tr>
                            
                            <tr>
                            <td>
                            <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="8%" align="left"><input id="single2" type="checkbox" checked="checked" value="1" /></td>
                                <td width="17%" align="center">Yes</td>
                                <td width="10%">&nbsp;</td>
                                <td width="8%" align="left"><input id="multi2" type="checkbox" value="1" /></td>
                                <td width="17%" align="center">No</td>
                              </tr>
                            </table></td>
                            </tr>
                            
                             <tr>
                            <td style="text-align:center; font-size:0.9em;"># of replacement panels?<br><br></td>
                            </tr>
                             <tr>
                            <td> <input type="text" id="replacement_panel2" class="form-control input-xs" /></td>
                            </tr>
                            </table>                         
                            
                           
                           
                             
                          </td>
                           <td width="33%" valign="top">
                             <table border="0" cellpadding="5" cellspacing="0" class="graybox">
                               <tr>
                                 <td><span>Are you installing additional panels to an existing system?</span></td>
                               </tr>
                               <tr>
                                 <td><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                                   <tr>
                                     <td width="8%" align="left"><input id="single" type="checkbox" checked="checked" value="1" /></td>
                                     <td width="17%" align="center">Yes</td>
                                     <td width="10%">&nbsp;</td>
                                     <td width="8%" align="left"><input id="multi" type="checkbox" value="1" /></td>
                                     <td width="17%" align="center">No</td>
                                   </tr>
                                 </table></td>
                               </tr>
                               <tr>
                                 <td style="text-align:center; font-size:0.9em;"># of existing panels?<br /><br></td>
                               </tr>
                               <tr>
                                 <td><input type="text" id="existing_panel2" class="form-control input-xs" /></td>
                               </tr>
                            </table></td>
                           <td width="33%" valign="top"><table border="0" cellpadding="5" cellspacing="0" class="graybox">
                             <tr>
                               <td><span>Is there currently more than one system installed at this address?</span></td>
                             </tr>
                             <tr>
                               <td><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                                 <tr>
                                   <td width="8%" align="left"><input id="single3" type="checkbox" checked="checked" value="1" /></td>
                                   <td width="17%" align="center">Yes</td>
                                   <td width="10%">&nbsp;</td>
                                   <td width="8%" align="left"><input id="multi3" type="checkbox" value="1" /></td>
                                   <td width="17%" align="center">No</td>
                                 </tr>
                               </table></td>
                             </tr>
                             <tr>
                               <td style="text-align:center; font-size:0.9em;">Please specify location of other system.</td>
                             </tr>
                             <tr>
                               <td><input type="text" id="specific_location2" class="form-control input-xs" /></td>
                             </tr>
                           </table></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                  <td width="25%" valign="top">
                  
                  <table border="0" width="100%">
                  <tr>
                  <td>
              <span><strong>Retailer Details</strong></span>
              <input placeholder="NAME" type="text" id="ref" value='.$invorowsw['ref'].' class="inputbox">			 
              <input placeholder="ABN" type="text" id="pvd" value='.$invorowsw['pvd'].' class="inputbox">
                  
                  </td>
                  </tr>
                  
                  <tr>
                  <td>
                  <div class="paneltextarea" style="background:#efefef; padding:8px;">
                   <span><strong>Solar Panel System</strong></span>
                  <div>
                      <span>Panel Brand</span>
                      <textarea name="panel_brand" id="panel_brand" class="ember-text-area ember-view" style="height:95px;">'.$invorowsw['panel_brand'].'</textarea>
                  </div>
                  <div>
                      <span>Pane Mode</span>
                      <textarea name="panel_mode" id="panel_mode" class="ember-text-area ember-view" style="height:95px;">'.$invorowsw['panel_mode'].'</textarea>
                  </div>
                  <div>
                      <span>Inverter Brand</span>
                      <textarea name="inverter_brand" id="inverter_brand" class="ember-text-area ember-view" style="height:95px;">'.$invorowsw['inverter_brand'].'</textarea>
                  </div>
                  <div>
                      <span>Inverter Model</span>
                      <textarea name="inverter_model" id="inverter_model" class="ember-text-area ember-view" style="height:95px;">'.$invorowsw['inverter_model'].'</textarea>
                  </div> 
                  <div>
                      <span>lnverter Series</span>
                      <textarea name="inverter_series" id="inverter_series" class="form-control ember-text-area ember-view" style="height:95px;">'.$invorowsw['inverter_series'].'</textarea>
                  </div> 
                  
                                   
                  </div>
                  </td>
                  </tr>
                  
                  <tr>
                  <td>
                   <div style="background:#d4d4d8;">
                  
                  <div>
                      
                      <input placeholder="Number of Panels" type="text" id="no_of_panels" class="inputbox" value='.$invorowsw['no_of_panels'].'>
                  </div>
                  <div>                     
                     <input placeholder="Rated Power Output(KW)" type="text" id="rpo" value='.$invorowsw['rpo'].' class="inputbox">
                  </div>
                 
                  
                                   
                  </div>
                   </td>
                  </tr>
                  
                  </table>                
                  
                 
                  	 
                 
                  
                  
                  
                 
                  
                  
                
                  </td>
                  
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">
                    
                    <table width="100%" style="background:#efefef; padding:10px;">
                    
                    <tr>
                    <td>
                      <table width="100%" border="0">
                            <tr>
                                <td width="20%" valign="top">Property Type</td>
                                <td width="3%" valign="top"><input id="resd" type="checkbox"';
								
								 if($invorowsw['resd']==1){
						  			$html .= 'checked';
					  			  }                                
									
								$html .= '></td>
                                <td valign="middle">Residential</td>
                                <td width="3%" valign="top"><input id="school" type="checkbox"';
								
								if($invorowsw['school']==1){
						  			$html .= 'checked';
					  			  } 
								
								
								$html .= '></td>
                                <td valign="middle">School</td>
                                <td width="3%" valign="top"><input id="commer" type="checkbox"';

								if($invorowsw['commer']==1){
						  			$html .= 'checked';
					  			  }
								
								
								$html .= '></td>
                                <td valign="middle">Commercial</td>
                                <td width="3%" valign="top"><input id="other" type="checkbox"';
								
								if($invorowsw['other']==1){
						  			$html .= 'checked';
					  			  }								
								
								$html .= '></td>
                                <td valign="middle">Other<input type="text" id="property_other" class="" /></td>
                            </tr>
                      </table>
                    </td>
                    </tr>
                    <tr>
                    <td>
                         <table width="100%" border="0">
                            <tr>
                            	<td width="20%" valign="top">Single/Muli Storu:</td>
                            	<td width="3%" valign="top"><span class="be-checkbox inline">
                            	  <input id="single_storey" type="checkbox" checked="checked" value="1" />
                            	</span></td>
                                <td width="7%" valign="middle">Single</td>
                                <td width="3%" valign="top"><span class="be-checkbox inline">
                                  <input id="multiple_storey" type="checkbox" value="1" />
                                </span></td>
                                <td width="7%" valign="middle">Multi</td>
                                <td width="3%" valign="top"><span class="be-checkbox inline">
                                  <input id="certs" type="checkbox" value="1" />
                                </span></td>
                                <td width="30%" valign="top">Number of small-scale tech certs (Stcs)</td>
                                <td valign="middle">
                                <input type="text" id="stc_nos" class="" />
                              </td>
                           </tr>
                      </table>                    
                    </td>                    
                    </tr>                    
                    </table>
                      
                   </td>
  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                   <tr>
                     <td colspan="2" height="65">&nbsp;</td>
  </tr>
                  <tr>
                    <td colspan="2">
                    
                    <table border="0" width="100%">
                        <tr>
                        <td style="background:#396; color:#fff; padding:8px;">Accreditation Information</td>
                        </tr>
                      
                      
                      <tr>
                       <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                         <tr>
                           <td colspan="4">INSTALLER DETAILS</td>
                         </tr>
                         <tr>
                           <td><input style="width:80%;" type="text" placeholder="Full Name" id="installer_name" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Phone" id="installer_phone" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Address" id="installer_address" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Accreditation Number" id="installer_accred_no" class="input-xs" /></td>
                         </tr>
                         <tr>
                           <td colspan="4">ELECTRICIAN DETAILS</td>
                         </tr>
                         <tr>
                           <td><input style="width:80%;" type="text" id="electrician_name" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Phone" id="electrician_phone" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Address" id="electrician_address" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Accreditation Number" id="electrician_accred_no" class="input-xs" /></td>
                         </tr>
                         <tr>
                           <td colspan="4">DESIGNER DETAILS</td>
                         </tr>
                         <tr>
                           <td><input style="width:80%;" type="text" placeholder="Full Name" id="designer_name" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Phone" id="designer_phone" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Address" id="designer_address" class="input-xs" /></td>
                           <td><input style="width:80%;" type="text" placeholder="Accreditation Number" id="designer_accred_no" class="input-xs" /></td>
                         </tr>
                        </table></td>
                      </tr>
                    
                    </table>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" height="5"></td>
                  </tr>
                  <tr>
                    <td colspan="2">                   
                      <div style="line-height:22px;">Mandatory written statement by the cec installer and designer:<br />
                       I <input type="text" id="installer_name_main" class="inputnobdr" />
                          (name of installer) was the accredited CEC Installer that completed the SGU installation at
                          <input type="text" id="installed_place" class="inputnobdr" />
                          and verify that i have installed the system, it meets the CEC accreditation guidelines, CEC Accreditation Code of Practice and I am bound by their Code of Conduct, have used panels and inverters approved by the CEC, followed all of the Clean Energy Regulators Guidelines, have $5m in Public Liability Insurace and the system meets the following Australian Standards, where applicable:-</div><br />
                        <table width="100%" border="0" class="bdrd">
                          <tr>
                            <td width="33%" valign="top"><div>
                              <h4>PV &amp; Inverter Standards</h4>
                              <ul>
                                <li>AS/NZS 5033:2005, Installation of photovoltaic (PV) arrays</li>
                                <li>AS/NZS 1170:2002, Structural Design actions, Part 2: Wind Action (PV Array)</li>
                                <li>AS/NZS 5033, PV modules are compliant and the product is listed at www.cleanenergycouncil.org.au</li>
                                <li>The grid connected inverter used has been tested to Standard AS 4777 and the product is listed at cleanevergycouncil.org.au</li>
                              </ul>
                            </div></td>
                            <td width="33%" valign="top"><div>
                              <h4>Grid Connected System</h4>
                              <ul>
                                <li>AS/NZS 3000:2007, Wiring Rules</li>
                                <li>AS 4777, this installation complies to this standard</li>
                                <li>AS/NZS 51768:2007, Lightning Protection</li>
                                <li>AS 4777:2005, Grid connection of energy system via inverters</li>
                              </ul>
                            </div></td>
                            <td width="33%" valign="top">
                            <div>
                              <h4>Standalone System</h4>
                              <ul>
                                <li>AS/NZS 4509:2009, Standalone Power systems part 1: Safety &amp; Installation</li>
                                <li>AS 4086:2:1997, Secondary batteries for use with standalone power system, Part 2: Installation &amp; maintenace, wind system AS/NZS 3000:2007, Wiring Rules</li>
                              </ul>
                            </div></td>
                          </tr>
                        </table>
                        
                        
                     
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><div style="line-height:18px;"><strong>I verify that all local, State or Territory government requirements have been met for. (i) The siting of the unit (ii) The attachment of the unit to the building or sturture. (iii) The grid connection of the system for the SGU installation.</strong> I vefiry that the SGU is
                          <span style="margin-top:7px; display:inline-block;"><input type="checkbox" id="grid_connected" value="1" /></span>
                          Grid connected
                          <span style="margin-top:7px; display:inline-block;"><input type="checkbox" id="battery_storage" value="1" /></span>
                          Connected to the grid with battery storage
                          <span style="margin-top:7px; display:inline-block;"><input type="checkbox" id="off_grid" value="1" /></span>
                          an Off grid installation and an electrical woker holding an unrestricted licence for electrical work issued by the State or Territory authority for the place where the unit was installed undertook all wiring of the unit that involves alternating current of 50 or more volts or direct current of 120. I confirm that the details in the above statement is correct.</div></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                    
                     <table border="0" width="100%">
                    	<tr>
                    	<td width="50%" valign="top">
                       
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                  <td><input type="text" style="width:85%;" placeholder="Signature of SGUs CEC Installer" id="sgu_installer_signature" class="input-xs inputnobdr" /></td>
                                  <td><input type="text" style="width:85%;" placeholder="CEC Number" id="cec_installer_no" class="input-xs inputnobdr" /></td>
                                </tr>
                                <tr>
                                  <td><input type="text" style="width:85%;"  placeholder="Print Name" id="print_installer_name" class="input-xs inputnobdr" /></td>
                                  <td><input type="text" style="width:85%;" placeholder="Date" id="sgu_inst_sig_date" class="input-xs inputnobdr" /></td>
                                </tr>
                          </table>
                       
                            
                        </td>
                        <td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><input type="text" style="width:85%;" placeholder="Signature of SGUs CEC Installer" id="sgu_installer_signature2" class="input-xs inputnobdr" /></td>
                            <td><input type="text" style="width:85%;" placeholder="CEC Number" id="cec_installer_no2" class="input-xs inputnobdr" /></td>
                          </tr>
                          <tr>
                            <td><input type="text" style="width:85%;" placeholder="Print Name" id="print_installer_name2" class="input-xs inputnobdr" /></td>
                            <td><input type="text" style="width:85%;" placeholder="Date" id="sgu_inst_sig_date2" class="input-xs inputnobdr" /></td>
                          </tr>
                        </table></td>
                        </tr>
                    </table></td>
                    </tr>
                     <tr>
                    <td colspan="2">
                    
                    
                     <table border="0" width="100%">
                     
                    <tr>
                    <td width="50%" valign="top">
                    <h4 style="padding:0px; margin:0px;">Mandatory Declaration</h4>
                    
                    <ul>
                              <li>I am the legal owner of the above small generation unit (SGU) and assign the right to create STCs to Emerging Energy Solutions Group Pty Ltd for the period stated above, commencing at the date of installation.</li>
                              <li>I have not preiously assigned or created any STCs for this system within this period.</li>
                              <li>To claim 14 years deeming for SGU. STUs mus be registered within 12 months or installation</li>
                    </ul></td>
                     <td width="50%" valign="top">
                          I understand that this system is eligible for<br /><input type="text" id="stc_eligible" class="input-xs inputnobdr" /> STCs and in exchange for assigning my right to create these STCs, I will receive a point of sale discount from the installers/suppliers. 
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><span style="margin:20px 0px 20px 0px; overflow:auto;">
                                <input type="text" id="owner_signature2" class="input-xs inputnobdr" />
                              </span></td>
                              <td><span style="margin:20px 0px 20px 0px; overflow:auto;">
                                <input type="text" id="owner_signature_date2" class="input-xs inputnobdr" />
                              </span></td>
                            </tr>
                            <tr>
                              <td><span style="margin:20px 0px 20px 0px; overflow:auto;">
                                <input type="text" id="agent_signature2" class="input-xs inputnobdr" />
                              </span></td>
                              <td><span style="margin:20px 0px 20px 0px; overflow:auto;">
                                <input type="text" id="agent_signature_date2" class="input-xs inputnobdr" />
                              </span></td>
                            </tr>
                      </table></td>
                     </tr>
                     </table>
                    
                    
                    
                    </td>
                    </tr>
                    
                    <tr>
                    <td colspan="2">
                    <table border="0" width="100%">
                    <tr>
                    <td width="50%" valign="top">
                    <ul>
                          <li>I understand I am under no obligation to assign STCs to Emerging Energy Solutions Group Pty Ltd</li>
                          <li>I agree to repay the STC to Energy Solutions Group Pty Ltd should my assignment be invalid</li>
                          <li>I understand that an agent of the Clean Energy Regulator or Emerging Energy Solutions Group Pty Ltd may wish to inspect the SGU within the five years of certificate redemption</li>
                          <li>I must retain receipts and proof of the installation date for the life of the STCs</li>
                          <li>I am aware that penalties can be applied for providing misleading information in the form under the Renewable energy (Electricity) Act 2000</li>
                          <li>I further declare that the accredited CEC Installer named on this form physically attended the installation of the unit</li>
                      </ul>
                     
                      </td>
                    <td width="50%" valign="top"><strong>PRIVACY DECLARATION:</strong>Emerging Energy Solution Group Pty Ltd will only use this personal information as intended and will not sell or divulge this to any third parties other than the Clean Energy Regulators.
                      </td>
                    </tr>
                    
                    </table>                        
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  
                  
</table>';

$document->loadHtml($html);
$document->setPaper('A4', 'portrait');
$document->render();
$document->stream("dompdf_out.pdf", array("Attachment" => false));



?>