<style type="text/css">
<!--
.style1 {color: #C4C4C4}

-->
</style>
<div id="content_wrapper">
	  <div id="content_main">

<div id="content_main_otherpage_detail_wrapper">

 

<?php
include('pesan_error.php'); ?>

<img src="images/subscribe-newsletter-magazine.png" width="660px" style="margin-bottom:10px;">

<div style="float:left;">
<form action='<?php
echo $link_host ?>process-subscribe<?php
echo $extention ?>' method='post' name='FormUsersRegister' id='FormUsersRegister'>

<table width="660"  border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#333333">
  <tr>
    <td height="218">
	
	
	<table width="650"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333" style="margin-top:17px;";>
 
      <tr>
        <td colspan="2" valign="top"> 
          <table width="577"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="81" height="30" class="style1"><div align="right">Select Subscribe </div></td>
              <td width="21" class="style1"><div align="center">:</div></td>
              <td width="475"> 
                  <select name="subscribe" title="" size="1">
                          <option value="">Choose Option</option>
                          <option value="Subscribe_Magazine"> Subscribe Magazine </option>
                    </select>
                 </td>
            </tr>
            <tr>
              <td height="30"  class="style1"><div align="right">Category</div></td>
              <td class="style1"><div align="center">:</div></td>
              <td><span class="form_element cf_textbox">
                <select name="category">
                  <option value="">Choose Option</option>
                  <option value="Accessories, Jewelry and Watches">Accessories, Jewelry and Watches</option>
                  <option value="Agency/Media Buyer">Agency/Media Buyer</option>
                  <option value="Apparel">Apparel</option>
                  <option value="Art">Art</option>
                  <option value="Auto">Auto</option>
                  <option value="Beauty, Grooming and Fragrances">Beauty, Grooming and Fragrances</option>
                  <option value="Design/Interior/Exterior">Design/Interior/Exterior</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Entertainment/Events">Entertainment/Events</option>
                  <option value="Footwear">Footwear</option>
                  <option value="Gaming">Gaming</option>
                  <option value="Liquor">Liquor</option>
                  <option value="Packaged Goods">Packaged Goods</option>
                  <option value="Retail">Retail</option>
                  <option value="Technology">Technology</option>
                  <option value="Tobacco">Tobacco</option>
                  <option value="Travel">Travel</option>
                  <option value="Other">Other</option>
                </select>
              </span></td>
            </tr>
          </table>		  </td>
        </tr>
      <tr>
        <td valign="top">		<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333">
          <tr>
            <td width="81" height="30"><div align="right" class="style1">Firstname</div></td>
            <td width="21"><div align="center" class="style1">:</div></td>
            <td width="216"><span class="form_element cf_textbox"><span class="style1">
              <input name="firstname" type="text"  id="firstname3" title="" value="<?php
echo $row_item->firstname ?>" size="30" maxlength="150" />
            </span> </span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">Lastname</div></td>
            <td><div align="center" class="style1">:</div></td>
            <td><span class="form_element cf_textbox"><span class="style1">
              <input name="lastname" type="text"  id="lastname3" title="" value="<?php
echo $row_item->lastname ?>" size="30" maxlength="150" />
            </span> </span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">Company</div></td>
            <td><div align="center" class="style1">:</div></td>
            <td><span class="form_element cf_textbox"><span class="style1">
              <input name="company" type="text"  id="company3" title="" value="<?php
echo $row_item->company ?>" size="30" maxlength="150" />
            </span>
</span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">Job Title</div></td>
            <td><div align="center" class="style1">:</div></td>
            <td><span class="form_element cf_textbox"><span class="style1">
              <input name="jobtitle" type="text"  id="jobtitle3" title="" value="<?php
echo $row_item->jobtitle ?>" size="30" maxlength="150" />
</span> </span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">Address</div></td>
            <td><div align="center" class="style1">:</div></td>
            <td> <span class="style1"><span class="form_element cf_textbox">
            <input name="address" type="text"  id="address3" title="" value="<?php
echo $row_item->address ?>" size="30" maxlength="150" />

</span> </span> </td>
          </tr>
        </table></td>
        <td valign="top">
		
		
		
		<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333">
          <tr>
            <td width="99" height="30"><div align="right" class="style1">City </div></td>
            <td width="24"><div align="center" class="style1">:</div></td>
            <td width="203"><span class="form_element cf_textbox">
              <input name="city" type="text" title="" value="<?php
echo $row_item->city ?>" size="27" maxlength="150" />
            </span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">State</div></td>
            <td><div align="center" class="style1">:</div></td>
            <td><span class="form_element cf_textbox">
              <input name="state" type="text" title="" value="<?php
echo $row_item->state ?>" size="27" maxlength="150" />
            </span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">Postal Code </div></td>
            <td><div align="center" class="style1">:</div></td>
            <td><span class="form_element cf_textbox">
              <input name="zipcode" type="text" title="" value="<?php
echo $row_item->zipcode ?>" size="27" maxlength="150" />
            </span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">Phone Number</div></td>
            <td><div align="center" class="style1">:</div></td>
            <td><span class="form_element cf_textbox"><span class="style1">
              <input name="phone" type="text" title="" value="<?php
echo $row_item->phone ?>" size="27" maxlength="150" />
            </span> </span></td>
          </tr>
          <tr>
            <td height="30"><div align="right" class="style1">Email</div></td>
            <td><div align="center" class="style1">:</div></td>
            <td> <span class="style1"><span class="form_element cf_textbox">
              <input name="email" type="text" title="" value="<?php
echo $row_item->email ?>" size="27" maxlength="150" />
            </span> </span> </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="50"><input type="hidden" name="SubmitButton"></td>
        <td align="right">
		
		 
		 
<input type="image" title="Subscribe" name="imgSubmitButton" alt="Submit" src="images/button_submit_orange_black.png" style="margin-right:25px;">
		
		</td>
      </tr>
    </table>
      </td>
  </tr>
</table>
<br>
</form>
</div>


</div>

	  </div><!-- END CONTENT MAINPAGE -->
	  <div id="content_sidebar">
			  <?php include('sidebar.php'); ?>
	  </div>
</div>

