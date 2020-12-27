<!DOCTYPE html>
<html>
<head>
<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="design.css">	

</head>
<body>
	<div class="home" id="home">
		<div class="container">
			
			<div class="row header">
				<div class="col-md-2"></div>
				
				<div class="col-md-8">
				<center><img src="PNP2.png" alt="" style="width: 142px; height: 125px"></center>
				</div>
				
				<div class="col-md-2">
				</div>
			</div>

			<div class="note">
				<div class="col-md-12">
				<p>FILL UP THE FORM WITH CORRECT INFORMATION</p>
				</div>
			</div>

			<div class="accountinfo row header" style="padding-bottom: 30px;">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<center><b>Account Information</b></center>
				<hr style="height:2px;border-width:0;color:gray;background-color:gray">
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>

				<div class="col-md-1"></div>

				<div class="col-md-3" id="accntnumberlabel">
				<label for="accntnumberlabel"><b>Account Number</b></label>
				</div>
				
				<div class="col-md-4">
				<input type="text" id="accntnumber" name="accntnumber" value="" readonly>					
				</div>
			</div>


			<div class="accountinfo">
				<div class="col-md-12">
				<label for="email"><b>Email</b></label><br>
  				<input type="text" name="email" 
  				style="width: 50%;
  						padding: 12px 20px;
  						margin: 5px 0;
						display: inline-block;
						border: 1px solid black;
						border-radius: 4px;
						box-sizing: border-box;"><br><br>
				<label for="pword"><b>Password</b></label><br>
  				<input type="password" name="password"
  				style="width: 50%;
  						padding: 12px 20px;
  						margin: 5px 0;
						display: inline-block;
						border: 1px solid black;
						border-radius: 4px;
						box-sizing: border-box;">
  				<input id="showpwd" type="checkbox" onclick="myFunction()"> Show Password<br><br>
				</div>
			</div>

			<div class="accountinfolast">
			<div class="col-md-12"></div>
			</div>

		</div>
	</div>

	
	<div class="pr">
		<div class="container" id="feature">
			<div class="personalinfo row header" style="padding-bottom: 30px;">
				<div class="col-md-4"></div>
				<div class="col-md-4" style="margin-top: 50px;">
				<center><b>Personal Information</b></center>
				<hr style="height:2px;border-width:0;color:gray;background-color:gray">
				</div>
				<div class="col-md-4"></div>
			</div>

		<div class="personalinfo">
			<div class="row header">
				<div class="col-md-3">
					<label for="fname"><b>First Name</b></label><br>
  					<input type="fname" id="fname" name="fname">
  				</div>
  				<div class="col-md-3">
 					<label for="mname"><b>Middle Name</b></label><br>
  					<input type="mname" id="mname" name="mname">
  				</div>
  				<div class="col-md-4">
 					<label for="surname"><b>Surname</b></label><br>
  					<input type="surname" id="surname" name="surname">
  				</div>
  				<div class="col-md-2">
  					<label for="suffix"><b>Suffix</b></label><br>
  					<select class="form-control" id="suffix" style="width: 100%; 
  					height: 50px;
  					padding: 5px 10px;
  					display: inline-block;
  					border-radius: 4px;">
    					<option>Jr</option>
    					<option>Sr</option>
    					<option>I</option>
    					<option>II</option>
    					<option>III</option>
    					<option>IV</option>
    					<option>V</option>
  					</select>
  				</div>
  			</div>	
  		</div>

		<div class="personalinfo">
			<div class="row header">
				<div class="col-md-3">
					<label for="nationality"><b>Nationality</b></label><br>
  					<input type="nationaity" id="nationality" name="nationality">
  				</div>
  				<div class="col-md-3">
  					<label for="gender"><b>Gender</b></label><br>
  					<select class="form-control" id="gender" style="width: 100%; 
  					height: 50px;
  					padding: 5px 10px;
  					display: inline-block;
  					border-radius: 4px;">
    					<option>Male</option>
    					<option>Female</option>
  					</select>
  				</div>
  				<div class="col-md-3">
  					<label for="btype"><b>Blood Type</b></label><br>
  					<select class="form-control" id="btype" style="width: 100%; 
  					height: 50px;
  					padding: 5px 10px;
  					display: inline-block;
  					border-radius: 4px;">
    					<option>A</option>
    					<option>-A</option>
    					<option>B</option>
    					<option>-B</option>
    					<option>AB</option>    					
    					<option>-AB</option>
    					<option>O</option>
    					<option>+O</option>
  					</select>
  				</div>
  				<div class="col-md-3">
  					<label for="cstatus"><b>Civil Status</b></label><br>
  					<select class="form-control" id="cstatus" style="width: 100%; 
  					height: 50px;
  					padding: 5px 10px;
  					display: inline-block;
  					border-radius: 4px;">
    					<option>Single</option>
    					<option>Married</option>
    					<option>Widowed</option>
    					<option>Divorced</option>    					
  					</select>
  				</div>
  			</div>	
  		</div>

  		<br>
  		<br>

		<div class="personalinfo">
			<div class="row header">
				<div class="col-md-3">
					<label for="fname"><b>House# / Lot / Blk. / Phase</b></label><br>
  					<input type="fname" id="fname" name="fname">
  				</div>
  				<div class="col-md-3">
 					<label for="mname"><b>Floor Number</b></label><br>
  					<input type="mname" id="mname" name="mname">
  				</div>
  				<div class="col-md-3">
 					<label for="surname"><b>Building Name / Apartment Name</b></label><br>
  					<input type="surname" id="surname" name="surname">
  				</div>
  				<div class="col-md-3">
 					<label for="surname"><b>Street Name</b></label><br>
  					<input type="surname" id="surname" name="surname">
  				</div>
  			</div>	
  		</div>

		<div class="personalinfo">
			<div class="row header">
				<div class="col-md-3">
					<label for="fname"><b>Sitio / Purok</b></label><br>
  					<input type="fname" id="fname" name="fname">
  				</div>
  				<div class="col-md-3">
 					<label for="mname"><b>Subdivision Name</b></label><br>
  					<input type="mname" id="mname" name="mname">
  				</div>
  				<div class="col-md-3">
 					<label for="surname"><b>Barangay</b></label><br>
  					<input type="surname" id="surname" name="surname">
  				</div>
  				<div class="col-md-3">
 					<label for="surname"><b>Town / City</b></label><br>
  					<input type="surname" id="surname" name="surname">
  				</div>
  			</div>	
  		</div>

		<div class="personalinfo">
			<div class="row header">
				<div class="col-md-3">
					<label for="fname"><b>Province</b></label><br>
  					<input type="fname" id="fname" name="fname">
  				</div>
  				<div class="col-md-3">
  					<label for="region"><b>Region</b></label><br>
  					<select class="form-control" id="region" style="width: 100%; 
  					height: 50px;
  					padding: 5px 10px;
  					display: inline-block;
  					border-radius: 4px;">
    					<option>I</option>
    					<option>II</option>
    					<option>III</option>
    					<option>IV-A</option>    	
    					<option>IV-B</option>
    					<option>V</option>
    					<option>CAR</option>
    					<option>NCR</option>   				
    					<option>VII</option>
    					<option>VIII</option>
    					<option>X</option>
    					<option>XI</option>   
    					<option>XII</option>
    					<option>XIII</option>   					
  					</select>
  				</div>
  				<div class="col-md-3">
 					<label for="surname"><b>Country</b></label><br>
  					<input type="surname" id="surname" name="surname">
  				</div>
  				<div class="col-md-3">
 					<label for="surname"><b>Zip Code</b></label><br>
  					<input type="surname" id="surname" name="surname">
  				</div>
  			</div>	
  		</div>


		<div class="personalinfolast">
			<div class="col-md-12"></div>
		</div>
		</div>
	</div>
</body>
</html>	