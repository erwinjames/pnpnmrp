
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<link rel="shortcut icon" href="PNP.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link rel="stylesheet" href="build/css/intlTelInput.css">
<!-- <link rel="stylesheet" href="build/css/demo.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	
<div class="container">
	<div class="row">
		<div id="ui">

		<form class="form-group" method="post" action="includes/registerdMember.php" onsubmit="return checkReqFields ()">

		<div class="row logo">
			<div class="col-lg-5"></div>
				<div class="col-lg-2">
					<img src="PNP2.png">
				</div>
				<div class="col-lg-5"></div>
			</div>

			<br>
			<br>
			<br>

			<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<center><b><p>Account Information</p></b></center><hr>
			</div>
			<div class="col-lg-4"></div>
			</div>

			<br>

			<div class="row" id="cntrlnumber">
				<div class="col-lg-4">
 					<label>Region</label>
					<select name="region" class="form-control" id="region" required>
    					<option value="I">I</option>
    					<option value="II">II</option>
    					<option value="III">III</option>
    					<option value="IV-A">IV-A</option>    	
    					<option value="IV-B">IV-B</option>
    					<option value="V">V</option>
    					<option value="CAR">CAR</option>
    					<option value="NCR">NCR</option>   				
    					<option value="VII">VII</option>
    					<option value="VIII">VIII</option>
    					<option value="X">X</option>
    					<option value="XI">XI</option>   
    					<option value="XII">XII</option>
    					<option value="XIII">XIII</option>    
    					<option value="BARMM">BARMM</option>    
    				</select>
  				</div>	
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<label>Control Number</label>
					<input name="control_number" class="form-control" type="text" readonly>
					</div>
			</div>

			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Email</label>
    				<div class="col-sm-10">
     				 <input type="email" name="email" class="form-control is-invalid" id="inputEmail3" style="width: 50%" required>
    				</div>
			</div>

			<br>

			<div class="form-group row">
   				<label class="col-sm-2 col-form-label">Phone Number</label>
    				<div class="col-sm-10">
    				<input id="phone" name="phone" type="tel" class="form-control" style="width: 50%;" required>
				</div>
			</div>

			<br>

			<div class="form-group row">
   				<label class="col-sm-2 col-form-label">Password</label>
    				<div class="col-sm-10">
					<input type="password" name="password" id="mypassword" class="form-control" style="width: 50%;" required>
					<input type="checkbox" onclick="myFunction()"> Show Password
				</div>
			</div>

			<br>
			<br>
			<br>

			<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<center><b><p>Personal Information</p></b></center><hr>
			</div>
			<div class="col-lg-4"></div>
			</div>

			<br>

			<div class="row accntinfo">
				<div class="col-lg-4">
				<label>First Name</label>
				<input type="text" name="fname" class="form-control" required>
				</div>
				
				<div class="col-lg-3">
				<label>Middle Name</label>
				<input type="text" name="mname" class="form-control" required>
				</div>
				
				<div class="col-lg-3">
				<label>Last Name</label>
				<input type="text" name="lname" class="form-control" required>
				</div>
				
				<div class="col-lg-2">
					<label>Suffix</label>
					<select name="suffix" class="form-control" id="Suffix">
    					<option value=""></option>
      					<option value="Jr">Jr</option>
     	 				<option value="Sr">Sr</option>
      					<option value="I">I</option>
      					<option value="II">II</option>
      					<option value="III">III</option>
    				</select>
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-lg-3">
				<label>Nationality</label>
				<input type="text" name="nationality" class="form-control" required>
				</div>
				
				<div class="col-lg-3">
					<label>Gender</label>
					<select name="gender" class="form-control" id="gender" required>
      					<option value="male">Male</option>
     	 				<option value="female">Female</option>
    					</select>
				</div>
				
				<div class="col-lg-3">
					<label>Blood Type</label>
					<select name="btype" class="form-control" id="btype" required>
    					<option value=""></option>
    					<option value="A">A</option>
    					<option value="-A">-A</option>
    					<option value="B">B</option>
    					<option value="-B">-B</option>
    					<option value="AB">AB</option>    					
    					<option value="-AB">-AB</option>
    					<option value="O">O</option>
    					<option value="+O">+O</option>
    				</select>
				</div>
				
				<div class="col-lg-3">
					<label>Status</label>
					<select name="status" class="form-control" id="status" required>
    				
    					<option value="Single">Single</option>
    					<option value="Married">Married</option>
    					<option value="Remarried">Remarried</option>
    					<option value="Widowed">Widowed</option>
    					<option value="Divorced">Divorced</option>   
    				</select>
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-lg-3">
					<label>Birthdate</label>
       				<div class="input-group">
        				<div class="input-group-addon">
         					<i class="fa fa-calendar"></i>
        				</div>
        				<input class="form-control" id="date" name="date" placeholder="" type="text"  required/>
       				</div>
      			</div>
      			<div class="col-lg-3">
					<label>SSS No.</label>
					<input type="text" name="sss" class="form-control">
      			</div>
      			<div class="col-lg-3">
					<label>Tin No.</label>
					<input type="text" name="tin" class="form-control">
      			</div>
			</div>

			<br>
			<br>
			<br>

			<div class="row">
				<div class="col-lg-3">
					<label>House# / Lot / Blk. / Phase</label>
					<input type="text" name="hlbp" class="form-control">
  				</div>
				
  				<div class="col-lg-3">
 					<label>Floor Number</label>
					<input type="text" name="flrnumber" class="form-control">
  				</div>
				
  				<div class="col-lg-3">
 					<label>Building / Apartment</label>
					<input type="text" name="ba" class="form-control">
  				</div>

  				<div class="col-lg-3">
 					<label>Street</label>
					<input type="text" name="street" class="form-control">
  				</div>
  			</div>

			<br>

			<div class="row">
				<div class="col-lg-3">
					<label>Sitio / Purok</label>
					<input type="text" name="sp" class="form-control">
  				</div>
				
  				<div class="col-lg-3">
 					<label>Subdivision</label>
					<input type="text" name="subd" class="form-control">
  				</div>
				
  				<div class="col-lg-3">
 					<label>Barangay</label>
					<input type="text" name="brgy" class="form-control" required>
  				</div>

  				<div class="col-lg-3">
 					<label>Town / City</label>
					<input type="text" name="tc" class="form-control" required>
  				</div>
  			</div>	

			<br>

			<div class="row">
				<div class="col-lg-3">
					<label>Province</label>
					<input type="text" name="province" class="form-control" required>
  				</div>			
  				<div class="col-lg-3">
 					<label>Country</label>
					<input type="text" name="country" class="form-control">
  				</div>

  				<div class="col-lg-3">
 					<label>Zip Code</label>
					<input type="text" name="zcode" class="form-control" required>
  				</div>
  				<div class="col-lg-3"></div>
  			</div>

			<br>
			<br>
			<br>

			<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<center><b><p>Educational Background</p></b></center><hr>
			</div>
			<div class="col-lg-3"></div>
			</div>

			<br>

			<div class="row educbg">
				<div class="col-lg-4">
				<label>Primary</label>
				<input type="text" name="elem" class="form-control" required>
				</div>
				
				<div class="col-lg-4">
				<label>Secondary</label>
				<input type="text" name="hs" class="form-control" required>
				</div>
				
				<div class="col-lg-4">
				<label>Tertiary</label>
				<input type="text" name="uc" class="form-control" required>
				</div>
			</div>
			
			<br>
			<br>
			<br>

<!-- 			<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<center><b><p>Local Church Data</p></b></center><hr>
			</div>
			<div class="col-lg-4"></div>
			</div>

			<br>

			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Name of Church</label>
    				<div class="col-sm-10">
     				 <input type="email" class="form-control" id="noc" style="width: 50%;">
    			</div>
			</div>

			<br>

			<div class="form-group row">
   				<label class="col-sm-2 col-form-label">Address</label>
    				<div class="col-sm-10">
     				 <input type="text" class="form-control" id="churchaddress" style="width: 50%;">
				</div>
			</div>

			<br>

			<div class="form-group row">
   				<label class="col-sm-2 col-form-label">Contact Number</label>
    				<div class="col-sm-10">
    				<input id="conphone" name="conphone" type="tel" class="form-control" style="width: 50%;">
				</div>
			</div>

			<br>
			<br>

			<div class="row">
      			<div class="col-lg-6">
					<label>Head of the Oraganization</label>
					<input type="text" name="headorg" class="form-control">
      			</div>
      			<div class="col-lg-6">
					<label>Position Title</label>
					<input type="text" name="postitle" class="form-control">
      			</div>
      		</div>

			<br>

      		<div class="row">	
      			<div class="col-lg-6">
					<label>Place Organized</label>
					<input type="text" name="placeorganized" class="form-control">
      			</div>
      			<div class="col-lg-6">
					<label>Date Organized</label>
       				<div class="input-group">
        				<div class="input-group-addon">
         					<i class="fa fa-calendar"></i>
        				</div>
        				<input class="form-control" id="dateorganized" name="dateorganized" placeholder="" type="text"/>
       				</div>
      			</div>
			</div>

			<br>
			<br>

<fieldset class="form-group">
    <div class="row">
      	<label class="col-form-label col-sm-4 pt-0">Registered with S.E.C</label>
      		<div class="col-sm-8">
				<div class="form-check form-check-inline">
					<label class="form-check-label" style="font-weight: normal;">
          			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="secyes">
          			Yes
        		</div>
			
				<div class="form-check form-check-inline">
					<label class="form-check-label" style="font-weight: normal;">
          			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="secno">
          			No
        		</div>
      		</div>
	</div>
</fieldset>

  			<br>
  			<br>

<div class="row">
	<div class="col-lg-4">
		<label>Nature of Ministry</label>
	</div>
	<div class="col-lg-4"></div>
	<div class="col-lg-4"></div>
</div>

<div class="row">
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  		Denomination
	</div>

	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  		Christian School
	</div>
</div>

<div class="row">
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
 		Training (Bible College, Seminary, School Ministry)
	</div>
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
 		Media Ministry (Print, Radio, TV)
	</div>
</div>

<div class="row">
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option5">
 		Evangelism / Mission / Church Planting
	</div>
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option6">
 		Fellowship
	</div>
</div>
<div class="row">
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option7">
 		Para-Church
	</div>
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option8">
 		Others
	</div>
</div>

  			<br>
  			<br>

<fieldset class="form-group">
    <div class="row">
		<label class="col-form-label col-sm-4 pt-0">Are you called to the Five Fold Gifts?</label>
      	<div class="col-sm-8">
			<div class="form-check form-check-inline">
				<label class="form-check-label" style="font-weight: normal;">
    			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="giftsyes"> Yes
				</label>
			</div>

			<div class="form-check form-check-inline">
  				<label class="form-check-label" style="font-weight: normal;">
    			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="giftsno"> No
  				</label>
			</div>
		</div>
    </div>
</fieldset>


<div class="row">
	<div class="col-lg-4">
		<i>If YES, please check:</i>
	</div>
	<div class="col-lg-4"></div>
	<div class="col-lg-4"></div>	
</div>

<div class="row">
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
 		Apostle
	</div>
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
 		Prophet
	</div>
</div>

<div class="row">
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
 		Evangelist
	</div>
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
 		Pastor
	</div>
</div>

<div class="row">
	<div class="form-check form-check-inline col-lg-6">
  		<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
 		Teacher
	</div>
	<div class="form-check form-check-inline col-lg-6"></div>
</div> -->

<div class="row">
	<div class="col-lg-6">
		<label>Referred By</label>
		<input type="text" name="referral" class="form-control" required>
		</div>
	<div class="col-lg-6"></div>
</div>

<br>
<br>
<br>

<!-- <div class="row">
	<div class="custom-file col-lg-4">
	<label class="custom-file-label" for="customFile">Attach Photo</label>
  	<input type="file" class="custom-file-input" id="customFile">
</div>
<div class="col-lg-4"></div>
<div class="col-lg-4"></div>
</div>

<br>

<div class="row">
	<div class="custom-file col-lg-4">
		<label class="custom-file-label" for="customFile">Attach Signature</label>
  		<input type="file" class="custom-file-input" id="customFile">
	</div>
	<div class="col-lg-4"></div>
	<div class="col-lg-4"></div>
</div>

<br>

<div class="row">
	<div class="custom-file col-lg-4">
		<label class="custom-file-label" for="customFile">Attach Payment</label>
  		<input type="file" class="custom-file-input" id="customFile">
	</div>
<div class="col-lg-4"></div>
<div class="col-lg-4"></div>
</div>
	
			<br>
			<br>
			<br> -->

			<div class="row">
      			<div class="col-lg-6">
					<label>In case of emergency</label>
      			</div>
      			<div class="col-lg-6"></div>
      		</div>

      		<br>

			<div class="form-group row">
    			<label class="col-sm-2 col-form-label" style="font-weight: normal;">Contact Person</label>
    				<div class="col-sm-10">
     				 <input name="inContact" type="text" class="form-control" id="InPerson" style="width: 50%;" required>
    			</div>
			</div>

			<div class="form-group row">
   				<label class="col-sm-2 col-form-label" style="font-weight: normal;">Phone Number</label>
    				<div class="col-sm-10">
    				<input id="InConPhone" name="InConPhone" type="tel" class="form-control" style="width: 50%;" required>
				</div>
			</div>

			<div class="form-group row">
    			<label class="col-sm-2 col-form-label" style="font-weight: normal;">Address</label>
    				<div class="col-sm-10">
     				 <input name="addresss" type="text" class="form-control" id="InConAdd" style="width: 50%;" required>
    			</div>
			</div>


<br>
<br>
<br>

<div class="form-group row">
	<div class="col-lg-4">
        <label>Attach ID Picture</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input name="AttachId" type="file" id="IdPic">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
    </div>
<div class="col-lg-4"></div>
<div class="col-lg-4"></div>
</div>

<br>

<div class="form-group row">
	<div class="col-lg-4">
        <label>Attach Signature</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input name="AttachSig" type="file" id="PhotoSign">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
    </div>
<div class="col-lg-4"></div>
<div class="col-lg-4"></div>
</div>

<br>

<div class="form-group row">
	<div class="col-lg-4">
        <label>Attach Receipt</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input name="AttachReceipt" type="file" id="AttReceipt">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
    </div>
<div class="col-lg-4"></div>
<div class="col-lg-4"></div>
</div>

<br>
<br>
<br>

<fieldset class="form-group">
    <div class="row">
		<label class="col-form-label col-sm-2 pt-0">Subscription</label>
      	<div class="col-sm-10">
			<div class="form-check form-check-inline">
				<label class="form-check-label" style="font-weight: normal;">
    			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="s1"> 1 year plan
				</label>
			</div>

			<div class="form-check form-check-inline">
  				<label class="form-check-label" style="font-weight: normal;">
    			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="s2"> 2 year plan
  				</label>
			</div>
		</div>
    </div>
</fieldset>

<br>
<br>
<br>

<div class="row">
	<div class="col-lg-5"></div>
	<div class="col-lg-3">
	<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	</div>
	<div class="col-lg-4"></div>
</div>

		</form>
		</div>
	</div>
</div>

<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script src="build/js/intlTelInput.js"></script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})

	$(document).ready(function(){
		var date_input=$('input[name="dateorganized"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})


	function myFunction() {
 		var x = document.getElementById("mypassword");
  			if (x.type === "password") {
    		x.type = "text";
  			}
  			else
  			{
    		x.type = "password";
  		}
	}

    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });

    var input = document.querySelector("#InConPhone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });

$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#IdPic").change(function(){
		    readURL(this);
		}); 	
	});

$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#PhotoSign").change(function(){
		    readURL(this);
		}); 	
	});

$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#AttReceipt").change(function(){
		    readURL(this);
		}); 	
	});

</script>

</body>
</html>