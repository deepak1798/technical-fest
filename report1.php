<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Report1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <style media="screen">
      body{
        background-color: #000;
        color: #fff;
      }
      h1{
        margin-top: 40px;
        margin-bottom: 30px;
      }
      .navbar{
        background-color: #0B0B3B
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
        background-color: #000;
      }
      .active{
        background-color: #000;

      }
      table{
        font-size:20px;
      }
    </style>
  </head>
  <body>
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
                  <li class="nav-item active">
                      <a class="nav-link brand" href="report.php">SEARCH</a>
                  </li>

              </ul>


            </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container">
      <h1 class="text-center"></h1>
      <form action="report1.php" method="post">
        <div class="form-group">
          <input type="text" name="event" class="form-control" placeholder="Enter Event_Id">
        </div>
        <input type="hidden" name="submitted" value="true">
        <button type="submit" class="btn btn-default">Submit</button>
        <br>
        <br><br><br>
      </form>
      <?php
      define('dbhost','localhost');
      define('dbname','evento');
      define('dbpswd','');
      define('dbuser','root');
      $dbcon=mysqli_connect(dbhost,dbuser,dbpswd,dbname);
      if(!$dbcon){
        die("error".mysqli_error());
      }
      if(isset($_POST['submitted'])){
      $value1=$_POST['event'];
      echo "<table class='table table-bordered table-hover'> ";
      echo "<tr><th>PARTICIPANT</th><th>USN</th><th>COLLEGE</th><th>EMAIL</th><th>PHONE</th></tr>";
      $query="select p_name,usn,college,email,phone from participant where event_id='$value1'";
      if($query_run=mysqli_query($dbcon,$query))
      {
        if(mysqli_num_rows($query_run)!=NULL)
        {
          while($row=mysqli_fetch_assoc($query_run))
          {
            echo "<tr><td>";
            echo $row['p_name'];
            echo "</td><td>";
            echo $row['usn'];
            echo "</td><td>";
            echo $row['college'];
            echo "</td><td>";
            echo $row['email'];
            echo "</td><td>";
            echo $row['phone'];
            echo "</td></tr>";
          }
          echo "</table>";
        }
        else{
          echo "no matches found";
        }
      }
      else{
        echo mysqli_error($dbcon);
      }
    }

       ?>


    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
