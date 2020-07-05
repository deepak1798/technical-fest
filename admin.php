

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"type="text/javascript"></script>
    <script src="js/validation.js"></script>

    </script>

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <style rel="stylesheet">


        html,
        body,
        .view {
            height: 100%;
        }
        body{
          font-family: cursive;
          background-color: #000;
        }

        #regModal{
          background-color: #000;
        }
        #form1{
          margin-left: 40px;
          margin-bottom: 30px;
          width:90%
        }
        #sub{
          background-color: #1089fa;
        }

    </style>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$("#regModal").modal('show');
    	});

    </script>

</head>

<body>
  <?php
session_start();
if(!isset($_SESSION["sess_user"])){
  header("location:admlog.php");
} else {
?>

        <div class="modal hide fade"data-keyboard="false"data-backdrop="static" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Add Event &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="logout.php">Logout</a></h5>

                </div>
                <div class="modal-body">
                  <form name="myform"action="adminsum.php" method="post"enctype="multipart/form-data">
                    <div class="md-form">
                        <i class="fa fa-bookmark prefix grey-text active"></i>
                          <select id="form1"class="form-control" name="cat_id">
                          <option value="1">1-Sports</option>
                          <option value="2">2-Technical</option>
                          <option value="3">3-Cultural</option>
                        </select>

                    </div>
                    <div class="md-form">

                        <i class="fa fa-gear prefix grey-text active" aria-hidden="true"></i>
                        <input type="text"placeholder="Event_id" id="form3"required name="event_id" class="form-control">

                    </div>

                    <div class="md-form">
                        <i class="fa fa-bolt prefix grey-text active" aria-hidden="true"></i>
                        <input type="text" id="form2"placeholder="Event_name" required name="event_name" class="form-control">

                    </div>
                    <div class="md-form">
                        <i class="fa fa-money prefix grey-text active" aria-hidden="true"></i>
                        <input type="text" id="form2"placeholder="reg_fee"required name="reg_fee" class="form-control">

                    </div>
                    <div class="md-form">
                        <i class="fa fa-user-plus prefix grey-text active" aria-hidden="true"></i>
                        <input type="text" id="form2"placeholder="No_of_members"required name="no_of_mem" class="form-control">

                    </div>


                    <div class="md-form">
                        <i class="fa fa-globe prefix grey-text active" aria-hidden="true"></i>
                        <input type="text" id="form32"placeholder="Venue"required name="venue" class="form-control">

                    </div>

                      <div class="md-form">
                          <i class="fa fa-calendar prefix grey-text active" aria-hidden="true"></i>
                          <input type="date" id="form8"placeholder="Date"required name="date" class="form-control" >
                          <!--<label for="form8">Your Phone</label>-->
                      </div>
                      <div class="md-form">
                          <i class="fa fa-clock-o prefix grey-text active" aria-hidden="true"></i>
                          <input type="time" id="form8"placeholder="Time" required name="time" class="form-control" >
                          <!--<label for="form8">Your Phone</label>-->
                      </div>
                      <div class="md-form">
                          <i class="fa fa-trophy prefix grey-text active" aria-hidden="true"></i>
                          <input type="text" id="form2"placeholder="Prize"required name="prize" class="form-control">

                      </div>
                      <div class="md-form">
                          <i class="fa fa-file-photo-o prefix grey-text active" aria-hidden="true"></i>
                          <input type="file" id="form2"placeholder="Photo" required name="myfile">

                      </div>

                   <div class="text-center">
                      <!--  <button class="btn btn-unique">Register <i class="fa fa-paper-plane-o ml-1"></i></button>  -->
                      <input id="sub"class="btn btn-primary"  type="submit"value="Submit"/>

                    </div>




                  </form>
                </div>

            </div>
          </div>
        </div>
<?php } ?>




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
