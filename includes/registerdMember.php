<?php 
if (isset($_POST['submit'])) {
	  $connection = mysqli_connect("localhost","root","","adminpanel");


	$region=$_POST['region'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$suffix=$_POST['suffix'];
	$nationality=$_POST['nationality'];
	$gender=$_POST['gender'];
	$btype=$_POST['btype'];
	$status=$_POST['status'];
	$date=$_POST['date'];
	$sss=$_POST['sss'];
	$tin=$_POST['tin'];
	$hlbp=$_POST['hlbp'];
	$flrnumber=$_POST['flrnumber'];
	$ba=$_POST['ba'];
	$street=$_POST['street'];
	$sp=$_POST['sp'];
	$subd=$_POST['subd'];
	$brgy=$_POST['brgy'];
	$tc=$_POST['tc'];
	$province=$_POST['province'];
	$country=$_POST['country'];
	$zcode=$_POST['zcode'];
	$elem=$_POST['elem'];
	$hs=$_POST['hs'];
	$uc=$_POST['uc'];
	$referral=$_POST['referral'];
	$inContact=$_POST['inContact'];
	$InConPhone=$_POST['InConPhone'];
	$addresss=$_POST['addresss'];
	$AttachId=$_FILES["AttachId"];
	$AttachSig=$_FILES["AttachSig"];
	$AttachReceipt=$_FILES["AttachReceipt"];
	$inlineRadioOptions=$_POST['inlineRadioOptions'];
    
move_uploaded_file($_FILES["AttachId"]["tmp_name"],"img/".$_FILES["AttachId"]["name"]);
move_uploaded_file($_FILES["AttachSig"]["tmp_name"],"img/".$_FILES["AttachSig"]["name"]);
move_uploaded_file($_FILES["AttachReceipt"]["tmp_name"],"img/".$_FILES["AttachReceipt"]["name"]);
$sql = "INSERT INTO register (fname, mname, lname,email,password,phoneNum,control_number,region,suffix,nationality,gender,btype,status,dates,sss,tin,hlbp,flrnumber,ba,street,sp,subd,brgy,tc,province,country,zcode,elem,hs,uc,refferal,incontact,inconphone,address,attachId,attachSignature,AttachReceipt,terms)
VALUES ($fname, $mname,$lname,$email,$password,$phone,0,$region,$suffix,$nationality,$gender,$btype,$status,$dates,$sss,$tin,$hlbp,$flrnumber,$ba,$street,$sp,$subd,$brgy,$tc,$province,$country,$zcode,$elem,$hs,$uc,$refferal,$inContact,$InConPhone,$addresss,$AttachId,$AttachSig,$AttachReceipt,$inlineRadioOptions)";

if ($connection->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
}
 ?>