<?php
include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

    <div class="container-fluid">

    	<!-- Database Example -->
    	<div class="card - shadow mb-4">
    		<div class="card-header py-3">
    			<h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
    		</div>
    		<div class="card-body">

<?php
	$connection = mysqli_connect("localhost","root","","adminpanel");

    if(isset($_POST['edit_btn']))
	{
		$id = $_POST['edit_id'];

		$query = "SELECT * FROM admin WHERE id='$id' ";
		$query_run = mysqli_query($connection, $query);

	foreach ($query_run as $row)
	{
		?>

              <form action="admincode.php" method="POST">

            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="edit_Name" value="<?php echo $row['Name']; ?>" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Region</label>
                <select type="text" name="edit_Region" class="form-control">
                      <option 
                      <?php if($row['Region'] == 'NCR') echo 'selected ="selected"'; ?>
                      value="NCR">NCR</option>  
                      <option 
                      <?php if($row['Region'] == 'CAR') echo 'selected ="selected"'; ?>
                      value="CAR">CAR</option>  
                      <option 
                      <?php if($row['Region'] == 'Region I') echo 'selected ="selected"'; ?>
                      value="Region I">Region I</option>  
                      <option 
                      <?php if($row['Region'] == 'Region II') echo 'selected ="selected"'; ?>
                      value="Region II">Region II</option>  
                      <option 
                      <?php if($row['Region'] == 'Region III') echo 'selected ="selected"'; ?>
                      value="Region III">Region III</option>  
                      <option 
                      <?php if($row['Region'] == 'Region IV-A') echo 'selected ="selected"'; ?>
                      value="Region IV-A">Region IV-A</option>  
                      <option 
                      <?php if($row['Region'] == 'Region IV-B') echo 'selected ="selected"'; ?>
                      value="Region IV-B">Region IV-B</option>  
                      <option 
                      <?php if($row['Region'] == 'Region V') echo 'selected ="selected"'; ?>
                      value="Region V">Region V</option>  
                      <option 
                      <?php if($row['Region'] == 'Region VI') echo 'selected ="selected"'; ?>
                      value="Region VI">Region VI</option>  
                      <option 
                      <?php if($row['Region'] == 'Region VII') echo 'selected ="selected"'; ?>
                      value="Region VII">Region VII</option> 
                      <option 
                      <?php if($row['Region'] == 'Region VIII') echo 'selected ="selected"'; ?>
                      value="Region VIII">Region VIII</option> 
                      <option 
                      <?php if($row['Region'] == 'Region IX') echo 'selected ="selected"'; ?>
                      value="Region IX">Region IX</option> 
                      <option 
                      <?php if($row['Region'] == 'Region X') echo 'selected ="selected"'; ?>
                      value="Region X">Region X</option> 
                      <option 
                      <?php if($row['Region'] == 'Region XI') echo 'selected ="selected"'; ?>
                      value="Region XI">Region XI</option> 
                      <option 
                      <?php if($row['Region'] == 'Region XII') echo 'selected ="selected"'; ?>
                      value="Region XII">Region XII</option> 
                      <option 
                      <?php if($row['Region'] == 'Region XIII') echo 'selected ="selected"'; ?>
                      value="Region XIII">Region XIII</option> 
                      <option 
                      <?php if($row['Region'] == 'BARMM') echo 'selected ="selected"'; ?>
                      value="BARMM">BARMM</option>

                </select>
            </div>
            <div class="form-group">
                <label>Role</label>
                <select type="text" name="edit_Role" class="form-control">
                  <option 
                  <?php if($row['Role'] == 'City Admin') echo 'selected ="selected"'; ?>
                  value="City Admin">City Admin</option>  
                  <option <?php if($row['Role'] == 'Provincial Admin') echo 'selected ="selected"'; ?>
                  value="Provincial Admin">Provincial Admin</option>  
                  <option <?php if($row['Role'] == 'Regional Admin') echo 'selected ="selected"'; ?>
                  value="Regional Admin">Regional Admin</option>  
                  <option <?php if($row['Role'] == 'National Admin') echo 'selected ="selected"'; ?>
                  value="National Admin">National Admin</option>  
                  <option <?php if($row['Role'] == 'Super Admin') echo 'selected ="selected"'; ?>
                  value="Super Admin">Super Admin</option>  
                </select>
            </div>

                    <div class="form-group">
                <label>Status</label>
                <select type="text" name="edit_Status" class="form-control">
                  <option <?php if($row['Status'] == 'Active') echo 'selected ="selected"'; ?>
                  value="Active">Active</option>  
                  <option <?php if($row['Status'] == 'Inactive') echo 'selected ="selected"'; ?>
                  value="Inactive">Inactive</option> 
                </select>
            </div>

            <a href="AdminManagement.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
        </form>

		<?php
	}
	}
?>

    		</div>
    	
    	</div>
	</div>
	<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>