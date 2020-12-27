 <?php
include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Role Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="rolecode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Role Name</label>
                <input type="text" name="rolename" class="form-control" placeholder="Enter Role Name">
            </div>
            <div class="form-group">
                <label>Access Rights</label>
                <input type="text" name="arights" class="form-control" placeholder="Enter Access Rights">
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
    <h2 class="m-0 font-weight-bold text-primary">Role Management<br> <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Role Data
            </button>

                      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
    </h2>
  </div>

  <div class="card-body">

    <div class="modal fade" id="alertmessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to continue? <br> Note: Data will be archived.
      </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      
      <form action="rolecode.php" method="POST">

        
      </div>  
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Continue</button>
        </div>
      </form>

    </div>
  </div>
</div>

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
        $query = "SELECT * FROM rolearchive";
        $query_run = mysqli_query($connection, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Role Name</th>
            <th>Access Rights</th>
            <th>Deactivate</th>
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
            <td><?php echo $row['rolename']; ?></td>
            <td><?php echo $row['arights']; ?></td>
            <td>
                <form action="role_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#alertmessage">DEACTIVATE</button>
                </form>
            </td>
                        <div class="modal fade" id="alertmessage1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                             <div class="modal-content">
                             <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Do you want to continue? <br> Note: Data will be archived.
                                 </h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                              </button>
      
                               <form action="rolecode.php" method="POST">

        
                                  </div>  
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" name="delete_btn" class="btn btn-primary">Continue</button>
                                  </div>
                                </form>

                              </div>
                            </div>
                          </div>

            <td>
                <form action="rolecode.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#alertmessage1">DELETE</button>
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