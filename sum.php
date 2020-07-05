<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"type="text/javascript"></script>
    <script src="js/sweetalert.min.js" charset="utf-8"></script>

    <script src="js/validation.js"></script>

    </script>

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script src="js/sweetalert.min.js" charset="utf-8"></script>
  <script type="text/javascript">

      </script>

  </script>
<style media="screen">
  body{
    background-color: #000;
  }
</style>
</head>
<body>
<?php
  require_once'connect.php';

  $value1=$_POST['event'];
  $value2=$_POST['user'];
  $value6=$_POST['email'];
  $value4=$_POST['college'];
  $value3=$_POST['usn'];
  $value5=$_POST['phone'];


$query="select event_name,event_id from event";
if($query_run=mysqli_query($dbcon,$query))
{
  while($row=mysqli_fetch_assoc($query_run))
  {

    switch($value1){


       case $row['event_name']: $value7=$row['event_id'];
                                break;


      }
    }
  }
  $sql="CALL sadd('$value7','$value2','$value3','$value4','$value5','$value6')";
if(!mysqli_query($dbcon,$sql)){
  die("error".mysqli_error($dbcon));
}
else{

header('refresh:3;index.html');
}
 ?>
 <script type="text/javascript">
     sweetAlert({
       title: "Good job!",
       text: "You Have Registered Succesfully! Redirecting...",
       icon: "success",
       });


 </script>


 </body>
 </html>
