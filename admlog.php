<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <style rel="stylesheet">


        html,
        body,
        .view {
            height: 100%;
        }
        body{
          font-family: cursive;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
            padding-top: 30px;
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            background-color: #2b3f66;
        }

        footer.page-footer {
            background-color: #2b3f66;
            margin-top: 0;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #2b3f66;
                padding-top: 30px;
            }
        }
        /* Carousel*/

        .carousel,
        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }
        /*Caption*/

        .flex-center {
            color: #fff;
        }

        @media (min-width: 776px) {
            .carousel .view ul li {
                display: inline;
            }
            .carousel .view .full-bg-img ul li .flex-item {
                margin-bottom: 1.5rem;
            }
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        #modalLoginAvatar{
          margin-top: 80px;
        }
        .modal-dialog{
          width: 1000px;
        }
        body{
          background-color: #000;
        }
        #sub{
          background-color: #1089fa;
        }

    </style>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$("#modalLoginAvatar").modal('show');
    	});

    </script>
</head>

<body>
  <?php
  require_once 'connect.php';
  if(isset($_POST['submit'])){
    if(!empty($_POST['id'])&&!empty($_POST['pass']))
    {
      $value1=$_POST['id'];
      $value2=$_POST['pass'];
      $sql="SELECT * FROM admin WHERE admin_id='$value1'AND password='$value2'";
      $query_run=mysqli_query($dbcon,$sql);
        if(mysqli_num_rows($query_run)!=NULL){
          while($row=mysqli_fetch_assoc($query_run)){
            $dbuser=$row['admin_id'];
            $dbpass=$row['password'];
          }

            if($value1==$dbuser&&$value2==$dbpass){
              session_start();
              $_SESSION['sess_user']=$value1;
  	         header("location:report.php");
            }
          }
            else{
              $errormsg="Invalid User Id or Password";
            }
          }

      else{
        $errormsg="Please enter both fields";
      }
    }


   ?>


      <!-- Form login -->
      <br><br><br><br><br><br><br>
      <!--Modal: Login with Avatar Form-->
      <div class="modal fade"data-backdrop="static"  id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog cascading-modal modal-avatar modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">

                  <!--Header-->
                  <div class="modal-header">
                      <img src="img/admin.ico" alt="avatar" class="rounded-circle img-responsive">
                  </div>
                  <!--Body-->
                  <div class="modal-body text-center mb-1">
                    <?php if(isset($errormsg))
                    {
                    echo"<div class='alert alert-danger'>";
                      echo $errormsg;

                    echo"</div>";
                  }
                  ?>
                      <h5 class="mt-1 mb-2">Admin</h5>
                      <form action="" method="post">

                      <div class="md-form ml-0 mr-0">


                          <input type="text"id="form29"name="id" placeholder="Enter ID"class="form-control validate ml-0">
                      </div>

                      <div class="md-form ml-0 mr-0">
                          <input type="password" type="password"name="pass" id="form29"placeholder="Enter Password" class="form-control validate ml-0">

                      </div>

                      <div class="text-center">
                          <input type="submit"id="sub"value="Login"name="submit" class="btn btn-cyan mt-1">
                      </div>
                    </form>
                  </div>

              </div>
              <!--/.Content-->
          </div>
      </div>
      <!--Modal: Login with Avatar Form-->







    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
