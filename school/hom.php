
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:logincontrol.php");
  }
  include_once "connect.php";
  $tabl=$_SESSION['user'];
$sch=mysqli_query($conn,"SELECT * FROM `control` WHERE email='$tabl'");  

while($row=mysqli_fetch_array($sch)){
   echo"<tr>";
   $idd=$row[0];
   
  $name=$row[1];
    
   
    
}
?>

<html>
<head>
<meta  name="viewport" content="width=device-width,intial-scale=1.0"/> 
</head>
<body style="background-color:#00a0a0;"><center>
    <h1 style="color:#ffffff;"><?php echo $name;?></h1>
    <a href="school.php?edit=1"><button style="font-size:30px;width:50%;height:50px;color:#ffffff;background-color:#086977;">الطلاب</button></a><br><br>
    <a href="teachers.php?edit=1"><button style="font-size:30px;width:50%;height:50px;color:#ffffff;background-color:#086977;">المدرسين</button></a><br><br>
    <a href="control.php?edit=1"><button style="font-size:30px;width:50%;height:50px;color:#ffffff;background-color:#086977;">تعديل</button></a><br>
   <br>
    <form action=""method="post">
  
  <input type="submit"name="submit5" value="  تسجيل الخروج" style="width:50%;height:50px;font-size:30px ;background-color:#ff0000;">

</form><?php
if (isset($_POST["submit5"])){
    session_unset();
    session_destroy();
              
    }
  ?>   
</center>

</body>
</html>