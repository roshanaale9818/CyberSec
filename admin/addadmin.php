 <?php
session_start();
include("../db.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$name=$_POST['names'];
$eml=$_POST['email'];
$admin_password=$_POST['password'];
$admin_password2=$_POST['password2'];

if($admin_password!=$admin_password2){
	echo "The passwords do not match!";
}else{
mysqli_query($con,"insert into admin_info(admin_name, admin_email,admin_password) values ('$name','$eml','$admin_password')") 
			or die ("Query 1 is inncorrect........");
//header("location: manage_users.php"); 
mysqli_close($con);
}
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
                  <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                  <form action="addadmin.php" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Admin Name</label>
                          <input type="text" id="names" name="names" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Confirm Password</label>
                          <input type="password" id="password2" name="password2" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    
                      
                      
                    </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add Admin</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>