<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Schedule</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
        body{
          background-image: url("img/tech.jpeg");
          background-size: cover;

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
        td{
          font-size:20px;
          color: white;
        }
         th{
          font-size:20px;
          color: white;
        }
    </style>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
          <a class="navbar-brand brand" href="front.html"><h2>AAHVAAN</h2></a>
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
                    <a class="nav-link brand" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link brand" href="reg.php"target="_blank">REGISTER</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link brand" href="admlog.php"target="_blank">ADMIN</a>
                </li>-->
                <li class="nav-item active">
                    <a class="nav-link brand" href="schedule.php">SCHEDULE</a>
                </li>

                <!--<li class="nav-item">
                    <a class="nav-link brand" href="report.php">SEARCH</a>
                </li>-->

            </ul>


          </div>
      </div>
  </nav>
  <br><br><br><br>
  <?php
  require_once 'connect.php';
  echo "<table class='table table-bordered table-hover'> ";
  echo "<tr><th>EVENT</th><th>VENUE</th><th>TIME</th></tr>";
  $query="select * from v1 order by time";
  if($query_run=mysqli_query($dbcon,$query))
  {
    if(mysqli_num_rows($query_run)!=NULL)
    {
      while($row=mysqli_fetch_assoc($query_run))
      {
        echo "<tr><td>";
        echo $row['event_name'];
        echo "</td><td>";
        echo $row['venue'];
        echo "</td><td>";
        echo $row['time'];
        echo "</td></tr>";

      }
      echo "</table>";
    }
  }
   ?>

  <!--/.Navbar-->



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
