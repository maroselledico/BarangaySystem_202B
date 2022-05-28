<!DOCTYPE html>
<html>
<?php
session_start();
session_destroy();
session_start();
?>
    <head>
        <meta charset="UTF-8">
        <title>Barangay 55 Zone 5 Login</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-black">
        <div class="container" style="margin-top:30px">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center;">
                <img src="../img/brgy55.png" style="height:100px;"/>
              <h3 class="panel-title">
                <strong>
                    Barangay 55 Administration
                </strong>
              </h3>
            </div>
            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group">
                  <label for="txt_username">Username</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="txt_username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="txt_password">Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                <label id="error" class="label label-danger pull-right"></label> 
              </form>
            </div>
          </div>
          </div>
        </div>

      <?php
        include "../pages/connection.php";
        if(isset($_POST['btn_login']))
        { 
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];


            $admin = mysqli_query($con, "SELECT * from tbluser where username = '$username' and password = '$password' and type = 'administrator' ");
            $numrow_admin = mysqli_num_rows($admin);

            $zone = mysqli_query($con, "SELECT * from tblzone where username = '$username' and password = '$password'");
            $numrow_zone = mysqli_num_rows($zone);

            $staff = mysqli_query($con, "SELECT * from tblstaff where username = '$username' and password = '$password' ");
            $numrow_staff = mysqli_num_rows($staff);

            if($numrow_admin > 0)
            {
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "administrator";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: ../pages/officials/officials.php');
            }
            
            elseif($numrow_staff > 0)
            {
                while(  $row = mysqli_fetch_array($staff)){
                  $_SESSION['role'] = $row['name'];
                  $_SESSION['staff'] = "staff";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: ../pages/resident/resident.php');
            }
            else
            {
              echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';
               
            }
             
        }
        
      ?>

    </body>
</html>