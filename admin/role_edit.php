<?php
include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

    <div class="container-fluid">

        <!-- Database Example -->
        <div class="card - shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Role Data</h6>
            </div>
            <div class="card-body">

<?php
    $connection = mysqli_connect("localhost","root","","adminpanel");

    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM role WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row)
    {
        ?>

              <form action="rolecode.php" method="POST">

            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label>Role Name</label>
                <select type="text" name="edit_rolename" class="form-control">
                  <option 
                  <?php if($row['rolename']=='City Admin') echo 'selected="selected"'; ?> 
                  value="City Admin">City Admin</option>  
                  <option 
                  <?php if($row['rolename']=='Provincial Admin') echo 'selected="selected"'; ?>
                  value="Provincial Admin">Provincial Admin</option>  
                  <option 
                  <?php if($row['rolename']=='Regional Admin') echo 'selected="selected"'; ?> 
                  value="Regional Admin">Regional Admin</option>  
                  <option 
                  <?php if($row['rolename']=='National Admin') echo 'selected="selected"'; ?> 
                  value="National Admin">National Admin</option>  
                  <option 
                  <?php if($row['rolename']=='Super Admin') echo 'selected="selected"'; ?> 
                  value="Super Admin">Super Admin</option>   
                </select>  
            </div>
            <div class="form-group">
                <input type="hidden" name="edit_arights" class="form-control">
                <label>Access Rights</label> <br>
                            <input type="checkbox" name="edit_arights1" value="Print ID" <?php if(strpos($row['arights'],"ID")) {echo "checked";}?>>
                            <label>Print ID</label><br>
                            <input type="checkbox" name="edit_arights2" value="Create Event" <?php if(strpos($row['arights'],"Event")) {echo "checked";}?>>  
                            <label>Create Event</label><br>
                            <input type="checkbox" name="edit_arights3" value="View Files" <?php if(strpos($row['arights'],"Files")) {echo "checked";}?>>
                            <label>View Files</label> <br>
                            <input type="checkbox" name="edit_arights4" value="Request Fund" <?php if(strpos($row['arights'],"Fund")) {echo "checked";}?>>
                            <label>Request Fund</label><br>
            </div>

            <a href="RoleManagement.php" class="btn btn-danger">Cancel</a>
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

 
