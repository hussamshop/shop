<!DOCTYPE html>
<?php

session_start();
if(isset($_SESSION['ma'])){
if($_SESSION['ma']=="ar"){
    header("Location:arte.php");
}
if($_SESSION['ma']=="ah"){
    header("Location:ha.php");
}
if($_SESSION['ma']=="math"){
    header("Location:math.php");
}
if($_SESSION['ma']=="as"){
    header("Location:as.php");
}if($_SESSION['ma']=="ht"){
    header("Location:hte.php");
}
if($_SESSION['ma']=="en"){
    header("Location:one.php");
}
}
include_once "connect.php";
   
    $sql = "SELECT id,'name', 'password' FROM 'teachers'";
   $r=mysqli_query($conn,"SELECT * FROM `teachers`");
   
?>
<html>
<head>
<meta  name="viewport" content="width=device-width,intial-scale=1.0"/> 

</head>
<body style="background-color: #00c0c0";>

<form method="post" action=""><center>
<table>
  <tr><th> البريد الاكتروني</th></tr>
    <tr><th><input type="text" name="user" style="background-color:#ffffff;width:100%; height:50px;font-size:30px;"> </th></tr>
   <tr><th> كلمة السر</th></tr>
    <tr><th><input type="password" name="pass" style="background-color:#ffffff;height:50px;width:100%;font-size:30px;"></th></tr>
   <tr> <th><input type="submit" name="submit" value="تسجيل الدخول"style="background-color:#c0c0c0;height:50px;font-size:30px;"></th></tr>
    
   
   
    <tr><th>


<?php
if (isset($_POST["submit"])){
    $ch=0;
    while($row=mysqli_fetch_array($r)){
       
        $b=$_POST['user'];
        $n=$_POST['pass'];
      $c="ar";
        if($b==$row[2]&&$n==$row[3]&&"ar"==$row['class1']){
            $_SESSION['user']=$b;
            $_SESSION['pass']=$n;
            $_SESSION['ma']="ar";
                header("Location:arte.php?name=$b");
        }
        else{$ch=1;}
        if($b==$row[2]&&$n==$row[3]&&"as"==$row['class1']){
            $_SESSION['user']=$b;
            $_SESSION['pass']=$n;
            $_SESSION['as']="ar";
                header("Location:as.php?name=$b");
        }
        else{$ch=1;}
        if($b==$row[2]&&$n==$row[3]&&"en"==$row['class1']){
            $_SESSION['user']=$b;
            $_SESSION['pass']=$n;
            $_SESSION['en']="ar";
                header("Location:one.php?name=$b");
        }
        else{$ch=1;}
        if($b==$row[2]&&$n==$row[3]&&"ah"==$row['class1']){
            $_SESSION['user']=$b;
            $_SESSION['pass']=$n;
            $_SESSION['ma']="ah";
                header("Location:ha.php?name=$b");
        }
        else{$ch=1;}
        if($b==$row[2]&&$n==$row[3]&&"math"==$row['class1']){
            $_SESSION['user']=$b;
            $_SESSION['pass']=$n;
            $_SESSION['ma']="math";
                header("Location:math.php?name=$b");
        }
        else{$ch=1;}
        if($b==$row[2]&&$n==$row[3]&&"ht"==$row['class1']){
            $_SESSION['user']=$b;
            $_SESSION['pass']=$n;
            $_SESSION['ma']="ht";
                header("Location:hte.php?name=$b");
        }
        else{$ch=1;}
     }
     if($ch==1){
         echo"<p style='color :#ff0000'>كلمة السر او البريد الاكتروني خطاء</p>";
     }
     }
  
  
    
   
    
?>
</th></tr>
</table>
<center>
    </form>
    
</body>

</html>