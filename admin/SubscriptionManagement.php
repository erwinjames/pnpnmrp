 <?php
include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
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
    <h2 class="m-0 font-weight-bold text-primary">Subscription Management<br><br>


            <form style="padding-left: 40px;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
             <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Subscription Name" aria-label="Search" aria-describedby="basic-addon2">
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
        $query = "SELECT * FROM subscription";
        $query_run = mysqli_query($connection, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Subscription Name</th>
            <th>Price</th>
            <th>Total Subscription</th>
            <th>Status</th>
            <th>Edit </th>
            <th>Delete </th>
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
            <td><?php echo $row['Subscription Name']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Total Subscription']; ?></td>
            <td><?php echo $row['Status']; ?></td>
            <td>
                <form action="admin_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger">DEACTIVATE</button>
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