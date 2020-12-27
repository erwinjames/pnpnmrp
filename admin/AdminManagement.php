 <?php
include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admincode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="Name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Region</label>
                <select type="text" name="Region" class="form-control">
                  <option value="NCR">NCR</option>  
                  <option value="CAR">CAR</option>  
                  <option value="Region I">Region I</option>  
                  <option value="Region II">Region II</option>  
                  <option value="Region III">Region III</option>  
                  <option value="Region IV-A">Region IV-A</option>  
                  <option value="Region IV-B">Region IV-B</option>  
                  <option value="Region V">Region V</option>  
                  <option value="Region VI">Region VI</option>  
                  <option value="Region VII">Region VII</option> 
                  <option value="Region VIII">Region VIII</option> 
                  <option value="Region IX">Region IX</option> 
                  <option value="Region X">Region X</option> 
                  <option value="Region XI">Region XI</option> 
                  <option value="Region XII">Region XII</option> 
                  <option value="Region XIII">Region XIII</option> 
                  <option value="BARMM">BARMM</option> 
                </select>  
            </div>
            <div class="form-group">
                <label>Role</label>
                <select type="text" name="Role" class="form-control">
                  <option value="City Admin">City Admin</option>  
                  <option value="Provincial Admin">Provincial Admin</option>  
                  <option value="Regional Admin">Regional Admin</option>  
                  <option value="National Admin">National Admin</option>  
                  <option value="Super Admin">Super Admin</option>   
                </select>  
            </div>
            <div class="form-group">
                <label>Status</label>
                <select type="text" name="Status" class="form-control">
                  <option value="Active">Active</option>  
                  <option value="Inactive">Inactive</option>    
                </select>    
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-primary">Admin Management

            <span style="padding-left: 62%">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin User 
            </button>
          </span><br><br>

            <form style="padding-left: 40px;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
             <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Name" aria-label="Search" aria-describedby="basic-addon2">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Region" aria-label="Search" aria-describedby="basic-addon2">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Role" aria-label="Search" aria-describedby="basic-addon2"> 
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Status" aria-label="Search" aria-describedby="basic-addon2">
                      <div style="padding-left: 10px;"class="input-group-append">
                       <button class="btn btn-primary" type="button">
                       <i class="fas fa-search fa-sm"></i>
                   </button>
                         </div>
            </div>
          </form>

    </h2>
  </div>

  <div class="card-body">

    <?php
      if(isset($_SESSION['success']) && $_SESSION['success'] !='')
      {
        echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
        unset($_SESSION['success']);
      }

      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
        unset($_SESSION['status']);
      }
    ?>

    <div class="table-responsive">

      <?php
        $query = "SELECT * FROM admin";
        $query_run = mysqli_query($connection, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Region</th>
            <th>Role</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete </th>
            <th>Reset Password</th>
          </tr>
        </thead>
        <tbody>
     
        <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Region']; ?></td>
            <td><?php echo $row['Role']; ?></td>
            <td><?php echo $row['Status']; ?></td>
            <td>

                <form action="admin_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                </form>
            </td>
            <td>
                <form action="admincode.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                </form>
            </td>
            <td>
                <form action="admincode.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-info">RESET PASSWORD</button>
                </form>
            </td>
          </tr>

          <?php
            }

          }

          else 
          {
            echo "No Record Found!";
          }

          ?>

        </tbody>
      </table>

    </div>
  </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>