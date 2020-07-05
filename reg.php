<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Josefin+Sans" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"type="text/javascript"></script>
    <script src="js/validation.js"></script>

    </script>

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script src="js/sweetalert.min.js" charset="utf-8"></script>
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
        h5{
          font-family: 'Josefin Sans', sans-serif;

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
  require_once'connect.php';
   ?>

        <div class="modal hide fade"data-keyboard="false"data-backdrop="static" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">REGISTER</h5>

                </div>
                <div class="modal-body">
                  <form name="myform"action="sum.php" method="post">
                    <div class="md-form">
                        <i class="fa fa-bookmark prefix grey-text active"></i>
                        <select id="form1"class="form-control"style="height=100px;" name="event">
                          <?php
                          $query="SELECT event_name from event order by cat_id";
                          if($query_run=mysqli_query($dbcon,$query))
                          {
                            while($row=mysqli_fetch_assoc($query_run))
                            {
                              echo"<option value=".$row['event_name'].">".$row['event_name']."</option>";
                            }
                          }
                           ?>

                    </select>
                    </div>
                    <div class="md-form">

                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text"placeholder="Your name" id="form3" required name="user" class="form-control">

                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="form2"placeholder="Your email"required name="email" class="form-control">

                    </div>
                    <div class="md-form">
                        <i class="fa fa-building-o prefix grey-text"></i>
                        <input type="text" id="form2"placeholder="Your college"required name="college" class="form-control">

                    </div>


                    <div class="md-form">
                        <i class="fa fa-circle-thin prefix grey-text"></i>
                        <input type="text" id="form32"placeholder="Your USN" required name="usn" class="form-control">

                    </div>

                    <div class="md-form">
                        <i class="fa fa-phone prefix grey-text"></i>
                        <input type="text" id="form8"placeholder="Your Phone"required name="phone" class="form-control" >
                        <!--<label for="form8">Your Phone</label>-->
                    </div>

                   <div>
                     <input id="sub"class="btn btn-primary" class="text-center" type="submit"value="Submit"/>
                     	<a href="index.html"class="btn btn-primary btn-lg square"><h7 class="text-center">back</h7></a>
 
                    </div>
                   <div>

 
                    </div>


                  </form>
                </div>

            </div>
          </div>
        </div>




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
