<?php

include("dbconn.php");
?>
<html>
<head>
	<style>
		span{
			color:red;
		}
	</style>
</head>
<body bgcolor="#808080"> 
<form action="driverreg_action.php"  method="post" onsubmit="return validate()">
<div class="container" style="margin-left:30px;padding-bottom:150px;padding-top: 7%;background-image:url(images/about-2-720x720.jpg) ;background-repeat: no-repeat;background-size: cover;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #000000; border-radius: 4px; top: 14px;">
                <h1 style="text-align: center">Driver Registration</h1>
               
                	<div class="form-horizontal">

					<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >First Name</label>
                         <div class="col-sm-10">
                           	<input type="text" id="fname" name="fname" onclick="return validate()" class="form-control" autocomplete="off" onkeyup="return validate()" onblur="return validate()" />
                            
                        	</div>
							<div>
								<span id="fname_error"></span>
							</div>
                    	</div>
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >Last Name</label>
                         <div class="col-sm-10">
                           	<input type="text" id="lname" name="lname" onclick="return validate()"  class="form-control" autocomplete="off" onkeyup="return validate()" onblur="return validate()" />
                            
                        	</div>
							<div>
								<span id="lname_error"></span>
							</div>
                    	</div>



                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >Licence no</label>
                         <div class="col-sm-10">
                           	<input type="text" id="licno" name="licno" onclick="return validate()"  class="form-control" autocomplete="off" onkeyup="return validate()" onblur="return validate()" />
                            
                        	</div>
							<div>
								<span id="licno_error"></span>
							</div>
                    	</div>


						<div class="form-group"  style="margin-top:10px;">
                        		
								<label class="control-label col-sm-2" >Gender</label>
								   <div class="col-sm-10">
									 <input type="radio" id="male" name="gender" value="male" >Male</input>&nbsp;
									  <input type="radio" id="female" name="gender" value="female" >Female</input>&nbsp;
									  <input type="radio" id="others" name="gender" value="others" >Others</input>
									  </div>
									  <div>
								<span id="gender_error"></span>
							</div>
								  </div>

								  <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >DOB</label>
                         <div class="col-sm-10">
			<input type="date" id="dob" name="dob" min="1970-01-01" max="2005-12-31" class="form-control">
			</div>
			<div>
								<span id="date_error"></span>
							</div>
                    	</div>

						
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >Select State</label>
                         <div class="col-sm-10">
			  <select  name="state" id="inputState" class="form-control" onclick="return validate()" onchange="return validate()" onKeyUp="return validate()" onblur="return validate()">
				<option value="SelectState">Select State</option>
				<option value="Andra Pradesh">Andra Pradesh</option>
				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Bihar">Bihar</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Goa">Goa</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jammu and Kashmir">Jammu and Kashmir</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Madya Pradesh">Madya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Orissa">Orissa</option>
				<option value="Punjab">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Telangana">Telangana</option>
				<option value="Tripura">Tripura</option>
				<option value="Uttaranchal">Uttaranchal</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="West Bengal">West Bengal</option>
				<option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
				<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
				<option value="Daman and Diu">Daman and Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="Lakshadeep">Lakshadeep</option>
				<option value="Pondicherry">Pondicherry</option>
			  </select>
			  </div>
			 
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >Select District</label>
                         <div class="col-sm-10">
			  <select id="inputDistrict" name="district" class="form-control">
				  <option value="">--Select One--</option>
			  </select>
</div>

</div>


                     <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >Address Line 1</label>
                         <div class="col-sm-10">
                           	<input type="text" id="address1" name="address1" onclick="return validate()" class="form-control" autocomplete="off"/>
                            
                        	</div>
							<div>
								<span id="address_error"></span>
							</div>
                    	</div>


						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >Address Line 2</label>
                         <div class="col-sm-10">
                           	<input type="text" id="address2" name="address2" onclick="return validate()" class="form-control" autocomplete="off" />
                            
                        	</div>
							<div>
								<span id="address_error"></span>
							</div>
                    	</div>

						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >Address Line 3</label>
                         <div class="col-sm-10">
                           	<input type="text" id="address3" name="address3" onclick="return validate()" class="form-control" autocomplete="off" />
                            
                        	</div>
							<div>
								<span id="address_error"></span>
							</div>
                    	</div>

				
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2"  >PIN</label>
                         <div class="col-sm-10">
                           	<input type="text" id="pin" name="pin" onclick="return validate()" class="form-control" autocomplete="off"/>
                            
                        	</div>
							<div>
								<span id="pin_error"></span>
							</div>
                    	</div>

				

								
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="course_name">Phone Number</label>
                         <div class="col-sm-10">
                           	<input type="text" id="phone" name="phone" onclick="return validate()" class="form-control" autocomplete="off" onKeyUp="return validate()" onblur="return validate()"/>
                            
                        	</div>
							<div>
								<span id="phone_error"></span>
							</div>
                    	</div>    

				
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="course_name">Email</label>
                         <div class="col-sm-10">
                           <input type="text" id="email" name="email" onclick="return validate()" class="form-control" autocomplete="off" onKeyUp="return validate()" onblur="return validate()"/>
                            
                        	</div>
							<div>
								<span id="email_error"></span>
							</div>
                    	</div>
	

						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="course_name">Password</label>
                         <div class="col-sm-10">
                         <input type="password" id="password" onclick="return validate()" class="form-control"  name="password" autocomplete="off" onKeyUp="return validate()" onblur="return validate()"/>
                        	</div>
							<div>
								<span id="password_error"></span>
							</div>
                    	</div>     
              
                        
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="course_name">Confirm Password</label>
                         <div class="col-sm-10">
                         <input type="password" id="cpassword" onclick="return validate()" class="form-control" name="cpassword" autocomplete="off" onKeyUp="return validate()" onblur="return validate()"/>
                            
                        	</div>
							<div>
								<span id="cpassword_error"></span>
							</div>
                    	</div>

                   <div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div>
                         		<div class="col-sm-6">
					<input type="submit" name="btnSave" id="signup" value="Register" value="Save" class="btn btn-danger" style="width:100px; height:35px;" onclick=" return validate()">
                   </div>

				   <div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div>
                         		<div class="col-sm-6">

                    <div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div>
					<input type="reset" value="CLEAR" id="clear" name="clear">  
                </div>
                </div>

				<div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div>
                         		<div class="col-sm-6">

					<p>Already have an account? <a href="driverlogin.php">login now</a></p>
</div>
</div>

	</form>
	</div>
                        		</div>
                        
					</div>
			</div>
		</div>
</div>
</form>
</body>
<script src="jquery_lib.js"></script>
<script   src="state_n_district.js"></script>

<script>
        function validate()
         {
             var fname,lname,licno,gender,email,password,cpassword,phone;
             var pin;
             fname=document.getElementById('fname').value;
             lname=document.getElementById('lname').value;
             licno=document.getElementById('licno').value;
             email=document.getElementById('email').value;
            //  addressline1=document.getElementById('address1').value;
            //  addressline2=document.getElementById('address2').value;
            //  addressline3=document.getElementById('address3').value;
             pin=document.getElementById('pin').value;
             phone=document.getElementById('phone').value;
             password=document.getElementById('password').value;
             cpassword=document.getElementById('cpassword').value;
             if(document.getElementById('male').checked==true)
                 gender=document.getElementById('male').value;
             else if(document.getElementById('female').checked==true)
                 gender=document.getElementById('female').value;
             else if(document.getElementById('others').checked==true)
                 gender=document.getElementById('others').value;
             else gender="";
              if(fname=="")
             {
                 document.getElementById('fname_error').innerHTML="**Enter your first name**";
				 document.getElementById('fname_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('fname_error').style.display="none";
			 }
             if(/^[a-zA-Z]+$/.test(fname) == false)
             {  
                 document.getElementById('fname_error').innerHTML="**Please enter a valid first name**";
				 document.getElementById('fname_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('fname_error').style.display="none";
			 }
             


             if(lname=="")
             {
                 document.getElementById('lname_error').innerHTML="**Enter your first name**";
				 document.getElementById('lname_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('lname_error').style.display="none";
			 }
             if(/^[a-zA-Z]+$/.test(fname) == false)
             {  
                 document.getElementById('lname_error').innerHTML="**Please enter a valid first name**";
				 document.getElementById('lname_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('lname_error').style.display="none";
			 }


             if(licno=="")
             {
                 document.getElementById('licno_error').innerHTML="**Enter your licence number**";
				 document.getElementById('licno_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('licno_error').style.display="none";
			 }
             if(/^\d{6}$/.test(licno) == false)
             {  
                 document.getElementById('licno_error').innerHTML="**Please enter a valid licence number**";
				 document.getElementById('licno_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('licno_error').style.display="none";
			 }

             



             if(gender=="")
             {
                 document.getElementById('gender_error').innerHTML="**Please select your gender**";
				 document.getElementById('gender_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('gender_error').style.display="none";
			 }


            //  if(addressline1=="" || addressline2=="" || addressline3=="")
            //  {
            //      document.getElementById('address_error').innerHTML="**please fill your address**";
			// 	 document.getElementById('address_error').style.display="block";
            //      return false;
             //}
             if(phone=="")
             {
                 document.getElementById('phone_error').innerHTML="**Enter your phone number**";
				 document.getElementById('phone_error').style.display="block";
                 return false;
             }
			 else
			{
				document.getElementById('phone_error').style.display="none";
			}
             if(/^\d{10}$/.test(phone)==false) 
             {
                 document.getElementById('phone_error').innerHTML="**Enter a valid phone number**";
				 document.getElementById('phone_error').style.display="block";
                 return false;
             }
			 else
			{
				document.getElementById('phone_error').style.display="none";
			}
             
             if(pin=="")
             {
                document.getElementById('pin_error').innerHTML="**Please enter your pincode**";
				document.getElementById('pin_error').style.display="none";
                return false;
             }
			 else
			 {
				document.getElementById('pin_error').style.display="none";
			 }
             if(/^\d{6}$/.test(pin)==false)
             {
                document.getElementById('pin_error').innerHTML="**Please enter a valid pincode**";
				document.getElementById('pin_error').style.display="block";
                return false;
             }
			 else
			 {
				document.getElementById('pin_error').style.display="none";
			 }
             if(email=="")
             {
                 document.getElementById('email_error').innerHTML="**Enter an email id**";
				 document.getElementById('email_error').style.display="block";
                 return false;
             }
			 else
			 {
				document.getElementById('email_error').style.display="none";
			 }
             if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
             {
                 document.getElementById('email_error').innerHTML="**Enter a valid email id**";
				 document.getElementById('email_error').style.display="block";
                   return false;
             }
			 else
			 {
				document.getElementById('email_error').style.display="none";
			 }
             if(password=="")
             {
                 document.getElementById('password_error').innerHTML="**Password cannot be empty**";
				 document.getElementById('password_error').style.display="block";
                 return false;
             }
			 else
			{
				document.getElementById('password_error').style.display="none";
			}
    
			if(password.length<8 || password.length>16)
			{
				document.getElementById('password_error').innerHTML="**Password should have length between 8 and 16**";
				document.getElementById('password_error').style.display="block";
				return false;
			}
			else
			{
				document.getElementById('password_error').style.display="none";
			}
			if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$/.test(password)==false)
			{
				document.getElementById('password_error').innerHTML="**Password must have minimum 8 and maximum 16 characters, at least one uppercase letter, one lowercase letter, one number and one special character**";
				document.getElementById('password_error').style.display="block";
				return false;
			}
			else
			{
				document.getElementById('password_error').style.display="none";
			}
			if(cpassword=="")
			{
				document.getElementById('cpassword_error').innerHTML="**confirm password cannot be empty**";
				document.getElementById('cpassword_error').style.display="block";
				return false;
			}
			else 
			{
				document.getElementById('cpassword_error').style.display="none";
				return true;
			}
			if(password!=cpassword)
			{
				document.getElementById('cpassword_error').innerHTML="**Password and confirm password must be matched**";
				document.getElementById('cpassword_error').style.display="block";
				return false;
			}
			else 
			{
				document.getElementById('cpassword_error').style.display="none";
				return true;
			}
		}
         function onclear()
         {
             document.getElementById('gender_error').innerHTML="";
             document.getElementById('fname_error').innerHTML="";
             document.getElementById('lname_error').innerHTML="";
             document.getElementById('email_error').innerHTML="";
             document.getElementById('address_error').innerHTML="";
             document.getElementById('pin_error').innerHTML="";
             document.getElementById('phone_error').innerHTML="";
             document.getElementById('password_error').innerHTML="";
             document.getElementById('cpassword_error').innerHTML="";
         }
     </script>
</html>