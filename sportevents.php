<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sports</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/validation.js"></script>


    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


    <style rel="stylesheet">

          body{
          font-family: cursive;
          background-image: url("./img/bgsport.jpg");


        }
        /* Navigation*/


        .col-md-4{
          padding-top: 35px;

        }
        #m2{
          background-repeat: no-repeat;
          background-size: cover;
          font-size: 20px;
          font-weight: 900;

        }
        .brand{
          font-family: 'oswald', cursive;
          font-size: 20px;

        }
        .nav-item{
          margin-right: 10px;
          margin-left: 10px;
        }
        .navbar-nav>li>a:hover{
          background-color: #0B0B3B;
        }
        .active{
          background-color: #0B0B3B;

        }
    </style>
    <script type="text/javascript">
    function fillb(){
    $("#form14").val("basketball");
  }
  function fillf(){
  $("#form14").val("football");
  }
  function fillba(){
  $("#form14").val("badminton");
  }
  function fillvo(){
  $("#form14").val("volleyball");
  }
  function fillmi(){
  $("#form14").val("minimilitia");
  }
  function filltr(){
  $("#form14").val("treasurehunt");
  }
  /*$(document).ready(function(){
    $('#mod0').click(function(){
      $("#baskModal").modal('show');
    });
  })*/
    </script>
</head>

<body>
  <?php
   ?>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
          <a class="navbar-brand brand" href="front.html"><h2>EVENTO</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!--<ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Categories</a>
                  </li>
                  <li class="nav-item">
                      <button id="b1"class="nav-link"data-toggle="modal"data-target="#bask1Modal">Register</button>
                  </li>
                  <li class="nav-item btn-group">
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                      </a>
                      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                  </li>
              </ul>-->
              <ul class="nav navbar-nav ml-auto">
                <!--<li class="nav-item">
                    <a class="nav-link brand" href="front.html">HOME <span class="sr-only">(current)</span></a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link brand" href="index.html">CATEGORIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link brand" href="reg.php"target="_blank">REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link brand" href="admlog.php"target="_blank">ADMIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link brand" href="schedule.php">SCHEDULE</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link brand" href="report.php">SEARCH</a>
                </li>

            </ul>


          </div>
      </div>
  </nav>
<!--/.Navbar-->
  <br><br><br><br>

    <div class="container">
      <div class="row">
        <?php
        require_once'connect.php';
        $upload_dir="img/";

        $query="select event_name,no_of_mem,reg_fee,venue,date,time,prize,photo from event where cat_id=1";
        if($query_run=mysqli_query($dbcon,$query))
        {
          if(mysqli_num_rows($query_run)!=NULL)
          {
            $i=0;
            $y=0;

            while($row=mysqli_fetch_assoc($query_run))
            {


                echo"<div class='col-md-4'>";

                  echo"<div class='card'>";
                  ?>

                  <img src="<?php echo $upload_dir.$row['photo'] ?>" height="280px">
             <?php
              echo"<div class='card-body'>";
              echo"<h4 class='card-title'>".$row['event_name']."</h4>";
                 echo"<p><br></p>";
                  echo"<button id='mod$i' type='button' class='btn btn-primary'data-toggle='modal' data-target='#baskModal$y'>";
                  echo" Click Here";
                  echo"</button>";
                  $i++;

              echo"</div>";

          echo"</div>";



        echo"</div>";
        echo"<div class='modal fade' id='baskModal$y' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
        $y++;
          echo"<div class='modal-dialog' role='document'>";
            echo"<div class='modal-content'>";
                echo"<div class='modal-header'>";


                    echo"<h5 class='modal-title' id='exampleModalLabel'>".$row['event_name']."</h5>";
                    echo"<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                        echo"<span aria-hidden='true'>&times;</span>";
                    echo"</button>";
                echo"</div>";
                ?>

                <div class='modal-body'id='m2'style=background-image:linear-gradient(rgba(255,255,255,0.5),rgba(255,255,255,0.5)),url("<?php echo $upload_dir.$row['photo']?>")>

                  <?php


                  echo"<li>Number of participants:".$row['no_of_mem']."</li><br>";
                  echo"<li>Venue:".$row['venue']."</li><br>";
                  echo"<li>Date:".$row['date']."</li><br>";
                  echo"<li>Time:".$row['time']."</li><br>";
                  echo"<li>Registration fee:₹".$row['reg_fee']."</li><br>";
                  echo"<li>1st Prize:₹".$row['prize']."</li><br>";

                  echo"</div>";
                  echo"<div class='modal-footer'>";
                      echo"<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                      echo"<a href='reg.php' class='btn btn-primary'>";
                        echo"Register";
                      echo"</a>";
                  echo"</div>";
              echo"</div>";
          echo"</div>";
        echo"</div>";
      }
    }
  }

?>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="scrollreveal-master/dist/scrollreveal.min.js"></script>
    <script>
    window.sr=ScrollReveal();
    sr.reveal('#n1',{
      duration:2000,
      origin:'bottom',
      delay:1000
    });
    sr.reveal('.card',{
      duration:2000,
      origin:'bottom'

    });
    </script>
</body>

</html>
