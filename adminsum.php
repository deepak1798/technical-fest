<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AdminSum</title>
    <script src="js/sweetalert.min.js" charset="utf-8"></script>
    <style media="screen">
      body{
        background-color: #000;
      }
    </style>

  </head>



<body>
<?php
$upload_dir="img/";
require_once"connect.php";

 $value1=$_POST['cat_id'];
 $value2=$_POST['event_id'];
 $value3=$_POST['event_name'];
 $value4=$_POST['no_of_mem'];
 $value5=$_POST['reg_fee'];
 $value8=$_POST['venue'];
 $value6=$_POST['date'];
 $value7=$_POST['time'];
 $value9=$_POST['prize'];

 $imgName=$_FILES['myfile']['name'];
 $imgTmp=$_FILES['myfile']['tmp_name'];
 $imgSize=$_FILES['myfile']['size'];
 $imgExt = strtolower(pathinfo($imgName,PATHINFO_EXTENSION));
 $allowExt=array('jpeg','jpg','png','gif');
 $userPic =time().'_'.rand(1000,9999).'.'.$imgExt;
 if(in_array($imgExt,$allowExt)){
   move_uploaded_file($imgTmp,$upload_dir.$userPic);
 }
 else {
   $errormsg="select valid image";
 }
 if(!isset($errormsg)){
 $sql="INSERT INTO event(cat_id,event_id,event_name,no_of_mem,reg_fee,`date`,`time`,venue,prize,photo ) VALUES('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$userPic')";
 }

 if(!mysqli_query($dbcon,$sql)){
   echo"error".mysqli_error($dbcon);
 }

 header('refresh:5;admin.php')
 ?>
 <script type="text/javascript">
     sweetAlert({
       title: "Good job!",
       text: "You Succesfully Added An Event!Redirecting...",
       icon: "success",
       });


 </script>


 </body>
</html>
