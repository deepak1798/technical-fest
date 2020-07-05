<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Main Page</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <!--<link href="css/mdb.min.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Anton|Fjalla+One|Indie+Flower" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

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
            background-color: blue;
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
        .jumbotron{
          background-color: inherit;
          font-family: 'fjalla one';
          font-size: 25px;

          /*outline: none;
          border-color: inherit;

          border-radius: 0px;*/
        }
        h1{
          font-family:'Fascinate Inline';

          font-size: 55px;
        }
        p{
          color: #8A0808;
        }




    </style>

</head>

<body>

    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="#n1">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
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
                    </ul>

                </div>
            </div>
        </nav>


    <!--/.Navbar-->

  <br><br><br><br>
  <form action="temp.php" method="post">
    <div class="form-group">

      <input class="form-control" type="text" name="event_id" placeholder="Add Event_id">
    </div>
    <div class="form-group">

      <input class="form-control" type="text" name="cat_id" placeholder="Add cat_id">
    </div>
    <div class="form-group">

      <input class="form-control" type="text" name="event_name" placeholder="Add Event name">
    </div>
    <div class="form-group">

      <input  class="form-control" type="number" name="no_of_mem" placeholder="Add number of members">
    </div>
    <div class="form-group">

      <input  class="form-control" type="number" name="reg_fee" placeholder="Add reg_fee">
    </div>
    <div class="form-group">

      <input class="form-control" type="date" name="date" placeholder="Add date">
    </div>
    <div class="form-group">

      <input class="form-control" type="time" name="time" placeholder="Add time">
    </div>
    <div class="form-group">

      <input class="form-control" type="number" name="prize" placeholder="Add prize">
    </div>
    <div class="form-group">

      <input type="file" name="image">
    </div>
    <div class="form-group">

      <input class="form-control" type="submit" name="submit" value="Submit">
    </div>
  </form>
  <?php
  define('dbhost','localhost');
  define('dbname','copy');
  define('dbpswd','');
  define('dbuser','root');
  $dbcon=mysqli_connect(dbhost,dbuser,dbpswd,dbname);
  if(!$dbcon){
    die("error".mysqli_error());
  }
  $value1=$_POST['cat_id'];
  $value2=$_POST['event_id'];
  $value3=$_POST['event_name'];
  $value4=$_POST['no_of_mem'];
  $value5=$_POST['reg_fee'];
  $value6=$_POST['date'];
  $value7=$_POST['time'];
  $value8=$_POST['prize'];
  $sql="INSERT INTO EVENT(cat_id,event_id,event_name,no_of_mem,reg_fee,`date`,`time`,prize) VALUES('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8')";
  if(!mysqli_query($dbcon,$sql)){
    echo"error".mysqli_error($dbcon);
  }
  else{
    echo "success";
  }
  ?>







  <!--$query="select * from event where event_id='bas'";
  if($query_run=mysqli_query($dbcon,$query))
  {
    if(mysqli_num_rows($query_run)!=NULL)
    {
      while($row=mysqli_fetch_assoc($query_run))
      {
    ?>
  -->
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="scrollreveal-master/dist/scrollreveal.min.js"></script>


    <script>
    new WOW().init();
    </script>


</body>

</html>
