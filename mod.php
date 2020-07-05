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
          background-image:linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0.3)),  url("./img/bask.jpeg");
          background-repeat: no-repeat;
          background-size: cover;
          font-size: 20px;
          font-weight: 900;

        }
        #m3{
          background-image:linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0.3)),  url("./img/footb.jpeg");
          background-repeat: no-repeat;
          background-size: cover;
          font-size: 20px;
          font-weight: 900;

        }
        #m4{
          background-image:linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)),  url("./img/bad.jpeg");
          background-repeat: no-repeat;
          background-size: cover;
          font-size: 20px;
          font-weight: 900;

        }
        #m5{
          background-image:linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0.3)),  url("./img/volley.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-size: 20px;
          font-weight: 900;

        }
        #m6{
          background-image:linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0.3)),  url("./img/mini.png");
          background-repeat: no-repeat;
          background-size: cover;
          font-size: 20px;
          font-weight: 900;

        }
        #m7{
          background-image:linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0.3)),  url("./img/treasure.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-size: 20px;
          font-weight: 900;

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
    </script>
</head>

<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
          <a class="navbar-brand" href="#"id="brand"><h2>Evento</h2></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reg.php">Register</a>
                </li>


            </ul>


          </div>
      </div>
  </nav>
  <!--/.Navbar-->
  <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!--Card-->
          <div class="card">

              <!--Card image-->
              <img class="img-fluid" src="./img/basket.jpeg"style="height:280px;" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Basketball</h4>
                  <!--Text-->
                  <p><br></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#baskModal">
                    Click Here
                  </button>

              </div>

          </div>

          <!--/.Card-->
        </div>
        <div class="col-md-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <img class="img-fluid" src="./img/footb.jpeg"style="height:280px;" alt="Card image cap">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Football</h4>
                    <!--Text-->
                    <p><br></p>
                    <button  onclick="return fillf()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#footModal">
                      Click Here
                    </button>

                </div>

            </div>

        </div>
        <div class="col-md-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <img class="img-fluid" src="./img/bad.jpeg"style="height:280px;" alt="Card image cap">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Badminton</h4>
                    <!--Text-->
                    <p><br></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#badModal">
                      Click Here
                    </button>

                </div>

            </div>

        </div>
          <div class="col-md-4">
            <!--Card-->
            <div class="card">

                <!--Card image-->
                <img class="img-fluid" src="./img/volley.jpg"style="width:500px; height:280px;" alt="Card image cap">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Volleyball</h4>
                    <!--Text-->
                    <p><br></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#volleyModal">
                      Click Here
                    </button>
                </div>

            </div>

        </div>
        <div class="col-md-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <img class="img-fluid" src="./img/mini.png"style="height:280px;" alt="Card image cap">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Mini Militia</h4>
                    <!--Text-->
                    <p><br></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miniModal">
                      Click Here
                    </button>
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <img class="img-fluid" src="./img/treasure.jpg"style="height:280px;" alt="Card image cap">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Treasure Hunt</h4>
                    <!--Text-->
                    <p><br></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#treasureModal">
                      Click Here
                    </button>
                </div>

            </div>

        </div>
        <div class="col-md-4">
          <!--Card-->
          <div class="card">


              <!--Card image-->
              <img class="img-fluid" src="./img/basket.jpeg"style="height:280px;" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Basketball</h4>
                  <!--Text-->
                  <p><br></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#baskModal">
                    Click Here
                  </button>

              </div>

          </div>

          <!--/.Card-->
        </div>


      </div>

    </div>
    <?php
    require_once 'connect.php';

    ?>

    <!--basketball modal-->
    <div class="modal fade" id="baskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <?php
              $query="select event_name,no_of_mem,venue,date,time,reg_fee,prize from event where event_id='bas'";
              if($query_run=mysqli_query($dbcon,$query))
              {
                if(mysqli_num_rows($query_run)!=NULL)
                {
                  while($row=mysqli_fetch_assoc($query_run))
                  {
                    ?>
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['event_name'];  ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"id="m2">
            <?php

              echo"<li>Number of participants:".$row['no_of_mem']."</li><br>";
              echo"<li>Venue:".$row['venue']."</li><br>";
              echo"<li>Date:".$row['date']."</li><br>";
              echo"<li>Time:".$row['time']."</li><br>";
              echo"<li>Registration fee:₹".$row['reg_fee']."</li><br>";
              echo"<li>1st Prize:₹".$row['prize']."</li><br>";
            }
          }
        }
              ?>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button onclick="return fillb()"type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#regModal">
                  Register
                </button>
            </div>
        </div>
    </div>
  </div>


<!--football modal-->
  <div class="modal fade" id="footModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Football</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body"id="m3">
            <?php
            $query="select no_of_mem,venue,date,time,reg_fee,prize from event where event_id='foot'";
            if($query_run=mysqli_query($dbcon,$query))
            {
              if(mysqli_num_rows($query_run)!=NULL)
              {
                while($row=mysqli_fetch_assoc($query_run))
                {

            echo"<li>Number of participants:".$row['no_of_mem']."</li><br>";
            echo"<li>Venue:".$row['venue']."</li><br>";
            echo"<li>Date:".$row['date']."</li><br>";
            echo"<li>Time:".$row['time']."</li><br>";
            echo"<li>Registration fee:₹".$row['reg_fee']."</li><br>";
            echo"<li>1st Prize:₹".$row['prize']."</li><br>";
          }
        }
      }
            ?>


          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button onclick="return fillf()"type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#regModal">Register</button>
          </div>
      </div>
  </div>
</div>

<!--badminton modal-->
<div class="modal fade" id="badModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Badminton court</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body"id="m4">
          <?php
          $query="select no_of_mem,venue,date,time,reg_fee,prize from event where event_id='bad'";
          if($query_run=mysqli_query($dbcon,$query))
          {
            if(mysqli_num_rows($query_run)!=NULL)
            {
              while($row=mysqli_fetch_assoc($query_run))
              {

          echo"<li>Number of participants:".$row['no_of_mem']."</li><br>";
          echo"<li>Venue:".$row['venue']."</li><br>";
          echo"<li>Date:".$row['date']."</li><br>";
          echo"<li>Time:".$row['time']."</li><br>";
          echo"<li>Registration fee:₹".$row['reg_fee']."</li><br>";
          echo"<li>1st Prize:₹".$row['prize']."</li><br>";
        }
      }
    }
          ?>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button onclick="return fillba()"type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#regModal">Register</button>
        </div>
    </div>
</div>
</div>

<!--volley modal-->
<div class="modal fade" id="volleyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Volleyball</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body"id="m5">
          <?php
          $query="select no_of_mem,venue,date,time,reg_fee,prize from event where event_id='vol'";
          if($query_run=mysqli_query($dbcon,$query))
          {
            if(mysqli_num_rows($query_run)!=NULL)
            {
              while($row=mysqli_fetch_assoc($query_run))
              {

          echo"<li>Number of participants:".$row['no_of_mem']."</li><br>";
          echo"<li>Venue:".$row['venue']."</li><br>";
          echo"<li>Date:".$row['date']."</li><br>";
          echo"<li>Time:".$row['time']."</li><br>";
          echo"<li>Registration fee:₹".$row['reg_fee']."</li><br>";
          echo"<li>1st Prize:₹".$row['prize']."</li><br>";
        }
      }
    }
          ?>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button onclick="return fillvo()"type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#regModal">Register</button>
        </div>
    </div>
</div>
</div>

<!--mini modal-->
<div class="modal fade" id="miniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mini Militia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body"id="m6">
          <?php
          $query="select no_of_mem,venue,date,time,reg_fee,prize from event where event_id='mini'";
          if($query_run=mysqli_query($dbcon,$query))
          {
            if(mysqli_num_rows($query_run)!=NULL)
            {
              while($row=mysqli_fetch_assoc($query_run))
              {

          echo"<li>Number of participants:".$row['no_of_mem']."</li><br>";
          echo"<li>Venue:".$row['venue']."</li><br>";
          echo"<li>Date:".$row['date']."</li><br>";
          echo"<li>Time:".$row['time']."</li><br>";
          echo"<li>Registration fee:₹".$row['reg_fee']."</li><br>";
          echo"<li>1st Prize:₹".$row['prize']."</li><br>";
        }
      }
    }
          ?>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button onclick="return fillmi()"type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#regModal">Register</button>
        </div>
    </div>
</div>
</div>

<!-- treasure modal-->
<div class="modal fade" id="treasureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Treasure Hunt</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body"id="m7">
          <?php
          $query="select no_of_mem,venue,date,time,reg_fee,prize from event where event_id='treas'";
          if($query_run=mysqli_query($dbcon,$query))
          {
            if(mysqli_num_rows($query_run)!=NULL)
            {
              while($row=mysqli_fetch_assoc($query_run))
              {

          echo"<li>Number of participants:".$row['no_of_mem']."</li><br>";
          echo"<li>Venue:".$row['venue']."</li><br>";
          echo"<li>Date:".$row['date']."</li><br>";
          echo"<li>Time:".$row['time']."</li><br>";
          echo"<li>Registration fee:₹".$row['reg_fee']."</li><br>";
          echo"<li>1st Prize:₹".$row['prize']."</li><br>";
        }
      }
    }
          ?>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button onclick="return filltr()"type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#regModal">Register</button>
        </div>
    </div>
</div>
</div>


<!--register-->
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form name="myform"action="sum.php"method="post">
            <div class="md-form">
                <i class="fa fa-bookmark prefix grey-text"></i>
                <input type="text" id="form14"placeholder="Event"name="event" class="form-control">

            </div>

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text"placeholder="Your name" id="form3"name="user" class="form-control">

            </div>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="form2"placeholder="Your email"name="email" class="form-control">

            </div>
            <div class="md-form">
                <i class="fa fa-building-o prefix grey-text"></i>
                <input type="text" id="form2"placeholder="Your college"name="college" class="form-control">

            </div>


            <div class="md-form">
                <i class="fa fa-circle-thin prefix grey-text"></i>
                <input type="text" id="form32"placeholder="Your USN"name="usn" class="form-control">

            </div>

            <div class="md-form">
                <i class="fa fa-phone prefix grey-text"></i>
                <input type="text" id="form8"placeholder="Your Phone"name="phone" class="form-control" >
                <!--<label for="form8">Your Phone</label>-->
            </div>

            <div class="text-center">
                  <input id="sub"class="btn btn-primary"  type="submit"value="Submit"/>
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
    <script src="scrollreveal-master/dist/scrollreveal.min.js"></script>
    <script>
    window.sr=ScrollReveal();
    sr.reveal('#n1',{
      duration:2000,
      origin:'bottom',
      delay:1000
    });
    </script>
</body>

</html>
