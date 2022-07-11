<!DOCTYPE html>
<?php

session_start();
if(isset($_SESSION['user'])){
    header("Location:three.php");
  }
include_once "connect.php";
   
    $sql = "SELECT id,'name', 'password' FROM 'shool'";
   $r=mysqli_query($conn,"SELECT * FROM `school`");
   
?>
<html>
<head><meta  name="viewport" content="width=device-width,intial-scale=1.0"/> 
</head>
<body><style>
    body{
        background-color: #033c00;
padding:40px;
	
height:500px;
font-size:40px;border-radius:10px;
    }
div{ }
</style>
<form method="post" action=""><center>
<table>
   <tr><th style="color:#ffffff;font-size:20px;"> البريد الاكتروني</th></tr>
   <tr> <th><input type="text" name="user" style="background-color:#ffffff;width:100%; height:50px;font-size:30px;"></th></tr> 
   <tr><th style="color:#ffffff;font-size:20px;"> كلمة السر</th></tr>
   <tr> <th><input type="password" name="pass" style="background-color:#ffffff;height:50px;width:100%;font-size:30px;"></th> </tr>
   <tr> <th><input type="submit" name="submit" value="تسجيل الدخول"style="background-color:#0478ff;height:50px;font-size:30px;"></th></tr>
   <tr><th> <?php
if (isset($_POST["submit"])){
    $er=0;
    while($row=mysqli_fetch_array($r)){
       
        $b=$_POST['user'];
        $n=$_POST['pass'];
        
        if($b==$row[2]&&$n==$row[3]){
            $_SESSION['user']=$b;
            $_SESSION['pass']=$n;
            header("Location:three.php?name=$b");
        
        }
        else{$er=1;}
     }
  if($er==1)
  {echo"<p style='color:#f00000;'>البريد الاكتروني او كلمة السر خطأ</p>";}
  }
    
   
    
?></th></tr></table>
    <center>
    </form>
    
   
    



</body>
</head>
</html>